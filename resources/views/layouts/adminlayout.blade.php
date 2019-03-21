@include('admin.static.header')

    <div class="container-fluid">
        <hr>
        @if (\Session::has('message'))
            <div class="alert alert-inv alert-inv-info alert-dismissible " role="alert">
                {!! \Session::get('message') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

    <!-- Title -->

    <!-- /Title -->

    <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Welcome Admin</h5>


                            @yield('content')

                    </section>

                </div>
            </div>
            <!-- /Row -->
    </div>
        <!-- /Container -->

       @include('admin.static.footer')