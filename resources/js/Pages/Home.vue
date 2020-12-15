<template>
  <guest-layout>
    <vue-progress-bar></vue-progress-bar>
    <section class="ftco-section hero-wrap js-fullheight p-0" id="home-section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-6 col-md-6 d-flex align-items-center intro-infos">
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
              <div class="img d-flex align-self-stretch align-items-center">
                <img src="/images/about.png" alt="">
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
                  <span class="number" data-number="120">{{ projectsData.length }}</span>
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
          <div class="col-md-3 mb-4">
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
                    <h3>Vuejs</h3>
                    <div class="progress">
                      <div class="progress-bar color-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                        <span>50%</span>
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
                    <h3>Drupal</h3>
                    <div class="progress">
                      <div class="progress-bar color-6" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span>70%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>Laravel</h3>
                    <div class="progress">
                      <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span>70%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animate-box">
                  <div class="progress-wrap">
                    <h3>Symfony</h3>
                    <div class="progress">
                      <div class="progress-bar color-6" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span>70%</span>
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
              <p v-if="this.certifsData.length == 0" class="alert alert-info">No result found!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section py-5" id="projects-section">
      <div class="container">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center">
            <h2 class="mb-4">Projects</h2>
          </div>
        </div>
        <div class="row">
          <div v-for="(project, pIndex) in this.projectsData" :key="pIndex" class="col-md-4 mb-3">
            <div class="inner-content border h-100">
              <div class="project img d-flex justify-content-center align-items-center project-item" :style="'background-image: url(uploads/projects/'+project.id+'/'+project.image+');'">
                <div class="overlay"></div>
                <div class="text text-center p-4">
                  <h3><a :href="project.link" target="_blank"><i class="fa fa-search"></i> View website</a></h3>
                </div>
              </div>
              <div class="project-tags">
                <span v-for="(tag, tagIndex) in project.tags" :key="tagIndex" class="tag mr-2">
                  {{ tag }}
                </span>
              </div>
            </div>
          </div>
          <div v-if="this.projectsData.length == 0" class="col-md-12">
            <p class="alert alert-info">No result found!</p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section py-5" id="contact-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4">Get in touch</h2>
            <p>If you have any question, feel free to contact me</p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6 p-50 p-xs-10 bg-light">
            <div class="row contact-info">
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40 mr-xs-0">
                    <span class="fa fa-home"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p>4029, Lot wafik, Temara, Morocco</p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40 mr-xs-0">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="tel:+212 6 06 83 30 78">+212 6 06 83 30 78</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40 mr-xs-0">
                    <span class="fa fa-envelope"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="mailto:akel.dev@gmail.com">akel.dev@gmail.com</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40 mr-xs-0">
                    <span class="fa fa-facebook"></span>
                  </div>
                  <div class="pull-left ml-3">
                    <p><a href="https://www.facebook.com/iakel3">https://www.facebook.com/iakel3</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="box text-center overflow-auto">
                  <div class="icon pull-left mr-40 mr-xs-0">
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
              <div class="form-group" >
                <input type="text" class="form-control" :class="{'is-invalid': $v.contactForm.name.$error, 'is-valid': !$v.contactForm.name.$invalid}" placeholder="Name *" v-model.trim="$v.contactForm.name.$model">
                <div class="invalid-feedback" v-if="$v.contactForm.name.$error">
                  <p v-if="!$v.contactForm.name.required" class="invalid">Name is required</p>
                  <p v-if="!$v.contactForm.name.minLength" class="invalid">Name can't be less than {{ $v.contactForm.name.$params.minLength.min }} chars</p>
                  <p v-if="!$v.contactForm.name.maxLength" class="invalid">Name can't be more than {{ $v.contactForm.name.$params.maxLength.max }} chars</p>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" :class="{'is-invalid': $v.contactForm.email.$error, 'is-valid': !$v.contactForm.email.$invalid}" placeholder="Email *" v-model.trim="$v.contactForm.email.$model">
                <div class="invalid-feedback" v-if="$v.contactForm.email.$error">
                  <p v-show="!$v.contactForm.email.required" class="invalid">Email is required</p>
                  <p v-show="!$v.contactForm.email.email" class="invalid">Email is invalid</p>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" :class="{'is-invalid': $v.contactForm.subject.$error, 'is-valid': !$v.contactForm.subject.$invalid}" placeholder="Subject *" v-model.trim="$v.contactForm.subject.$model">
                <div class="invalid-feedback" v-if="$v.contactForm.subject.$error">
                  <p v-show="!$v.contactForm.subject.required" class="invalid">Subject is required</p>
                  <p v-show="!$v.contactForm.subject.minLength" class="invalid">Subject can't be less than {{ $v.contactForm.subject.$params.minLength.min }} chars</p>
                  <p v-show="!$v.contactForm.subject.maxLength" class="invalid">Subject can't be more than {{ $v.contactForm.subject.$params.maxLength.max }} chars</p>
                </div>
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" :class="{'is-invalid': $v.contactForm.message.$error, 'is-valid': !$v.contactForm.message.$invalid}" placeholder="Message *" v-model.trim="$v.contactForm.message.$model"></textarea>
                <div class="invalid-feedback" v-if="$v.contactForm.message.$error">
                  <p v-show="!$v.contactForm.message.required" class="invalid">Message is required</p>
                  <p v-show="!$v.contactForm.message.minLength" class="invalid">Message can't be less than {{ $v.contactForm.message.$params.minLength.min }} chars</p>
                  <p v-show="!$v.contactForm.message.maxLength" class="invalid">Message can't be more than {{ $v.contactForm.message.$params.maxLength.max }} chars</p>
                </div>
              </div>
              <div class="form-group mb-0">
                <input type="submit" @click="submitContactForm" value="Send Message" class="btn btn-primary py-3 px-5" :disabled="$v.contactForm.$invalid || this.submitting">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </guest-layout>
