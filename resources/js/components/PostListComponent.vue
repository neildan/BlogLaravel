<template>
  <div class="row">
    <div class="col-md-6 mb-2" v-for="post in posts" :key="post.daniel">
      <div class="card">
        <img :src="'/images/' + post.image" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ post.title }}</h5>
          <p class="card-text">{{ post.content }}</p>
          <a href="#" class="btn btn-primary">Ver Más</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props: [],
    data: function(){
        return {
            posts: [
                {
                    title: "Madre mia",
                    content:
                        "Wili compañero, Next, we will create a fresh Vue application instance and the page. Then, you may begin adding components to or customize the JavaScript scaffolding to fit your unique needs.",
                    image: "1588219528.jpeg",
                },
                {
                    title: "Titulo 2",
                    content:
                        "Next, we will create a fresh Vue application instance and the page. Then, you may begin adding components to or customize the JavaScript scaffolding to fit your unique needs.",
                    image: "1588219528.jpeg",
                },
                {
                    title: "Titulo 3",
                    content:
                        "Next, we will create a fresh Vue application instance and the page. Then, you may begin adding components to or customize the JavaScript scaffolding to fit your unique needs.",
                    image: "1588219528.jpeg",
                },
                {
                    title: "Titulo 4",
                    content:
                        "Next, we will create a fresh Vue application instance and the page. Then, you may begin adding components to or customize the JavaScript scaffolding to fit your unique needs.",
                    image: "1588219528.jpeg",
                },
                {
                    title: "Titulo 5",
                    content:
                        "Next, we will create a fresh Vue application instance and the page. Then, you may begin adding components to or customize the JavaScript scaffolding to fit your unique needs.",
                    image: "1588219528.jpeg",
                },
            ],
        };
    },
    created: function(){
        console.log("Codigo cargado")
    }
};
</script>