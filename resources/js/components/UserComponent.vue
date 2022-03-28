<template>
  <div>
    <!-- User information in a list, v-if at the address and phone number. -->
    <div class="row">
      <div class="col">
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

        <button
          class="btn btn-secondary"
          data-bs-toggle="modal"
          data-bs-target="#edit-staticBackdrop"
        >
          Edit
        </button>
        <!-- If user information is missing, show this button -->
        <button
          class="btn btn-secondary"
          v-if="!user.address || !user.phone_number"
          data-bs-toggle="modal"
          data-bs-target="#add-staticBackdrop"
        >
          Add information
        </button>
        <button
          class="btn btn-danger"
          data-bs-toggle="modal"
          data-bs-target="#delete-staticBackdrop"
        >
          Delete profile
        </button>
      </div>

      <!-- End If user information is missing, show this button -->
      <div class="col">
        <button
          class="btn btn-primary w-100"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample"
          aria-expanded="false"
          aria-controls="collapseExample"
        >
          Order History
        </button>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div
                v-for="order in user.orders"
                :key="order.id"
                class="accordion-item"
              >
                <h2 class="accordion-header" id="flush-headingOne">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    :data-bs-target="`#flush-collapse${order.id}`"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    <div class="row w-100">
                      <div class="col">Order id: {{ order.id }}</div>
                      <div class="col">
                        {{ formatDate(order.created_at) }}
                      </div>
                      <div class="col">
                        Total price: {{ order.total_price }}
                      </div>
                      <div class="col">{{ order.status }}</div>
                    </div>
                  </button>
                </h2>
                <div
                  :id="`flush-collapse${order.id}`"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Product</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Price</th>
                          <th scope="col">Total price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr
                          v-for="product in order.order_products"
                          :key="product.id"
                        >
                          <td>{{ product.product.name }}</td>
                          <td>{{ product.amount }}</td>
                          <td>{{ product.product.price }}</td>
                          <td>{{ product.product.price * product.amount }}</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="2">Shipping method</td>
                          <td>Standard</td>
                          <td><i>Free</i></td>
                        </tr>
                        <tr>
                          <td colspan="2">Total</td>
                          <td></td>
                          <td><i>Total price</i></td>
                        </tr>
                        <tr>
                          <td colspan="2">VAT</td>
                          <td>21%</td>
                          <td><i>VAT amount</i></td>
                        </tr>
                        <tr>
                          <td colspan="2">Grand Total</td>
                          <td></td>
                          <td><i>Grand total price</i></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
              <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    Accordion Item #2
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to
                    demonstrate the <code>.accordion-flush</code> class. This is
                    the second item's accordion body. Let's imagine this being
                    filled with some actual content.
                  </div>
                </div>
              </div> -->
              <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    Accordion Item #3
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to
                    demonstrate the <code>.accordion-flush</code> class. This is
                    the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the
                    space to make it look, at least at first glance, a bit more
                    representative of how this would look in a real-world
                    application.
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
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
        .catch(function (error) {});
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
    formatDate(date) {
      let newDate = new Date(date);
      return newDate.toDateString();
    },
  },
  components: {
    AddUserinfoComponent,
    EditUserinfoComponent,
    DeleteUserinfoComponent,
  },
};
</script>