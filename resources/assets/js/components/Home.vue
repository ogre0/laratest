<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Example Component</div>

          <div class="panel-body">
            I'm an example component!
            ------------
            <div v-for="(row, i) in aaa" :key="i">{{ row.id }}</div>
            ------------
          </div>
          <router-view></router-view>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  created() {
    this.test();
  },
  mounted() {
    console.log('Component mounted. Index.');
  },
  data() {
    return {
      aaa: {},
    };
  },
  methods: {
    test() {
      this.$http({
        url: '/api/test',
        method: 'GET',
      }).then((res) => {
        this.aaa = res.data;
        console.log(res);
      });
    },
  },
};
</script>
