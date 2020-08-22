<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="col-9">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">{{__('messages.home')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">{{__('messages.about')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">{{__('messages.contact')}}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('projects') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    {{__('messages.projects')}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ Request::is('projects') ? 'active' : '' }}" href="/projects">{{__('messages.projects')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">{{__('messages.photo_gallery')}}</a>
                    <a class="dropdown-item {{ Request::is('productapi') ? 'active' : '' }}" href="/productapi">{{__('messages.product_api')}}</a>
                    <a class="dropdown-item {{ Request::is('contacts') ? 'active' : '' }}" href="/contacts">{{__('messages.contacts')}}</a>
                    <a class="dropdown-item {{ Request::is('gifs') ? 'active' : '' }}" href="/gifs">{{__('messages.gifs')}}</a>
                </div>
            </li>
        </ul>
    </div>
    </div>
    <div class="col-3">
    <div class="dropdown mr-5 text-right">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('messages.selected_language')}}
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a href="/lang/en">
                <div class="dropdown-item btn btn-sm btn-light">
                    <img class="mr-1" src="/storage/flags/engFlag.png" alt="English flag"
                         height="20px"><strong>ENG</strong></div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/lang/et">
                <div class="dropdown-item btn btn-sm btn-light">
                    <img class="mr-1" src="/storage/flags/estFlag.png" alt="Estonian flag"
                         height="20px"><strong>EST</strong></div>
            </a>
        </div>
    </div>
    </div>
</nav>

