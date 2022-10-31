@extends('dashboard.layouts.app')

@section('title', __('models.coupons'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.coupons') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a Admin">
                                <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary">
                                    <span><i class="fa fa-plus"></i></span>
                                    <span> {{ __('models.add_coupon') }} </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic table -->
                <section id="basic-datatable">

                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('models.code_coupon') }}</th>
                                                <th>{{ __('models.type_coupon') }}</th>
                                                <th>{{ __('models.value_coupon') }}</th>
                                                <th>{{ __('models.cart_value') }}</th>
                                                <th>{{ __('models.expiry_date') }}</th>
                                                <th>{{ __('models.created_at') }}</th>


                                                <th class="text-center">{{ __('models.action') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($coupons as $coupon )

                                            <tr>

                                                <td><span class="badge badge-pill badge-light-info mr-1">{{ $coupon->code }}</span></td>
                                                 @if ($coupon->type == 'fixed')
                                                 <td><span class="badge badge-pill badge-light-primary mr-1">{{ $coupon->type }}</span></td>
                                                 <td><span class="badge badge-pill badge-light-primary mr-1">{{ $coupon->value }}</span></td>
                                                 @else
                                                 <td><span class="badge badge-pill badge-light-danger mr-1">{{ $coupon->type }}</span></td>
                                                 <td><span class="badge badge-pill badge-light-danger mr-1">{{ $coupon->value }}%</span></td>
                                                 @endif
                                                <td><span class="badge badge-pill badge-light-sucsess mr-1">{{ $coupon->cart_value }}</span></td>
                                                <td>{{ $coupon->expiry_date }}</td>

                                                <td>{{ $coupon->created_at->diffForHumans() }}</td>


                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Second group">
                                                        <a href="{{ route('admin.coupons.edit', $coupon->id) }}"
                                                            class="btn btn-sm btn-primary"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="{{ route('admin.coupons.destroy', $coupon->id) }}"
                                                            data-id="{{ $coupon->id }}"
                                                            class="btn btn-sm btn-danger item-delete"><i
                                                                class="fa-solid fa-trash-can"></i></a>
                                                    </div>
                                                </td>

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
