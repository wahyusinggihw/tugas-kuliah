@extends('layout')

@section('content')

<div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
        <h5 class="card-title">{{ $data['nama'] }}</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, laborum?</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Tempat lahir : {{ $data['tempatLahir'] }}</li>
        <li class="list-group-item">Tanggal lahir : {{ $data['tanggalLahir'] }}</li>
        <li class="list-group-item">Usia : {{ $data['usia'] }} Tahun</li>
        <li class="list-group-item">Gender : {{ $data['gender'] }}</li>
        <li class="list-group-item">Prodi : {{ $data['prodi'] }}</li>
        <li class="list-group-item">Hobi :
            @foreach ($data['hobi'] as $hobi)
            @if (sizeof($data['hobi']) > 1)
            {{ $hobi }},
            @else
            {{ $hobi }}
            @endif
            @endforeach
        </li>
        <li class="list-group-item">Alamat : {{ $data['alamat'] }}</li>
    </ul>
</div>

@endsection