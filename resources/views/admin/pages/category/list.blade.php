@extends('admin.layouts.app', ['showHeader' => true, 'showAuth' => false, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
            <a href="{{ route('admin.category.store') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-save fa-sm text-white-50"></i> New Category</a>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="categories-table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>
                                        <button class="btn btn-success">Active</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $('#categories-table').DataTable({
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
            });
        });
    </script>
@endpush
