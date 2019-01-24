@extends('admin.main')

@section('content')
<div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Categories</h4>
                  @include('admin.message')
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="text-success">
                        <tr>
                          <th>S.No</th>
                          <th>Category Name</th>
                          <th>Category Types</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $i=1 ?>
                      @foreach($categories as $category)
                      <form action="{{route('deletecategory',$category->id)}}" method="POST">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                      <tbody>
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$category->category_name}}</td>
                          <td>{{$category->category_types}}</td>
                          <td>
                              <a class="btn btn-success mr-2 text-white" href="{{route('editcategory',$category->id)}}">Edit</a>
                              <button type="submit" class="btn btn-danger mr-2 text-white" onclick="alert('Are you sure you want to Delete?')">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      </form>
                      @endforeach
                    </table>
                  </div>

                </div>
              </div>
@endsection
