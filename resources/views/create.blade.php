<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
      </div>
      <div>
        @if($errors->any())

        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
      </div>
      <h3 class="text-center mb-2">Create</h3>
    <form action="{{route('student.store')}}" method="post"> 
      @csrf
      @method('post')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Full Name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number" class="form-control" name="age"  id="exampleInputPassword1" placeholder="Age">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course</label>
    <input type="text" class="form-control" name="course" id="exampleInputPassword1" placeholder="Course">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputPassword1" placeholder="Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    <div class="container mt-5">
      <h3 class="text-center mb-4">Read</h3>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.no.</th>
      <th scope="col">Full Name</th>
      <th scope="col">Age</th>
      <th scope="col">Course</th>
      <th scope="col">Address</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @php
    $count = 1;
@endphp
    @foreach($Student as $student)
    <tr>
     <td>{{$count ++}}</td>
     <td>{{$student->name}}</td>
     <td>{{$student->age}}</td>
     <td>{{$student->course}}</td>
     <td>{{$student->address}}</td>
     <td>
     <a href="{{route('student.edit',['student'=>$student])}}">edit</a>
     </td>
     <td>
      <form action="{{route('student.delete',['student'=>$student])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="delete"/>
      </form>
     </td>
    </tr>
    @endforeach

  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>