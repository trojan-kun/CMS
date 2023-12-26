@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 w-100">
            <div class="card">
                <div class="card-header">
                    <h5>Главная</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>Добро пожаловать!</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
