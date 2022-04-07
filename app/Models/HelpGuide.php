<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpGuide extends Model
{
    use HasFactory;
    protected $table = 'tbl_help_guide';
    public $primaryKey = 'id';
    protected $fillable      = [
        'link',
        'description',
        'user_id'
];
}
