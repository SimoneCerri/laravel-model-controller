@extends('layouts.app')

@section('page-title')
    TV Series
@endsection

@section('page-main')
    <div class="bg-dark">
        <div class="container py-5">
            <div class="row g-3">
                @forelse ($tv_series as $tv_serie)
                    <div class="col-6">
                        <div class="card text-center h-100 border-0 bg-secondary">
                            <div class="card-title text-danger">
                                {{ $tv_serie->original_title }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 text-warning">
                                        Language: <span class="text-body-tertiary">{{ $tv_serie->nationality }}</span>
                                    </div>
                                    <div class="col-4 text-warning">
                                        Date: <span class="text-body-tertiary">{{ $tv_serie->date }}</span>
                                    </div>
                                    <div class="col-4 text-warning">
                                        Vote: <span class="text-body-tertiary">{{ $tv_serie->vote }}/10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        I'm sorry, nothing to show..
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
