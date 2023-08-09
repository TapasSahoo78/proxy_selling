@extends('admin.layouts.app', ['showHeader' => true, 'showBody' => true, 'showSidebar' => true, 'showFooter' => true])

@section('content')
    <section class="employer-details">
        <div class="row">
            <div class="hedr-edit-btn">
                <div>
                    <h2 class="top-hdng pb-0">Employer List</h2>
                </div>
                <div class="input-group hdr-eddd">
                    <ul>
                        <li class="serch-sec">
                            <input type="search" id="form1" class="form-control" placeholder="Search something here...." />
                            <i class="fas fa-search"></i>
                        </li>
                        <li>
                            <div class="add-btn-n">
                                <a href="{{ route('store.employer') }}"><i class="fa-solid fa-user-plus"></i> ADD EMPLOYER</a>
                            </div>
                        </li>
                        <li>
                            <div class="fltr-btn">
                                <div class="mdl-demo">
                                    <a href="#" class="btn btn-demo" data-bs-toggle="modal"
                                        data-bs-target="#myModal2"><img src="../assets/images/filter-png.png"
                                            alt=""> Filter By</a>
                                </div>


                            </div>
                            <!-- Modal -->
                            <div class="modal right fade filter-model" id="myModal2" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel2">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel2">Filter By
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>

                                        </div>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">City</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">State</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Business Type</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                                <div class="multiselect">
                                                    <div class="selectBox" onclick="showCheckboxes()">
                                                        <select>
                                                            <option>Select Diagnosis</option>
                                                        </select>
                                                        <div class="overSelect"></div>
                                                    </div>
                                                    <div id="checkboxes">
                                                        <label for="one">
                                                            <div class="sech-fltr">
                                                                <input type="search" class="form-control rounded"
                                                                    placeholder="Search" aria-label="Search"
                                                                    aria-describedby="search-addon" />
                                                                <i class="fas fa-search"></i>
                                                            </div>
                                                        </label>
                                                        <label for="two">
                                                            Indian <input type="checkbox" id="two" /></label>
                                                        <label for="three">
                                                            Cafe <input type="checkbox" id="three" /></label>
                                                        <label for="one">
                                                            Resturant <input type="checkbox" id="one" /></label>
                                                        <label for="two">
                                                            Italian <input type="checkbox" id="two" /></label>

                                                    </div>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-primary">APPLY</button>
                                        </div>

                                    </div><!-- modal-content -->
                                </div><!-- modal-dialog -->
                            </div><!-- modal -->
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="admn-tabl-sec">
                <div class="table-responsive">
                    <table class="table table-borderless nowrap">
                        <tbody>
                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                            <tr>


                                <td>
                                    <div class="crrnt-emp">
                                        <div class="c-img">
                                            <img src="../assets/images/mcc.png" alt="" class="table-img">
                                            <a href="#">Paid</a>
                                        </div>
                                        <div class="c-cntnt">
                                            <h6>McDonalds</h6>
                                            <p><i class="fa-solid fa-location-dot"></i> Western Australia ,
                                                65745</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Posted On : 20-6-2023</td>
                                <td>Monthly Fee : $ 149/pm</td>
                                <td>
                                    <div class="rtngg">
                                        4.0 <i class="fa-regular fa-star"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="filter">
                                        <a class="icon show" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="true"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                                            style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 29.6px, 0px);"
                                            data-popper-placement="bottom-end">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

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
