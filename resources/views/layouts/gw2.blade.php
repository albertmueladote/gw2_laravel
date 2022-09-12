<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GW2 - @yield('title')</title>
  <link href="{{asset('css/app.css') }}" rel="stylesheet">
  <link href="{{asset('css/profile.css') }}" rel="stylesheet">
  @yield('css')
</head>

<body>
  @section('topnav')
  <div id="app" class="topnav">
    
    @if(isset($current_user))
      @if($active == 'profile')
        <a class="profile active" href="/">{{$current_user->name}}</a>
      @else
        <a class="profile" href="/">{{$current_user->name}}</a>
      @endif
    @endif
    
    @if($active == 'guilds')
      <a class="guilds active" href="/clanes">Clanes</a>
    @else
      <a class="guilds" href="/clanes">Clanes</a>
    @endif
    
    @if(isset($top_menu))
      @foreach ($top_menu['leader'] as $guild)
        @if ($guild->url == $active)
          <a class="guild active" data-name="{{$guild->name}}" href="/clan/{{$guild->url}}">
            {{$guild->name}}
          </a>
        @else
          <a class="guild" data-name="{{$guild->name}}" href="/clan/{{$guild->url}}">
            {{$guild->name}}
          </a>
        @endif
      @endforeach

      @foreach ($top_menu['member'] as $guild)
        @if ($guild->url == $active)
          <a class="guild active" data-name="{{$guild->name}}" href="/clan/{{$guild->url}}">
            {{$guild->name}}
          </a>
        @else
          <a class="guild" data-name="{{$guild->name}}" href="/clan/{{$guild->url}}">
            {{$guild->name}}
          </a>
        @endif
      @endforeach
    @endif

    @if (isset($current_user))
      <div class="logout-container">
        <form class="login-form" action="{{ url('logout_user') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      </div>
    @else
      <div class="login-container">
        <form class="login-form" action="{{ url('login_user') }}" method="POST">
          @csrf
          <input type="text" name="name" autocomplete="username" placeholder="nombre" />
          <input type="password" name="password" autocomplete="current-password" placeholder="contraseña" />
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    @endif

  </div>
  @show

  <div class="container-fluid">
    @yield('content')
  </div>

  <footer class="footer">
    <script src="{{asset('js/app.js')}}" defer></script>
    @yield('js')
  </footer>
</body>

</html>