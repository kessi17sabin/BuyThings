@extends('admin.main')

@section('content')
<div class="col-12 grid-margin" id="create">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Create Category</h2>
                  <form class="form-sample" method="POST" action="{{route('storecategory')}}">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">

                        <div class="form-group row ">

                          <label class="col-sm-3 col-form-label">Category Name</label>
                          <div class="col-sm-9">

                            <input type="text" class="form-control"  name="category_name" placeholder="category name" v-model="category_name"/>
                            @if($errors->has('category_name'))
                            <span class="error text-danger">{{$errors->first('category_name')}}</span>
                            @endif
                          </div>
                        </div>


                        <div class="form-group row ">
                          <label class="col-sm-3 col-form-label">Category Types</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_types"  placeholder="category type" v-model="category_type"
                            />
                            @if($errors->has('category_types'))
                            <span class="error text-danger">{{$errors->first('category_types')}}</span>
                            @endif
                          </div>
                        </div>

                    <div class="form-group row">
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <a class="btn btn-danger mr-2 text-white" href="{{route('showcategory')}}">Cancel</a>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <table class="table table-hover">
                        <thead class="text-success">
                          <tr>
                            <th>Category Name</th>
                            <th>Category Types</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td >@{{category_name}}</td>
                            <td>@{{category_type}}</td>
                          </tr>
                        </tbody>

                      </table>
                    </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>

@endsection
