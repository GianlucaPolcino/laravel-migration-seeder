@extends('layouts.main')

@section('content')
<h1 class="text-center py-5">
    Viaggi
</h1>
@foreach ($travels as $item)
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Città</th>
            <th scope="col">Stato</th>
            <th scope="col">Nome Hotel</th>
            <th scope="col">Stanze</th>
            <th scope="col">Stelle</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Prezzo</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->state}}</td>
                <td>{{$item->hotel_name}}</td>
                <td>{{$item->rooms}}</td>
                <td>{{$item->stars}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
            </tr>
        </tbody>
    </table>
@endforeach
@endsection


