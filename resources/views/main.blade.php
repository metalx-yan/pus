<!DOCTYPE html>
<html>
    @include('partials._head')
  <body>
    @include('partials._navbar')

    <div class="container">
      @yield('content')
      @include('partials._footer')
    </div>

    @include('partials._javascript')
  </body>
</html>
