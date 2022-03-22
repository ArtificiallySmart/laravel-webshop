<template>
    <div>
        <!-- <div> -->
        <!-- User information in a list, v-if at the address and phone number. -->

        <ul class="list-group mb-3">
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
        <!-- </div> -->


        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-staticBackdrop">
            Edit
        </button>
        <!-- If user information is missing, show this button -->
        <button class="btn btn-secondary" v-if="!user.address || !user.phone_number" data-bs-toggle="modal"
            data-bs-target="#add-staticBackdrop">
            Add information
        </button>
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-staticBackdrop">Delete
            profile</button>

        <!-- End If user information is missing, show this button -->

        <!-- Modal -->
        <AddUserinfoComponent :user="user" :address="address" :phoneNumber="phoneNumber"></AddUserinfoComponent>
        <EditUserinfoComponent :user="user" :address="address" :phoneNumber="phoneNumber"></EditUserinfoComponent>
        <DeleteUserinfoComponent></DeleteUserinfoComponent>
    </div>
</template>

<script>
    import AddUserinfoComponent from "./UserComponents/AddUserinfoComponent.vue";
    import EditUserinfoComponent from "./UserComponents/EditUserinfoComponent.vue";
    import DeleteUserinfoComponent from "./UserComponents/DeleteUserinfoComponent.vue";

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
                axios({
                    method: "delete",
                    url: "/profile",
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                    },
                })
                    .then(function (response) {
                        window.location.replace("/");
                    })
                    .catch(function (error) { });
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
                    .catch(function (error) { });
            },
        },
        components: { AddUserinfoComponent, EditUserinfoComponent, DeleteUserinfoComponent },
    };
</script>