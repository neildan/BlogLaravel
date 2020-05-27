<template>
  <div>
    <post-list-default :posts="posts"></post-list-default>
  </div>
</template>

<script>
export default {
  methods: {
    getPosts(){
      fetch('/api/post')
      .then(response => response.json())
      .then(json => this.posts = json.data.data)
    }
  },
  props: [],
  data: function() {
    return {
      postSelected: "",
      posts: []
    };
  },
  created: function() {
    this.getPosts()
  }
};
</script>