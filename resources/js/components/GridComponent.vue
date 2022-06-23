<template>
<div class="grid">
    <slot></slot>
</div>
</template>

<script>
export default {
    name: "GridComponent"
}
</script>

<style lang="scss">
    .grid {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
                
        & > div {
            width: calc(100% / 6);
            padding: 10px;
        }
    }
</style>