<h1 class="text-center my-5">Update Team</h1>
<form class="my-5" action="/teams/{{$show->id}}" method="POST">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" value="{{$show->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">City</label>
      <input type="text" name="city" class="form-control" value="{{$show->city}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Country</label>
      <input type="text" name="country" class="form-control" value="{{$show->country}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Maximum Player</label>
      <input type="number" name="max_player" class="form-control" value="{{$show->max_player}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Front Max</label>
      <input type="number" name="max_front" class="form-control" value="{{$show->max_front}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Back Max</label>
      <input type="number" name="max_back" class="form-control" value="{{$show->max_back}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Center Max</label>
      <input type="number" name="max_center" class="form-control" value="{{$show->max_center}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Replacement Max</label>
      <input type="number" name="max_replace" class="form-control" value="{{$show->max_replace}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>