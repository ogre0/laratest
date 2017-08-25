<template>
  <div class="container">
    detail
  </div>
</template>

<script>
export default {
  name: 'app',
  metaInfo: {
    // if no subcomponents specify a metaInfo.title, this title will be used
    title: 'bbbbbbbbbbb',
    // all titles will be injected into this template
    titleTemplate: '%s | My Awesome Webapp'
  },
  mounted () {
    console.log('Component mounted. Detail.')
  }
}
</script>
