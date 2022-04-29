<template>
  <div>
    <SectionMain />
    <SectionAdvantages />
    <SectionSteps />
    <SectionDismantling />
    <SectionOrder />
  </div>
</template>

<script>
import SectionMain from "../components/SectionMain";
import SectionAdvantages from "../components/SectionAdvantages";
import SectionSteps from "../components/SectionSteps";
import SectionDismantling from "../components/SectionDismantling";
import SectionOrder from "../components/SectionOrder";

export default {
  name: "Home.vue",
  components: {
    SectionMain,
    SectionAdvantages,
    SectionSteps,
    SectionDismantling,
    SectionOrder
  }
}
</script>

<style scoped>

</style>
