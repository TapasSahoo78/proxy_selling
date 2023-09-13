@extends('admin.layouts.app', ['showHeader' => true, 'showAuth' => false, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Proxy</h1>
            <a href="{{ route('admin.proxy.store') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-save fa-sm text-white-50"></i> New Proxy</a>
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
                        <table class="table table-bordered" id="proxy-table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Code</th>
                                    <th>Discount</th>
                                    <th>Expire at</th>
                                    <th>Usage Limit</th>
                                    <th>Used Count</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $value->code }}</td>
                                        <td>{{ $value->discount }}</td>
                                        <td>{{ $value->expires_at }}</td>
                                        <td>{{ $value->usage_limit }}</td>
                                        <td>{{ $value->used_count }}</td>
                                        <td>
                                            <button class="btn btn-success change-status">Active</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
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
            $('#proxy-table').DataTable({
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
            });
        });
    </script>
@endpush
