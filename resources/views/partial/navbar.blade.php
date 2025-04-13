 {{-- navbar --}}
 <nav class="navbar navbar-expand-lg z-50 navbar-light border border-white " style="background-color: transparent;">
  <div class="container">
    <a class="navbar-brand" href="/">Irpan Maulana</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ ($title === "Hobi") ? 'active' : '' }}" href="/Hobi">Hobi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ ($title === "Gallery") ? 'active' : '' }}" href="/Gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ ($title === "Blog") ? 'active' : '' }}" href="/Blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ ($title === "Contact") ? 'active' : '' }}" href="/Contact">Contact</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
{{-- navbar akhir --}}