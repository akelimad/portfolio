<template>
  <guest-layout>

    <section class="ftco-section hero-wrap js-fullheight p-0" id="home-section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 d-flex align-items-center">
            <div class="text text-center">
              <span class="subheading">Hey! I'm</span>
              <h1>Imad AKEL</h1>
              <h2>I'm a <span class="txt-rotate" data-period="2000" data-rotate='["Developer."]'></span></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
        <a href="#about-section" class="mouse-icon">
          <div class="mouse-wheel"><span class="fa fa-chevron-down"></span></div>
        </a>
      </div>
    </section>

    <section class="ftco-section img ftco-about py-5 overflow-auto" id="about-section">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-6 col-lg-6 d-flex about-image-col">
            <div class="img-about img d-flex align-items-stretch">
              <div class="overlay"></div>
              <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.png); margin-top:-116px;">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section">
                <h2 class="mb-4">About Me</h2>
                <ul class="about-info mt-4 px-md-0 px-2">
                  <li class="d-flex"><span>Name:</span> <span>Imad AKEL</span></li>
                  <li class="d-flex"><span>Date of birth:</span> <span>Aug 01, 1990</span></li>
                  <li class="d-flex"><span>Address:</span> <span>4029, Lot wafik, Temara, Morocco</span></li>
                  <li class="d-flex"><span>Zip code:</span> <span>12000</span></li>
                  <li class="d-flex"><span>Email:</span> <a href="mailto:akel.dev@gmail.com">akel.dev@gmail.com</a></li>
                  <li class="d-flex"><span>Phone: </span> <a href="tel:+212 6 06 83 30 78">+212 6 06 83 30 78</a></li>
                </ul>
              </div>
            </div>
            <div class="counter-wrap d-flex mt-md-3">
              <div class="text">
                <p class="mb-4">
                  <span class="number" data-number="120">0</span>
                  <span>Project complete</span>
                </p>
                <p><a href="/cv-imad-akel.pdf" target="_blank" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section goto-here py-5" id="resume-section">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <nav id="navi">
              <ul>
                <li><a href="#page-1">Formations</a></li>
                <li><a href="#page-2">Experiences</a></li>
                <li><a href="#page-3">Skills</a></li>
                <li><a href="#page-4">Certifications</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-md-9">
            <div id="page-1" class= "page one">
              <h2 class="heading">Formations</h2>
              <div v-for="formation in this.formationsData" :key="formation.id" class="resume-wrap d-flex">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-graduation-cap"></span>
                </div>
                <div class="text pl-3">
                  <span class="date">{{ formation.startdate | format('Y') }} - {{ formation.enddate | format('Y') }}</span>
                  <h2>{{ formation.title }}</h2>
                  <span class="position"><i class="fa fa-map-marker text-red-500"></i> {{ formation.school }}</span>
                  <p>{{ formation.description }}</p>
                </div>
              </div>
              <div v-if="this.formationsData.length == 0" class="alert alert-info">
                {{ "No formation found" }}
              </div>
            </div>

            <div id="page-2" class= "page two">
              <h2 class="heading">Experience</h2>

              <div v-for="experience in this.experiencesData" :key="experience.id"  class="resume-wrap d-flex">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-briefcase"></span>
                </div>
                <div class="text pl-3">
                  <span class="date">
                    {{ experience.startdate | format('YYYY MMM') }} - 
                    {{ experience.enddate | format('YYYY MMM') }}
                    </span>
                  <h2>{{ experience.title }}</h2>
                  <span class="position"><i class="fa fa-map-marker text-red-500"></i> {{ experience.city }} | {{ experience.company }}</span>
                  <p>{{ experience.description }}</p>
                </div>
              </div>
            </div>
            <div id="page-3" class= "page three">
              <h2 class="heading">Skills</h2>
              <div class="row">
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>Photoshop</h3>
                    <div class="progress">
                      <div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        <span>90%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>jQuery</h3>
                    <div class="progress">
                      <div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                        <span>85%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>HTML5</h3>
                    <div class="progress">
                      <div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                        <span>95%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>CSS3</h3>
                    <div class="progress">
                      <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                        <span>90%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>WordPress</h3>
                    <div class="progress">
                      <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span>70%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>SEO</h3>
                    <div class="progress">
                      <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        <span>80%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="page-4" class= "page four">
              <h2 class="heading">Certifications</h2>
              <div v-for="certif in this.certifsData" :key="certif.id" class="resume-wrap d-flex">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-certificate"></span>
                </div>
                <div class="text pl-3">
                  <span class="date">{{ certif.obtention_date }}</span>
                  <h2>{{ certif.title }}</h2>
                  <span class="position">{{ certif.delivred_by }}</span>
                  <p>{{ certif.description }}</p>
                </div>
              </div>
              <p v-if="this.certifsData.length == 0" class="alert alert-info">No result foud!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section py-5" id="projects-section">
      <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center">
            <h2 class="mb-4">Projects</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="project img d-flex justify-content-center align-items-center" style="background-image: url(images/work-1.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img d-flex justify-content-center align-items-center" style="background-image: url(images/work-2.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="project img d-flex justify-content-center align-items-center" style="background-image: url(images/work-3.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img d-flex justify-content-center align-items-center" style="background-image: url(images/work-4.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img d-flex justify-content-center align-items-center" style="background-image: url(images/work-5.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="project img d-flex justify-content-center align-items-center" style="background-image: url(images/work-6.jpg);">
              <div class="overlay"></div>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section py-5" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4">Get in touch</h2>
            <p>If you have any question, feel free to contact me</p>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 p-5 bg-light">
            <div class="row contact-info mb-5 mt-30">
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40">
                    <span class="fa fa-home"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p>4029, Lot wafik, Temara, Morocco</p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="tel:+212 6 06 83 30 78">+212 6 06 83 30 78</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40">
                    <span class="fa fa-envelope"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="mailto:akel.dev@gmail.com">akel.dev@gmail.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40">
                    <span class="fa fa-facebook"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="https://www.facebook.com/iakel3">https://www.facebook.com/iakel3</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40">
                    <span class="fa fa-github"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="https://github.com/akelimad">https://github.com/akelimad</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </guest-layout>
</template>

<script>
  import GuestLayout from '@/Layouts/GuestLayout'

  export default {
    created () {
    },
    data () {
      return {
        formationsData: this.formations,
        experiencesData: this.experiences,
        certifsData: this.certifications,
      }
    },
    props: ["formations", "experiences", "certifications"],
    components: {
      GuestLayout
    },
    filters: {
      format: function (value, arg1) {
        return value ? moment(String(value)).format(arg1) : 'Till today'
      }
    },
  }
</script>
