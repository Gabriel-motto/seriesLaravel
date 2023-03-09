@extends('layouts.app')

@section('template_title')
    {{ $genre->name ?? 'Show Genre' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Género</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('genres.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $genre->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
