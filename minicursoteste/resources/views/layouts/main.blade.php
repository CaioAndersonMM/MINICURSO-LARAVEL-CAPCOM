<title>@yield('title')</title>

@yield('content')

<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div>
                <img src="img/napoleao.png" alt="">
            </div>
           
            <div class="content">
                <div class="title m-b-md">
                    @if($nome == "napoleao")
                        Eu {{$nome}} estou aprendendo Laravel
                    @else
                       napoleao não está aprendendo Laravel
                    @endif
                </div>

                <div class="links">
                    @foreach($arr as $item)
                        @if($item == "caio")
                            <a href="http://" target="_blank" rel="noopener noreferrer">caio</a>
                        @elseif($item == "rafael")
                            <a href="http://" target="_blank" rel="noopener noreferrer">rafael</a>
                        @else
                            <p>{{$item}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>