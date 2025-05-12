<?php
namespace App\Controllers;
use App\Models\Employee;

class EmployeeController extends BaseController
  {

    public function index(){
        $employee = new Employee();
        $data['employee'] = $employee->findAll();
        return view('employee_list',$data);
    }

    public function create(){
      return view('create_employee');
    }

    public function store(){
      $employee = new Employee();
      $data = [
        'first_name'=>$this->request->getPost('first_name'), 
        'last_name'=>$this->request->getPost('last_name'),
        'phone'=>$this->request->getPost('phone'),
        'designation'=>$this->request->getPost('designation'),
        'created_at'=>$this->request->getPost('created_at'),
      ];


      $employee->save($data);
      return redirect()->to(base_url('employee'))->with('status','Employee Detail Save Successfully');
    }

    public function delete($id)
    {
    $employeeModel = new Employee();

    if ($employeeModel->find($id)) {
        $employeeModel->delete($id);
        return redirect()->to('/employee')->with('status', 'Employee deleted successfully!');
    } else {
        return redirect()->to('/employee')->with('status', 'Employee not found!');
    }
    }

    

   public function edit($id)
  {
    $employeeModel = new Employee();
    $data['employee'] = $employeeModel->find($id);

    if (!$data['employee']) {
         return redirect()->to('/employee')->with('status', 'Employee not found!');
    }

    return view('employee_edit', $data);
  }

    public function update($id)
   {
    $employeeModel = new Employee();

    $data = [
        'first_name'  => $this->request->getPost('first_name'),
        'last_name'   => $this->request->getPost('last_name'),
        'phone'       => $this->request->getPost('phone'),
        'designation' => $this->request->getPost('designation'),
        'created_at'  => $this->request->getPost('created_at'),
    ];

    $employeeModel->update($id, $data);

    return redirect()->to('/employee')->with('status', 'Employee updated successfully!');
   }

    
  }
?>