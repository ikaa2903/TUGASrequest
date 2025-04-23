<h2>Form Tambah User</h2>

@if (session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
<ul style="color: red;">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

<form method="POST" action="{{ route('user.store') }}">
@csrf
<input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
<input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
<input type="number" name="no.hp" placeholder="no.hp"><br>
<input type="text" name="message" placeholder="message"><br>
<button type="submit">Simpan</button>
</form>