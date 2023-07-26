<!-- resources/views/visualizar_pdf.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Visualizar PDF</h2>
        <iframe src="{{ asset('pdf/curriculo.pdf') }}" width="100%" height="600px" frameborder="0"></iframe>
    </div>
@endsection
