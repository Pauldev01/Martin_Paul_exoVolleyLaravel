<h1 class="text-center my-5">All Players</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Team</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($players as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->surname}}</td>
            <td>
                @if ($item->team_id != 1)
                    <form action="/teams/{{$item->team_id}}" method="POST">
                        @csrf
                        @method('GET')
                        <button class="btn p-0" type="submit">{{$item->teams->name}}</button>
                    </form>
                @else
                    {{$item->teams->name}}
                @endif
            </td>
            <td>
                <form action="/players/{{$item->id}}" method="POST">
                    @csrf
                    @method('GET')
                    <button class="btn btn-info" type="submit">Details</button>
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>