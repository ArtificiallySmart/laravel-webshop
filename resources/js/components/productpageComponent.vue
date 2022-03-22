 @extends('layouts.app')
 @section('content')
<template>
  <div class="container" id="product-section">
    <div class="row">
      <div class="col-md-6">
        <div class="pr-img-hover-zoom">
          <img
            :src="`/images/${product.thumbnail}`"
            class="image-responsive"
            :alt="product.name"
          />
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <h1 span class="label label-primary">{{ product.name }}</h1>
            <h2 span class="p-price">€{{ product.price }}</h2>

            <!-- <p v-if="inventory > 10">In Stock</p>
            <p v-else-if="inventory <= 10 && inventory > 0">Almost sold out</p>
            <p v-else>Out Of Stock</p> -->
            <!-- <div class="product-info">
              <h1>{{ product }}</h1>
              <p>In Stock</p>
              <p>Out Of Stock</p>
            </div> -->
            <!-- <stock-component><stock-component> -->

            <p class="description">
              {{ product.description }}
            </p>
            <details-component></details-component>

            <span>Available colors</span>
            <div class="colors">
              <span></span> <span></span> <span></span> <span></span>
            </div>
          </div>
        </div>

        <p></p>
        <div class="text-right">
          <button
            type="button"
            class="btn btn-primary"
            @click="addToCart(product.id)"
          >
            Add To Cart
          </button>
        </div>
      </div>

      <productreview-component></productreview-component>
    </div>
  </div>
</template>

<script>
import DetailsComponent from "./DetailsComponent.vue";

import ProductcardComponent from "./ProductcardComponent.vue";
import ProductreviewComponent from "./ProductreviewComponent.vue";
import StockComponent from "./StockComponent.vue";
export default {
  components: {
    ProductcardComponent,
    DetailsComponent,
    ProductreviewComponent,
    StockComponent,
  },
  data: function () {
    return {
      product: "",
    };
  },
  mounted() {
    console.log("Productpage Component mounted.");
    this.getProduct();
  },
  methods: {
    getProduct() {
      let self = this;
      console.log("inside axios page");
      axios({
        method: "get",
        url: `${window.location.href}/getproduct`,
        headers: {
          "X-Requested-With": "XMLHttpRequest",
        },
      })
        .then(function (response) {
          if (response.data.success) {
            self.product = response.data.product;
          }
        })
        .catch(function (error) {});
    },
    addToCart(id) {
      axios
        .post("/shoppingCart/add", {
          id: id,
        })
        .then(function (response) {
          //console.log(response.data);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
  },
};
</script>









