<template>
  <div class="review p-5">
    <div class="d-flex flex-column pl-5">
      <h1>Reviews</h1>
      <p><star-reviews-component></star-reviews-component></p>
      <p class="grey-text">30 min ago</p>
      <p>Incredibly looking products.The designs are awesome</p>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">User</label>
      <input
        type="user"
        class="form-control"
        id="exampleFormControlInput1"
        placeholder="name@example.com"
      />
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Review</label>
      <textarea
        class="form-control"
        id="exampleFormControlTextarea1"
        rows="5"
      ></textarea>
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
