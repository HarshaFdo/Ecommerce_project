<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  @include('home.css')
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .hero_area {
      margin-bottom: 40px;
    }

    .order_table_container {
      display: flex;
      justify-content: center;
      padding: 30px;
    }

    table {
      width: 90%;
      max-width: 900px;
      border-collapse: collapse;
      background-color: #ffffff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    th {
      background-color: #14b8a6;
      color: white;
      padding: 16px;
      font-size: 18px;
      font-weight: 600;
      text-align: center;
    }

    td {
      padding: 14px;
      text-align: center;
      font-size: 16px;
      color: #333;
      border-bottom: 1px solid #e0e0e0;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    img {
      width: 120px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      table {
        width: 100%;
      }

      th,
      td {
        font-size: 14px;
        padding: 12px;
      }

      img {
        width: 80px;
      }
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>
  <div class="order_table_container">
    <table>
      <tr>
        <th>Product Name</th>
        <th>price</th>
        <th>Delivery Status</th>
        <th>Image</th>
      </tr>
      @foreach($order as $order)
      <tr>
        <td>{{$order->product->title}}</td>
        <td>{{$order->product->price}}</td>
        <td>{{$order->status}}</td>
        <td>
          <img height="100" width="300" src="products/{{$order->product->image}}">
        </td>
      </tr>
      @endforeach
    </table>
  </div>

  @include('home.footer')
</body>

</html>