@extends('admin.layouts.app', ['activePage' => 'property', 'titlePage' => __('User Profile')])
<!-- this needs to be update .. not a profile edit  -->
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('create.property') }}"  autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Property') }}</h4>
                <p class="card-category">{{ __('Property information') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('Title') }}" required="true" aria-required="true"/>
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __('100.00') }}" required />
                      @if ($errors->has('price'))
                        <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Bedrooms') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bedrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bedrooms') ? ' is-invalid' : '' }}" name="bedrooms" id="input-bedrooms" type="number" placeholder="{{ __('4') }}" />
                      @if ($errors->has('bedrooms'))
                        <span id="bedrooms-error" class="error text-danger" for="input-bedrooms">{{ $errors->first('bedrooms') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Bathrooms') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('bathrooms') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('bathrooms') ? ' is-invalid' : '' }}" name="bathrooms" id="input-bathrooms" type="number" placeholder="{{ __('3') }}" />
                      @if ($errors->has('bathrooms'))
                        <span id="bathrooms-error" class="error text-danger" for="input-bathrooms">{{ $errors->first('bathrooms') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Square Meter') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('square_meter') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('square_meter') ? ' is-invalid' : '' }}" name="square_meter" id="input-square_meter" type="number" placeholder="{{ __('1200') }}" />
                      @if ($errors->has('square_meter'))
                        <span id="square_meter-error" class="error text-danger" for="input-square_meter">{{ $errors->first('square_meter') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Year Built') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('year_built') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('year_built') ? ' is-invalid' : '' }}" name="year_built" id="input-year_built" type="text" placeholder="{{ __('2003') }}"  />
                      @if ($errors->has('year_built'))
                        <span id="year_built-error" class="error text-danger" for="input-year_built">{{ $errors->first('year_built') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Renovated In') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('renovated_in') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('renovated_in') ? ' is-invalid' : '' }}" name="renovated_in" id="input-renovated_in" type="text" placeholder="{{ __('2010') }}" />
                      @if ($errors->has('renovated_in'))
                        <span id="renovated_in-error" class="error text-danger" for="input-renovated_in">{{ $errors->first('renovated_in') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Images') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                      <input name="input-image[]" id="input-image" type="file" accept="image/*" multiple required />
                      @if ($errors->has('image'))
                        <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Video') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('video_link') ? ' has-danger' : '' }}">
                    <input type="text" class="form-control" id="video_link" name="video_link">
                      @if ($errors->has('video_link'))
                        <span id="video_link-error" class="error text-danger" for="input-video_link">{{ $errors->first('video_link') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Property Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('property_type') ? ' has-danger' : '' }}">
                        <select class="form-control" id="property_type" name="property_type">
                        <option value=-1 >--Please select--</option>
                        @foreach($property_types as $type)
                        <option value="{{ $type->id}}" >{{ $type->name}}</option>
                        @endforeach
                        </select>
                      @if ($errors->has('property_type'))
                        <span id="property_type-error" class="error text-danger" for="input-email">{{ $errors->first('property_type') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Property Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('property_category') ? ' has-danger' : '' }}">
                        <select class="form-control" id="property_category" name="property_category">
                        <option value=-1 >--Please select--</option>
                        @foreach($property_categories as $category)
                        <option value="{{ $category->id}}" >{{ $category->name}}</option>
                        @endforeach
                        </select>
                      @if ($errors->has('property_category'))
                        <span id="property_category-error" class="error text-danger" for="input-email">{{ $errors->first('property_category') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="input-country" type="text" placeholder="{{ __('Greece') }}" />
                      @if ($errors->has('country'))
                        <span id="country-error" class="error text-danger" for="country">{{ $errors->first('country') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('City/State') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('2010') }}" />
                      @if ($errors->has('city'))
                        <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Postal Code') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('postal_code') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" id="input-postal_code" type="text" placeholder="{{ __('72123') }}" />
                      @if ($errors->has('postal_code'))
                        <span id="postal_code-error" class="error text-danger" for="input-postal_code">{{ $errors->first('postal_code') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                    <input type="text" class="form-control" name="address">
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Short Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <div id="editor"></div>
                    <textarea class="ckeditor form-control" rows="5" id="short_description" name="short_description" placeholder="Say a few words about who you are or what you're working on." spellcheck="false"></textarea>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Detail Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <textarea class="form-control" rows="5" id="detail_description" name="detail_description" placeholder="Say a few words about who you are or what you're working on." spellcheck="false"></textarea>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option value="-1">--Please Select--</option>
                        <option value="1">Active</option>
                        <option value="0">In Active</option>
                        </select>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 
  <script>
    // Initialize Google Places Autocomplete
    // function initAutocomplete() {
    //     var input = document.getElementById('addressInput');
    //     var autocomplete = new google.maps.places.Autocomplete(input);
    // }
    // google.maps.event.addDomListener(window, 'load', initAutocomplete);

    window.addEventListener("load", (e)=>{
    ClassicEditor.create( document.querySelector( '#short_description' ) )
    .then( editor => {
    } )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor.create( document.querySelector( '#detail_description' ) )
    .then( editor => {
    } )
    .catch( error => {
        console.error( error );
    } );
  // Tinymce Required API key 
  //   tinymce.init({
  //    selector: 'textarea#short_description', // Replace this CSS selector to match the placeholder element for TinyMCE
  //    plugins: 'code table lists',
  //    toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  //  });
});
</script>

<!-- Need to move this in common file -->
<style>
  .ck.ck-content{
    height: 240px;
}
</style>

@endsection