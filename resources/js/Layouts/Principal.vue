<script setup>
    import Header from '@/Components/Header.vue';
    const props = defineProps({
            currentRoute: {
                type: String,
                required: true
            }
        })
</script>
<template>
    <div class="flex flex-col min-h-screen">
        <Header :currentRoute="props.currentRoute"/>
        <main class="flex-1 bg-primary-4 ">
            <div class="container mx-auto p-4">
                <slot />
            </div>
        </main>

    </div>
</template>

