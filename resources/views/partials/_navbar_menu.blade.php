<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="lgx-logo">
        <a href="{{route('home')}}" class="lgx-scroll">
            <img src="/assets/img/logo.png" alt="cex logo"/>
        </a>
    </div>
</div>
<div id="navbar" class="navbar-collapse collapse">
    <div class="lgx-nav-right navbar-right">
        <div class="lgx-cart-area">
            <a class="lgx-btn" onclick="showPopup()">Nyereményjáték</a>
        </div>
    </div>
    <ul class="nav navbar-nav lgx-nav navbar-right">
        <li>
            <a class="lgx-scroll" href="{{route("home")}}">Főoldal</a>
        <li>
        {{menu($menu, "partials._custom_menu")}}
        <li>
            <a class="lgx-scroll" href="/kapcsolat">Kapcsolat</a>
        </li>
    </ul>
</div>