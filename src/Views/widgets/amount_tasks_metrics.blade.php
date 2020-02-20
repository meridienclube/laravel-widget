<div class="row">
    @foreach($users as $user)
        <div class="col-md-12">
            <div class="kt-widget15__item">
                <span class="kt-widget15__stats">{{ $user->tasks->count() }}/{{ option($pivot, 'amount', 0) }} - {{ percent(option($pivot, 'amount', 0), $user->tasks->count()) }}%</span>
                <span class="kt-widget15__text">{{ $user->name ?? '' }}</span>
                <div class="kt-space-10"></div>
                <div class="progress kt-widget15__chart-progress--sm">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ percent(option($pivot, 'amount', 0), $user->tasks->count()) }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <hr>
        </div>
    @endforeach
</div>
<div class="row">
    <div class="col">
        * Metrica de verificação de {{ option($pivot, 'amount', 0) }} tarefas
    </div>
</div>

