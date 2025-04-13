@extends('main.layout')

@section('body-attr', 'style=background-color:#FBF8EF;')
@section('container')
    <div>
        <h1 class="poppins fw-bold text-center"  style="font-size: 30px">Things I Love to <span style="color: #ff7700">create</span></h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            <div class="col">
                <h5 class="card-subtitle mb-3 text-center">Games</h5>
                <div class="card shadow">
                    <img src="images/Screenshot 2024-09-14 102813.png" class="card-img-top" alt=" image">
                </div>
            </div>
            <div class="col">
                <h5 class="card-subtitle mb-3 text-center">Create a game</h5>
                <div class="card shadow">
                    <img src="images/Screenshot 2025-01-15 145936.png" class="card-img-top" alt=" image">
                </div>
            </div>
            <div class="col">
                <h5 class="card-subtitle mb-3 text-center">Design aplication story sketch</h5>
                <div class="card shadow">
                    <img src="images/Frame 20.jpg" class="card-img-top" alt=" image">
                </div>
            </div>
        </div>
        
    </div>
@endsection