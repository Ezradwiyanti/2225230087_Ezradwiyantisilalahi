@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>NIM</label>
        <input type="text" name="nim" id="nim" value="{{$students->nim}}" class="form-control"></br>
        <label>Kelas</label>
        <input type="text" name="kelas" id="kelas" value="{{$students->kelas}}" class="form-control"></br>
        <label>Hobi</label>
        <input type="text" name="hobi" id="hobi" value="{{$students->hobi}}" class="form-control"></br>
        <label>Cita-cita</label>
        <input type="text" name="cita_cita" id="cita_cita" value="{{$students->cita_cita}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop