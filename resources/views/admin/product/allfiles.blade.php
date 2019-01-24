@extends('admin.main')

@section('content')
<div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Products</h4>
                  @include('admin.message')
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="text-success">
                        <tr>
                          <th>S.No</th>
                          <th>Product Name</th>
                          <th>Product price</th>
                          <th>Product Brand</th>
                          <th>Category Name</th>
                          <th>Product Image</th>
                        </tr>
                      </thead>
                      <?php $i=1 ?>
                      @foreach($products as $product)
                      <tbody>
                        <tr id="demo"  data-toggle="modal" data-target="#popup-product{{$product->id}}" >
                          @include('admin.popup')
                          <td>{{$i++}}</td>
                          <td>{{$product->product_name}}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->product_brand}}</td>
                          <td>{{$product->category->category_name}}</td>
                          <td><img src="/admin/images/{{$product->image}}"></td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
@endsection

