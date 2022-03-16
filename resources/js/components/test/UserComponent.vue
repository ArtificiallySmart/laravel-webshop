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
            {{ address.street }} {{ address.house_number }}
          </li>
          <li class="list-group-item">
            {{ address.zipcode }} {{ address.city }}
          </li>
          <li class="list-group-item">{{ address.country }}</li>
        </div>
        <div v-if="phoneNumber.phone_number">
          <li class="list-group-item">{{ phoneNumber.phone_number }}</li>
        </div>
      </ul>
      <!--End User information in a list, v-if at the address and phone number. -->
    </div>
    <div>
      <button data-bs-toggle="modal" data-bs-target="#edit-staticBackdrop">
        Edit
      </button>
      <!-- If user information is missing, show this button -->
      <button
        v-if="!user.address || !user.phone_number"
        data-bs-toggle="modal"
        data-bs-target="#add-staticBackdrop"
      >
        Add information
      </button>
      <!-- End If user information is missing, show this button -->
    </div>
    <!-- Modal -->
    <AddUserinfoComponent
      :user="user"
      :address="address"
      :phoneNumber="phoneNumber"
    ></AddUserinfoComponent>
    <EditUserinfoComponent
      :user="user"
      :address="address"
      :phoneNumber="phoneNumber"
    ></EditUserinfoComponent>
    <button @click="deleteProfile">Delete profile</button>
  </div>
</template>

<script>
import AddUserinfoComponent from "./AddUserinfoComponent.vue";
import EditUserinfoComponent from "./EditUserinfoComponent.vue";

export default {
  data: function () {
    return {
      user: "",
      address: "",
      phoneNumber: "",
    };
  },
  created() {
    //console.log("UserComponent mounted.");
    this.getUser();
  },
  methods: {
    deleteProfile() {
      axios.delete("/profile");
    },
    getUser() {
      let self = this;
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
            self.address = response.data.address || "";
            self.phoneNumber = response.data.phoneNumber || "";
          }
        })
        .catch(function (error) {});
    },
  },
  components: { AddUserinfoComponent, EditUserinfoComponent },
};
</script>
