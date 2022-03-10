<template>
  <div class="w-auto h-auto p-2 inline-block input-group rounded">
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
    console.log("Searchbar Component mounted.");
  },
};
</script>
