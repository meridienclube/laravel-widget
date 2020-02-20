<div class="container-fluid">
    <div class="row">
        @if(isset($widgets))
            @foreach($widgets as $widget)
                @widget(['widget' => $widget])
                @slot('title')
                    {{ option($widget, 'title', 'Widget') }}
                @endslot
                <span class="badge badge-brand badge-inline badge-pill badge-rounded">
                    Versão beta de widgets
                </span>
                @endwidget
            @endforeach
        @endif
    </div>
</div>