<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px auto;
      padding: 20px;
    }

    table {
      width: 90%;
      max-width: 900px;
      border-collapse: collapse;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      border-radius: 12px;
      overflow: hidden;
    }

    th {
      background-color: #14b8a6;
      /* teal-500 */
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

    .cart_value {
      background-color: #14b8a6;
      /* teal-500 */
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .cart_value h3 {
      font-size: 24px;
      font-weight: bold;
    }

    .cart_value .total_amount {
      font-size: 28px;
      font-weight: bold;
      color: #fff;
      background-color: #0d9488;
      /* darker teal */
      padding: 5px 15px;
      border-radius: 8px;
    }

    .form_container {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
      width: 100%;
    }

    .order_form {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
    }

    .form_heading {
      text-align: center;
      margin-bottom: 20px;
      color: #14b8a6;
      font-size: 24px;
      font-weight: bold;
    }

    .form_group {
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    .form_group label {
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    .form_group input[type="text"],
    .form_group textarea {
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
      resize: none;
    }

    .btn_submit {
      background-color: #14b8a6;
      color: white;
      border: none;
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn_submit:hover {
      background-color: #0d9488;
    }

    @media (max-width: 768px) {
      .div_deg table {
        width: 100%;
      }

      .cart_value {
        padding: 10px;
      }
    }
  </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>
  <div class="div_deg">
    <div class="form_container">
      <form class="order_form" action="{{url('confirm_order')}}" method="POST">
        @csrf
        <h2 class="form_heading">Delivery Details</h2>
        <div class="form_group">
          <label>Receiver Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="form_group">
          <label>Receiver Address</label>
          <textarea name="address"></textarea>
        </div>
        <div class="form_group">
          <label>Receiver Phone</label>
          <input type="text" name="phone">
        </div>
        <div class="form_group">
          <input class="btn-submit" type="submit" value="Place Order">
        </div>
      </form>
    </div>
    <table>
      <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
        <th>Remove</th>
      </tr>
      <?php
      $value = 0;
      ?>
      @foreach($cart as $cart)
      <tr>
        <td>{{$cart->product->title}}</td>
        <td>{{$cart->product->price}}</td>
        <td>
          <img width="150" src="/products/{{$cart->product->image}}">
        </td>
        <td>
          <a class="btn btn-danger" onclick="confirmation(event)" href="{{ url('delete_cart/' . $cart->id) }}">Remove</a>
        </td>
      </tr>
      <?php
      $value = $value + $cart->product->price;
      ?>
      @endforeach
    </table>
  </div>
  <div class="cart_value">
    <h3>Total Value of Cart is:<span class="total_amount"> ${{$value}}</h3>
  </div>
  @include('home.footer')
</body>

</html>