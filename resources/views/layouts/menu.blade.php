<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>
            <i class="fas fa-users"></i>
            Пользователи
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('halls.index') }}"
       class="nav-link {{ Request::is('halls*') ? 'active' : '' }}">
        <p>
            <i class="fas fa-building"></i>
            Залы
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tours.index') }}"
       class="nav-link {{ Request::is('tours*') ? 'active' : '' }}">
        <p>
            <i class="fas fa-calendar-check"></i>
            Туры
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('showcases.index') }}"
       class="nav-link {{ Request::is('showcases*') ? 'active' : '' }}">
        <i class="fas fa-cube"></i>
        <p>Витрины</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('thirdModels.index') }}"
       class="nav-link {{ Request::is('thirdModels*') ? 'active' : '' }}">
        <p>
            <i class="fas fa-cube"></i>
            Экспонаты
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('news.index') }}"
       class="nav-link {{ Request::is('news*') ? 'active' : '' }}">
        <p>
            <i class="fas fa-newspaper"></i>
            Новости/Акции
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('abouts.index') }}"
       class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <p>
            <i class="fas fa-building"></i>
            О музее
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('services.index') }}"
       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="fas fa-briefcase"></i>
        <p>Услуги</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('events.index') }}"
       class="nav-link {{ Request::is('events*') ? 'active' : '' }}">
        <i class="fas fa-calendar-check"></i>
        <p>Мероприятия</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('fAQS.index') }}"
       class="nav-link {{ Request::is('fAQS*') ? 'active' : '' }}">
        <i class="fas fa-question"></i>
        <p>F.A.Q.</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orders.index') }}"
       class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <i class="fas fa-envelope"></i>
        <p>Почта</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-power-off"></i>
        Выход
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>












