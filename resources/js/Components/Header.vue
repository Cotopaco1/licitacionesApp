<script setup>
import Link from '@/Components/header/link.vue';
import { computed, defineProps } from 'vue';
const props = defineProps({
    currentRoute: {
        type: String,
        required: true
    }
})

const isProductosRoute = computed(() => props.currentRoute === 'productos');
const isProveedoresRoute = computed(() => props.currentRoute === 'proveedores');
const isCotizacionesRoute = computed(() => props.currentRoute === 'cotizaciones');

</script>

<template>
    <div class="w-full bg-primary-2  flex py-10">
        <nav class="flex w-11/12 mx-auto justify-between align-center bg-primary-1">
            <Link link="/productos" text="Productos" :active="isProductosRoute"/>
            <Link link="/proveedores" text="Proveedores" :active="isProveedoresRoute" />
            <Link link="/cotizaciones" text="Cotizaciones" :active="isCotizacionesRoute" />
        </nav>
    </div>
</template>