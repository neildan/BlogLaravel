<template>
  <div>
    <h1>{{ category.title }}</h1>
    <post-list-default :posts="posts"></post-list-default>
  </div>
</template>

<script>
export default {
  methods: {
    getPosts(id) {
      fetch("/api/post/" + id + "/category")
        .then(response => response.json())
        .then(json => {
          this.posts = json.data.posts.data;
          this.category = json.data.category;
        });
    }
  },
  props: [],
  data: function() {
    return {
      postSelected: "",
      posts: [],
      category: ""
    };
  },
  created: function() {
    this.getPosts(this.$route.params.category_id);
  }
};
</script>