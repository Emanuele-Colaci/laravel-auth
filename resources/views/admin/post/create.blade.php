@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Create Proggetto</h1>
            </div>
        </div>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-6">
            <form action=" {{ Route('admin.project.store') }} " method="POST">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <!-- Titolo -->
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="titolo" id="titolo" placeholder="Inserisci il titolo" class="form-control" value="{{ old('titolo') }}" require>
                            </div>
                            <div class="col-12 my-3">
                                <!-- Descrizione -->
                                <label class="control-label my-3">Descrizione</label>
                                <textarea name="descrizione" id="descrizione" placeholder="Inserisci la descrizione" cols="30" rows="10" class="form-control" require>{{ old('descrizione') }}</textarea>
                            </div>
                            <div class="col-12 my-3">
                                <!-- Data -->
                                <label class="control-label my-3">Descrizione</label>
                                <input type="date" name="data" id="data" placeholder="Inserisci la data" class="form-control" value="{{ old('descrizione') }}" require>
                            </div>
                            <div class="col-12 text-center my-5">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection