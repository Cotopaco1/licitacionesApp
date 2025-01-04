<script setup>
    import { FileUpload } from 'primevue';
    import { ref, watch } from 'vue';
    const props = defineProps({
        label: String,
        fluid: {
            type: Boolean,
            default: false
        },
        modelValue: {
            type: String,
            default: ''
        }
    })
    const localValue = ref(props.modelValue);
    const emit = defineEmits(['update:modelValue']);
    watch( localValue, (newValue) => {
        emit('update:modelValue', newValue);
    })

    function onUpload(event) {
        console.log(event);
    }

</script>
<template>
    <div>
        <FileUpload 
            mode="basic" 
            customUpload
            accept="image/*" 
            :maxFileSize="1000000" 
            @select="onUpload"
            :chooseLabel="label"
            v-model="localValue"
            name="file123"
            fluid
        />
        
    </div>
</template>