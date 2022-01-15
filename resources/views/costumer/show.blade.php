@extends('layouts.app')

@section('template_title')
    {{ $costumer->name ?? 'Show Costumer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Costumer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('costumers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $costumer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $costumer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $costumer->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $costumer->address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
