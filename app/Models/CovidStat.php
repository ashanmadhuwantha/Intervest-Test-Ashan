<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidStat extends Model
{
    use HasFactory;
    protected $table = 'tbl_covid_stat';
    public $primaryKey = 'id';
    protected $fillable      = [
        'local_new_cases',
        'local_total_cases',
        'local_total_number_of_individuals_in_hospitals',
        'local_deaths',
        'local_new_deaths',
        'local_recovered',
        'local_active_cases',
        'update_date_time',


    ];
}
