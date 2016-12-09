<ul>
    @foreach($menu as $menuItem)
        <li>
            {{ $menuItem->menu_name }}
            @if( ! $menuItem->submenu->isEmpty())
                <ul>
                    @foreach($menuItem->submenu as $subMenuItem)
                        <li>{{ $subMenuItem->submenu_name }}</li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>