@extends('layouts.app')

@section('page-title', 'Chi siamo')

@section('main-content')
<div class="container">

                <div class="row">
               

                    

                    
                    <div class="col-12" >
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
                            

                            
                        </ul>

                    </div>
                    
                   
                    
                    

                </div>

            </div>
@endsection
