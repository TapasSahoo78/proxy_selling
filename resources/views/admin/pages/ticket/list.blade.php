@extends('admin.layouts.app', ['showHeader' => true, 'showAuth' => false, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
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
                                    <th>SL No</th>
                                    <th>title</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value?->user?->name }}</td>
                                        <td>
                                            <select name="" class="form-control" id="statusChange"
                                                {{ $value->status == 'closed' ? 'disabled' : '' }}>
                                                <option value="open"{{ $value->status == 'open' ? 'selected' : '' }}>Open
                                                </option>
                                                <option value="pending"{{ $value->status == 'pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="closed"{{ $value->status == 'closed' ? 'selected' : '' }}>
                                                    Closed
                                                </option>
                                            </select>
                                        </td>
                                        <td>
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
            $('#categories-table').DataTable({
                pageLength: 10,
                lengthMenu: [10, 25, 50, 100],
            });
        });
    </script>
@endpush
