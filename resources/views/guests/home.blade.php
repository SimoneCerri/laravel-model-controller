@extends('layouts.app')

@section('page-title')
    Welcome Page
@endsection

@section('page-main')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{route('guests.movies')}}">
                    <div class="card text-center">
                        <p class="card-title">
                            Movies
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="{{route('guests.tv_series')}}">
                    <div class="card text-center">
                        <p class="card-title">
                            TV Series
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection