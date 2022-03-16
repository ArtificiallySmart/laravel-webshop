<template>
  <div
    class="modal fade"
    id="edit-staticBackdrop"
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
            Edit user information
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
            <label for="street">First name</label>
            <input
              type="text"
              id="first_name"
              name="first_name"
              v-model="user.first_name"
            /><br />
            <label for="last_name">Last name</label>
            <input
              type="text"
              id="last_name"
              name="last_name"
              v-model="user.last_name"
            /><br />
            <!-- Apply bootstrap for custom error message after entering duplicate mail -->
            <label for="email">e-mail</label>
            <input
              type="email"
              id="email"
              name="email"
              v-model="user.email"
            /><br />
            <!-- /Apply bootstrap for custom error message after entering duplicate mail -->
            <label for="street">street</label>
            <input
              type="text"
              id="street"
              name="street"
              v-model="address.street"
            /><br />
            <label for="housenumber">house number</label>
            <input
              type="text"
              id="housenumber"
              name="house_number"
              v-model="address.house_number"
            /><br />
            <label for="zipcode">zipcode</label>
            <input
              type="text"
              id="zipcode"
              name="zipcode"
              v-model="address.zipcode"
            /><br />
            <label for="city">city</label>
            <input
              type="text"
              id="city"
              name="city"
              v-model="address.city"
            /><br />
            <label for="country">country</label>
            <input
              type="text"
              id="country"
              name="country"
              v-model="address.country"
            /><br />

            <label for="phonenumber">phone number</label>
            <input
              type="text"
              id="phonenumber"
              name="phone_number"
              v-model="phoneNumber.phone_number"
            />

            <button>save</button>
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
  props: ["user", "address", "phoneNumber"],
  data: function () {
    return {
      userInfo: {},
    };
  },
  methods: {
    formSubmit(e) {
      e.preventDefault();
      //console.log("inside post axios method");
      let self = this;
      axios
        .put("/profile", {
          first_name: this.user.first_name,
          last_name: this.user.last_name,
          email: this.user.email,
          street: this.address.street,
          house_number: this.address.house_number,
          zipcode: this.address.zipcode,
          city: this.address.city,
          country: this.address.country,
          phone_number: this.phoneNumber.phone_number,
        })
        .then(function (response) {
          window.location.replace("/profile");
          //console.log(response.data);
        })
        .catch(function (error) {
          let emailInput = document.getElementById("email");
          emailInput.classList.toggle("is-invalid");
          console.log(`FATAL ERROR: ${error}`);
        });
    },
  },
};
</script>
