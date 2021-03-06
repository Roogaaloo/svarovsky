<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Svarovský Jiří"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="@if($_SERVER['REQUEST_URI'] == '/') active @endif"><a href="/">Domů</a></li>
                    @foreach($menu as $item)
                        @if($item->href != '')
                            <li class="@if(strlen($item->href) > 2) @if(strpos($_SERVER['REQUEST_URI'], $item->href) !== false ) active @endif @elseif($_SERVER['REQUEST_URI'] == $item->href) active @endif"><a href="/{{ $item->href }}">{{ $item->name }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>