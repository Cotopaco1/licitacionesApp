<script setup>
    const props = defineProps({
        currentRoute: {
            type: String,
            required: true
        }
    })
    
    import LayoutPrincipal from '@/Layouts/Principal.vue';
</script>
<template>
    <LayoutPrincipal :currentRoute="currentRoute">
        <slot />
    </LayoutPrincipal>
</template>