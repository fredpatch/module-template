<?php

namespace Modules\Template\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Template\Database\Factories\VacationApplicationsModelFactory;

class VacationApplicationsModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "startDate",
        "endDate",
        "recipientName",
        "dateDeparture",
    ];

    protected static function newFactory()
    {
        return VacationApplicationsModelFactory::new();
    }
}
