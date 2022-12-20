<div class="tag-cloud-widget-header">
    <h3 class="tag-cloud-widget-title">{!! BaseHelper::clean($config['name']) !!}</h3>
</div>
<div class="tag-cloud-widget-content">
    <div id="tag-cloud-container">
        <canvas width="300" height="300" id="tag-cloud-canvas"></canvas>
    </div>
    <div id="tag-cloud-list" style="display: none">
        <ul>
            @foreach (get_popular_tags($config['number_display']) as $tag)
                <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
