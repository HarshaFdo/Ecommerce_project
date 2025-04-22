<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style type="text/css">
    .div_center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .product-image {
      width: 400px;
      max-width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .detail-box
    {
      padding: 15px;
      background-color: #f9f9f9;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .detail-box h6 {
      font-size: 18px;
      font-weight: 600;
      color: #222;
      margin-bottom: 6px;
    }

    .detail-box span {
      color: #14b8a6;
      font-weight: bold;
    }

    .detail-box p {
      font-size: 16px;
      color: #555;
    }

    .product-button-container {
      padding: 15px;
      text-align: center;
    }

    .product-details-btn {
      background-color: #14b8a6;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
      display: inline-block;
    }

    .product-details-btn:hover {
      background-color: #0f766e;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>
  <!--Product details start -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="div_center">
              <img width="400" src="/products/{{$data->image}}" alt="">
            </div>
            <div class="detail-box">
              <h6>{{$data->title}}</h6>
              <h6>
                Price
                <span>${{$data->price}}</span>
              </h6>
            </div>
            <div class="detail-box">
              <h6>{{$data->category}}</h6>
              <h6>
                Available Quantity
                <span>${{$data->quantity}}</span>
              </h6>
            </div>
            <div class="detail-box">
              <p>${{$data->description}}</p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--Product details end -->
  @include('home.footer')
</body>

</html>