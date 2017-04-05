<?php

namespace Myrtle\Core\Settings\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $fillable = ['options'];

    protected $casts = ['options' => 'array'];
}
