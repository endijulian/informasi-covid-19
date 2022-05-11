<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ (request()->is('home')) ? 'active' : '' }}">
                <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
            </li>
            <li class="menu-title">Module</li>
            <li class="{{ (request()->is('covid*')) ? 'active' : '' }}">
                <a href="{{ route('covid.index') }}"> <i class="menu-icon fa fa-table"></i>Informasi Covid-19</a>
            </li>
            <li class="{{ (request()->is('rsRujukan*')) ? 'active' : '' }}">
                <a href="{{ route('rsRujukan.index') }}"> <i class="menu-icon fa fa-table"></i>Rs Rujukan Covid-19</a>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>