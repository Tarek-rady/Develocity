@extends('dashboard.layouts.app')

@section('title', __('models.product_details'))

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
                                    <li class="breadcrumb-item"><a href="#">{{ __('models.product_details') }}</a>
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
                        <th>{{ __('models.products') }}</th>
                        <th>{{ __('models.price') }}</th>
                        <th>{{ __('models.categories') }}</th>
                        <th>{{ __('models.tags') }}</th>
                    </tr>



                        <td class="table-active">

                            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $product->title }}">
                                <img src="{{ asset('storage/'. $product->img) }}" alt="Avatar" height="50" width="50" />
                            </div>
                            {{ $product->title }}

                        </td>
                        <td class="table-active">{{ $product->price }}</td>
                        <td class="table-active"><span class="badge badge-pill badge-light-success mr-1">{{ $product->category->name }}</span></td>
                        <td class="table-active"><span class="badge badge-pill badge-light-warning mr-1">{{ $product->tag_id ? $product->tag->name : null }}</span></td>



                        <tr class="table-warning">
                            <th>{{ __('models.new_price') }}</th>
                            <th>{{ __('models.desc') }}</th>
                            <th>{{ __('models.size') }}</th>
                        </tr>



                        <td class="table-active">{{ $product->new_price }}</td>
                        <td class="table-active">{{ $product->desc}}</td>

                        <td class="table-active"><span class="badge badge-pill badge-light-info mr-1">{{ $product->size }}</span></td>







                </table>


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
