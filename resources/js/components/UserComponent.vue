<template>
  <div class="container">
    <div>
      <!-- User information in a list, v-if at the address and phone number. -->
      <ul class="list-group">
        <li class="list-group-item">
          {{ user.first_name }} {{ user.last_name }}
        </li>
        <li class="list-group-item">{{ user.email }}</li>
        <div v-if="user.address">
          <li class="list-group-item">
            {{ user.address.street }} {{ user.address.house_number }}
          </li>
          <li class="list-group-item">
            {{ user.address.zipcode }} {{ user.address.city }}
          </li>
          <li class="list-group-item">{{ user.address.country }}</li>
        </div>
        <div v-if="user.phone_number">
          <li class="list-group-item">{{ user.phone_number.phone_number }}</li>
        </div>
      </ul>
      <!--End User information in a list, v-if at the address and phone number. -->
    </div>
    <div>
      <button>Edit</button>
      <!-- If user information is missing, show this button -->
      <button
        v-if="!user.address || !user.phone_number"
        data-bs-toggle="modal"
        data-bs-target="#staticBackdrop"
      >
        Add information
      </button>
      <!-- End If user information is missing, show this button -->
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
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
            <form action="" method="post">
              <div v-if="!user.address">
                <label for="street">street</label>
                <input type="text" id="street" name="street" /><br />
                <label for="housenumber">house number</label>
                <input type="text" id="housenumber" name="house_number" /><br />
                <label for="zipcode">zipcode</label>
                <input type="text" id="zipcode" name="zipcode" /><br />
                <label for="city">city</label>
                <input type="text" id="city" name="city" /><br />
                <label for="country">country</label>
                <input type="text" id="country" name="country" /><br />
              </div>
              <div v-if="!user.phone_number">
                <label for="phonenumber">phone number</label>
                <input type="text" id="phonenumber" name="phone_number" />
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
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      user: {
        address: "",
        phone_number: "",
      },
      // userAddress: "",
      // userPhonenumber: "",
    };
  },
  created() {
    console.log("UserComponent mounted.");
    this.getUser();
  },
  methods: {
    getUser() {
      let self = this;
      console.log("inside axios");
      axios({
        method: "get",
        url: "profile/getprofile",
        headers: {
          "X-Requested-With": "XMLHttpRequest",
        },
      })
        .then(function (response) {
          if (response.data.success) {
            self.user = response.data.user;
          }
        })
        .catch(function (error) {});
    },
  },
};
</script>