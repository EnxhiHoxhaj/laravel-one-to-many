@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Benvenuto nella Dashboard</h1>
        <h3>Sono presenti {{ $n_post }} posts al momento</h3>
    </div>
@endsection
