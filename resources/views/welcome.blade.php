<a href="/ard">ard</a>
<h1>upload file</h1>
<form method="POST" enctype="multipart/form-data" action="{{ route('uploadimage') }}">
    @csrf
    name
    <input type="text" name="name" />
    image 
    <input type="file" name="file" accept="image/jpg,image/png,image/jpeg" />
    <button>upload</button>
</form>

@if($errors->any())
<div>
  <ul>
    @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif


{{-- image/*L --}}
