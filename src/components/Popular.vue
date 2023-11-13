<template>
    <div class="flex flex-row">
        <h1 class="text-1xl" :style="'font-weight: ' + bold">{{name}}</h1>
    </div>   
</template>

<script>
    export default {
        name: "Popular",
        props: {
            name: String,
            bold: String,
        }
    }
</script>