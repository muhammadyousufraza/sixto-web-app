@extends('admin.layouts.app', ['activePage' => 'profile', 'titlePage' => __('Company Information')])
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
                <h4 class="card-title">{{ __('Company Detail') }}</h4>
                <p class="card-category">{{ __('') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Company Id') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('Title') }}" value="{{ $company['id'] }}" required="true" aria-required="true"/>
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('First Company Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $company['firstName'] }}"  name="price" id="input-price" type="text" placeholder="" required />
                      @if ($errors->has('price'))
                        <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Second Company Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['secondName'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                      @if ($errors->has('secondName'))
                        <span id="secondName-error" class="error text-danger" for="input-bedrooms">{{ $errors->first('secondName') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Third Company Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['thirdName'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Street Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['streetAddress'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Detail Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['detailAddress'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('City') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['city'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('State') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['state'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Code') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['code'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('PackageId') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['packageId'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Created By') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['createdBy'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Company Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['companyType'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('companyStatus') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="{{ $company['companyStatus'] }}" name="bedrooms" id="input-bedrooms"  placeholder="" required />
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>


            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Share Holder 1') }}</h4>
                <p class="card-category">{{ __('') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Owner Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" required="true" aria-required="true"/>
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('First Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="" name="price" id="input-price" type="text" required />
                      @if ($errors->has('price'))
                        <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Second Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" value="" name="bedrooms" id="input-bedrooms" type="number" placeholder="{{ __('4') }}" required />
                      @if ($errors->has('bedrooms'))
                        <span id="bedrooms-error" class="error text-danger" for="input-bedrooms">{{ $errors->first('bedrooms') }}</span>
                      @endif
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