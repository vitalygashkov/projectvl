<template>
  <main>
    <VueFlux
      :options="vfOptions"
      :images="vfImages"
      :transitions="vfTransitions"
      :captions="vfCaptions"
      style="width:100%;height: 100%"
      ref="slider">

      <template v-slot:caption>
        <FluxCaption v-slot="captionProps">
          <Banner :caption="captionProps"/>
        </FluxCaption>
      </template>

    </VueFlux>

  </main>
</template>

<script>
import Banner from "./Banner";
import {
  VueFlux,
  FluxCaption
} from 'vue-flux';

export default {
  name: "SectionMain",
  components: {
    Banner,
    VueFlux,
    FluxCaption
  },
  data: () => ({
    vfOptions: {
      autoplay: true,
      allowFullscreen: true,
      height: 1000,
      delay: 7000
    },
    vfImages: [
      'https://imgpile.com/images/IlXux4.jpg',
      'https://imgpile.com/images/IlXInM.jpg',
      'https://imgpile.com/images/IlX7o2.jpg'
    ],
    vfTransitions: [ 'wave' ],
    vfCaptions: [
      '1',
      '2',
      '3'
    ]
  })
}
</script>

<style scoped>
main {
  height: 100vh;
}
.complements {
  position: relative;
}
.vue-flux {
  top: 0;
  z-index: -1;
}
</style>
