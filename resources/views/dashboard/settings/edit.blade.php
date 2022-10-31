@extends('dashboard.layouts.app')
@section('title', __('models.settings'))
@section('content')
    @push('js')
        <link rel="stylesheet" href="{{ url('intlTelInput.min.css') }}" type="text/css" />
    @endpush
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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('models.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('models.settings') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">

                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="setting-pill-general" data-toggle="pill"
                                        href="#setting-vertical-general" aria-expanded="true">
                                        <i class="fa-solid fa-gears font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.general_terms') }}</span>
                                    </a>
                                </li>
                                <!-- about us -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-about" data-toggle="pill"
                                        href="#setting-vertical-about" aria-expanded="false">
                                        <i class="fa-solid fa-address-card font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.not_suitable') }}</span>
                                    </a>
                                </li>
                                <!-- social media -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-social" data-toggle="pill"
                                        href="#setting-vertical-social" aria-expanded="false">
                                        <i class="fa-solid fa-link font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.for_return') }}</span>
                                    </a>
                                </li>
                                <!-- seo -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-seo" data-toggle="pill"
                                        href="#setting-vertical-seo" aria-expanded="false">
                                        <i class="fa-brands fa-searchengin font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.introduction_1') }}</span>
                                    </a>
                                </li>

                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="setting-pill-register_and_login" data-toggle="pill"
                                        href="#setting-vertical-register_and_login" aria-expanded="true">
                                        <i class="fa-solid fa-gears font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.register_and_login') }}</span>
                                    </a>
                                </li>
                                <!-- about us -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-orders_and_prices" data-toggle="pill"
                                        href="#setting-vertical-orders_and_prices" aria-expanded="false">
                                        <i class="fa-solid fa-address-card font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.orders_and_prices') }}</span>
                                    </a>
                                </li>
                                <!-- social media -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-Property_rights" data-toggle="pill"
                                        href="#setting-vertical-Property_rights" aria-expanded="false">
                                        <i class="fa-solid fa-link font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.Property_rights') }}</span>
                                    </a>
                                </li>
                                <!-- seo -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-data_protection" data-toggle="pill"
                                        href="#setting-vertical-data_protection" aria-expanded="false">
                                        <i class="fa-brands fa-searchengin font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.data_protection') }}</span>
                                    </a>
                                </li>


                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="setting-pill-Application_of_laws" data-toggle="pill"
                                        href="#setting-vertical-register_and_login" aria-expanded="true">
                                        <i class="fa-solid fa-gears font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.Application_of_laws') }}</span>
                                    </a>
                                </li>
                                <!-- about us -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-Cancellations" data-toggle="pill"
                                        href="#setting-vertical-orders_and_prices" aria-expanded="false">
                                        <i class="fa-solid fa-address-card font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.orders_and_prices') }}</span>
                                    </a>
                                </li>
                                <!-- social media -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-Security" data-toggle="pill"
                                        href="#setting-vertical-Property_rights" aria-expanded="false">
                                        <i class="fa-solid fa-link font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.Security') }}</span>
                                    </a>
                                </li>
                                <!-- seo -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-Introduction_2" data-toggle="pill"
                                        href="#setting-vertical-data_protection" aria-expanded="false">
                                        <i class="fa-brands fa-searchengin font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.Introduction_2') }}</span>
                                    </a>
                                </li>

                                <!-- about us -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-Cancellations" data-toggle="pill"
                                        href="#setting-vertical-Data_collection" aria-expanded="false">
                                        <i class="fa-solid fa-address-card font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.Data_collection') }}</span>
                                    </a>
                                </li>
                                <!-- social media -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-third_party" data-toggle="pill"
                                        href="#setting-vertical-Property_rights" aria-expanded="false">
                                        <i class="fa-solid fa-link font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.third_party') }}</span>
                                    </a>
                                </li>
                                <!-- seo -->
                                <li class="nav-item">
                                    <a class="nav-link" id="setting-pill-Protection_of_personal" data-toggle="pill"
                                        href="#setting-vertical-data_protection" aria-expanded="false">
                                        <i class="fa-brands fa-searchengin font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('models.Protection_of_personal2') }}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!--/ left menu section -->

                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!--  general_terms -->
                                        <div role="tabpanel" class="tab-pane active" id="setting-vertical-general"
                                            aria-labelledby="setting-pill-general" aria-expanded="true">

                                            @include('dashboard.settings.partials.general_terms')
                                        </div>
                                        <!--/  general_terms -->

                                        <!-- not_suitable -->
                                        <div class="tab-pane fade" id="setting-vertical-about" role="tabpanel"
                                            aria-labelledby="setting-pill-about" aria-expanded="false">
                                            @include('dashboard.settings.partials.not_suitable')

                                        </div>
                                        <!--/ not_suitable -->

                                        <!-- for_return -->
                                        <div class="tab-pane fade" id="setting-vertical-social" role="tabpanel"
                                            aria-labelledby="setting-pill-social" aria-expanded="false">
                                            @include('dashboard.settings.partials.for_return')

                                        </div>
                                        <!--/ for_return -->

                                        <!-- seo -->
                                        <div class="tab-pane fade" id="setting-vertical-seo" role="tabpanel"
                                            aria-labelledby="setting-pill-seo" aria-expanded="false">
                                            @include('dashboard.settings.partials.introduction_1')

                                        </div>
                                        <!--/ seo -->


                                        <!--  general_terms -->
                                        <div class="tab-pane fade" id="setting-vertical-register_and_login"
                                            aria-labelledby="setting-pill-general" aria-expanded="true">

                                            @include('dashboard.settings.partials.register_and_login')
                                        </div>
                                        <!--/  general_terms -->

                                        <!-- not_suitable -->
                                        <div class="tab-pane fade" id="setting-vertical-orders_and_prices" role="tabpanel"
                                            aria-labelledby="setting-pill-about" aria-expanded="false">
                                            @include('dashboard.settings.partials.orders_and_prices')

                                        </div>
                                        <!--/ not_suitable -->

                                        <!-- for_return -->
                                        <div class="tab-pane fade" id="setting-vertical-Property_rights" role="tabpanel"
                                            aria-labelledby="setting-pill-social" aria-expanded="false">
                                            @include('dashboard.settings.partials.Property_rights')

                                        </div>
                                        <!--/ for_return -->

                                        <!-- seo -->
                                        <div class="tab-pane fade" id="setting-vertical-data_protection" role="tabpanel"
                                            aria-labelledby="setting-pill-seo" aria-expanded="false">
                                            @include('dashboard.settings.partials.data_protection')

                                        </div>
                                        <!--/ seo -->

                                        <!--  general_terms -->
                                        <div  class="tab-pane fade" id="setting-vertical-Application_of_laws"
                                            aria-labelledby="setting-pill-general" aria-expanded="true">

                                            @include('dashboard.settings.partials.Application_of_laws')
                                        </div>
                                        <!--/  general_terms -->

                                        <!-- not_suitable -->
                                        <div class="tab-pane fade" id="setting-vertical-Application_of_laws" role="tabpanel"
                                            aria-labelledby="setting-pill-about" aria-expanded="false">
                                            @include('dashboard.settings.partials.Application_of_laws')

                                        </div>
                                        <!--/ not_suitable -->

                                        <!-- not_suitable -->
                                        <div class="tab-pane fade" id="setting-vertical-Cancellations" role="tabpanel"
                                            aria-labelledby="setting-pill-about" aria-expanded="false">
                                            @include('dashboard.settings.partials.Cancellations')

                                        </div>
                                        <!--/ not_suitable -->

                                        <!-- for_return -->
                                        <div class="tab-pane fade" id="setting-vertical-Security" role="tabpanel"
                                            aria-labelledby="setting-pill-social" aria-expanded="false">
                                            @include('dashboard.settings.partials.Security')

                                        </div>
                                        <!--/ for_return -->

                                        <!-- seo -->
                                        <div class="tab-pane fade" id="setting-vertical-Introduction_2" role="tabpanel"
                                            aria-labelledby="setting-pill-seo" aria-expanded="false">
                                            @include('dashboard.settings.partials.Introduction_2')

                                        </div>
                                        <!--/ seo -->

                                        <!-- not_suitable -->
                                        <div class="tab-pane fade" id="setting-vertical-Cancellations" role="tabpanel"
                                            aria-labelledby="setting-pill-about" aria-expanded="false">
                                            @include('dashboard.settings.partials.Data_collection')

                                        </div>
                                        <!--/ not_suitable -->


                                        <!-- not_suitable -->
                                        <div class="tab-pane fade" id="setting-vertical-third_party" role="tabpanel"
                                            aria-labelledby="setting-pill-about" aria-expanded="false">
                                            @include('dashboard.settings.partials.third_party')

                                        </div>
                                        <!--/ not_suitable -->

                                        <!-- for_return -->
                                        <div class="tab-pane fade" id="setting-vertical-Protection_of_personal" role="tabpanel"
                                            aria-labelledby="setting-pill-social" aria-expanded="false">
                                            @include('dashboard.settings.partials.Protection_of_personal_information')




                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ right content section -->

                    </div>
                </section>
                <!-- /Validation -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    @push('js')
        <script src="{{ url('dashboard') }}/app-assets/js/custom/preview-image.js"></script>
        {{-- <script src="{{ url('dashboard') }}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <script src="{{ url('intlTelInput.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('utils.js') }}" type="text/javascript"></script> --}}

        <script>
            $(document).on('click', '.remove-btn', function(e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            });

            $('.add-ar-btn').click(function(e) {
                e.preventDefault();
                var content = `<div class="row my-2">
                                    <div class="col-md-8">
                                        <input type="text" name="seo_keywords_ar[]"
                                            class="form-control"
                                            value="" required>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-danger remove-btn">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </div>`;
                $(this).parent().prepend(content);
            });

            $('.add-en-btn').click(function(e) {
                e.preventDefault();
                var content = `<div class="row my-2">
                                    <div class="col-md-8">
                                        <input type="text" name="seo_keywords_en[]"
                                            class="form-control"
                                            value="" required>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-danger remove-btn">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </div>`;
                $(this).parent().prepend(content);
            });
        </script>
    @endpush

@endsection
