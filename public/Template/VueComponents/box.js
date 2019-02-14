Vue.component('box', {
  props: ['title','refresh','close','color'],
  methods: {
    closeClick(){
      // window[this.close]();
    },
    refreshClick(){
      if(_.isString(this.refresh))if(_.isFunction(window[this.refresh]))window[this.refresh]();
      else throw new TypeError('No existe la funcion -> '+JSON.stringify(this.refresh));
    }
  },
  mounted(){
  },
  template: `
    <div :class="'box box-'+(color ? color : 'primary')">

      <div class="box-header with-border">
        <div class="box-title" v-html="title"></div>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" @click="refreshClick" type="button" v-if="refresh">
            <i class="fa fa-refresh" data-togle="tooltip" title="Refrescar"></i>
          </button>
          <button class="btn btn-box-tool" data-widget="collapse" @click="closeClick" type="button" v-if="close">
            <i class="fa fa-times" data-togle="tooltip" title="minimizar"></i>
          </button>
        </div>
      </div>
      
      <div class="box-body">
        <slot></slot>
      </div>
      
      <div class="box-footer">
        <slot name="footer">
        
        </slot>
      </div>
    </div>
  `
});

Vue.component('table-bs', {
  props: {
    headers: {
      type: Array
    },
    datas: {
      type: Array
    }
  },
  data: function () {
    return {};
  },
  created() {
    //this.id = _.uniqueId('dateBs_');
  },
  template: `
    <div class="table-responsive" style="min-height:240px;">
      <table class="table text-center table-bordered table-hover table-striped">
        <thead v-if="headers">
          <tr>
            <th v-for="header in headers" v-html="header"></th>
          </tr>
        </thead>

        <slot></slot>

        <tbody v-if="datas">
          <tr v-for="rows in datas">
            <td v-for="row in rows" v-html="row"></td>
          </tr>
        </tbody>

        
        
        <tfoot>
          <slot name="footer"></slot>
        </tfoot>
      </table>
    </div>
  `
});