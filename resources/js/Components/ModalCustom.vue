<script setup>
    defineProps({
        title: String,

    })

    const emit = defineEmits(['close']);
    function close() {
        emit('close');
    }
    
</script>
<template>
    <div class="inset-0 bg-black/50 fixed z-50 flex items-center justify-center">
        <div class="bg-primary-4 p-4 rounded-lg w-10/12 relative">
            <div class="flex justify-center">
                <h2 >{{ title }}</h2>
                <button @click="close" class="text-red-500 absolute -top-6 right-0">Cerrar</button>
            </div>
            <slot/>
        </div>
    </div>
</template>