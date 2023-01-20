@extends('main')
@section('container')
<table class="table table-bordered">
    <tr>
        <td>Nama</td>
        <td>{{ $name }}</td>
    </tr>
    <tr>
        <td>Tempat tgl lahir</td>
        <td>{{ $ttl }}</td>
    </tr>
    <tr>
        <td>No WhatsApp</td>
        <td>{{ $no_wa }}</td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td>{{ $hobi }}</td>
    </tr>
    <tr>
        <td>Jargon</td>
        <td>{{ $jargon }}</td>
    </tr>
    <tr>
        <td>Foto</td>
        <td><img src="{{ $foto }}" alt="images me" width="60px"></td>
    </tr>
</table>
@endsection