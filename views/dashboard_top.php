
<div class="dashboard-top uk-width-1-1">
    <div class="uk-grid uk-margin" data-uk-grid-margin>
      @for($r = 1; $r <= $rows; $r++)
        @for($c = 1; $c <= $columns; $c++)
        <div class="uk-width-medium-1-{{$columns}}" data-area="top-{{$r}}-{{$c}}">
            <div class="uk-sortable uk-grid uk-grid-gutter uk-grid-width-1-1" data-uk-sortable="{group:'dashboard',animation:false}">
                @foreach($areas["top-{$r}-{$c}"] as $widget)
                <div data-widget="{{ $widget['name'] }}">
                    {{ $widget['content'] }}
                </div>
                @endforeach
            </div>
        </div>
        @endfor
      @endfor
    </div>
</div>
