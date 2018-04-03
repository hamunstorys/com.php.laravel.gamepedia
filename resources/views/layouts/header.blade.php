<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('img/logo.svg')}}" class="img-fluid">
                        <h5>Gamepedia Korea</h5>
                    </a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    @if(auth()->check() != true)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('session.create')}}">로그인</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('session.register')}}">회원가입</a>
                        </li>
                    @endif
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('game.create')}}">게임 등록</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            플랫폼
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            장르
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="검색어를 입력해주세요."
                           value="{{old('search')}}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">검색</button>
                </form>
            </div>
        </nav>
    </div>
</header>