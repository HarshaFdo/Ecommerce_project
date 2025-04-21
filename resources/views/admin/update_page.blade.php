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
      padding: 60px 30px;
      width: 100%;
    }

    .form-container {
      background-color: white;
      padding: 40px;
      border-radius: 15px;
      width: 50%;
      /* max-width: 1100px; */
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
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

    img.preview {
      display: block;
      margin: 10px auto 20px;
      max-width: 150px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    @media screen and (max-width: 768px) {
      .form-container {
        padding: 25px;
      }

      h2 {
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
      <h2>Update Product</h2>
      <form action="{{ url('edit_product/'.$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Title</label>
        <input type="text" name="title" value="{{$data->title}}">

        <label>Description</label>
        <textarea name="description">{{$data->description}}</textarea>

        <label>Price</label>
        <input type="text" name="price" value="{{$data->price}}">

        <label>Quantity</label>
        <input type="number" name="quantity" value="{{$data->quantity}}">

        <label>Category</label>
        <select name="category">
          <option value="{{$data->category}}">{{$data->category}}</option>
          @foreach($category as $category)
          <option value="{{$category->category_name}}</">{{$category->category_name}}</option>
          @endforeach
        </select>

        <label>Current Image</label>
        <img width="150" src="/products/{{$data->image}}">

        <label>New Image</label>
        <input type="file" name="image">

        <button type="submit" class="btn-submit">Update Product</button>

      </form>
    </div>
  </div>
  <!-- JavaScript files-->
  @include('admin.js')
</body>

</html>