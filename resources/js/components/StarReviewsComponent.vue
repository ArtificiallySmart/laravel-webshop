<template>
  <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1">1 star</label>
  </fieldset>
</template>

<script>
export default {
  mounted() {
    console.log("StarReviews Component mounted.");
  },
};
</script>
