<script setup>
    import ProductForm from '../forms/ProductForm.vue';
    import SendAndCancelButtons from '../buttons/SendAndCancelButtons.vue';
    import { ref } from 'vue';

    function updateProduct() {
        console.log('Updating product: ', product.value);
        
    }
    function deleteProduct(){
        console.log('Deleting product');
    }

    const props = defineProps({
        modelValue: Object
    })

    const product = ref(props.modelValue);
    console.log(product.value);

</script>
<template>
    <form @submit.prevent="updateProduct" class="w-full mx-auto">
        <ProductForm v-model="product" :isEdit="true"/>
        <SendAndCancelButtons @delete="deleteProduct" />
    </form>
</template>