@extends('dashboard.layouts.app')

@section('title' , __('models.add_product')  )

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">{{ __('models.admins') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.add_product') }}</a>
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
                                    <h2 class="card-title">{{ __('models.add_product') }}</h2>
                                </div>
                                <div class="card-body">
                                    <form class="form form-vertical needs-validation" id="createCustomerForm"
                                        action="{{ route('admin.products.store') }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="title">{{ __('models.title') }}</label>
                                                    <input type="text" id="title" class="form-control" name="title"
                                                        value="{{ old('title') }}" required/>

                                                    @error('title')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                             <div class="col-md-6 col-12 mb-3">
                                                <label for="price">{{ __('models.price') }}</label>
                                                    <input type="number" id="price" class="form-control" name="price"
                                                        value="{{ old('price') }}" required/>

                                                    @error('price')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="new_price">{{ __('models.new_price') }}</label>
                                                    <input type="number" id="new_price" class="form-control" name="new_price"
                                                        value="{{ old('new_price') }}" />

                                                    @error('new_price')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>


                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="size">{{ __('models.size') }}</label>
                                                    <input type="text" id="size" class="form-control" name="size"
                                                        value="{{ old('size') }}" required/>

                                                    @error('size')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>



                                            <div class="col-md-6 col-12 mb-3">
                                                <label for="desc">{{ __('models.desc') }}</label>
                                                <textarea class="form-control editor"id="desc" name="desc" >{{ old('desc') }}</textarea>

                                                    @error('desc')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror

                                            </div>

                                            <div class="col-6">
                                                <label>{{ __('models.categories') }}</label>
                                                <div class="form-group">
                                                    <select class="select1 form-control" id="category_id" name="category_id">
                                                          <option value=""> -- select categories --</option>
                                                        @foreach ($categories as $country )
                                                         <option value="{{$country->id}}" {{ $country->id == old('category_id') ? 'selected' : '' }}>{{  $country->name }}</option>
                                                       @endforeach
                                                       @error('category_id') <span class="text-danger">{{ $message }}</span>  @enderror

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <label>{{ __('models.tags') }}</label>
                                                <div class="form-group">
                                                    <select class="select1 form-control" id="tag_id" name="tag_id">
                                                          <option value=""> -- select tags --</option>
                                                        @foreach ($tags as $country )
                                                         <option value="{{$country->id}}" {{ $country->id == old('tag_id') ? 'selected' : '' }}>{{  $country->name }}</option>
                                                       @endforeach
                                                       @error('tag_id') <span class="text-danger">{{ $message }}</span>  @enderror

                                                    </select>
                                                </div>
                                            </div>









                                            <div class="col-md-6 col-12 mb-3">
                                                    <label for="formFile" class="form-label">{{ __('models.image') }}</label>
                                                    <input class="form-control image" type="file" id="formFile"
                                                        name="img" required>

                                                    @error('img')
                                                        <span class="text-danger">
                                                            <small class="errorTxt">{{ $message }}</small>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <div class="form-group prev">
                                                <img src="" style="width: 100px" class="img-thumbnail preview-formFile" alt="">
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
