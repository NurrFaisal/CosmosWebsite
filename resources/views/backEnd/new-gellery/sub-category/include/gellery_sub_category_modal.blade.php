<div class="row">
    <div class="col-md-6 col-sm-6">
        <button data-target="#form-dialog-sub" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth pmd-ripple-effect " type="button">Add Sub Category</button>

        <div tabindex="-1" class="modal fade" id="form-dialog-sub" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bordered">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h2 class="pmd-card-title-text">Add Sub Category</h2>
                    </div>
                    <div class="modal-body">

                        <form action="{{URL::to('/apanel/gallery/add-sub-category')}}" method="post" class="form-horizontal" enctype="multipart/form-data">

                        <div class="component-box">

                            <!-- Text fields example -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pmd-card pmd-z-depth pmd-card-custom-form">
                                        <div class="pmd-card-body">
                                            <!-- Regular Input -->
                                            <div class="form-group">
                                                <label for="category_id" class="control-label">Main Category</label>
                                                <select id="gellery_main_category_id" required class="form-control" name="gellery_main_category_id">
                                                    <option value="">--Select Main Category--</option>
                                                    @foreach($gellery_main_categories as $gellery_main_categorie)
                                                        <option value="{{$gellery_main_categorie->id}}">{{$gellery_main_categorie->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('gellery_main_category_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color: red">{{ $errors->first('gellery_main_category_id') }}</strong>
                                                </span>
                                            @endif
                                            <div class="form-group">
                                                <label for="regular1" class="control-label">Name</label>
                                                <input type="text"  class="form-control" name="name">
                                            </div>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-group">
                                                <label for="regular1" class="control-label">Box Image</label>
                                                <input type="file"  name="box_image"  accept="image/*">
                                            </div>
                                            @if ($errors->has('box_image'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $errors->first('box_image') }}</strong>
                                    </span>
                                            @endif

                                            <div class="form-group">
                                                <label class="radio-inline pmd-radio">
                                                    <input type="radio" name="status" id="inlineRadio1" value="1">
                                                    <span for="inlineRadio1">Publish</span> </label>
                                                <label class="radio-inline pmd-radio">
                                                    <input type="radio" name="status" id="inlineRadio2" value="0" >
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
                                <button  class="btn pmd-ripple-effect btn-primary" type="submit">Save</button>
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
