<template>
  <div
    class="modal fade"
    id="add-staticBackdrop"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            Add user information
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <form @submit="formSubmit">
            <div v-if="!address">
              <label for="street">street</label>
              <input
                type="text"
                id="street"
                name="street"
                v-model="userInfo.street"
              /><br />
              <label for="housenumber">house number</label>
              <input
                type="text"
                id="housenumber"
                name="house_number"
                v-model="userInfo.houseNumber"
              /><br />
              <label for="zipcode">zipcode</label>
              <input
                type="text"
                id="zipcode"
                name="zipcode"
                v-model="userInfo.zipcode"
              /><br />
              <label for="city">city</label>
              <input
                type="text"
                id="city"
                name="city"
                v-model="userInfo.city"
              /><br />
              <label for="country">country</label>
              <input
                type="text"
                id="country"
                name="country"
                v-model="userInfo.country"
              /><br />
            </div>
            <div v-if="!phoneNumber">
              <label for="phonenumber">phone number</label>
              <input
                type="text"
                id="phonenumber"
                name="phone_number"
                v-model="userInfo.phoneNumber"
              />
            </div>
            <button data-bs-dismiss="modal">save</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    //console.log("Component mounted.");
  },
  props: ["user", "address", "phoneNumber"],
  data: function () {
    return {
      userInfo: {},
    };
  },
  methods: {
    formSubmit(e) {
      e.preventDefault();
      console.log("inside post axios method");
      let self = this;
      axios
        .post("/profile", {
          street: this.userInfo.street,
          house_number: this.userInfo.houseNumber,
          zipcode: this.userInfo.zipcode,
          city: this.userInfo.city,
          country: this.userInfo.country,
          phone_number: this.userInfo.phoneNumber,
        })
        .then(function (response) {
          //console.log(response.data);
        })
        .catch(function (error) {
          console.error(error);
        });
      this.getUser();
    },
    getUser() {
      this.$parent.getUser();
    },
  },
};
</script>
