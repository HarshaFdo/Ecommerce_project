<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style type="text/css">
    body {
      background-color: #f4f6f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
    }

    .table_deg {
      width: 95%;
      background-color: white;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .table_deg th, .table_deg td {
      padding: 16px 20px;
      text-align: center;
    }

    .table_deg th {
      background-color: #00adb5;
      color: white;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .table_deg td {
      font-size: 15px;
      color: #333;
      background-color: #f9f9f9;
      border-bottom: 1px solid #e0e0e0;
    }

    .table_deg tr:hover td {
      background-color: #e1f5f5;
      transition: background-color 0.3s ease;
    }

    .table_deg img {
      height: 100px;
      width: 100px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    @media screen and (max-width: 768px) {
      .table_deg th, .table_deg td {
        padding: 10px;
        font-size: 13px;
      }

      .table_deg img {
        height: 80px;
        width: 80px;
      }
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <div class="div_deg">
          <table class="table_deg">
            <tr>
              <th>Product Title</th>
              <th>Description</th>
              <th>Category</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Image</th>
            </tr>
            @foreach($product as $products)
            <tr>
              <td>{{$products->title}}</td>
              <td>{!!Str::limit($products->description,50)!!}</td>
              <td>{{$products->category}}</td>
              <td>Rs. {{$products->price}}</td>
              <td>{{$products->quantity}}</td>
              <td>
                <img src="{{ asset('products/'.$products->image) }}" alt="Product Image">
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <div class="div_deg">
          {{$product->onEachSide(1)->links()}}
        </div>
      </div>
    </div>
  </div>

  @include('admin.js')
</body>

</html>
