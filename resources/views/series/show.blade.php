@extends('layouts.app')

@section('template_title')
    {{ $series->name ?? 'Show Series' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Series</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('series.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $series->name }}
                        </div>
                        <div class="form-group">
                            <strong>Seasons:</strong>
                            {{ $series->seasons }}
                        </div>
                        <div class="form-group">
                            <strong>Genre Id:</strong>
                            {{ $series->genre_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
