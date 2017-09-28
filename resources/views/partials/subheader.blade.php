<div class="subheader">
    <h1 class="title"> {!! $title !!} </h1>
    <div class="tabs">
        @foreach ($sub_item as $item)
            <a
                @if($loop->first && empty(Request::get('sort')))
                    class="youarehere"
                @elseif(Request::get('sort') === $item['name'])
                    class="youarehere"
                @endif

                href="?sort={!! $item['name'] !!}" data-navn-xhref title="{!! $item['title'] !!}" data-value="{!! $item['name'] !!}" > {!! $item['name'] !!} </a>

        @endforeach
    </div>
</div>
