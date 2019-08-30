<template>

  <div v-bind:class="defineCor">
      <div class="panel-heading">{{title_cone}}</div>

      <div class="panel-body">
          <slot></slot>
      </div>
  </div>

</template>

<script>
export default {
  props:['title_cone','color'],
  computed:{
    defineCor: function(){
      return "panel " + (this.color || "panel-default");
    }
  }
}
</script>