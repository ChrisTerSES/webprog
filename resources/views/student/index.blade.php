@extends('layout.master')

@section('content')
<h4>Daftar Mahasiswa</h4>
<table class="table table-hover">
  <thead>
    <th>Nim </th>
    <th>Nama </th>
    <th>Detail </th>
  </thead>
  <tbody>
    <tr>
      @foreach($students as $student)
        <tr>
          <td>{{$student["nim"] }}</td>
          <td>{{$student["nama"] }}</td>
          <td><a href="{{route('student.detail', ['nim' => $student['nim']]) }}" class="btn btn-success">Detail</a></td>
        </tr>   
      @endforeach
    </tr>
  </tbody>
</table>
@endsection
