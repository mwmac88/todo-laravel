<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">To Do - @yield ('title')</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="{{ url('tasks') . '?taskscompleted=1' }}">Filter Completed</a>
            <a class="mdl-navigation__link" href="{{ url('tasks') . '?taskscompleted=0' }}">Filter Incomplete</a>
            <a class="mdl-navigation__link" href="{{ url('tasks') }}">Clear Filter</a>
        </nav>
    </div>
</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">To Do - @yield ('title')</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="{{ url('tasks') . '?taskscompleted=1' }}">Filter Completed</a>
        <a class="mdl-navigation__link" href="{{ url('tasks') . '?taskscompleted=0' }}">Filter Incomplete</a>
        <a class="mdl-navigation__link" href="{{ url('tasks') }}">Clear Filter</a>
    </nav>
</div>
