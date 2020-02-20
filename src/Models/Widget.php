<?php

namespace ConfrariaWeb\Widget\Models;

use ConfrariaWeb\Historic\Traits\HistoricTrait;
use ConfrariaWeb\Option\Traits\OptionTrait;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HistoricTrait;
    use OptionTrait;

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];
}
