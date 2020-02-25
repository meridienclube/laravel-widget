<div class="{{ $widget->options['col']?? 'col-6' }}">
    <div class="kt-portlet {{ $widget->options['background']?? '' }}">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    {{ $widget->options['title']?? '' }} <small> {{ $widget->name }} </small>
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            @includeIf($widget->view . '::widget', $widget->data)
        </div>
    </div>
</div>
