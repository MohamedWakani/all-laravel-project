<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('fonctionnaires.index') }}" class="nav-link {{ Request::is('fonctionnaires*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Fonctionnaires</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('formations.index') }}" class="nav-link {{ Request::is('formations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Formations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('beneficiaires.index') }}" class="nav-link {{ Request::is('beneficiaires*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Beneficiaires</p>
    </a>
</li>
