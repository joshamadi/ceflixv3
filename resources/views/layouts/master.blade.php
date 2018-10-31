
@include("layouts.head")
<title>Ceflix | Express yourself </title>
<body id="page-top">
@include("layouts.nav")
<div id="wrapper">
    <!-- Sidebar -->
    @include("layouts.aside")



    <!-- /.content-wrapper -->
    <div id="content-wrapper">

  @yield('section')


  @include('layouts.footer')
@include('layouts.foot')
