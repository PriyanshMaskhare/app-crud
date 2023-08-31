<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div>
        @if($errors->any())

        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
      </div>
      <h3 class="text-center mb-2">Update</h3>
    <form action="{{route('student.update',['student'=>$student])}}" method="post"> 
      @csrf
      @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Full Name" value="{{$student->name}}" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number" class="form-control" name="age"  id="exampleInputPassword1" placeholder="Age" value="{{$student->age}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course</label>
    <input type="text" class="form-control" name="course" id="exampleInputPassword1" placeholder="Course" value="{{$student->course}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputPassword1" placeholder="Address" value="{{$student->address}}" >
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>