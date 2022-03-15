<template>
  <div class="review p-5">
    <div class="d-flex flex-column pl-4">
      <h1>Reviews</h1>

      <star-reviews-component></star-reviews-component>

      <p class="grey-text">30 min ago</p>
      <p>Incredibly beautiful t-shirts.The designs are awesome</p>
    </div>
  </div>
</template>
<script>
import StarReviewsComponent from "./StarReviewsComponent.vue";
export default {
  components: { StarReviewsComponent },
  mounted() {
    console.log("ProductReviewComponent mounted.");
  },
};
</script>
