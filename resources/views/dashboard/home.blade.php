@extends('dashboard.layouts.app')

@section('title' , __('models.home'))

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <!-- Greetings Card starts -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <img src="{{ url('dashboard') }}/app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left" />
                                <img src="{{ url('dashboard') }}/app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right" />
                                <div class="avatar avatar-xl bg-primary shadow">
                                    <div class="avatar-content">
                                        <i data-feather="award" class="font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-1 text-white">{{ __('models.welcome') }} {{ auth()->user()->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Greetings Card ends -->

                     <div class="row match-height">



                        {{--  admins  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.admins.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.admins') }}</h2>
                                        <p class="card-text mb-2"> {{ $admins }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>

                        {{--  customers  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.users.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.users') }}</h2>
                                        <p class="card-text mb-2"> {{ $users }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  categories  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.categories.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.categories') }}</h2>
                                        <p class="card-text mb-2"> {{ $categories }}  </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  tags  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.tags.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.tags') }}</h2>
                                        <p class="card-text mb-2"> {{ $tags }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  products  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.products.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.products') }}</h2>
                                        <p class="card-text mb-2"> {{ $poducts }}  </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  Countries  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.countries.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.countries') }}</h2>
                                        <p class="card-text mb-2"> {{ $Countries }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                        {{--  cities  --}}
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.cities.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.cities') }}</h2>
                                        <p class="card-text mb-2"> {{ $cities }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>

                         {{--  favs  --}}
                         <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.favourites') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.favs') }}</h2>
                                        <p class="card-text mb-2"> {{ $favs }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>

                         {{--  orders  --}}
                         <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.orders.index') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.orders') }}</h2>
                                        <p class="card-text mb-2"> {{ $orders }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                         {{--  orders -waiting  --}}
                         <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.orders.waiting') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.orders_waiting') }}</h2>
                                        <p class="card-text mb-2"> {{$orders_waiting }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>


                         {{--  orders  --}}
                         <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.orders.completed') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.orders_completed') }}</h2>
                                        <p class="card-text mb-2"> {{ $orders_completed }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>



                         {{--  orders  --}}
                         <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{ route('admin.orders.canceld') }}">
                                <div class="card">
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-primary p-50 m-0">
                                            <div class="avatar-content">
                                                <img src="{{ url('dashboard/app-assets/images/home/team.png') }}" width="50px" alt="">
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder mt-1">{{ __('models.orders_canceld') }}</h2>
                                        <p class="card-text mb-2"> {{ $orders_canceld }} </p>
                                    </div>
                                    <div ></div>
                                </div>
                            </a>
                        </div>






                    </div>


                </div>



            </section>
            <!-- Dashboard Analytics end -->

         




        </div>


    </div>
</div>



@push('js')

@endpush
@endsection
