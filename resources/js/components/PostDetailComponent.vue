<template>
  <div>
    <div v-if="post">
      <div class="card">
        <div class="card-header">
          <img :src="'/images/' + post.image.image" />
        </div>
        <div class="card-body">
          <h1 class="card-title">{{ post.title }}</h1>
          <router-link
            class="btn btn-sm btn-success mb-1"
            :to="{name: 'post-category', params: { category_id: post.category.id }}"
          >{{ post.category.title }}</router-link>
          <p class="card-text">{{ post.content }}</p>
        </div>
      </div>
    </div>
    <div v-else>
      <h1>Post no encontrado</h1>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    getPost: function(id) {
      fetch("/api/post/" + id)
        .then(response => response.json())
        .then(response => (this.post = response.data));
    }
  },
  props: [],
  data: function() {
    return {
      postSelected: null,
      post: null
    };
  },
  created: function() {
    this.getPost(this.$route.params.id);
  },
  mounted() {}
};
</script>