<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div id="myBtnContainer">
            <button class="unfiltered" id="filter-all">All Products</button>

            <button class="filter-button" category="Male">Male</button>
            <button class="filter-button" category="Female">Female</button>
            <button class="filter-button" category="Kids">Kids</button>
            <button class="filter-button" category="Accessoires">
              Accessoires
            </button>
          </div>
        </div>

        <searchbar-component></searchbar-component>

        <a href="/login">
          <button class="login-button">Join / Login</button>
        </a>
        <button
          class="shoppingButton shopping-cart"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasRight-cart"
          @click="$refs.shoppingCart.getCart()"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            fill="currentColor"
            class="bi bi-cart"
            viewBox="0 0 16 16"
          >
            <path
              d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
            />
          </svg>
        </button>

        <!-- <div id="cart-trigger">
          <button id="placeorder"></button>
        </div> -->
      </div>
    </nav>
    <CartComponent ref="shoppingCart"></CartComponent>-->
  </div>
</template>

<script>
import SearchbarComponent from "./SearchbarComponent.vue";
import CartComponent from "./test/CartComponent.vue";
export default {
  components: { SearchbarComponent, CartComponent },
  mounted() {
    console.log("Navbar Component mounted.");
  },
  methods: {},
};
</script>







