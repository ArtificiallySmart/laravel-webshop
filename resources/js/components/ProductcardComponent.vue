 <template>
  <div class="col gallery_product" :category="product.category.name">
    <div class="card" style="width: 18rem">
      <div class="img-hover-zoom">
        <a :href="'/product/' + product.id"
          ><img class="card-img-top" :src="`/images/` + product.thumbnail"
        /></a>
      </div>

      <div class="card-body">
        <h5 class="card-title">{{ product.name }}</h5>
        <p class="card-text">€{{ product.price }}</p>
      </div>
    </div>
  </div>
</template>





<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  props: ["product"],
  // data: function () {
  //   return {
  //     products: [],
  //   };
  // },
  methods: {
    // getProducts() {
    //   let self = this;
    //   console.log("inside axios");
    //   axios({
    //     method: "get",
    //     url: "/getproducts",
    //     headers: {
    //       "X-Requested-With": "XMLHttpRequest",
    //     },
    //   })
    //     .then(function (response) {
    //       if (response.data.success) {
    //         self.products = response.data.products;
    //       }
    //     })
    //     .catch(function (error) {});
    // },
  },
};
</script> 
