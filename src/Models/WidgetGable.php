<?php
namespace ConfrariaWeb\Widget\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;

class WidgetGable extends MorphPivot
{

    public $incrementing = true;

    protected $casts = [
        'options' => 'collection',
    ];
}