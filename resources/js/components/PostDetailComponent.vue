<template>
  <div>
    <div v-if="post">
      <div class="card">
        <div class="card-header">
          <img :src="'/images/' + post.image" />
        </div>
        <div class="card-body">
          <h1 class="card-title">{{ post.title }}</h1>
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
    getPost: function() {
    }
  },
  props: [],
  data: function() {
    return {
      postSelected: "",
      post: {
        title: "Madre mia",
        content:
          "Wili compañero, Next, we will create a fresh Vue application instance and the page. Then, you may begin adding components to or customize the JavaScript scaffolding to fit your unique needs.",
        image: "1588810859.jpeg"
      }
    };
  },
  created: function() {}
};
</script>