<template>
  <div
    class="modal fade"
    id="delete-staticBackdrop"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <p>Please type "Delete" to continue deleting your account.</p>
          <input
            type="text"
            class="form-control"
            id="delete-input"
            v-model="textInput"
          />
          <div class="d-grid my-2">
            <button class="btn btn-danger" id="deleteButton" disabled>
              Delete account
            </button>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [],
  data: function () {
    return {
      textInput: "",
    };
  },
  watch: {
    textInput(val, oldval) {
      let button = document.getElementById("deleteButton");
      if (val == "Delete") {
        button.disabled = !button.disabled;
      }
    },
  },
  created() {},
  methods: {
    toggle() {
      let button = document.getElementById("deleteButton");
      button.disabled = !button.disabled;
    },
  },
};
</script>
