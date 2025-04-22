<style>
  .product-button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    padding: 15px;
  }

  .product-details-btn,
  .add-to-cart-btn {
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
    display: inline-block;
    white-space: nowrap;
  }

  .product-details-btn {
    background-color: #14b8a6;
    /* teal-500 */
    color: white;
  }

  .product-details-btn:hover {
    background-color: #0f766e;
    /* darker teal on hover */
  }

  .add-to-cart-btn {
    background-color: #3b82f6;
    /* blue-500 */
    color: white;
    border: none;
  }

  .add-to-cart-btn:hover {
    background-color: #1d4ed8;
    /* darker blue */
  }
</style>

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">
      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box">
          <div class="img-box">
            <img src="products/{{$products->image}}" alt="">
          </div>
          <div class="detail-box">
            <h6>{{$products->title}}</h6>
            <h6>
              Price
              <span>${{$products->price}}</span>
            </h6>
          </div>
          <div class="product-button-container">
            <a class="product-details-btn" href="{{url('product_details/'.$products->id)}}">Details</a>
            <a class="add-to-cart-btn" href="{{url('add_cart/'.$products->id)}}">Add to Cart</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>