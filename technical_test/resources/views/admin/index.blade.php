<!doctype html>
<html lang="en">
  <head>
    @include('admin.includes.head')
  </head>
  <body class=""  style="background-color: rgb(201, 227, 248)" >
    
    @include('admin.includes.navbar')
    
     
        @include('admin.includes.header')
    
         @yield('konten')
     

   @include('admin.includes.script')
  </body>
</html>
