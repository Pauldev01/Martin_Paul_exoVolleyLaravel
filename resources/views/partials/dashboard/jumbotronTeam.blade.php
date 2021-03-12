<section class="bg-success p-4 rounded my-5">
    <h1 class="text-center mb-5">Teams</h1>
    <div class="jumbotron">
        <h1 class="display-4">Teams with members</h1>
        <hr class="my-4">
        @foreach ($players->where('team_id', '!=', 1)->random(2) as $item)
            <p class="lead">{{$item->teams->name}}</p>
        @endforeach
    </div>
</section>