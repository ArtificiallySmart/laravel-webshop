<template>
  <div class="container">
    <div class="row" v-for="product in products" :key="product.id">
      <div class="col-4">{{ product.name }}</div>
      <div class="col-4">{{ product.price }}</div>
      <div class="col-4">
        <button class="btn btn-warning" @click="addToCart(product.id)">
          Add to Cart
        </button>
      </div>
    </div>
    <h2>Cart:</h2>
    <div class="row" v-for="item in cart" :key="item.name">
      <div class="col">
        <img :src="`/images/${item.image}`" class="img-fluid" />
      </div>
      <div class="col">{{ item.name }}</div>
      <div class="col">
        <button class="btn btn-success" @click="takeFromCart(item.id)">
          -
        </button>
        {{ item.quantity }}
        <button class="btn btn-success" @click="addToCart(item.id)">+</button>
      </div>
      <div class="col">{{ item.price }}</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["products"],
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
  mounted() {
    this.getCart();
  },
  methods: {
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
    formatMoney(number) {
      return number.toLocaleString("nl-NL", {
        style: "currency",
        currency: "EUR",
      });
    },
  },
};
</script>
