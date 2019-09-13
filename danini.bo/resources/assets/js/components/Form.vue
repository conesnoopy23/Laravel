<template>
    <form v-bind:class="css" v-bind:action="action" v-bind:method="defineMethod" v-bind:enctype="enctype">
      <input v-if="alterMethodd" type="hidden" name="_method" value="DELETE">
      <input v-if="token" type="hidden" name="_token" v-bind:value="token">
      <slot></slot>

    </form>
</template>

<script>
    export default {
        props:['css','action','method','enctype','token'],
        data: function () {
          return {
            alterMethodd:""
          }
        },
        computed:{
          defineMethod: function() {
            if (this.method.toLowerCase()=="post" || this.method.toLowerCase()=="get") {
              return this.method.toLowerCase();
            }

            if (this.method.toLowerCase()=="put") {
              this.alterMethodd = "put"
            }

            if (this.method.toLowerCase()=="delete") {
              this.alterMethodd = "delete"
            }

            return "post";

          },
        }
    }
</script>
