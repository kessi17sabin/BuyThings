@extends('admin.main')

@section('content')
<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Create Products</h2>
                  <form class="form-sample" method="POST" action="{{route('storeproduct')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">

                        <div class="form-group row ">

                            <input type="hidden" name="user_id" value="1">

                          <label class="col-sm-3 col-form-label">Product Name <span class="required_content">*</span></label>
                          <div class="col-sm-9">

                            <input type="text" class="form-control"  name="product_name" placeholder="product name"/>
                            @if($errors->has('product_name'))
                            <span class="error text-danger">{{$errors->first('product_name')}}</span>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select Category <span class="required_content">*</span></label>
                          <div class="col-sm-9">

                          <select class="form-control" name="category_id" id="category" placeholder="Select Category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" placeholder="Select Category">{{$category->category_name}}</option>
                            @endforeach
                          </select>

                          @if($errors->has('category'))
                          <span class="error text-danger">{{$errors->first('category')}}</span>
                          @endif
                        </div>
                        </div>


                      <div class="form-group row ">
                        <label class="col-sm-3 col-form-label">Product Price <span class="required_content">*</span></label>
                        <div class="col-sm-9">
                       <div class="input-group">
                         <div class="input-group-prepend">
                           <span class="input-group-text text-currency">Rs.</span>
                         </div>
                         <input type="number" class="form-control" name="product_price"  placeholder="product price in NPR"
                         />

                       </div>
                       @if($errors->has('product_price'))
                         <span class="error text-danger">{{$errors->first('product_price')}}</span>
                         @endif
                     </div>
                   </div>

                        <div class="form-group row ">
                          <label class="col-sm-3 col-form-label">Product Brand</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_brand"  placeholder="product_brand"
                            />
                            @if($errors->has('product_brand'))
                            <span class="error text-danger">{{$errors->first('product_brand')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group row ">
                          <label class="col-sm-3 col-form-label">Product Desc</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_desc"  placeholder="product_desc"
                            />
                            @if($errors->has('product_desc'))
                            <span class="error text-danger">{{$errors->first('product_desc')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group row ">
                            <label class="col-sm-3 col-form-label">Product Image <span class="required_content">*</span></label>
                            <div class="col-sm-9">
                              <input required type="file" name="image1"
                              />
                              @if($errors->has('image1'))
                              <span class="error text-danger">{{$errors->first('image1')}}</span>
                              @endif

                              <input type="file" name="image2"  class="image_margin"
                              />
                              @if($errors->has('image2'))
                              <span class="error text-danger">{{$errors->first('image2')}}</span>
                              @endif

                              <input type="file" name="image3" class="image_margin"
                              />
                              @if($errors->has('image3'))
                              <span class="error text-danger">{{$errors->first('image3')}}</span>
                              @endif
                            </div>
                          </div>



                    <div class="form-group row">
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <a class="btn btn-danger mr-2 text-white" href="{{route('showcategory')}}">Cancel</a>
                    </div>
                    </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>

@endsection
