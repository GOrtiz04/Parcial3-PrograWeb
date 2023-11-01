@extends('layouts.app')

@section('template_title')
    {{ $aplicacione->name ?? "{{ __('Show') Aplicacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aplicacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aplicaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $aplicacione->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $aplicacione->marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis Id:</strong>
                            {{ $aplicacione->dosis_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
