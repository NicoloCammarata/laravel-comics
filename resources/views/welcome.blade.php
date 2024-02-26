@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
            <div class="container">

                <div class="row">
                @foreach ($comics as $index => $comic)

                    

                    
                    <div class="col-12 col-sm-3">
                        <ul>
                            <li>
                                {{ $comic['title'] }}

                            </li>
                            <li>
                                <img class="w-100" src="{{ $comic['thumb'] }}" alt="">
                            </li>
                            <li>
                                {{ $comic['description'] }}

                            </li>
                            <li>
                                {{ $comic['price'] }}

                            </li>
                            <li>
                                <a href="{{ route('comics.show') }}?id={{ $index }}">
                                    comics
                                </a>
                            </li>

                            
                        </ul>

                    </div>
                    
                @endforeach
                    
                    

                </div>

            </div>

@endsection
