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
                        <td>
                            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value=" {{ $category->name }}">
                            </form>

                        </td>
                        <td>INVA</td>
                        <td>
                            @include('admin.partials.formDelete', [
                                'route' => route('admin.categories.destroy', $category),
                                'message' => 'Confermi l\'eliminazione del post: {{ $category->name }}?',
                            ])
                            ELIMINA
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
