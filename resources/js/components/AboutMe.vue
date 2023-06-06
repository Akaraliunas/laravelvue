<template>
  <div class="mx-auto overflow-visible md:overflow-hidden">
    <div class="grid grid-cols-12 gap-8">
      <h1
        class="col-span-10 col-start-2 mb-8 text-3xl font-normal text-left font-heading"
      >
        About me
      </h1>
    </div>
    <div class="grid grid-cols-12 gap-8">
      <div
        class="relative col-span-4 col-start-2 md:order-1 sm:col-span-12 md:col-span-6 md:col-start-1"
      >
        <div
          class="w-full pl-5 scale-100 md:pl-0 md:scale-[0.80] c-perspective xxs:w-10/12"
        >
          <div class="block c-image-wrapper group">
            <div
              class="overlay bg-dark-1 opacity-20 z-[15] fixed top-0 left-0 w-full h-full pointer-events-none group-hover:opacity-0 transition-all ease-in-out duration-500"
            ></div>
            <img
              class="block object-cover w-full h-full overflow-hidden"
              src="/images/Aivaras.png"
              alt="Aivaras Karaliūnas"
            />
            <div
              class="transition-all duration-500 ease-in-out frame frame-1 group-hover:scale-105"
            ></div>
            <div
              class="transition-all duration-500 ease-in-out frame frame-2 group-hover:scale-105"
            ></div>
          </div>
        </div>
      </div>
      <div class="flex items-center col-span-6 md:order-2 md:col-span-6 sm:col-span-12">
        <div class="content text-white-1">
          <p>
            Hello! My name is Aivaras Karaliūnas. <br>
            I have about 3-4 years of experience in website and e-shop development. <br>
            I am highly motivated and driven by the end result, always
            striving to exceed expectations. Also I am constantly seeking to
            expand my knowledge and stay up-to-date with the latest trends in
            the field of IT.
          </p>
          <p>
            As someone who values flexibility, I am interested in remote or
            partially remote work arrangements, preferably a 3+2 schedule.
          </p>

          <div class="font-semibold text-accent-2">
            Technologies and tools I work with:
          </div>
          <p>
            PHP, Javascript, HTML5, CSS3.<br />
            Magento 1/2, Prestashop, Wordpress, Woocommerce.
          </p>

          <div class="font-semibold text-accent-2">
            Currently learning new technologies:
          </div>
          <p>Laravel + Vue.js</p>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-12 gap-8 pt-20 md:pt-6" v-if="experiences.length">
      <div class="col-span-8 col-start-3 md:col-start-1 md:col-span-12">
        <h3 class="col-span-10 col-start-2 mb-8">My experience:</h3>
        <div class="flex flex-col">

            <div class="flex flex-col" v-for="experience in experiences" :key="experience.id">
                <div class="border-l-2 border-accent-1">
                  <div class="md:flex flex-start">
                    <div
                      class="bg-accent-1 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5"
                    >
                      <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        class="w-3 h-3 text-white"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512"
                      >
                        <path
                          fill="currentColor"
                          d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"
                        ></path>
                      </svg>
                    </div>
                    <div class="block px-6 mb-10 ml-6 rounded-lg">
                      <div class="flex justify-between mb-4 md:flex-col">
                        <div
                          class="flex gap-1 font-bold text-accent-2 md:flex-col md:gap-0"
                        >
                            {{ experience.position }}
                          <div class="flex gap-1">
                            <div>@</div>
                            <div class="text-accent-1">
                              <a :href="experience.company_url" target="_blank">{{ experience.company }}</a>
                            </div>
                          </div>
                        </div>
                        <a
                          href="#!"
                          class="text-sm font-medium transition duration-300 ease-in-out text-accent-1 hover:text-accent-1"
                          >{{ experience.dates }}</a
                        >
                      </div>
                      <p class="mb-6 text-white">
                        {{ experience.description }}
                      </p>
                    </div>
                  </div>
                </div>
            </div>

        </div>
      </div>
    </div>

    <div class="grid grid-cols-12 gap-8 pt-10 md:pt-6">
      <div class="col-span-8 col-start-3 md:col-start-1 md:col-span-12">
        <h3 class="col-span-10 col-start-2 mb-8">Contact me:</h3>
        <div
          class="flex items-center justify-between md:flex-col md:justify-start md:items-start"
        >
          <div class="referal md:mb-5">
            <p class="mb-2 text-xs font-semibold">
              Get $200 in credit over 60 days for your website:
            </p>
            <a
              href="https://www.digitalocean.com/?refcode=f4bbf68abec4&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"
              ><img
                width="150"
                src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg"
                alt="DigitalOcean Referral Badge"
            /></a>
          </div>
          <div class="flex socials">
            <a href="https://github.com/Akaraliunas/" target="_blank">
              <svg
                height="32"
                aria-hidden="true"
                viewBox="0 0 16 16"
                version="1.1"
                width="32"
                data-view-component="true"
                class="octicon octicon-mark-github v-align-middle"
              >
                <path
                  fill="white"
                  fill-rule="evenodd"
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"
                ></path>
              </svg>
            </a>
            <a
              href="https://www.linkedin.com/in/aivaras-karali%C5%ABnas-ab019ab6/"
              target="_blank"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                data-supported-dps="24x24"
                fill="currentColor"
                class="mercado-match"
                width="24"
                height="24"
                focusable="false"
              >
                <path
                  d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"
                ></path>
              </svg>
            </a>
            <a
              class="cursor-pointer js-email hover:text-accent-1"
              href="javascript:void(0)"
              v-on:click="email('aivaras', 'karaliunas.dev')"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                <g id="Layer_1">
                  <g stroke="null">
                    <g stroke="null">
                      <g stroke="null">
                        <path
                          fill="white"
                          stroke="null"
                          d="m30.79596,23.63638c0,0.64817 -0.18088,1.2481 -0.47331,1.77568l-9.33059,-10.43699l9.22809,-8.07345c0.35875,0.56978 0.57581,1.23905 0.57581,1.96259l0,14.77217l0,0zm-14.77217,-6.76505l12.83973,-11.23288c-0.52758,-0.28941 -1.12148,-0.46427 -1.7606,-0.46427l-22.15826,0c-0.64214,0 -1.23302,0.17787 -1.75759,0.46427l12.83672,11.23288zm3.57848,-0.68133l-2.97252,2.60171c-0.17485,0.15074 -0.3889,0.2261 -0.60898,0.2261c-0.21706,0 -0.43412,-0.07537 -0.60898,-0.2261l-2.96951,-2.60171l-9.44515,10.57266c0.56677,0.35574 1.23001,0.56677 1.94752,0.56677l22.15826,0c0.71751,0 1.38075,-0.21405 1.94752,-0.56677l-9.44816,-10.57266zm-17.77485,-9.28838c-0.35875,0.56978 -0.57581,1.23905 -0.57581,1.96259l0,14.77217c0,0.64817 0.18088,1.2481 0.47331,1.77568l9.32757,-10.44001l-9.22507,-8.07043z"
                        />
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  props: ["componentData"],
  data() {
    return {
        experiences: {},
    };
  },
  methods: {
    email: function (name, domain) {
      window.location.href = "mailto:" + name + "@" + domain;
    },
    getExperiences() {
      axios.get("/api/getExperiences").then((response) => {
        this.experiences = response.data;
      });
    },
  },
  created() {
    this.getExperiences();
  },
};
</script>

<style lang="postcss">
.socials {
  a {
    svg {
      @apply w-8 h-8 mr-2;
    }
  }
}

.c-perspective {
  -webkit-perspective: 38rem;
  perspective: 38rem;
}

.c-image-wrapper {
  transform: translate(0%, 0px) rotateY(7deg) scale(1.00001, 1);
}

.frame.frame-1 {
  opacity: 0.25;
  -webkit-transform: translate(-0.75rem, 0.75rem);
  -ms-transform: translate(-0.75rem, 0.75rem);
  transform: translate(-0.75rem, 0.75rem);
}

.frame.frame-2 {
  opacity: 0.1;
  -webkit-transform: translate(-1.5rem, 1.5rem);
  -ms-transform: translate(-1.5rem, 1.5rem);
  transform: translate(-1.5rem, 1.5rem);
}

.frame {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: -2;
  @apply border border-accent-2;
}

.content {
  p {
    @apply text-grayish-1 mb-4;
  }
}
</style>
