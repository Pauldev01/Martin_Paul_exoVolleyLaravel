<div class="jumbotron">
    <h1 class="display-4">{{$show->name}}</h1>
    <p class="lead">{{$show->city}}</p>
    <p class="lead">{{$show->country}}</p>
    <hr class="my-4">
    <p>Numbers of players : 0 / {{$show->max_player}}</p>
    <form action="/teams/{{$show->id}}/edit" method="POST">
        @csrf
        @method('GET')
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>