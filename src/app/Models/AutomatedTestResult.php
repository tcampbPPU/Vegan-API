<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AutomatedTestResult extends Model
{
    use SoftDeletes;
    
    public $table = 'automated_test_results';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'results',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'results' => 'array',
    ];
}
