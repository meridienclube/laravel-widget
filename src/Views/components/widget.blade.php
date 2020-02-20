{{ dd($widget) }}
<div class="{{ $widget->options['col']?? 'col-6' }}">
    <div class="kt-portlet {{ option($widget, 'background', ' ') }}">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{ option($widget, 'title', 'Widget') }} <small> {{ $widget->name }} </small>
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            @includeIf('meridien::widgets.' . $widget->slug, $widget->data)
        </div>
    </div>
</div>
