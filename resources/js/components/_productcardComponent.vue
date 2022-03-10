 <template>
  <div class="col gallery_product" :category="product.category">
    <div class="card" style="width: 18rem">
      <div class="img-hover-zoom">
        <a :href="'/productpage/' + product.id"
          ><img class="card-img-top" :src="`/images/` + product.thumbnail"
        /></a>
      </div>

      <div class="card-body">
        <h5 class="card-title">{{ product.name }}</h5>
        <p class="card-text">{{ product.price }}</p>
      </div>
    </div>
  </div>
</template>

p



<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  props: ["product"],
};
</script> 
