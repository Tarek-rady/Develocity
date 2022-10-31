@extends('dashboard.layouts.app')

@section('title', __('models.order_details'))

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.order_details') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic table -->
                <table class="datatables-basic table">

                    <tr class="table-warning">
                        <th>{{ __('models.code') }}</th>
                        <th>{{ __('models.users') }}</th>
                        <th>{{ __('models.status') }}</th>
                        <th>{{ __('models.date_canceld') }}</th>
                        <th>{{ __('models.date_completed') }}</th>

                    </tr>

                        <td class="table-active">{{ $order->code}}</td>

                        <td>


                                <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $order->user->name }}">
                                    <img src="{{ asset('storage/admins/1.png') }}" alt="Avatar" height="50" width="50" />
                                </div>

                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    @if ($order->status == 'completed')
                                       <span class="badge badge-pill badge-light-success mr-1">{{ $order->status }}</span>
                                    @elseif ($order->status == 'canceld')
                                       <span class="badge badge-pill badge-light-danger mr-1">{{ $order->status }}</span>
                                    @else
                                       <span class="badge badge-pill badge-light-warning mr-1">{{ $order->status }}</span>
                                    @endif


                                </div>
                            </div>
                        </td>

                        <td class="table-active">{{ $order->date_canceld}}</td>
                        <td class="table-active">{{ $order->date_completed}}</td>


                        <tr class="table-warning">
                            <th>{{ __('models.name') }}</th>
                            <th>{{ __('models.email') }}</th>
                            <th>{{ __('models.phone') }}</th>
                            <th>{{ __('models.street_name') }}</th>
                            <th>{{ __('models.special_mark') }}</th>

                        </tr>

                        <td class="table-active">{{ $order->name}}</td>
                        <td class="table-active">{{ $order->email}}</td>
                        <td class="table-active">{{ $order->phone}}</td>
                        <td class="table-active">{{ $order->street_name}}</td>
                        <td class="table-active">{{ $order->special_mark}}</td>

                        <tr class="table-warning">
                            <th>{{ __('models.address') }}</th>
                            <th>{{ __('models.countries') }}</th>
                            <th>{{ __('models.cities') }}</th>
                            <th>{{ __('models.subtotal') }}</th>
                            <th>{{ __('models.discount') }}</th>

                        </tr>
                        <td class="table-active">{{ $order->address}}</td>
                        <td class="table-active">{{ $order->country->name}}</td>
                        <td class="table-active">{{ $order->city->name}}</td>
                        <td class="table-active">{{ $order->subtotal}}</td>
                        <td class="table-active">{{ $order->discount}}</td>

                        <tr class="table-warning">

                            <th>{{ __('models.total') }}</th>

                        </tr>

                        <td class="table-active">{{ $order->total}}</td>












                </table>

                <section id="basic-datatable">

                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('models.products') }}</th>
                                                <th>{{ __('models.code') }}</th>
                                                <th>{{ __('models.qty') }}</th>
                                                <th>{{ __('models.price') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($items as $item )

                                            <tr>


                                                <td>
                                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $item->product->name }}">
                                                        <img src="{{ asset('storage/'. $item->product->img) }}" alt="Avatar" height="50" width="50" />
                                                    </div>

                                                    {{ $item->product->title }}
                                                </td>

                                                <td>{{ $item->order->code }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>








                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->

                </section>
                <!--/ Basic table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @push('js')
      <script src="{{ asset('dashboard/app-assets/js/custom/custom-delete.js') }}"></script>
    @endpush
@endsection
{{--  success
active  --}}
