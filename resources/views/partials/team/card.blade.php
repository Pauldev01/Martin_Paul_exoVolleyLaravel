<h1 class="text-center my-5">Team Members :</h1>
<div class="row">
    @foreach ($players as $item)
        <div class="col-4">
            <div class="card my-3" style="width: 18rem;">
                <img src="{{asset('img/'.$item->photos->src)}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}} {{$item->surname}}</h5>
                    <p class="card-text">Position : <span class="text-capitalize">{{$item->position}}</span></p>
                    <form action="/players/{{$item->id}}" method="POST">
                        @csrf
                        @method('GET')
                        <button class="btn btn-info" type="submit">Details</button>
                    </form>
                </div>
            </div>
        </div>
        @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>