<template>
  <div>Index</div>
  <Link href="/">Main Page</Link>
  <Link href="/show">Show Page</Link>

  <slot></slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({ message: String });
</script>
