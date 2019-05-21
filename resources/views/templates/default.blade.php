<!DOCTYPE html>
<html lang="en">

    @include('templates.partials._head')

<body id="page-top">

  <!-- Navigation -->
  @include('templates.partials._nav')


  <!-- Masthead -->
  @include('templates.partials._header')
  

  <!-- Main Content -->
  <hr
  <div class="container">
    @yield('content')
  </div>


  <!-- Footer -->
  @include('templates.partials._footer')
  

  <!-- Bootstrap core JavaScript -->
  @include('templates.partials._script')
  

</body>

</html>
