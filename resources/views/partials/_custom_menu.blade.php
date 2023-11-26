@if($items)
    @foreach($items as $menu_item)
        <li>
            <a class="lgx-scroll" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
        </li>
    @endforeach
@endif