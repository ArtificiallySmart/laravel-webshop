<template>
  <div class="product-info">
    <!-- <h1>{{ product }}</h1> -->
    <p v-if="inStock">In Stock</p>
    <p v-else>Out Of Stock</p>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("StockComponent mounted.");
  },
};
</script>
