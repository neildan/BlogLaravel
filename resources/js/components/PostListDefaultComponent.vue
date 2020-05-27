<template>
  <div>
    <div class="row">
      <div class="col-md-6 mb-2" v-for="post in posts" :key="post.daniel">
        <div class="card">
          <img :src="'/images/' + post.image" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ post.content }}</p>
            <button class="btn btn-primary" v-on:click="postClick(post)">Ver Resumen</button>
            <router-link
              class="btn btn-success"
              :to="{ name : 'detail', params: {id: post.id}}"
            >Ver Detalle</router-link>
          </div>
        </div>
      </div>
    </div>
    <post-modal :post="postSelected"></post-modal>
    <v-pagination
      v-model="currentPage"
      :page-count="total"
      :classes="bootstrapPaginationClasses"
      :labels="paginationAnchorTexts"
    ></v-pagination>
  </div>
</template>

<script>
import vPagination from "vue-plain-pagination";
export default {
  methods: {
    postClick: function(post) {
      this.postSelected = post;
    }
  },
  props: ["posts"],
  components: {
    vPagination
  },
  data: function() {
    return {
      postSelected: "",
      currentPage: 5,
      total: 9,
      bootstrapPaginationClasses: {
        ul: "pagination",
        li: "page-item",
        liActive: "active",
        liDisable: "disabled",
        button: "page-link"
      },
      paginationAnchorTexts: {
        first: "First",
        prev: "Previous",
        next: "Next",
        last: "Last"
      }
    };
  },
  created: function() {}
};
</script>