<h1>My First Blog</h1>
@foreach($cruds as $crud)
    <h2>{{ $crud->id }}</h2>
    <p>{{ $crud->name }}</p>
    <hr>
@endforeach

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