@extends('backEnd.index')

@section('mainContent')
    <div class="pmd-content pmd-content-custom" id="content">

        <div class="container-fluid">


            <h1 class="section-title" id="services">
                <span>Cosmos Logo</span>
            </h1><!-- End Title -->
            @if(Session::get('message'))
                <div style="text-align: center" class="alert alert-{{Session::get('type')}}"><b>{{Session::get('message')}}</b></div>
            @endif
        <!--breadcrum start-->

            <!-- Bootstrap Fields -->
            <section class="row component-section">
                <!-- Text fields title and description -->


                <!-- Text fields code, example -->
                <div class="col-md-12">
                    <div class="component-box">

                        <!-- Text fields example -->
                        <form action="{{URL::to('/apanel/update-logo')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pmd-card pmd-z-depth pmd-card-custom-form col-md-8" style="margin-left: 15%; margin-right: 15%;" >
                                        <div class="pmd-card-body">
                                            <!-- Regular Input -->
                                            <!-- Textarea -->

                                            <div class="form-group">
                                                <label class="control-label">Logo</label>
                                                <img style="height: 350px" class="img-responsive" id="output_image" src="{{asset($logo->image)}}">
                                                <input onchange="preview_image()" type="file" name="image" accept="image/*"/>
                                            </div>
                                            @if ($errors->has('logo'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $errors->first('logo') }}</strong>
                                                </span>
                                            @endif
                                        <!-- Bootstrap Selectbox -->
                                            <div class="form-group">
                                                {{--<div class="pmd-modal-action">--}}
                                                <button  class="btn btn-primary btn-block" type="submit">Update</button>
                                                {{--</div>--}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form><!-- end Text fields example -->
                    </div>
                </div><!--end Text fields code, example -->
            </section><!-- Bootstrap Fields end -->
            <!-- Text Fields-->
        </div> <!--container end -->
    </div>

    <script type='text/javascript'>
        function preview_image()
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
