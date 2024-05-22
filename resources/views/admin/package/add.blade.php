@extends('admin.layouts.app', ['activePage' => 'packages', 'titlePage' => __('Package Detail')])
<!-- this needs to be update .. not a profile edit  -->
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form  autocomplete="off" action="{{ route('save.package' )}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('post')

            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Package Detail') }}</h4>
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
                  <label class="col-sm-2 col-form-label">{{ __('Package Title') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"  name="packageTitle" type="text" required />
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Package Total Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="packageTotlePrice" required type="number" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Package Fee') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"  name="packageFee" required type="number" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('State Fee') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"  name="stateFee" required type="number" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Company Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('property_type') ? ' has-danger' : '' }}">
                        <select class="form-control" id="company_type" name="company_type">
                          <option value=-1 >--Please select--</option>
                          <option value="1" >Sociedad Anónima</option>
                          <option value="2" >Sociedad De Responsabilidad Limitada</option>
                        </select>
                      @if ($errors->has('package_type'))
                        <span id="package_type-error" class="error text-danger">{{ $errors->first('package_type') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                
                <div id="featuresContainer">
                  <div class="row feature-group">
                    <label class="col-sm-2 col-form-label">{{ __('Feature 1:') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"  name="features[]" id="feature1"  />
                          </div>
                        </div>
                    <button type="button" class="btn btn-primary removeFeature">Remove</button>
                  </div>
                </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                <button type="button" class="btn btn-primary" id="addFeature">Add More Features</button>
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

<script>

// for dynamic add/remove features
window.addEventListener("load", (e)=>{
        var featureCount = 1; // Initial count of features

        $('#addFeature').on('click', function () {
            featureCount++;

            var newFeatureHtml = '<div class="row feature-group">' +
                                    '<label class="col-sm-2 col-form-label" for="feature' + featureCount + '">Feature ' + featureCount + ':</label>' +
                                    '<div class="col-sm-7">' +
                                    '<div class="form-group">'+  
                                    '<input  class="form-control" type="text" name="features[]" id="feature' + featureCount + '" required>' +
                                    '</div>' +
                                    '</div>' +
                                    '<button type="button" class="btn btn-primary removeFeature">Remove</button>' +
                                  '</div>';
            $('#featuresContainer').append(newFeatureHtml);
        });

        $('#featuresContainer').on('click', '.removeFeature', function () {
            $(this).closest('.feature-group').remove();
        });

});

</script>