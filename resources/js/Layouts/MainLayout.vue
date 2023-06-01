<template>
  <div>Index</div>
  <Link href="/">Main Page</Link><br />
  <Link href="/show">Show Page</Link>
  <div v-if="$page.props.flash.success" class="success">
    {{ $page.props.flash.success }}
</div>


  <slot></slot>
</template>

<script setup>

import { Link } from "@inertiajs/vue3";

</script>

<style scoped>
.success {
  background: green;
  color: white;
}
</style>
