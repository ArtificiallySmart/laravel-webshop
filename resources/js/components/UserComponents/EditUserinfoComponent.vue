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
          <form id="editUserInfo" @submit="formSubmit">
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control"
                name="first_name"
                id="floatingFirstname"
                placeholder="name@example.com"
                :value="user.first_name"
                required
              />
              <label for="floatingFirstname">First name</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="text"
                class="form-control"
                name="last_name"
                id="floatingLastname"
                placeholder="name@example.com"
                :value="user.last_name"
                required
              />
              <label for="floatingLastname">Last name</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="email"
                class="form-control"
                name="email"
                id="floatingEmail"
                placeholder="name@example.com"
                :value="user.email"
                required
              />
              <label for="floatingEmail">e-mail</label>
            </div>
            <div v-if="address">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingStreet"
                  placeholder="Street"
                  :value="address.street"
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
                  :value="address.house_number"
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
                  :value="address.zipcode"
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
                  :value="address.city"
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
                  :value="address.country"
                  required
                />
                <label for="floatingCountry">Country</label>
              </div>
            </div>
            <div v-if="phoneNumber">
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="floatingPhonenumber"
                  placeholder="Phone number"
                  :value="phoneNumber.phone_number"
                  required
                />
                <label for="floatingPhonenumber">Phone number</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" form="editUserInfo" />
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
          //standard user info is always present, always send this
          first_name: document.getElementById("floatingFirstname").value,
          last_name: document.getElementById("floatingLastname").value,
          email: document.getElementById("floatingEmail").value,

          //If the user has registered an address, send this info
          ...(self.address && {
            street: document.getElementById("floatingStreet").value,
            house_number: document.getElementById("floatingHousenumber").value,
            zipcode: document.getElementById("floatingZipcode").value,
            city: document.getElementById("floatingCity").value,
            country: document.getElementById("floatingCountry").value,
          }),

          //if the user has registered a phonenumber, send this info
          ...(self.phoneNumber && {
            phone_number: document.getElementById("floatingPhonenumber").value,
          }),
        })
        .then(function (response) {
          window.location.replace("/profile");
        })
        .catch(function (error) {
          let emailInput = document.getElementById("floatingEmail");
          emailInput.classList.toggle("is-invalid");
          console.log(`FATAL ERROR: ${error}`);
        });
    },
  },
};
</script>