<h1 class="text-center my-5">All Teams</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">City</th>
        <th scope="col">Players</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teams as $item)
        <tr>
            <td scope="row">{{$item->name}}</td>
            <td>{{$item->city}}</td>
            <td>{{count($players->where('team_id', $item->id))}} / {{$item->max_player}}</td>
            <td>
                <form action="/teams/{{$item->id}}" method="POST">
                  @csrf
                  @method('GET')
                  <button class="btn btn-info" type="submit">Details</button>
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>