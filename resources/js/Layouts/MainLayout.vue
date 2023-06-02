<template>
  <div>Index</div>
  <Link href="/listing">Listings</Link><br />
  <Link href="/listing/create">Create List</Link>
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
  background: #5da472;
  color: white;
}
</style>
