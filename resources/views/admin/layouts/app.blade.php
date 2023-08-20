<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    @include('admin.layouts.partials.style')

</head>

@yield('auth')
@if ($showBody)

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            @if ($showSidebar)
                @include('admin.layouts.partials.sidebar')
            @endif
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @if ($showHeader)
                        @include('admin.layouts.partials.header')
                    @endif
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                @if ($showFooter)
                    @include('admin.layouts.partials.footer')
                @endif
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        @include('admin.layouts.partials.preloader')

        <!-- Logout Modal-->
        @include('admin.layouts.partials.logout')

        @include('admin.layouts.partials.script')

    </body>
@endif

</html>
