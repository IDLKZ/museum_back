@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>События</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('events.create') }}">
                        Добавить
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('events.table')

                <div class="card-footer clearfix">
                    <div class="d-flex justify-content-center">
                        {{$events->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

