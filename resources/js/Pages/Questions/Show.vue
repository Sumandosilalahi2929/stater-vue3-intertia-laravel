<script setup>

defineProps({
    question: {
        type: Object,
        required: true
    }
})
</script>


<template>
    <p>ID: {{ question.id }}</p>
    <p>Title: {{ question.title }}</p>

</template>