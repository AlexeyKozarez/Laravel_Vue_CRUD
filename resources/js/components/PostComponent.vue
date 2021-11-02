<template>
    <div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";
export default {
    name: "PostComponent",

     mounted() {
     },
    methods: {
        parentLog() {
        }
    },

    components: {
        CreateComponent,
        IndexComponent,
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>





















