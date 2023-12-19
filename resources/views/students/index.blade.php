@extends('students.layout')
@section('content')
    <style>
        button{
            width: 90px;
            margin-bottom: 5px;
        }
    </style>
    <div class="container">
        <div class="row">
 
            <div class="position-relative">
                <div class="card">
                    <div class="card-header">
                        <h2>DATA Hobi dan Cita-cita Mahasiswa Pendidikan Matematika</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Kelas</th>
                                        <th>Hobi</th>
                                        <th>Cita-cita</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->kelas}}</td>
                                        <td>{{ $item->hobi }}</td>
                                        <td>{{ $item->cita_cita }}</td>


 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> <br/>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a><br/>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button><br/>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection