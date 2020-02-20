<div class="kt-widget kt-widget--user-profile-4">
    <div class="kt-widget__head">
        <div class="kt-widget__media">
            <div
                class="kt-widget__pic kt-widget__pic--{{ option($task->type, 'class_color', 'primary') }} kt-font-{{ option($task->type, 'class_color', 'primary') }} kt-font-boldest">
                @if(isset($task->type->options['icon']))
                    <i class="{{ $task->type->options['icon'] }} kt-font-{{ $task->type->options['class_color'] }}"
                       style="font-size:40px"></i>
                @else
                    {{ Str::substr($task->type->name, 0, 1) }}
                @endif
            </div>
        </div>
        <div class="kt-widget__content">
            <div class="kt-widget__section">
                <a href="#" class="kt-widget__username">
                    {{ $task->type->name }}
                </a>
                <div class="kt-widget__button">
                    <span class="btn btn-label-warning btn-sm">{{ $task->datetime->format('d/m/Y') }}</span>
                </div>
                <div class="kt-widget__action">
                    <a href="{{ route('admin.tasks.show', $task->id) }}"
                       class="btn btn-label-brand btn-bold btn-sm btn-upper">
                        {{ trans('meridien.tasks.show') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

