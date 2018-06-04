<template>
  <div>
    <ul>
      <li v-for="post in posts">
        {{ post.title }}
      </li>
    </ul>
    <input type="text" placeholder="Search post by id" @keyup.enter="postLookup">
    <p>{{ title }}</p>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      posts: [],
      title: "",
      theId: 0
    };
  },
  methods: {
    postLookup: function(event) {
      this.theId = event.target.value;
      if (this.theId != "") {
        axios
          .get("https://jsonplaceholder.typicode.com/posts/" + this.theId, {
            headers: { "content-type": "application/json" }
          })
          .then(response => {
            this.title = response.data.title;
          }, 500);
      } else {
        this.title = "Post id is required";
      }
    }
  },
  mounted() {
    axios
      .get("https://jsonplaceholder.typicode.com/posts/", {
        headers: { "content-type": "application/json" }
      })
      .then(response => {
        this.posts = response.data;
      }, 500);
  }
};
</script>

<style scoped>
</style>