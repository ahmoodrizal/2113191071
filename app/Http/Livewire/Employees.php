<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Employees extends Component
{
    public $employees, $emp_name, $emp_email, $emp_phone, $emp_pos, $emp_address, $employee_id;
    public $isModal = 0;

    public function render()
    {
        $this->employees = Employee::all();
        return view('livewire.employees');
    }

    public function create()
    {

        $this->resetFields();

        $this->openModal();
    }


    public function closeModal()
    {
        $this->isModal = false;
    }


    public function openModal()
    {
        $this->isModal = true;
    }


    public function resetFields()
    {
        $this->emp_name = '';
        $this->emp_email = '';
        $this->emp_phone = '';
        $this->emp_address = '';
        $this->emp_pos = '';
    }

    public function store()
    {

        $this->validate([
            'emp_name' => 'required|string',
            'emp_email' => 'required|email',
            'emp_phone' => 'required',
            'emp_address' => 'required',
            'emp_pos' => 'required'
        ]);

        Employee::updateOrCreate(['id' => $this->employee_id], [
            'emp_name' => $this->emp_name,
            'emp_email' => $this->emp_email,
            'emp_pos' => $this->emp_pos,
            'emp_address' => $this->emp_address,
            'emp_phone' => $this->emp_phone,
        ]);

        session()->flash('message', $this->employee_id ? $this->emp_name . ' Diperbaharui' : $this->emp_name . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }

    public function edit($id)
    {
        $employee = Employee::find($id);

        $this->employee_id = $id;
        $this->emp_name = $employee->emp_name;
        $this->emp_email = $employee->emp_email;
        $this->emp_pos = $employee->emp_pos;
        $this->emp_address = $employee->emp_address;
        $this->emp_phone = $employee->emp_phone;

        $this->openModal();
    }


    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        session()->flash('message', 'Employee ' . $employee->emp_name . ' Berhasil Dihapus');
    }
}
