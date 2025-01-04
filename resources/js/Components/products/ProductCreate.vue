<script setup>
    import ProductForm from '../forms/ProductForm.vue';
    import SendAndCancelButtons from '../buttons/SendAndCancelButtons.vue';
    import SendButton from '../buttons/SendButton.vue';
    import { ref } from 'vue';

    function createProduct() {
        console.log('Creating product: ', product.value);
        
    }
    function deleteProduct(){
        console.log('Deleting product');
    }
    const product = ref({
        name: '',
        supplier: '',
        unit_price_withouth_tax: 0 ,
        unit_of_measure: '',
        brand: '',
        description: '',
        notes: '',
        technical_data_sheet_url: '',
    })

</script>
<template>
    <form @submit.prevent="createProduct" class="w-full mx-auto">
        <ProductForm v-model="product" :isEdit="false"/>
        <SendButton class="my-2 bg-green-400" />
    </form>
</template>