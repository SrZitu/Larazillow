<template>
  <div>Index</div>
  <Link href="/">Main Page</Link>
  <Link href="/show">Show Page</Link>
  <p>The page timer{{ timer }}</p>

  <slot></slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
const timer = ref(0);
setInterval(() => timer.value++, 1000);
defineProps({ message: String });
</script>
