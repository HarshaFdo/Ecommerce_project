<!DOCTYPE html>
</admincss /html>

<head>
  @include('admin.css')

  <style type="text/css">
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 60px;
    }

    input[type='text']
    {
      width: 400px;
      height: 43px;
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')
  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <h1 style="color: white;">Update Category</h1>
        <div class="div_deg">
          <form 
            action="{{url('update_category/'.$data->id)}}" 
            method="POST">
            @csrf
            <input 
              type="text" 
              name="category" 
              value="{{$data->category_name}}">
            <input 
              class="btn btn-primary" 
              type="submit" 
              value="Update Category">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  @include('admin.js')
</body>

</html>