<?php

namespace Modules\Template\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Template\Database\factories\TemplateModelFactory;

class TemplatesModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'description',
        'code',
        'meta',
        'content',
    ];


    protected static function newFactory(): TemplateModelFactory
    {
        return TemplateModelFactory::new();
    }
}