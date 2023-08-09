<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="robots" content="noindex,nofollow" />
    <title>Servscore</title>

    @include('admin.layouts.partials.style')
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('admin.layouts.partials.preloader')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @if ($showBody)
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
            data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @if ($showHeader)
                @include('admin.layouts.partials.header')
            @endif
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            @if ($showSidebar)
                @include('admin.layouts.partials.sidebar')
            @endif
            <div class="page-wrapper">

                <div class="page-wrapper-inner">

                    @yield('content')

                    @if ($showFooter)
                        @include('admin.layouts.partials.footer')
                    @endif
                </div>

            </div>
        </div>
    @else
        @yield('main')
    @endif
    @include('admin.layouts.partials.script')

</body>

</html>
