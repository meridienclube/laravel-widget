@if(!$errors && $info == 'metas')
    <div class="kt-widget__content">
        <div class="kt-widget__head">
            <h6 class="text-right">METAS - {{ $data['infoMetaAtual']['comentario'] }}</h6>
        </div>
        <hr>
        <div class="kt-widget__info">
            <div class="kt-widget__stats d-flex align-items-center flex-fill">
                <div class="kt-widget__item" style="margin-right: 4px">
                    <div class="kt-widget__label">
                        <span class="btn btn-label-info btn-sm btn-bold btn-upper">
                            {{ $data['infoMetaAtual']['niveis'] }} Niveis
                        </span>
                    </div>
                </div>
                <div class="kt-widget__item" style="margin-right: 4px">
                    <div class="kt-widget__label">
                        <span class="btn btn-label-brand btn-sm btn-bold btn-upper">
                            De {{ $data['infoMetaAtual']['dataInicialBR'] }}
                        </span>
                    </div>
                </div>
                <div class="kt-widget__item" style="margin-right: 4px">
                    <div class="kt-widget__label">
                        <span class="btn btn-label-danger btn-sm btn-bold btn-upper">
                            Até {{ $data['infoMetaAtual']['dataFinalBR'] }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="">
                <hr>
                <h6 class="text-center">Meta Global</h6>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Nivel</th>
                        <th class="text-center">Meta</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['numerosMeta']['global'] as $global_k => $global_v)
                        <tr>
                            <td class="text-center">{{ $global_k }}</td>
                            <td class="text-center">{{ $global_v }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="">
                <hr>
                <h6 class="text-center">Meta por Seguimentos</h6>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Nivel</th>
                        <th class="text-center">Equipe</th>
                        <th class="text-center">Meta</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['numerosMeta']['segmento'] as $segmento_k => $segmento_v)
                        @foreach($segmento_v as $segmento_v_k => $segmento_v_v)
                            <tr>
                                @if($loop->first)
                                    <td class="text-center" rowspan="{{ count($segmento_v) }}">
                                        Nivel {{ $segmento_k }}</td>
                                @endif
                                <td class="text-center">{{ $segmento_v_k }}</td>
                                <td class="text-center">{{ $segmento_v_v }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif

@if(!$errors && $info == 'vendas')

    @foreach($data as $data_info)
        <div class="kt-widget__content">
            <div class="kt-widget__head">
                <h6 class="text-right">{{ $data_info['infoMeta']['comentario'] }}</h6>
                <h6 class="text-right">
                    <a href="{{ route('meridien.users.show', $data_info['user']['id']) }}" class="text-right">
                        {{ $data_info['user']['name'] }}
                    </a>
                </h6>
            </div>
            <hr>
            <div class="kt-widget__info">
                <div class="kt-widget__stats d-flex align-items-center flex-fill">
                    <div class="kt-widget__item" style="margin-right: 4px">
                        <div class="kt-widget__label">
                        <span class="btn btn-label-info btn-sm btn-bold btn-upper">
                            {{ $data_info['infoMeta']['niveis'] }} Niveis
                        </span>
                        </div>
                    </div>
                    <div class="kt-widget__item" style="margin-right: 4px">
                        <div class="kt-widget__label">
                        <span class="btn btn-label-brand btn-sm btn-bold btn-upper">
                            De {{ $data_info['infoMeta']['dataInicialBR'] }}
                        </span>
                        </div>
                    </div>
                    <div class="kt-widget__item" style="margin-right: 4px">
                        <div class="kt-widget__label">
                        <span class="btn btn-label-danger btn-sm btn-bold btn-upper">
                            Até {{ $data_info['infoMeta']['dataFinalBR'] }}
                        </span>
                        </div>
                    </div>
                    @foreach($data_info['infoVendas']['sintetico'] as $sintetico_k => $sintetico_v)
                        <div class="kt-widget__item" style="margin-right: 4px">
                            <div class="kt-widget__label">
                                <span class="btn btn-label-info btn-sm btn-bold btn-upper">
                                    {{ $sintetico_v }} {{ $sintetico_k }}
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="">
                    <hr>
                    <h6 class="text-center">Listagem de Metas</h6>
                    <table class="table table-striped table-sm">
                        <thead class="thead-dark">
                        <tr>
                            <th colspan="2" class="text-center">Metas</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Meta Alcancada</th>
                            <th class="text-center">Percentual Total</th>
                            <th class="text-center">Percentual Colaboração</th>
                            <th class="text-center">Faltam</th>
                            <th class="text-center">Vendidos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($data_info['metas'])
                            @foreach($data_info['metas'] as $meta_k => $meta_v)
                                @foreach($meta_v as $meta_v_k => $meta_v_v)
                                    <tr>
                                        @if($loop->first)
                                            <td rowspan="{{ count($meta_v) }}">{{ $meta_k }}</td>
                                        @endif
                                        <td>{{ $meta_v_k }}</td>
                                        <td>{{ $meta_v_v['total'] }}</td>
                                        <td>{{ $meta_v_v['metaAlcancada']? 'Sim' : 'Não' }}</td>
                                        <td>{{ $meta_v_v['percentual'] ?? $meta_v_v['percentualTotal'] }}%</td>
                                        <td>{{ $meta_v_v['percentualColaboracao'] ?? $meta_v_v['percentual'] }}%</td>
                                        <td>{{ $meta_v_v['faltam'] ?? 0 }}</td>
                                        <td>{{ isset($meta_v_v['total']) && isset($meta_v_v['faltam']) && ($meta_v_v['total'] - $meta_v_v['faltam']) > 0? ($meta_v_v['total'] - $meta_v_v['faltam']) : $meta_v_v['total'] }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
                @if(isset($data_info['infoVendas']['analitico'] ))
                    <div class="">
                        @foreach($data_info['infoVendas']['analitico'] as $analitico_k => $analitico_v)
                            @if(isset($analitico_v) && is_array($analitico_v))
                                <hr>
                                <h6 class="text-center">Listagem de {{ $analitico_k }}</h6>
                                <table class="table table-striped table-sm">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th></th>
                                        <th>Codigo</th>
                                        <th>Nome</th>
                                        <th>Planos</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($analitico_v as $analitico_v_k => $analitico_v_v)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $analitico_v_v['codigo'] }}</td>
                                            <td>{{ $analitico_v_v['nome'] }}</td>
                                            <td>{{ implode(', ', $analitico_v_v['planos']) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        @endforeach
                    </div>
                @endif
                <hr>
            </div>
        </div>
    @endforeach
@endif

@if($errors)
    <p>{!! implode('</p><p>', $errors) !!}</p>
@endif
