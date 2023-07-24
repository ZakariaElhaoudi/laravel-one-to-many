@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1>
            Città {{ $project -> city }}
        </h1>

        <div class="card">
            <div class="card-img " ">
                <img style="max-width:100%;" src="{{ $project -> image_url }}" alt="">
            </div>
            <div class="card-header">  
                <h2>
                    <a href="{{ route('show', $project -> id) }}">
                        {{ $project -> title }}
                    </a>
                </h2>
        
            </div>
            <div class="card-body">
                <p>Descrizione {{ $project -> description }}</p>
                <p> Data di partenza {{ $project -> start_date }}</p>
                <p> Data di ritorno {{ $project -> end_date }}</p>

            </div>
        </div>
    </div>
@endsection

