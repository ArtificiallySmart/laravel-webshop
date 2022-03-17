<template>
  <div class="modal fade" id="edit-staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            Edit user information
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form @submit="formSubmit">

            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="first_name" id="floatingFirstname"
                placeholder="name@example.com" :value="user.first_name">
              <label for="floatingFirstname">First name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="last_name" id="floatingFirstname"
                placeholder="name@example.com" :value="user.last_name">
              <label for="floatingLastname">Last name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com"
                :value="user.email">
              <label for="floatingEmail">e-mail</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingStreet" placeholder="Street" :value="address.street">
              <label for="floatingStreet">Street</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingHousenumber" placeholder="House number"
                :value="address.house_number">
              <label for="floatingHousenumber">House number</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingZipcode" placeholder="Zipcode"
                :value="address.zipcode">
              <label for="floatingZipcode">Zipcode</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingCity" placeholder="City" :value="address.city">
              <label for="floatingCity">City</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingCountry" placeholder="Country"
                :value="address.country">
              <label for="floatingCountry">Country</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingPhonenumber" placeholder="Phone number"
                :value="phoneNumber.phone_number">
              <label for="floatingPhonenumber">Phone number</label>
            </div>

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