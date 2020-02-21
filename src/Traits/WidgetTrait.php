<?php

namespace ConfrariaWeb\Widget\Traits;

trait WidgetTrait
{

    public function widgets()
    {
        return $this->morphToMany('ConfrariaWeb\Widget\Models\Widget', 'widgetgable')
            ->withPivot(['id', 'order', 'options'])
            ->withTimestamps();
    }

    /*
    public function widgets()
    {
        return $this->belongsToMany('ConfrariaWeb\Widget\Models\Widget');
    }

    public function widgetGables()
    {
        return $this->morphToMany('ConfrariaWeb\Widget\Models\Widget', 'widgetgable')
            ->withPivot(['order', 'options'])
            ->withTimestamps();
    }
    */

}
