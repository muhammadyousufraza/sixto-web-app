@extends('admin.layouts.app', ['activePage' => 'users', 'titlePage' => __('User Detail')])
<!-- this needs to be update .. not a profile edit  -->
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form  autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('User Detail') }}</h4>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('User Id') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ $user['id'] }}" disabled/>
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('User name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $user['username'] }}"  name="price" id="input-price" type="text" placeholder="{{ __('100.00') }}"  disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $user['email'] }}" disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('First Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $user['firstName'] }}"  disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Middle Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $user['middleName'] }}"  disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Sur Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $user['surname'] }}"  disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $user['address'] }}" disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Contact Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $user['address'] }}" disabled />
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>


          
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection