@extends('layouts.app')

@section('page-title')
    Movies
@endsection

@section('page-main')
    <div class="container">
        <div class="row g-3">
            @forelse ($movies as $movie)
                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-title text-center">
                            {{$movie->original_title}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    Language: {{$movie->nationality}}
                                </div>
                                <div class="col-4">
                                    Date: {{$movie->date}}
                                </div>
                                <div class="col-4">
                                    Vote: {{$movie->vote}}/10
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
@endsection
