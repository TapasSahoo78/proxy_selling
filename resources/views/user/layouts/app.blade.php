<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Free Template</title>
    <link rel="icon" href="images/icon.png')}}" type="image/gif" sizes="24x24">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Uhost is Creative Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

    <!-- CSS Files
    ================================================== -->
    @include('user.layouts.partials.style')
</head>

<body>
    <div id="wrapper">


        <!-- header begin -->
        @include('user.layouts.partials.header')
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            @yield('content')

        </div>
        <!-- content close -->

        <!-- footer begin -->
        @include('user.layouts.partials.footer')
        <!-- footer close -->

        @include('user.layouts.partials.preloader')
    </div>


    <!-- Javascript Files
    ================================================== -->
    @include('user.layouts.partials.script')
</body>

</html>
