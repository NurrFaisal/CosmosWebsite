<div class="row">
    <div class="col-md-6 col-sm-6">


        <div tabindex="-1" class="modal fade" id="form-dialog-sub{{$country->id}}" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bordered">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h2 class="pmd-card-title-text">Update Country</h2>
                    </div>
                    <div class="modal-body">

                        <form action="{{URL::to('/update-country')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="component-box">

                                <!-- Text fields example -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                                            <div class="pmd-card-body">

                                                <div class="form-group">
                                                    <label for="category_id{{$country->id}}" class="control-label">Continet</label>
                                                    <select id="country_id{{$country->id}}" required class="form-control" name="continent_id">
                                                        <option value="">--Select Continent--</option>
                                                        @foreach($continents as $continent)
                                                            <option value="{{$continent->id}}">{{$continent->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <script>
                                                    document.getElementById('country_id{{$country->id}}').value = '{{$country->continent_id}}';
                                                </script>
                                                @if ($errors->has('continent_id'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $errors->first('continent_id') }}</strong>
                                                </span>
                                                @endif
                                                <!-- Regular Input -->
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Country Name</label>
                                                    <input type="text" required class="form-control" name="name" value="{{$country->name}}">
                                                    <input type="hidden" class="form-control" name="id" value="{{$country->id}}">
                                                </div>
                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Capital</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->capital}}" name="capital">
                                                </div>
                                                @if ($errors->has('capital'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('capital') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Languages</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->languages}}" name="languages">
                                                </div>
                                                @if ($errors->has('languages'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('languages') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Area</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->area}}" name="area">
                                                </div>
                                                @if ($errors->has('area'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('area') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Population</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->population}}" name="population">
                                                </div>
                                                @if ($errors->has('population'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('population') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Currency</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->currency}}" name="currency">
                                                </div>
                                                @if ($errors->has('currency'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('currency') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Time Zone</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->time_zone}}" name="time_zone">
                                                </div>
                                                @if ($errors->has('time_zone'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('time_zone') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Calling Code</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->calling_code}}" name="calling_code">
                                                </div>
                                                @if ($errors->has('calling_code'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('calling_code') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Date Formate</label>
                                                    <input type="text" required id="regular1" class="form-control" value="{{$country->date_formate}}" name="date_formate">
                                                </div>
                                                @if ($errors->has('date_formate'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('date_formate') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Independent</label>
                                                    <input type="text" id="regular1" class="form-control" value="{{$country->independent}}" name="independent">
                                                </div>
                                                @if ($errors->has('independent'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('independent') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Victory</label>
                                                    <input type="text" id="regular1" class="form-control" value="{{$country->victory}}" name="victory">
                                                </div>
                                                @if ($errors->has('victory'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('victory') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Religion</label>
                                                    <input type="text" id="regular1" class="form-control" value="{{$country->religion}}" name="religion">
                                                </div>
                                                @if ($errors->has('religion'))
                                                    <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('religion') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Image</label><br/>
                                                    <img style="width: 530px; height: 200px"  id="output_image2_{{$country->id}}" src="{{asset($country->image)}}">
                                                    <br/> <br/>
                                                    <input onchange="preview_image2({{$country->id}})" type="file"   name="image">
                                                </div>
                                                @if ($errors->has('image'))
                                                    <span class="invalid-feedback" role="alert">
                                                   <strong style="color: red">{{ $errors->first('image') }}</strong>
                                                </span>
                                                @endif
                                                <div class="form-group">
                                                    <label for="regular1" class="control-label">Banner Image</label><br/>
                                                    <img style="width: 530px; height: 200px"  id="output_image_{{$country->id}}" src="{{asset($country->banner_image)}}">
                                                    <br/> <br/>
                                                    <input onchange="preview_image({{$country->id}})" type="file"   name="banner_image">
                                                </div>
                                                @if ($errors->has('banner_image'))
                                                    <span class="invalid-feedback" role="alert">
                                                   <strong style="color: red">{{ $errors->first('banner_image') }}</strong>
                                                </span>
                                                @endif

                                                <div class="form-group">
                                                    <label class="radio-inline pmd-radio">
                                                        <input {{$country->status == 1 ? 'checked' : ''}} type="radio" name="status"  value="1">
                                                        <span for="inlineRadio1">Publish</span> </label>
                                                    <label class="radio-inline pmd-radio">
                                                        <input {{$country->status == 0 ? 'checked' : ''}} type="radio" name="status"  value="0" >
                                                        <span for="inlineRadio2">Unpublish</span> </label>
                                                </div>
                                                @if ($errors->has('status'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('status') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end Text fields example -->

                            </div>
                            <div class="pmd-modal-action">
                                <button  class="btn pmd-ripple-effect btn-primary" type="submit">Update</button>
                                <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-default" type="button">Discard</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--Form dialog example end -->

</div>
