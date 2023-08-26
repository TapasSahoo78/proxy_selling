@extends('admin.layouts.app', ['showHeader' => true, 'showAuth' => false, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Category</h1>
            <a href="{{ route('admin.category.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-list fa-sm text-white-50"></i> Category List</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-4">
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Enter Category Name">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user ckeditor" cols="80" rows="10" name="content"
                                        placeholder="Enter Category Description"></textarea>

                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Submit
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script>
        // $(document).ready(function() {
        //     $('.ckeditor').ckeditor();
        // });
    </script>
@endpush
