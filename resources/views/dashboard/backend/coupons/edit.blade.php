@extends('dashboard.layouts.app')

@section('title' , __('models.edit_coupon')  )

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.coupons.index') }}">{{ __('models.countries') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.edit_coupon') }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('models.edit_coupon') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.coupons.update' , $coupon->id) }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="code">{{ __('models.code') }}</label>
                                                    <input type="number" id="code" class="form-control" name="code"
                                                        value="{{ old('code', $coupon->code) }}" required/>

                                                    @error('code')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            <div class="col-6">
                                                <label>{{ __('models.type_coupon') }}</label>
                                                <div class="form-group">
                                                    <select class="select1 form-control" id="type" name="type">
                                                        <option value="{{ $coupon->type }}">{{ $coupon->type }}</option>
                                                          <option value=""> -- select type --</option>
                                                         <option value="fixed" {{old('type') == 'fixed' ? 'selected' : '' }}>{{ __('fixed') }}</option>
                                                         <option value="percent" {{old('type') == 'percent' ? 'selected' : '' }}>{{ __('percent') }}</option>
                                                       @error('type') <span class="text-danger">{{ $message }}</span>  @enderror

                                                    </select>
                                                </div>
                                            </div>



                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="value">{{ __('models.value_coupon') }}</label>
                                                    <input type="number" id="value" class="form-control" name="value"
                                                        value="{{ old('value' , $coupon->value) }}" required/>

                                                    @error('value')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="cart_value">{{ __('models.cart_value') }}</label>
                                                    <input type="number" id="cart_value" class="form-control" name="cart_value"
                                                        value="{{ old('cart_value' , $coupon->cart_value) }}" required/>

                                                    @error('cart_value')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="fp-default">{{ __('models.expiry_date') }}</label>
                                                <input type="date" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" name="expiry_date" value="{{ old('expiry_date' , $coupon->expiry_date) }}"  />


                                                @error('expiry_date')
                                                    <span class="text-danger">
                                                        <small class="errorTxt">{{ $message }}</small>
                                                    </span>
                                                @enderror

                                            </div>




                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">{{ __('models.save') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Vertical form layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    @push('js')
    <script src="{{ asset('dashboard/app-assets/js/custom/preview-image.js') }}"></script>
    @endpush
@endsection
