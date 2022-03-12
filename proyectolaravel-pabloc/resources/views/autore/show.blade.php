@extends('layouts.app')

@section('template_title')
    {{ $autore->name ?? 'Show Autore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Autores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('autores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $autore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $autore->apellidos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
