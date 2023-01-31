<template>
    <div class="mx-auto overflow-visible md:overflow-hidden">
        <h1 class="mb-8 text-3xl font-normal text-left font-heading">
            About me
        </h1>
        <div class="grid grid-cols-12 gap-8 ">
            <div class="relative col-span-4 md:order-1 sm:col-span-12 md:col-span-6">
                <div class="w-full pl-5 scale-100 md:pl-0 md:scale-[0.80] c-perspective xxs:w-10/12">
                    <div class="block c-image-wrapper">
                        <div class="overlay bg-dark-1 opacity-20 z-[15] fixed top-0 left-0 w-full h-full pointer-events-none"></div>
                        <img class="block object-cover w-full h-full overflow-hidden" src="/images/Aivaras.png" alt="Aivaras Karaliūnas">
                        <div class="frame frame-1"></div>
                        <div class="frame frame-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-span-8 md:order-2 md:col-span-6 sm:col-span-12">
                <p class="font-semibold text-accent-2">Technologies and tools I work with:</p>
                <p>PHP, Javascript, HTML5, CSS3.</p>
                <p>Magento 1/2, Prestashop, Wordpress, Woocommerce.</p>

                <br>
                <p class="font-semibold text-accent-2">Currently learning new technologies:</p>
                <p>Laravel + vuejs</p>

                <br>
                <p class="mb-2 font-semibold">Socials:</p>
                <div class="flex socials">
                    <a href="https://github.com/Akaraliunas/" target="_blank">
                        <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32" data-view-component="true" class="octicon octicon-mark-github v-align-middle">
                            <path fill="white" fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/in/aivaras-karali%C5%ABnas-ab019ab6/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                            <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                        </svg>
                    </a>
                </div>

                <br>
                <div class="flex">
                    <p class="mr-2 font-semibold text-accent-2">Contact me:</p>
                    <a class='cursor-pointer js-email hover:text-accent-1' href='javascript:void(0)' v-on:click="email('aivaras', 'karaliunas.dev')">Write me an email</a>
                </div>

                <div class="mt-6 referal">
                    <p class="mb-2 font-semibold">Get $200 in credit over 60 days for your website:</p>
                    <a href="https://www.digitalocean.com/?refcode=f4bbf68abec4&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img width="150" src="https://web-platforms.sfo2.digitaloceanspaces.com/WWW/Badge%202.svg" alt="DigitalOcean Referral Badge" /></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['componentData'],
    methods: {
        email: function (name, domain) {
             window.location.href = 'mailto:' + name + '@' + domain;
        }
    }
}
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
        opacity: .25;
        -webkit-transform: translate(-0.75rem,0.75rem);
        -ms-transform: translate(-0.75rem,0.75rem);
        transform: translate(-0.75rem,0.75rem);
    }

    .frame.frame-2 {
        opacity: .1;
        -webkit-transform: translate(-1.5rem,1.5rem);
        -ms-transform: translate(-1.5rem,1.5rem);
        transform: translate(-1.5rem,1.5rem);
    }


    .frame {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        z-index: -2;
        @apply  border border-accent-2;
    }


</style>
