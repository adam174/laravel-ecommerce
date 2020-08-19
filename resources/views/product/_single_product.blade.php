<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{route('products.show', $product)}}">
                @if(!empty($product->cover_img))
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="">
                @else
                    <img src="https://loremflickr.com/320/240" alt="">
                @endif
            </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{route('products.show', $product)}}">{{$product->name}}</a>
                </h4>
                <h5>{{$product->price}}</h5>
                <p class="card-text">{{$product->description}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
