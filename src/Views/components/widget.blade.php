<div class="{{ $widget->pivot->options['col']?? 'col-6' }}">
    <div class="card {{ $widget->pivot->options['background']?? '' }}">
        <div class="card-header">
            {{ $widget->pivot->options['title']?? '' }} <small> {{ $widget->name }} </small>
        </div>
        <div class="card-body">
            @includeIf($widget->view . '::widget', $widget->data?? [])
        </div>
        <div class="card-footer text-muted text-right">
            <small>Versão beta de widgets</small>
        </div>
    </div>
</div>
