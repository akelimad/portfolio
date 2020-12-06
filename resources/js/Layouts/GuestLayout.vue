<template>
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/"><span>I</span>AKEL</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
            <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
            <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
            <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="content">
      <slot></slot>
    </div>

    <!-- Page Content -->
    <footer class="bg-black p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="m-0">
              Copyright &copy; {{ year }} All rights reserved | made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by Imad AKEL</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        year: moment().format('YYYY')
      }
    },
    
  }
</script>