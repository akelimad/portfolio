<template>
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/"><span>I</span>AKEL</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
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
    <Particles
      id="tsparticles"
      :options="{
        background: {
                color: {
                    value: '#63bad8'
                }
            },
            fpsLimit: 60,
            interactivity: {
                detectsOn: 'canvas',
                events: {
                    onClick: {
                        enable: true,
                        mode: 'push'
                    },
                    onHover: {
                        enable: true,
                        mode: 'trail'
                    },
                    resize: true
                },
                'modes': {
                'attract': {
                  'distance': 200,
                  'duration': 0.4,
                  'speed': 1
                },
                'bounce': {
                  'distance': 200
                },
                'bubble': {
                  'distance': 200,
                  'duration': 0.4
                },
                'connect': {
                  'distance': 80,
                  'links': {
                    'opacity': 0.5
                  },
                  'radius': 60
                },
                'grab': {
                  'distance': 100,
                  'links': {
                    'blink': false,
                    'consent': false,
                    'opacity': 1
                  }
                },
                'light': {
                  'area': {
                    'gradient': {
                      'start': {
                        'value': '#ffffff'
                      },
                      'stop': {
                        'value': '#000000'
                      }
                    },
                    'radius': 1000
                  },
                  'shadow': {
                    'color': {
                      'value': '#000000'
                    },
                    'length': 2000
                  }
                },
                'push': {
                  'quantity': 4
                },
                'remove': {
                  'quantity': 2
                },
                'repulse': {
                  'distance': 200,
                  'duration': 0.4,
                  'speed': 1
                },
                'slow': {
                  'factor': 3,
                  'radius': 200
                },
                'trail': {
                  'delay': 0.005,
                  'quantity': 5,
                  'particles': {
                    'color': {
                      'value': '#ff0000',
                      'animation': {
                        'enable': true,
                        'speed': 400,
                        'sync': true
                      }
                    },
                    'collisions': {
                      'enable': false,
                      'bounce': {
                        'horizontal': {
                          'random': {}
                        },
                        'vertical': {
                          'random': {}
                        }
                      }
                    },
                    'links': {
                      'enable': false,
                      'shadow': {},
                      'triangles': {}
                    },
                    'move': {
                      'outMode': 'destroy',
                      'speed': 5,
                      'angle': {},
                      'attract': {
                        'rotate': {}
                      },
                      'gravity': {},
                      'noise': {
                        'delay': {
                          'random': {}
                        }
                      },
                      'outModes': {},
                      'trail': {}
                    },
                    'size': {
                      'value': 5,
                      'animation': {
                        'enable': true,
                        'speed': 5,
                        'minimumValue': 1,
                        'sync': true,
                        'startValue': 'min',
                        'destroy': 'max'
                      },
                      'random': {}
                    },
                    'bounce': {
                      'horizontal': {
                        'random': {}
                      },
                      'vertical': {
                        'random': {}
                      }
                    },
                    'life': {
                      'delay': {
                        'random': {}
                      },
                      'duration': {
                        'random': {}
                      }
                    },
                    'number': {
                      'density': {}
                    },
                    'opacity': {
                      'animation': {},
                      'random': {}
                    },
                    'rotate': {
                      'animation': {}
                    },
                    'shadow': {
                      'offset': {}
                    },
                    'shape': {},
                    'stroke': {
                      'color': {
                        'value': '',
                        'animation': {
                          'enable': false,
                          'speed': 0,
                          'sync': false
                        }
                      }
                    },
                    'twinkle': {
                      'lines': {},
                      'particles': {}
                    }
                  }
                }
              }
            },
            particles: {
                color: {
                    value: '#ffffff'
                },
                links: {
                    color: '#ffffff',
                    distance: 150,
                    enable: true,
                    opacity: 0.5,
                    width: 1
                },
                collisions: {
                    enable: true
                },
                move: {
                    direction: 'none',
                    enable: true,
                    outMode: 'bounce',
                    random: false,
                    speed: 6,
                    straight: false
                },
                number: {
                    density: {
                        enable: true,
                        value_area: 800
                    },
                    value: 80
                },
                opacity: {
                    value: 0.5
                },
                shape: {
                    type: 'circle'
                },
                size: {
                    random: true,
                    value: 5
                }
            },
            detectRetina: true
      }"
    />
  </div>
</template>

<style lang="scss">
  .tsparticles-canvas-el {
    position: absolute;
    top: 0;
  }
</style>

<script>
  export default {
    data () {
      return {
        year: moment().format('YYYY')
      }
    },
    
  }
</script>