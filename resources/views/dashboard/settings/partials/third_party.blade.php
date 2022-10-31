<form action="{{ route('admin.settings.store' ) }}" method="POST" class="needs-validation" enctype="multipart/form-data"
    novalidate>
    @csrf

    <div class="row">

        @foreach ($third_party as $setting)


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="title">{{ __('models.'.$setting->key) }} </label>


                            <textarea class="form-control editor"id="{{ $setting->dsec }}" name="{{ $setting->desc }}" >{{ $setting->desc }}</textarea>



                        <div class="">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong style="color: red;">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>


        @endforeach
    </div>

    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{ __('models.update') }} <i data-feather="edit"></i></button>
        </div>
    </div>
</form>
