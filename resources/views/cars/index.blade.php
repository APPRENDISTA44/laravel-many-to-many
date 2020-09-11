<h1>Cars list</h1>
<div>
  <a href="{{route('cars.create')}}">Add new car</a>
</div>
<br>
<br>
@foreach ($cars as $car)
  <div>
    <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->engine}}</a>
    <br>
    <a href="{{ route('cars.edit', $car) }}">Modifica</a>
    <form action="{{ route('cars.destroy', $car) }}" method="post">
					@csrf
					@method('DELETE')

					<input type="submit" value="Elimina post">
				</form>

  </div>
@endforeach
