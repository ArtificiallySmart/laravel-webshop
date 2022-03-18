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
          <form @submit="formSubmit" id="addUserInfo">
            <div v-if="!address">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingStreet"
                  placeholder="Street"
                  v-model="userInfo.street"
                  required
                />
                <label for="floatingStreet">Street</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingHousenumber"
                  placeholder="House number"
                  v-model="userInfo.houseNumber"
                  required
                />
                <label for="floatingHousenumber">House number</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingZipcode"
                  placeholder="Zipcode"
                  v-model="userInfo.zipcode"
                  required
                />
                <label for="floatingZipcode">Zipcode</label>
              </div>

              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingCity"
                  placeholder="City"
                  v-model="userInfo.city"
                  required
                />
                <label for="floatingCity">City</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingCountry"
                  placeholder="Country"
                  v-model="userInfo.country"
                  required
                />
                <label for="floatingCountry">Country</label>
              </div>
            </div>
            <div v-if="!phoneNumber">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingPhonenumber"
                  placeholder="Phone number"
                  v-model="userInfo.phoneNumber"
                  required
                />
                <label for="floatingPhonenumber">Phone number</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <input class="btn btn-success" type="submit" form="addUserInfo" />
          <button class="btn btn-danger" type="button" data-bs-dismiss="modal">
            Close
          </button>
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
          window.location.replace("/profile");
          //console.log(response.data);
        })
        .catch(function (error) {
          console.error(error);
        });
    },
  },
};
</script>
