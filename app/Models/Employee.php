<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'esployee';
    protected $fillable = [
        'esployeeNumber',
        'LastName',
        'FirstName',
        'extension',
        'email',
        'officeCode',
        'reportsTo',
        'jobTile'
    ];
}
