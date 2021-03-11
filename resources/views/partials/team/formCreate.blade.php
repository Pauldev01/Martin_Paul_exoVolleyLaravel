<h1 class="text-center my-5">Add Team</h1>
<form class="my-5" action="/teams" method="POST">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">City</label>
      <input type="text" name="city" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Country</label>
      <input type="text" name="country" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Maximum Player</label>
      <input type="number" name="max_player" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Front Max</label>
      <input type="number" name="max_front" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Back Max</label>
      <input type="number" name="max_back" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Center Max</label>
      <input type="number" name="max_center" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Replacement Max</label>
      <input type="number" name="max_replace" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>