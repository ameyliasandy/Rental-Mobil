@extends('layout.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2x1 font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/rush.jpg',
        'title' => 'Toyota Rush',
        'desc' => 'Toyota Rush adalah mobil SUV (Sport Utility Vehicle) berkapasitas 7 penumpang yang diproduksi oleh Toyota. Mobil ini dirancang untuk penggunaan keluarga dan perjalanan jarak jauh, dengan tampilan yang gagah dan fitur yang cocok untuk medan perkotaan maupun semi-offroad..'
])
@endsection