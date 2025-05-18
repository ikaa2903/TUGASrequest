@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <div class="container">
        <h1 class="my-4">Galeri Foto</h1>
        <p>Berikut adalah koleksi galeri foto kami</p>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://i.pinimg.com/originals/06/b9/89/06b98936f8091b2cfd39b29dae7013a1.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body">
                        <h5 class="card-title">Foto 1</h5>
                        <p class="card-text">Pacar 1.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://i.pinimg.com/736x/1a/b7/61/1ab761dd6446a25e10aba94641610a35.jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body">
                        <h5 class="card-title">Foto 2</h5>
                        <p class="card-text">pacar 2.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://pbs.twimg.com/media/FLYHUS2XECkvG5h?format=jpg&name=4096x4096" class="card-img-top" alt="Gambar 3">
                    <div class="card-body">
                        <h5 class="card-title">Foto 3</h5>
                        <p class="card-text">pacar 3.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://i.pinimg.com/750x/f4/7b/e3/f47be314cbabb5e9bc7fa16bb4696ae7.jpg" class="card-img-top" alt="Gambar 4">
                    <div class="card-body">
                        <h5 class="card-title">Foto 4</h5>
                        <p class="card-text">pacar 4.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
