<section class="bg-success p-4 rounded my-5">
    <h1 class="text-center mb-5">Teams</h1>
    <div class="jumbotron">
        <h1 class="display-4">Teams with members</h1>
        <hr class="my-4">
        @foreach ($playersWith->random(1) as $player)
            <p class="lead">{{$player->teams->name}}</p>
            {{$firstID = $player->team_id}}
            @foreach ($playersWith->except('team_id') as $item)
                <p class="lead">{{$item->teams->name}}</p>
                
            @endforeach
        @endforeach
    </div>
</section>