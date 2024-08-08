<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/admin.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/footer.css">
  <script src="https://kit.fontawesome.com/bf51598d13.js" crossorigin="anonymous"></script>
</head>
<body>
  {{-- @include('components.navbar') --}}
  <div class="col-md-6 offset-md-3 mt-5">
     <form accept-charset="UTF-8" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" target="_blank">
      @csrf
       <div class="form-group">
         <label for="title">hotel name</label>
         <input type="text" name="title" class="form-control" id="title" placeholder="enter hotel name">
       </div>
       <div class="form-floating">
        <label for="body">explain</label>
        <textarea class="form-control" placeholder="explain the hotel" id="body" type="text" name="body" style="height: 100px">
        </textarea>
      </div>
       <hr>
       <div class="form-group mt-3">
         <label class="mr-2" for="image_post">upload hotel image:</label>
         <input type="file" name="image_post" id="image_post">
       </div>
       <hr>
       <button type="submit" class="btn btn-primary">Submit</button>
       <button type="reset" class="btn btn-secondary">Reset</button>
     </form>
 </div>
 {{-- @include('components.footer') --}}

</body>
</html>
