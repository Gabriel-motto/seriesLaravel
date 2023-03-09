@extends('layouts.app')

@section('template_title')
    {{ $movie->name ?? 'Show Movie' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movie</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $movie->name }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $movie->year }}
                        </div>
                        <div class="form-group">
                            <strong>Genre Id:</strong>
                            {{ $movie->genre_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
