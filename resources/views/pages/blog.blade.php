@extends('main.layout')

@section('body-attr', 'style=background-color:#F1F6F9;')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center poppins fw-bold" style="color: #ff7700; font-size: 30px">Our Blog</h1>

        <div class="row mt-4">
            <!-- Blog Post 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="images/blog1.jpg" class="card-img-top" alt="Blog Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Blog Post Title 1</h5>
                        <p class="card-text">This is a short introduction to the first blog post. It's a brief description or summary of the content.</p>
                        <a href="{{ url('/blog/post1') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="images/blog2.jpg" class="card-img-top" alt="Blog Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Blog Post Title 2</h5>
                        <p class="card-text">This is a short introduction to the second blog post. It's a brief description or summary of the content.</p>
                        <a href="{{ url('/blog/post2') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="images/blog3.jpg" class="card-img-top" alt="Blog Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Blog Post Title 3</h5>
                        <p class="card-text">This is a short introduction to the third blog post. It's a brief description or summary of the content.</p>
                        <a href="{{ url('/blog/post3') }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
