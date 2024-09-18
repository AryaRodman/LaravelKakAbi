<link rel="stylesheet" href="css/messi.css">
@extends('layout.layout')

@section('content')
<div class="main">
    <div class="overlay">
        <h1>La Pulga</h1>
        <p>Lionel Andrés "Leo" Messi (lahir 24 Juni 1987) adalah pemain sepak bola profesional asal Argentina yang bermain sebagai penyerang untuk klub Major League Soccer, Inter Miami CF dan merupakan kapten timnas Argentina.</p>
        <div class="buttons">
            <button class="play">Putar</button>
            <button class="info">Selengkapnya</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <img src="/img/lionel.jpg" alt="Contoh Gambar">
    </div>
    <div class="card">
        <img src="/img/leo2.jpeg" alt="Contoh Gambar">
    </div>
    <div class="card">
        <img src="/img/leo3.jpg" alt="Contoh Gambar">
    </div>
    <div class="card">
        <img src="/img/leo4.jpg" alt="Contoh Gambar">
    </div>
    <div class="card">
        <img src="/img/leo5.jpg" alt="Contoh Gambar">
    </div>
</div>
@endsection