@extends('layouts.main')

@section('main-content')
    <main>
        <!-- section -->
        <section>
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Setting</h3>
                            <!-- button -->
                            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 "
                                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
                        <div class="pt-10 pe-lg-10">
                            <!-- nav -->
                            <ul class="nav flex-column nav-pills nav-pills-dark">
                                <li class="nav-item">
                                    <!-- nav link -->
                                    <a class="nav-link " aria-current="page" href="{{ route('account-orders') }}"><i
                                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('my-account') }}"><i
                                            class="feather-icon icon-settings me-2"></i>Settings</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('account-address') }}"><i
                                            class="feather-icon icon-map-pin me-2"></i>Address</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link active" href="{{ route('account-payment') }}"><i
                                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('account-notification') }}"><i
                                            class="feather-icon icon-bell me-2"></i>Notification</a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <hr>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <i class="feather-icon icon-log-out me-2"></i>Log out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <!-- heading -->
                            <div class="d-flex justify-content-between mb-6 align-items-center">
                                <h2 class="mb-0">Payment Methods</h2>
                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#paymentModal">Add
                                    Payment </a>

                            </div>
                            <ul class="list-group list-group-flush">
                                <!-- List group item -->
                                <li class="list-group-item py-5 px-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <!-- img -->
                                            <img src="images/svg-graphics/visa.svg" alt="">
                                            <!-- text -->
                                            <div class="ms-4">
                                                <h5 class="mb-0 h6 h6">**** 1234</h5>
                                                <p class="mb-0 small">Expires in 10/2023
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- button -->
                                            <a href="#"
                                                class="btn btn-outline-gray-400 disabled btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- List group item -->
                                <li class="list-group-item px-0 py-5">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <!-- img -->
                                            <img src="images/svg-graphics/mastercard.svg" alt=""
                                                class="me-3">
                                            <div>
                                                <h5 class="mb-0 h6">Mastercard ending in 1234</h5>
                                                <p class="mb-0 small">Expires in 03/2026</p>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- button-->
                                            <a href="#"
                                                class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- List group item -->
                                <li class="list-group-item px-0 py-5">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <!-- img -->
                                            <img src="images/svg-graphics/discover.svg" alt=""
                                                class="me-3">
                                            <div>
                                                <!-- text -->
                                                <h5 class="mb-0 h6">Discover ending in 1234</h5>
                                                <p class="mb-0 small">Expires in 07/2020 <span
                                                        class="badge bg-warning text-dark"> This card is
                                                        expired.</span></p>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- btn -->
                                            <a href="#"
                                                class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- List group item -->
                                <li class="list-group-item px-0 py-5">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <!-- img -->
                                            <img src="images/svg-graphics/americanexpress.svg" alt=""
                                                class="me-3">
                                            <!-- text -->
                                            <div>
                                                <h5 class="mb-0 h6">American Express ending in 1234</h5>
                                                <p class="mb-0 small">Expires in 12/2021</p>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- btn -->
                                            <a href="#"
                                                class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- List group item -->
                                <li class="list-group-item px-0 py-5 border-bottom">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <!-- img -->
                                            <img src="images/svg-graphics/paypal.svg" alt=""
                                                class="me-3">
                                            <div>
                                                <!-- text -->
                                                <h5 class="mb-0 h6">Paypal Express ending in 1234</h5>
                                                <p class="mb-0 small">Expires in 10/2021</p>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- btn -->
                                            <a href="#"
                                                class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- modal -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount"
        aria-labelledby="offcanvasAccountLabel">
        <!-- offcanvas header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- offcanvas body -->
        <div class="offcanvas-body">
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('account-orders') }}"><i
                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('my-account') }}"><i
                            class="feather-icon icon-settings me-2"></i>Settings</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('account-address') }}"><i
                            class="feather-icon icon-map-pin me-2"></i>Address</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('account-payment') }}"><i
                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('account-notification') }}"><i
                            class="feather-icon icon-bell me-2"></i>Notification</a>
                </li>
            </ul>
            <hr class="my-6">
            <div>
                <!-- navs -->
                <ul class="nav flex-column nav-pills nav-pills-dark">
                    <!-- nav item -->
                    <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="feather-icon icon-log-out me-2"></i>Log out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog"
        aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <!-- modal content -->
            <div class="modal-content">
                <!-- modal header -->
                <div class="modal-header align-items-center d-flex">
                    <h5 class="modal-title" id="paymentModalLabel">
                        Add New Payment Method
                    </h5>
                    <!-- button -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div>
                        <!-- Form -->
                        <form class="row mb-4">
                            <div class="mb-3 col-12 col-md-12 mb-4">
                                <h5 class="mb-3">Credit / Debit card</h5>
                                <!-- Radio button -->
                                <div class="d-inline-flex">
                                    <div class="form-check me-2">
                                        <input type="radio" id="paymentRadioOne" name="paymentRadioOne"
                                            class="form-check-input" />
                                        <label class="form-check-label" for="paymentRadioOne"><img
                                                src="images/payment/american-express.svg" alt=""></label>
                                    </div>
                                    <!-- Radio button -->
                                    <div class="form-check me-2">
                                        <input type="radio" id="paymentRadioTwo" name="paymentRadioOne"
                                            class="form-check-input" />
                                        <label class="form-check-label" for="paymentRadioTwo"><img
                                                src="images/payment/mastercard.svg" alt=""></label>
                                    </div>

                                    <!-- Radio button -->
                                    <div class="form-check">
                                        <input type="radio" id="paymentRadioFour" name="paymentRadioOne"
                                            class="form-check-input" />
                                        <label class="form-check-label" for="paymentRadioFour"><img
                                                src="images/payment/visa.svg" alt=""></label>
                                    </div>
                                </div>
                            </div>
                            <!-- Name on card -->
                            <div class="mb-3 col-12 col-md-4">
                                <label for="nameoncard" class="form-label">Name on card</label>
                                <input id="nameoncard" type="text" class="form-control" name="nameoncard"
                                    placeholder="Name" required />
                            </div>
                            <!-- Month -->
                            <div class="mb-3 col-12 col-md-4">
                                <label class="form-label">Month</label>
                                <select class="form-select">
                                    <option value="">Month</option>
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="Mar">Mar</option>
                                    <option value="Apr">Apr</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="Aug">Aug</option>
                                    <option value="Sep">Sep</option>
                                    <option value="Oct">Oct</option>
                                    <option value="Nov">Nov</option>
                                    <option value="Dec">Dec</option>
                                </select>
                            </div>
                            <!-- Year -->
                            <div class="mb-3 col-12 col-md-4">
                                <label class="form-label">Year</label>
                                <select class="form-select">
                                    <option value="">Year</option>
                                    <option value="June">2022</option>
                                    <option value="July">2023</option>
                                    <option value="August">2024</option>
                                    <option value="Sep">2025</option>
                                    <option value="Oct">2026</option>
                                </select>
                            </div>
                            <!-- Card number -->
                            <div class="mb-3 col-md-8 col-12">
                                <label for="cc-mask" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="cc-mask"
                                    data-inputmask="'mask': '9999 9999 9999 9999'" placeholder="xxxx-xxxx-xxxx-xxxx"
                                    required />
                            </div>
                            <!-- CVV -->
                            <div class="mb-3 col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="cvv" class="form-label">CVV Code
                                        <i class="fe fe-help-circle ms-1" data-bs-toggle="tooltip"
                                            data-placement="top"
                                            title="A 3 - digit number, typically printed on the back of a card."></i></label>
                                    <input type="password" class="form-control" name="cvv" id="cvv"
                                        data-inputmask="'mask':'999'" placeholder="xxx" maxlength="3" required />
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-md-6 col-12">
                                <button class="btn btn-primary" type="submit">
                                    Add New Card
                                </button>
                                <button class="btn btn-outline-gray-400 text-muted" type="button"
                                    data-bs-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </form>
                        <span><strong>Note:</strong> that you can later remove your card at
                            the account setting page.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- Javascript-->

    <!-- Libs JS -->
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.min.js"></script>

    <script src="libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="js/vendors/inputmask.js"></script>



{{-- </body> --}}
@endsection
{{-- </html> --}}
