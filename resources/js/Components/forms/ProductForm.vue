<script setup>
    import InputTextForm from './InputTextForm.vue';
    import InputPriceForm from './InputPriceForm.vue';
    import TextAreaForm from './TextAreaForm.vue';
    import FileUploadForm from './FileUploadForm.vue';
    import { ref, watch } from 'vue';

    const props = defineProps({
        modelValue: {
            type: Object,
            default: {
                name: 'sergio',
                supplier: 'ferreteria s.a.s',
                unit_price_withouth_tax: 192000,
                unit_of_measure: 'unidad',
                brand: 'marca random',
                description: 'hola este soy yo',
                notes: 'estos son notas',
                technical_data_sheet_url: 'noseque.jpg',
            }
        },
        isEdit: {
            type: Boolean,
            default: true
        }
    })

    const product = ref(props.modelValue);
    const emit = defineEmits(['update:modelValue']);

    watch(product, (newValue) => {
        emit('update:modelValue', newValue);
    });

    watch(() => props.product, (newValue) => {
        console.log(newValue);
    }, { deep: true });

</script>
<template>
    <div class="flex flex-col gap-4">
        <InputTextForm v-model="product.name" label="Nombre" fluid/>
        <div class="flex gap-4">
            <InputTextForm v-model="product.supplier" label="Proveedor" fluid class="flex-1"/>
            <InputPriceForm v-model="product.unit_price_withouth_tax" label="Precio unitario - sin iva" fluid class="flex-1"/>
        </div>
        <div class="flex gap-4">
            <InputTextForm v-model="product.unit_of_measure" label="Unidad de medida" fluid class="flex-1"/>
            <InputTextForm v-model="product.brand" label="Marca" fluid class="flex-1"/>
        </div>
        <TextAreaForm v-model="product.description" label="Descripción" />
        <TextAreaForm v-model="product.notes" label="Notas" />
        <div class="flex gap-4" v-if="!isEdit">
            <FileUploadForm label="Subir archivo"/>
        </div>
        <div class="flex flex-col" v-if="isEdit">
            <div class="mb-2">
                <span >Archivo actual: <span>{{ product.technical_data_sheet_url }}</span></span>
            </div>
            <div class="flex">
                <FileUploadForm label="Reemplazar archivo"/>
            </div>
        </div>
    </div>

</template>