<script setup>
   defineProps({
         label: String,
   })
</script>
<template> 
    <button type="button" class="bg-red-500 hover:bg-red-400 text-white px-4 py-2 rounded-lg">{{ label ?? 'Cancelar' }}</button>
</template>