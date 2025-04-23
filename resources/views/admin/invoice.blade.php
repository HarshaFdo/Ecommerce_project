<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Invoice</title>
  <style>
    @page {
      size: A4;
      margin: 30px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      color: #000;
      font-size: 14px;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 100%;
      margin: 0 auto;
      padding: 0;
    }

    .header {
      text-align: center;
      border-bottom: 2px solid #000;
      padding-bottom: 15px;
      margin-bottom: 30px;
    }

    .header h1 {
      margin: 0;
      font-size: 28px;
      letter-spacing: 1px;
    }

    .meta {
      display: flex;
      justify-content: space-between;
      margin-bottom: 30px;
    }

    .meta-left,
    .meta-right {
      width: 48%;
    }

    .section-title {
      font-size: 16px;
      margin-bottom: 12px;
      font-weight: bold;
      border-bottom: 1px solid #ccc;
      padding-bottom: 5px;
    }

    .details p,
    .product-details p {
      margin: 5px 0;
      line-height: 1.6;
    }

    .product-image {
      margin-top: 10px;
      border: 1px solid #ccc;
      padding: 5px;
      max-width: 100%;
    }

    .product-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .footer {
      border-top: 1px solid #e0e0e0;
      margin-top: 40px;
      padding-top: 10px;
      font-size: 12px;
      color: #555;
      text-align: right;
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="header">
      <h1>INVOICE</h1>
    </div>

    <div class="meta">
      <div class="meta-left">
        <div class="section-title">Customer Information</div>
        <p><strong>Name:</strong> {{$data->name}}</p>
        <p><strong>Address:</strong> {{$data->rec_address}}</p>
        <p><strong>Phone:</strong> {{$data->phone}}</p>
      </div>

      <div class="meta-right">
        <div class="section-title">Invoice Details</div>
        <p><strong>Invoice No:</strong> INV-{{ $data->id }}</p>
        <p><strong>Date:</strong> {{ date('Y-m-d') }}</p>
        <p><strong>Payment Method:</strong> Cash on Delivery</p>
      </div>
    </div>

    <div class="product-details">
      <div class="section-title">Product Information</div>
      <p><strong>Title:</strong> {{$data->product->title}}</p>
      <p><strong>Price:</strong> $ {{$data->product->price}}</p>

      <div class="product-image">
        <img src="products/{{$data->product->image}}" alt="Product Image">
      </div>
    </div>

    <div class="footer">
      &copy; {{ date('Y') }} Gifto
    </div>

  </div>

</body>

</html>