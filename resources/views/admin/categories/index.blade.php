@extends('layouts.app')
@section('content')
    <div class="container-fluid content p-3 px-4">

        @if (session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }}
            </div>
        @endif

        <h2 class="n-txt">Gestione Categorie</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="cate d-flex align-items-center">
                <input type="text" name="name" class="form-control" placeholder="Aggiungi una nuova categoria">
                <button class="btn btn-success add my-4" type="submit">VAI</button>
            </div>
        </form>
        <table class="table">
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}: MODIFICA</td>
                        <td>INVA</td>
                        <td>ELIMINA</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
