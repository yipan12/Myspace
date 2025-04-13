@extends('main.layout')

@section('body-attr', 'style=background-color:#F1F6F9;')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center poppins fw-bold" style="color: #ff7700; font-size: 30px">Contact Us</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <form  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label poppins" style="font-size: 18px;">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label poppins" style="font-size: 18px;">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label poppins" style="font-size: 18px;">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary poppins" style="font-size: 18px;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
