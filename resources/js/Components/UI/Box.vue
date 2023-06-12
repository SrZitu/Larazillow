<template>
  <div
    class="border border-gray-200 dark:border-gray-800 shadow-sm rounded-md p-4 dark:text-gray-300"
  >
    <div class="text-gray-500 font-medium">
      <slot name="header" />
    </div>
    <slot />
  </div>
</template>
