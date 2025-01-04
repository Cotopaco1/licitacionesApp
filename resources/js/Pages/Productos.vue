<script setup>
    const props = defineProps({
        currentRoute: {
            type: String,
            required: true
        }
    })
    
    import LayoutPrincipal from '@/Layouts/Principal.vue';
    import { ref } from 'vue';
    import SearchBar from '@/Components/SearchBar.vue';
    import PlusButton from '@/Components/buttons/PlusButton.vue';
    import DataTable from 'primevue/datatable';
    import Column from 'primevue/column';
    import EyeButton from '@/Components/buttons/EyeButton.vue';
    import DownloadDocumentButton from '@/Components/buttons/DownloadDocumentButton.vue';
    import Modal from '@/Components/ModalCustom.vue';
    import ProductCreate from '@/Components/products/ProductCreate.vue';
    import ProductView from '@/Components/products/ProductView.vue';
    const products = [
        {
            id: 1,
            name: 'Producto 1',
            supplier: 'Proveedor 1',
            unit_of_measure: 'Unidad',
            description: 'Descripción del producto 1',
            unit_price_withouth_tax: 100,
            brand: 'Marca 1',
            notes: 'Notas del producto 1',
            technical_data_sheet_url: 'https://www.google.com',

        }
    ]

    const text = ref('');
    const showProductCreate = ref(false);
    const showProductView = ref(false);
    const productToView = ref(null);

    function viewProduct(product) {
        productToView.value = product;
        showProductView.value = true;
    }

</script>
<template>
    <Modal title="Crear producto" v-if="showProductCreate" @close="showProductCreate = false">
        <ProductCreate/>
    </Modal>

    <Modal :title="`Producto #`+productToView.id" v-if="showProductView" @close="showProductView = false">
        <ProductView v-model="productToView"/>
    </Modal>
    

    <LayoutPrincipal :currentRoute="currentRoute">
        <div class="flex gap-10 mb-10">
            <SearchBar class="flex-1"/>
            <PlusButton @click="showProductCreate = true"/>
        </div>
        <div >
            <DataTable :value="products" size="small" stripedRows>
                <Column field="name" header="Nombre"></Column>
                <Column field="supplier" header="Proveedor"></Column>
                <Column field="unit_of_measure" header="Unidad de medida"></Column>
                <Column field="description" header="Descripción"></Column>
                <Column field="unit_price_withouth_tax" header="Precio unitario sin impuestos"></Column>
                <Column field="brand" header="Marca"></Column>
                <Column field="notes" header="Notas"></Column>
                <Column field="technical_data_sheet_url" header="Ficha técnica"></Column>
                <Column header="Acciones"> 
                    <template #body="slotProps">
                        <div class="flex justify-end">
                            <EyeButton @click="viewProduct(slotProps.data)" />
                            <DownloadDocumentButton/>
                        </div>
                    </template>
                </Column>
            </DataTable>
        </div>
    </LayoutPrincipal>
</template>