@extends('admin.layouts.app', ['showHeader' => true, 'showAuth' => false, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Coupon</h1>
            <a href="{{ route('admin.coupon.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-list fa-sm text-white-50"></i> Coupon List</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-4">
                            <form role="form" id="adminFrm" data-action="{{ route('admin.coupon.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="code" class="form-control form-control-user"
                                        id="exampleInputEmail" value="{{ $couponCode }}"
                                        placeholder="Enter Category Code">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="discount"
                                        class="form-control form-control-user float-number" id="exampleInputEmail"
                                        placeholder="Enter Discount">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="expires_at" class="form-control form-control-user"
                                        min="{{ date('Y-m-d') }}" id="exampleInputEmail" placeholder="Enter Expire day">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="usage_limit"
                                        class="form-control form-control-user float-number" id="exampleInputEmail"
                                        placeholder="Enter Usage Limit">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
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
