<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="ml-4 navbar-brand" href="/"><strong>{{__('messages.home')}}</strong></a>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item m-1"><a class="nav-link" href="/about">{{__('messages.about')}}</a></li>
                <li class="nav-item m-1"><a class="nav-link" href="/contact">{{__('messages.contact')}}</a></li>
            </ul>
            <br>

            <h4>{{__('messages.projects')}}:</h4>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item m-1"><a class="nav-link" href="/gallery">&nbsp;&nbsp;{{__('messages.photo_gallery')}}</a></li>
                <li class="nav-item m-1"><a class="nav-link" href="/productapi">&nbsp;&nbsp;{{__('messages.product_api')}}</a></li>
                <li class="nav-item m-1"><a class="nav-link" href="/contacts">&nbsp;&nbsp;{{__('Contact Book')}}</a></li>
            </ul>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item m-1">
                <a class="nav-link" href="/about">{{__('messages.about')}}</a>
            </li>
            <li class="nav-item m-1">
                <a class="nav-link" href="/contact">{{__('messages.contact')}}</a>
            </li>
            <div class="dropdown m-1">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__('messages.projects')}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/projects">{{__('messages.projects')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/gallery">{{__('messages.photo_gallery')}}</a>
                    <a class="dropdown-item" href="/productapi">{{__('messages.product_api')}}</a>
                    <a class="dropdown-item" href="/contacts">{{__('Contact Book')}}</a>
                </div>
            </div>

        </ul>
    </div>
    <div class="dropdown mr-5">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__('messages.selected_language')}}
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a href="/lang/en"><div class="dropdown-item btn btn-sm btn-light">
                    <img class="mr-1" src="/storage/flags/engFlag.png" alt="English flag" height="20px"><strong>ENG</strong> | {{__('messages.eng')}}</div></a>
            <div class="dropdown-divider"></div>
            <a href="/lang/et"><div class="dropdown-item btn btn-sm btn-light">
                    <img class="mr-1" src="/storage/flags/estFlag.png" alt="Estonian flag"height="20px"><strong>EST</strong> | {{__('messages.est')}}</div></a>
        </div>
    </div>
</nav>
<br>
