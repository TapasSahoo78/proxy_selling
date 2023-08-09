@extends('admin.layouts.app', ['showHeader' => true, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <section class="employer-details">
        <div class="row">
            <div class="hedr-edit-btn">
                <div>
                    <h2 class="top-hdng pb-0">Business Manager List</h2>
                </div>
                <div class="input-group hdr-eddd">
                    <ul>
                        <li class="serch-sec">
                            <input type="search" id="form1" class="form-control" placeholder="Search something here...." />
                            <i class="fas fa-search"></i>
                        </li>
                        <li>
                            <div class="add-btn-n">
                                <a href="{{ route('add.empmanager') }}"><i class="fa-solid fa-user-plus"></i> ADD BUSINESS MANAGER</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <section class="b-manager-list">
                <div class="row">
                    <ul class="vrfied mt-1">
                        <li><i class="fa-solid fa-check"></i> Verified</li>
                        <li><i class="fa-solid fa-circle"></i> Unverified</li>
                    </ul>
                </div>

                <div class="employees-box-inner ">
                    <div class="table-responsive">
                        <table class="table table-borderless nowrap">
                            <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">EMAIL ID</th>
                                    <th scope="col">PHONE NUMBER</th>
                                    <th scope="col">PASSWORD</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td>#123GFR676</td>
                                    <td>
                                        <div class="nm-sec">
                                            <img src="../assets/images/tbl-imggg.png" alt="" class="table-img">
                                            Indranil Sen
                                            <i class="fa-solid fa-circle"></i>
                                        </div>
                                    </td>
                                    <td>indranilsen@gmail.com</td>
                                    <td>+1 - 878643456</td>
                                    <td>
                                        jhf78ejhrr56
                                    </td>
                                    <td>
                                        <div class="manager-togll">
                                            <div class="toggle-swtch">
                                                <label class="switch">
                                                    <input type="checkbox" checked>

                                                    <span class="slider round"></span>
                                                    <span class="absolute-no"><i
                                                            class="fa-regular fa-circle-xmark"></i></span>
                                                </label>
                                            </div>
                                            <div class="filter">
                                                <a class="icon show" href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="true"><svg class="svg-inline--fa fa-ellipsis-vertical"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="ellipsis-vertical" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M56 472a56 56 0 1 1 0-112 56 56 0 1 1 0 112zm0-160a56 56 0 1 1 0-112 56 56 0 1 1 0 112zM0 96a56 56 0 1 1 112 0A56 56 0 1 1 0 96z">
                                                        </path>
                                                    </svg><!-- <i class="fa-solid fa-ellipsis-vertical"></i> Font Awesome fontawesome.com --></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                                    data-popper-placement="bottom-end">
                                                    <!-- <li class="dropdown-header text-start">

                                            </li> -->
                                                    <li><a class="dropdown-item" href="#">Edit </a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    <li><a class="dropdown-item" href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


            </section>
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </section>
@endsection
