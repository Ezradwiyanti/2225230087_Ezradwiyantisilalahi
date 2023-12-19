@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Mahasiswa</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama  : {{ $students->nama }}</h5>
            <h5 class="card-title">NIM   : {{ $students->nim }}</h5>
            <h5 class="card-title">Kelas : {{ $students->kelas }}</h5>
            <h5 class="card-title">Hobi : {{ $students->hobi }}</h5>
            <h5 class="card-title">Cita-cita : {{ $students->cita_cita }}</h5>


        </div>
    </div>