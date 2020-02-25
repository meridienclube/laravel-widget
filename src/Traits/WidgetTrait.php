<?php
namespace ConfrariaWeb\Widget\Traits;

use ConfrariaWeb\Widget\Models\WidgetGable;

trait WidgetTrait
{
    public function widgets()
    {
        return $this->morphToMany('ConfrariaWeb\Widget\Models\Widget', 'widgetgable')
            ->using(WidgetGable::class)
            ->withPivot(['id', 'order', 'options'])
            ->withTimestamps();
    }
}
