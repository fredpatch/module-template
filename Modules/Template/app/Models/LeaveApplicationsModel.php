<?php

namespace Modules\Template\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Template\Database\Factories\LeaveApplicationsModelFactory;

class LeaveApplicationsModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'applicationName',
        'recipientName',
        'startDate',
        'endDate',
    ];

    protected static function newFactory(): LeaveApplicationsModelFactory
    {
        return LeaveApplicationsModelFactory::new();
    }
}
