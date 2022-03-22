<template>
  <div
    class="offcanvas offcanvas-bottom cart-list"
    tabindex="-1"
    id="offcanvasRight-cart"
    aria-labelledby="offcanvasRightLabel"
  >
    <div class="offcanvas-header">
      <h3 id="offcanvasRightLabel">Shopping cart</h3>
      <button
        type="button"
        class="btn-close text-reset"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      ></button>
    </div>
    <div
      class="offcanvas-body d-flex flex-column justify-content-between bg-none"
    >
      <div style="overflow: auto">
        <div v-for="item in cart" :key="item.id" class="card mb-3">
          <div class="row g-0">
            <!-- Column with thumbnail -->
            <div class="col-md-4">
              <img :src="`/images/${item.image}`" class="img-fluid" alt="..." />
            </div>
            <!-- /Column with thumbnail -->

            <div class="col-md-8">
              <div
                class="
                  card-body
                  d-flex
                  flex-column
                  h-100
                  justify-content-between
                "
              >
                <!-- Item name that is also a link to product page -->
                <div class="d-flex justify-content-between">
                  <a :href="'/product/' + item.id">
                    <h5 class="card-title">{{ item.name }}</h5>
                  </a>
                </div>
                <!-- /Item name that is also a link to product page -->

                <div class="d-flex justify-content-between">
                  <!-- Minus button, item quantity, plus button -->
                  <div class="row text-center">
                    <div class="col">
                      <button
                        class="btn btn-success"
                        @click="takeFromCart(item.id)"
                      >
                        -
                      </button>

                      {{ item.quantity }}

                      <button
                        class="btn btn-success"
                        @click="addToCart(item.id)"
                      >
                        +
                      </button>
                    </div>
                  </div>
                  <!-- /Minus button, item quantity, plus button -->
                  <!-- total price of this item -->
                  <p class="card-text">
                    {{ formatMoney(item.price * item.quantity) }}
                  </p>
                  <!-- /total price of this item -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex align-items-center justify-content-between">
        <a class="btn btn-outline-secondary" href="/checkout">To checkout</a>
        <div>Total price: {{ formatMoney(totalPrice) }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [],
  data: function () {
    return {
      cart: [],
    };
  },
  computed: {
    totalPrice() {
      let total = 0;
      this.cart.forEach((item) => {
        total += item.price * item.quantity;
      });
      return this.formatMoney(total);
    },
  },
  created() {},
  mounted() {},
  methods: {
    formatMoney(number) {
      if (!number) return;
      return number.toLocaleString("nl-NL", {
        style: "currency",
        currency: "EUR",
      });
    },
    getCart() {
      let self = this;
      axios({
        method: "get",
        url: "/shoppingCart",
        headers: {
          "X-Requested-With": "XMLHttpRequest",
        },
      })
        .then(function (response) {
          if (response.data.success) {
            self.cart = Object.values(response.data.cart);
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
      this.getCart();
    },
    takeFromCart(id, amount = 1) {
      let self = this;
      axios
        .post("/shoppingCart/remove", {
          id: id,
          amount: amount,
        })
        .then(function (response) {
          //console.log(response.data);
        })
        .catch(function (error) {
          console.error(error);
        })
        .then(function () {
          self.getCart();
        });
    },
  },
};
</script>
