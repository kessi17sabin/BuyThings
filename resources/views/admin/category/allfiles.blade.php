@extends('admin.main')

@section('content')
<div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Categories</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="text-success">
                        <tr>
                          <th>S.No</th>
                          <th>Category Name</th>
                          <th>Category Types</th>
                        </tr>
                      </thead>
                      <?php $i=1 ?>
                      @foreach($categories as $category)
                      <tbody>
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$category->category_name}}</td>
                          <td>{{$category->category_types}}</td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
@endsection
