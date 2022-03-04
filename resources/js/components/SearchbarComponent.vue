<template>
  <div class="w-25 h-10 p-2 inline-block input-group rounded">
    <input
      type="search"
      class="form-control rounded"
      placeholder="Search"
      aria-label="Search"
    />

    <i class="fas fa-search"></i>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
