<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
data-aos="fade-down">
    <div class="container container-fluid">
      <a href="index.html" class="navbar-brand">
        <img src="images/logo.svg" alt="logo">
      </a>
      <button 
      class="navbar-toggler" 
      type="button" 
      data-toggle="collapse" 
      data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collaps navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link" >Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories') }}" class="nav-link" >Categories</a>
          </li>
          <li class="nav-item">
            <a href="/rewards" class="nav-link" >Rewards</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link" >Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link btn btn-success nav-link px-4 text-white" >Sign In</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
