<?php
namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model
{

    protected $table = 'employee_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name','last_name','phone','designation','created_at'];
}
?>