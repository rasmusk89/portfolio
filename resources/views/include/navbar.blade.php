<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{__('messages.home')}}</a>
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
                <li class="nav-item m-1"><a class="nav-link" href="/wordpress">&nbsp;&nbsp;{{__('messages.wordpress')}}</a></li>
            </ul>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
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
                    <a class="dropdown-item" href="/gallery">{{__('messages.photo_gallery')}}</a>
                    <a class="dropdown-item" href="/productapi">{{__('messages.product_api')}}</a>
                    <a class="dropdown-item" href="/wordpress">{{__('messages.wordpress')}}</a>
                </div>
            </div>
        </ul>
    </div>
    <div class="">
        <div class="justify-content-end">
            <a href="/lang/en"><div class="btn btn-sm btn-light ">{{__('messages.english')}}</div></a>
            <a href="/lang/et"><div class="btn btn-sm btn-light">{{__('messages.estonian')}}</div></a>
        </div>
    </div>
</nav>
<br>
