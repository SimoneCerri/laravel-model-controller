@extends('layouts.app')

@section('page-title')
    Welcome Page
@endsection

@section('page-main')
    <section class="page_main">
        <div class="container-fluid h-25 bg-dark">
            <div class="text-center text-light d-flex justify-content-center align-items-center h-100">
                Hi, I'm a jumboStronz
                <br>
                Please select the section below
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('guests.movies') }}">
                        <div class="card text-center bg-secondary h-100 border-0">
                            <p class="card-title py-5">
                                Movies
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{ route('guests.tv_series') }}">
                        <div class="card text-center bg-secondary h-100 border-0">
                            <p class="card-title py-5">
                                TV Series
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
