@extends('main.layout')

@section('body-attr', 'style=background-color:#F1F6F9;')
@section('container')
<div class="row row-cols-1 row-cols-md-2 mt-5">
    <div class="col border-start border-3 ps-4">
        <h5 class="poppins fw-bold" style="color: #ff7700; font-size: 30px">Learning</h5>
        <p class="poppins text-wrap paragraph-with-line">
            I really enjoy learning new things, especially in the world of technology. 
            One of my favorite hobbies is exploring how to code and build mobile applications. 
            I find it exciting to solve problems and create something useful through programming.
        </p>
    </div>
    <div class="col text-end">
        <img src="images/projectuts.png" style="width: 500px" alt="Project image">
    </div>
</div>




<div class="row row-cols-1 row-cols-md-2 mt-5">
    <div class="col text-start">
        <img src="images/Screenshot 2024-09-14 102813.png" style="width: 500px" alt="Project image">
    </div>
    <div class="col border-start border-3 ps-4">
        <h5 class="poppins fw-bold" style="color: #ff7700; font-size: 30px">Games</h5>
        <p class="poppins text-wrap paragraph-with-line">         
            I really enjoy playing video games, especially titles like GTA and Genshin Impact. These games offer immersive experiences, with vast open worlds, engaging storylines, and exciting gameplay. Whether it's exploring the streets of Los Santos in GTA or discovering new characters and locations in Genshin Impact, gaming has become one of my favorite ways to relax and have fun. I love the thrill of completing challenges, leveling up characters, and getting lost in these digital worlds for hours.
        </p>
    </div>
</div>



<div class="row row-cols-1 row-cols-md-2 mt-5 mb-5">
    <div class="col border-start border-3 ps-4">
        <h5 class="poppins fw-bold" style="color: #ff7700; font-size: 30px">photography"</h5>
        <p class="poppins text-wrap paragraph-with-line">
            Photography is one of my greatest passions. Capturing moments, whether through landscapes, portraits, or street photography, allows me to express creativity and preserve memories. I love experimenting with different styles, from natural lighting to carefully planned shots, and exploring new techniques to improve my craft. For me, photography isn't just about taking pictures; it's about telling stories and sharing a unique perspective of the world around us. Each photo holds a moment in time that can never be recreated, making it all the more special.
        </p>
    </div>
    <div class="col text-end">
        <img src="images/poto.jpeg" style="width: 500px" alt="Project image">
    </div>
</div>
@endsection
