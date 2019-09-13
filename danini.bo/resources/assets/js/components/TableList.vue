<template>
<div>
  <div class="form-inline">
    <div class="form-group pull-right">
      <input type="search" placeholder="Buscar" class="form-control" v-model="buscar">
    </div>
  </div> 
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th style="cursor: pointer;" v-on:click="orderColum(index)" v-for="(titles,index) in titles" :key="titles">{{titles}}</th>
          <th class="text-right" v-if="detail || edit || deletar">Ação</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in list" :key="item">
          <td v-for="i in item" :key="i">{{i}}</td>

          <td class="text-right" v-if="detail || edit || deletar">
            <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" v-bind:value="token">

              <a v-if="detail" v-bind:href="detail" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
              <a v-if="edit" v-bind:href="edit" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
              <a href="#" v-on:click="Delete(index)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
            </form>

            <span v-if="!token">
              <a v-if="detail" v-bind:href="detail" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
              <a v-if="edit" v-bind:href="edit" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
              <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
            </span>

            <span v-if="token && !deletar">
              <a v-if="detail" v-bind:href="detail" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></a>
              <a v-if="edit" v-bind:href="edit" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a> 
            </span>
          </td>
        </tr>
      </tbody>
    </table>
    </div>
</template>

<script>
    export default {
      props:['titles','items','order','orderCol','create','detail','edit','deletar','token'],
      data: function() {
        return {
          buscar     : '',
          orderAux   : this.order ||'asc',
          orderAuxCol: this.orderCol || 0
        }
      },

      methods:{
        Delete: function(index){
          document.getElementById(index).submit();
        },

        orderColum: function(coluna) {
          this.orderAuxCol = coluna;

          if (this.orderAux.toLowerCase() == "asc") {
            this.orderAux = 'desc';
          }else{
            this.orderAux = 'asc';
          }
        }
      },

      computed:{
        list:function(){

          let order    = this.orderAux || "asc";
          let orderCol = this.orderAuxCol || 0;

          order    = order.toLowerCase();
          orderCol = parseInt(orderCol);

          if (order == "asc") {
            this.items.sort(function(a,b) {
              if (a[orderCol] > b[orderCol]) {return 1;}
              if (a[orderCol] < b[orderCol]) {return -1;}
              return 0;
            });
          } else {
            this.items.sort(function(a,b) {
              if (a[orderCol] < b[orderCol]) {return 1;}
              if (a[orderCol] > b[orderCol]) {return -1;}
              return 0;
            });
          }
          
          return this.items.filter(res => {

            for(let k = 0; k < res.length; k++){
              
              if((res[k]+"").toLowerCase().indexOf(this.buscar.toLowerCase())>=0){
                return true;
              }//else{
              //   return false;
              // }

            }

            return false;

          });

          return this.items;
        }
      }
    }
</script>
