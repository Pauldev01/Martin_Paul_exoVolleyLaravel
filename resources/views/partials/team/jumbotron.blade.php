<div class="jumbotron">
    <h1 class="display-4">{{$show->name}}</h1>
    <p class="lead">City : {{$show->city}}</p>
    <p class="lead">Country : {{$show->country}}</p>
    <hr class="my-4">
    <p>Numbers of players : 0 / {{$show->max_player}}</p>
    <div class="row">
        <form class="mx-3" action="/teams/{{$show->id}}/edit" method="POST">
            @csrf
            @method('GET')
            <button class="btn btn-lg btn-success" type="submit">Edit</button>
        </form>
        <form class="mx-3" action="/teams/{{$show->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-lg btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>