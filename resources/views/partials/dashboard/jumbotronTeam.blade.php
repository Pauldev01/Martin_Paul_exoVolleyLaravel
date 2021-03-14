<section class="bg-success p-4 rounded my-5">
    <h1 class="text-center mb-5">Teams</h1>
    <div class="jumbotron">
        <h1 class="display-4">Teams full members</h1>
        <hr class="my-4">
        <span class="d-none">{{shuffle($fullTeam)}}</span>
        @foreach ($fullTeam as $item)
            <p class="lead">{{$item->name}}</p>
            @if ($loop->iteration %2 == 0)
                @break
            @endif
        @endforeach
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Teams without members</h1>
        <hr class="my-4">
        <span class="d-none">{{shuffle($emptyTeam)}}</span>
        @foreach ($emptyTeam as $item)
            <p class="lead">{{$item->name}}</p>
            @if ($loop->iteration %2 == 0)
                @break
            @endif
        @endforeach
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Teams inside EU</h1>
        <hr class="my-4">
        <span class="d-none">{{shuffle($euTeams)}}</span>
        @foreach ($euTeams as $item)
            <p class="lead">{{$item->name}}</p>
        @endforeach
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Teams outside EU</h1>
        <hr class="my-4">
        <span class="d-none">{{shuffle($outEuTeams)}}</span>
        @foreach ($outEuTeams as $item)
            <p class="lead">{{$item->name}}</p>
        @endforeach
    </div>
</section>