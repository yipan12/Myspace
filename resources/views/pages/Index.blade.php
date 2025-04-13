@extends('main.layout')

@section('body-attr', 'style=background-color:#E0E0E0;')

@section('container')
    <div class="row">
        <div class="col-6 d-flex align-items-center " >
           <div class="d-flex flex-column">
                <div>
                    <h1 style="font-size: 50px">HI! I'am <span style="color: #006BFF">Irpan Maulana</span></h1>
                </div>
                <p class="poppins">I am a sixth-semester university student with a strong interest in technology. I enjoy learning new things, especially in the areas of mobile application development and digital innovation. Currently, I’m focused on improving my programming skills and building simple mobile-based solutions aimed at helping people build better habits..</p>
                <hr>
               <div class="card shadow" style="width: 11rem">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Follow Me</h5>
                        <div class="d-flex gap-2">
                            <a href="https://github.com/yipan12" class="btn btn-outline-dark rounded-circle shadow" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://instagram.com/irpaneenyu" class="btn btn-outline-danger rounded-circle shadow" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/in/irpan-maulana-53ba03231" class="btn btn-outline-primary rounded-circle shadow" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
               </div>
           </div>
           
            
        </div>
        <div class="col-6 d-flex justify-content-end">
            <img src="images/IMG_20241027_192343_263.jpg" alt="foto irpan" class="rounded rounded-circle " style="width: 300px; height: 300px; margin-top: 120px">
        </div>
    </div>
@endsection
