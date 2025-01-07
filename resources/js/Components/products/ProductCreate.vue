<script setup>
    import ProductForm from '../forms/ProductForm.vue';
    import SendButton from '../buttons/SendButton.vue';
    import { RequestService } from '@/Composables/RequestService';
    import ErrorsMessages from '../forms/ErrorsMessages.vue';
    import { ref } from 'vue';
    import ModalCustom from '../ModalCustom.vue';

    const { request, errors } = RequestService();
    const emit = defineEmits(['close']);
    const props = defineProps({
        showModal: Boolean
    });
    function createProduct() {
        const formData = new FormData();
        formData.append('file', product.value.file);
        Object.entries(product.value).forEach(([key, value]) => {
            if (key === 'file') return;
            formData.append(key, value);
        });
        request('/product', formData, 'POST', false).then(response => {
            console.log(response);
        })
        
    }
    function deleteProduct(){
        console.log('Deleting product');
    }
    const product = ref({
        name: '',
        supplier_id: '',
        unit_price_withouth_tax: 0 ,
        unit_of_measure: '',
        brand: '',
        description: '',
        notes: '',
        file: null,
    })

   

</script>
<template>
    <ModalCustom title="Crear producto" v-if="showModal" @close="emit('close')">
        <form @submit.prevent="createProduct" class="w-full mx-auto">
            <ErrorsMessages :errors="errors"/>
            <ProductForm v-model="product" :isEdit="false"/>
            <SendButton class="my-2 bg-green-400" />
        </form>
    </ModalCustom>
</template>