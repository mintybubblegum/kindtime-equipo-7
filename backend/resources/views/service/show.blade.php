@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? 'Show Service' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Serviceimg:</strong>
                            {{ $service->serviceImg }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $service->name }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $service->title }}
                        </div>
                        <div class="form-group">
                            <strong>Descriptionsm:</strong>
                            {{ $service->descriptionSm }}
                        </div>
                        <div class="form-group">
                            <strong>Descriptionlg:</strong>
                            {{ $service->descriptionLg }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $service->location }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $service->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
