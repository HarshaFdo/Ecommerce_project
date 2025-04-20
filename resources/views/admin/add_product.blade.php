<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style type="text/css">
    body {
      background-color: #1a1a2e;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h1 {
      color: #ffffff;
      text-align: left;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .form-container {
      background-color: #16213e;
      padding: 30px 40px;
      border-radius: 15px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
    }

    label {
      color: #eeeeee;
      font-size: 15px;
      display: block;
      margin-bottom: 5px;
    }

    input[type='text'],
    input[type='number'],
    input[type='file'],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: none;
      border-radius: 8px;
      background-color: #0f3460;
      color: white;
    }

    input[type='text']::placeholder,
    textarea::placeholder {
      color: #aaa;
    }

    select {
      background-color: #0f3460;
    }

    input[type='file'] {
      padding: 8px;
    }

    .btn-submit {
      width: 100%;
      padding: 12px;
      background-color: #00adb5;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #00fff5;
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')


  <div class="form-container">
    <h1>Add Product</h1>
    <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div>
        <label>Product Title</label>
        <input type="text" name="title" required>
      </div>
      <div>
        <label>Description</label>
        <textarea name="description" required></textarea>
      </div>
      <div>
        <label>Price</label>
        <input type="text" name="price">
      </div>
      <div>
        <label>Quantity</label>
        <input type="number" name="qty">
      </div>
      <div>
        <label>Product category</label>
        <select name="category" required>
          <option>Select a Option</option>
          @foreach($category as $category)
          <option value="{{$category->category_name}}">{{$category->category_name}}</option>
          @endforeach
        </select>
      </div>
      <div>
        <label>Product Image</label>
        <input type="file" name="image">
      </div>
      <button type="submit" class="btn-submit">Add Product</button>
    </form>
  </div>

  <!-- JavaScript files-->
  @include('admin.js')
</body>

</html>