</template>

<style>
  .intro-infos {
    z-index: 99999999;
  }
  .invalid {
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
    margin-top: 0;
  }
</style>

<script>
  import Vue from "vue";
  import GuestLayout from '@/Layouts/GuestLayout'
  import Vuelidate from "vuelidate";
  import {required, minLength, maxLength, email} from 'vuelidate/lib/validators'
  Vue.use(Vuelidate);

  export default {
    created () {
      this.$Progress.start()
    },
    mounted () {
      this.$Progress.finish()
    },
    watch: {
      flash: {
        handler: function (newFlush, oldFlush) {
          if (newFlush.success != null) this.$toastr.s(newFlush.success);
          if (newFlush.danger != null)  this.$toastr.e(newFlush.danger);
          this.contactForm.name = ''
          this.contactForm.email = ''
          this.contactForm.subject = ''
          this.contactForm.message = ''
          this.submitting = false
          this.$Progress.finish()
        },
      }
    },
    props: ["formations", "experiences", "certifications", "projects", "flash"],
    data () {
      return {
        formationsData: this.formations,
        experiencesData: this.experiences,
        certifsData: this.certifications,
        projectsData: this.projects,
        contactForm: {
          name: '',
          email: '',
          subject: '',
          message: '',
        },
        flush: this.flash,
        submitting: false
      }
    },
    validations: {
      contactForm: {
        name: {required, minLength: minLength(2), maxLength: maxLength(32)},
        email: {required, email},
        subject: {required, minLength: minLength(2), maxLength: maxLength(64)},
        message: {required, minLength: minLength(16), maxLength: maxLength(500)}
      }
    },
    methods: {
      submitContactForm (e) { 
        e.preventDefault()
        this.submitting = true
        this.$Progress.start()
        this.$inertia.post("/contact/send-message", this.contactForm);
      },
    },
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
