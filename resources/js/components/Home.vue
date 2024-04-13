<template>
  <div class="mx-auto flex flex-col items-start justify-center h-[calc(100vh-150px)] hero z-20 relative">
    <div class="grid grid-cols-12 gap-8">
      <div class="relative col-span-4 md:order-1 sm:col-span-12 md:col-span-6">
        <div class="w-full pl-5 scale-100 md:pl-0 md:scale-[0.80] c-perspective xxs:w-10/12">
          <div class="block c-image-wrapper group">
            <div class="overlay bg-dark-1 opacity-20 z-[15] fixed top-0 left-0 w-full h-full pointer-events-none group-hover:opacity-0 transition-all ease-in-out duration-500"></div>
            <img
              class="block object-cover w-full h-full overflow-hidden"
              src="/images/AivarasKaraliunas.jpg"
              alt="Aivaras Karaliūnas"
            />
            <div class="transition-all duration-500 ease-in-out frame frame-1 group-hover:scale-105"></div>
            <div class="transition-all duration-500 ease-in-out frame frame-2 group-hover:scale-105"></div>
          </div>
        </div>
      </div>
      <div class="flex items-center col-span-8 md:order-2 md:col-span-6 sm:col-span-12">
        <div class="content text-white-1">

          <span class="block mb-4 text-lg font-bold font-primary text-accent-1 md:text-sm">Hi, my name is</span>
          <h1 class="mb-4 text-6xl font-bold text-left text-white font-heading md:text-3xl">
            Aivaras Karaliūnas
          </h1>
          <h2 class="text-6xl font-bold text-accent-2 font-heading md:text-3xl">I’m a fullstack web developer</h2>

          <p class="mt-4 text-lg text-accent-2 md:text-base">
            specializing in building e-commerce solutions.
          </p>

        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {};
</script>

<style lang="postcss">
.c-perspective {
  -webkit-perspective: 38rem;
  perspective: 38rem;
}

.c-image-wrapper {
  transform: translate(0%, 0px) rotateY(7deg) scale(1.00001, 1);
}

.frame.frame-1 {
  opacity: 0.45;
  -webkit-transform: translate(-0.75rem, 0.75rem);
  -ms-transform: translate(-0.75rem, 0.75rem);
  transform: translate(-0.75rem, 0.75rem);
}

.frame.frame-2 {
  opacity: 0.25;
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
  @apply border border-white;
}

.content {
  p {
    @apply text-grayish-1 mb-4;
  }
}
</style>
