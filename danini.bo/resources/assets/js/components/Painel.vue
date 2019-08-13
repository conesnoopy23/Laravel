<template>

  <div class="panel panel-default">
      <div class="panel-heading">{{title_cone}}</div>

      <div class="panel-body">
          <slot></slot>
      </div>
  </div>

</template>

<script>
export default {
  props:['title_cone']
}
</script>