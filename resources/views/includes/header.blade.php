<div class="header_top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="info_wrapper">
                    <div class="contact_info">                   
                        <ul class="list-unstyled">
                            <li><i class="flaticon-phone-receiver"></i>8 800 100 19 31</li>
                            <li><i class="flaticon-mail-black-envelope-symbol"></i>okeyschool-info@yandex.ru</li>
                        </ul>                    
                    </div>
                    <div class="login_info">
                        <ul class="d-flex">
                            @if (Auth::check())
                            <li class="nav-item"> 
                                @if (Auth::user()->hasRole('manager'))
                                <a href="{{ route('manager') }}" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Admin</a>
                                @endif
                                @if (Auth::user()->hasRole('admin'))
                                <a href="{{ route('admin') }}" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Admin</a>
                                @endif
                            </li>
                            @endif
                        </ul>
                        <a href="{{ route('application') }}" title="" class="apply_btn">применить сейчас</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo1.png') }}" alt="logo"></a>
            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu">
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link active">Главная</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
                    <li class="nav-item"><a href="{{ route('courses') }}" class="nav-link">Курсы</a></li>
                    <li class="nav-item"><a href="{{ route('branches') }}" class="nav-link">Наш филиали</a></li>
                </ul>
            </div>
        </nav>
    </div> 
</div>