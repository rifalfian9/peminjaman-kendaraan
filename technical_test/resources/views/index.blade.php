<!doctype html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <body class="bg-dark" >
    {{-- navbar --}}
    @include('includes.nav')
    {{-- endnavbar --}}
    
    @yield('container')
    
   @include('includes.script')
  </body>
</html>
