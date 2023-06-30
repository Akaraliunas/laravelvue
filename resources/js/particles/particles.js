export default {
    fpsLimit: 160,
    background: {
        color: 'transparent',
    },
    particles: {
        color: {
            value: '#3096CD'
        },
        move: {
            direction: 'none',
            enable: true,
            outModes: 'out',
            random: false,
            speed: 2,
            straight: false,
        },
        number: {
            density: {
                enable: true,
                area: 800
            },
            value: 80
        },
        opacity: {
            value: 0.5,
        },
        shape: {
            type: 'circle',
        },
        size: {
            value: {
                min: 1,
                max: 5
            },
        },
    },
    interactivity: {
        detect_on: 'canvas',
        events: {
          onhover: {
            enable: true,
            mode: 'repulse'
          },
          onclick: {
            enable: true,
            mode: 'push'
          },
          resize: true
        },
        modes: {
          grab: {
            distance: 400,
            line_linked: {
              opacity: 1
            }
          },
          bubble: {
            distance: 400,
            size: 40,
            duration: 2,
            opacity: 8,
            speed: 3
          },
          repulse: {
            distance: 100,
            duration: 0.8
          },
          push: {
            particles_nb: 10
          },
          remove: {
            particles_nb: 2
          }
        }
    },
}
