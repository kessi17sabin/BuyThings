
<!-- Modal -->
<div class="modal fade" id="popup-product{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <div class="image-wrapper">

            <div id="Imageslider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/admin/images/{{$product->image}}" alt="First slide">
                      </div>

                      @if ($product->image1 != null)
                      <div class="carousel-item">

                          <img class="d-block w-100" src="/admin/images/{{$product->image1}}" alt="Second slide">

                      </div>
                      @endif

                      @if ($product->image2 != null)
                      <div class="carousel-item">

                            <img class="d-block w-100" src="/admin/images/{{$product->image2}}" alt="Second slide">

                      </div>
                      @endif
                    </div>
                    <a class="carousel-control-prev"  href="#Imageslider" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Imageslider" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>


      </div>
      </div>
      <form action="{{route('deleteproduct',$product->id)}}" method="POST">
            {{method_field('DELETE')}}
            {{csrf_field()}}
      <div class="modal-body">
        <div class="product-detail">
          <div class="product-desc">
              <h2>Name: {{$product->product_name}}</h2>
              <span><h4>Price: Rs. {{$product->price}}</h4></span>
              <h4>Brand: {{$product->product_brand}}</h4>
              <p><strong>Description:</strong></p>
              <span> <p>{{$product->product_desc}}</p></span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
            <a class="btn btn-success mr-2 text-white pull-left" href="{{route('editproduct',$product->id)}}">Edit</a>
            <button type="submit" class="btn btn-danger mr-2 text-white pull-left" onclick="alert('Are you sure you want to Delete?')">Delete</button>

        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>

      </div>
      </form>
    </div>
  </div>
</div>
