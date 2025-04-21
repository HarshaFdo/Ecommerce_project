<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')

  <style type="text/css">
    body {
      background-color: #1a1a2e;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
    }

    .form-container {
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      width: 100%;
      max-width: 700px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #00adb5;
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
    }

    label {
      display: block;
      color: #333;
      margin-bottom: 8px;
      font-weight: 500;
      font-size: 15px;
    }

    input[type='text'],
    input[type='number'],
    input[type='file'],
    textarea,
    select {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 15px;
      background-color: #f9f9f9;
      transition: border-color 0.3s;
    }

    input[type='text']:focus,
    input[type='number']:focus,
    textarea:focus,
    select:focus {
      border-color: #00adb5;
      outline: none;
      background-color: #fff;
    }

    input[type='file'] {
      background-color: #fff;
    }

    .btn-submit {
      width: 100%;
      padding: 12px;
      background-color: #00adb5;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #007d82;
    }

    @media screen and (max-width: 768px) {
      .form-container {
        padding: 25px;
      }

      h1 {
        font-size: 24px;
      }

      input,
      textarea,
      select {
        font-size: 14px;
      }
    }
  </style>
</head>


<body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="form-wrapper">
    <div class="form-container">
      <h1>Add Product</h1>
      <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Product Title</label>
        <input type="text" name="title" placeholder="Enter product title" required>

        <label>Description</label>
        <textarea name="description" rows="4" placeholder="Write product description..." required></textarea>

        <label>Price</label>
        <input type="text" name="price" placeholder="Enter price">

        <label>Quantity</label>
        <input type="number" name="qty" placeholder="Enter quantity">

        <label>Product Category</label>
        <select name="category" required>
          <option disabled selected>Select a category</option>
          @foreach($category as $category)
          <option value="{{$category->category_name}}">{{$category->category_name}}</option>
          @endforeach
        </select>

        <label>Product Image</label>
        <input type="file" name="image">

        <button type="submit" class="btn-submit">Add Product</button>
      </form>
    </div>
  </div>

  @include('admin.js')
</body>


</html>