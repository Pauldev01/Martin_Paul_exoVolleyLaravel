<div class="jumbotron">
    <div class="row">
        <div class="col-7">
            <h1 class="display-4 col">{{$show->name}} {{$show->surname}}</h1>
            <p class="lead">Age : {{$show->age}}</p>
            <p class="lead">Phone Number : {{$show->phone}}</p>
            <p class="lead">Email : {{$show->email}}</p>
            <p class="lead">Gender : {{$show->gender}}</p>
            <p class="lead">Country : {{$show->country}}</p>
            <p class="lead">Position : {{$show->position}}</p>
            <p class="lead">Team : {{$show->teams->name}}</p>
        </div>
        <img class="col-5" src="{{asset('img/'.$show->photos->src)}}" alt="">
    </div>
    <hr class="my-4">
    <form action="/players/{{$show->id}}/edit" method="POST">
        @csrf
        @method('GET')
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>