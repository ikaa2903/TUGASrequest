@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <h1>Kontak Kami</h1>
    <p>Hubungi kami melalui informasi di bawah ini:</p>
    
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Alamat</h4>
                <p>Jl. Contoh No. 123, Kota, Provinsi</p>
                
                <h4>Email</h4>
                <p>info@example.com</p>
                
                <h4>Telepon</h4>
                <p>+62 123 4567 890</p>
            </div>
            <div class="col-md-6">
                <h4>Kirim Pesan</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection