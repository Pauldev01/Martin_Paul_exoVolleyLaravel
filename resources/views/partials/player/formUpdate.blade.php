<h1 class="text-center my-5">Edit Player</h1>
<form class="my-5" action="/players/{{$show->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" value="{{$show->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Surname</label>
      <input type="text" name="surname" class="form-control" value="{{$show->surname}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Age</label>
      <input type="number" name="age" class="form-control" value="{{$show->age}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Phone</label>
      <input type="text" name="phone" class="form-control" value="{{$show->phone}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" value="{{$show->email}}">
    </div>
    <div class="form-group">
      <label for="">Gender</label>
      <select class="form-control" name="gender" id="">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Country</label>
      <input type="text" name="country" class="form-control" value="{{$show->country}}">
    </div>
    <div class="form-group">
      <label for="">Position</label>
      <select class="form-control" name="position" id="">
        <option value="front">Front</option>
        <option value="back">Back</option>
        <option value="center">Center</option>
        <option value="replace">Replace</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Team</label>
      <select class="form-control" name="team_id" id="">
        @foreach ($teams as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Photo</label>
      <input type="file" name="src" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>