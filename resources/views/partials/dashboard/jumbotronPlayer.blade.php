<section class="bg-info p-4 rounded">
    <h1 class="text-center mb-5">Players</h1>
    <div class="jumbotron">
        <h1 class="display-4">Players without a team</h1>
        <hr class="my-4">
        @foreach ($playersWithout->random(4) as $item)
            <p class="lead">{{$item->name}} {{$item->surname}}</p>
        @endforeach
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Players with a team</h1>
        <hr class="my-4">
        @foreach ($playersWith->random(4) as $item)
            <p class="lead">{{$item->name}} {{$item->surname}}</p>
        @endforeach
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Player who defends they're country</h1>
        <hr class="my-4">
        <span class="d-none">{{shuffle($playerCountry)}}</span>
        @foreach ($playerCountry as $item)
            <p class="lead">{{$item->name}} {{$item->surname}} ({{$item->country}})</p>
            @break
        @endforeach
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Male Player with a team</h1>
        <hr class="my-4">
        @foreach ($playersWith->where('gender', '=', 'male')->random(5) as $item)
            <p class="lead">{{$item->name}} {{$item->surname}}</p>
        @endforeach
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Female Player with a team</h1>
        <hr class="my-4">
        @foreach ($playersWith->where('gender', '=', 'female')->random(5) as $item)
            <p class="lead">{{$item->name}} {{$item->surname}}</p>
        @endforeach
    </div>
</section>