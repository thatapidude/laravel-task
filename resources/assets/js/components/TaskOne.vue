<template>
  <div>
    <h3>Render link</h3>
    <ul>
      <li><a v-bind:href="link" target="_blank">Google</a></li>
    </ul>
    <hr>
    <h3>Counter</h3>
    <button v-on:click="increaseCounter">Click me</button>
    <p>{{ counter }}</p>
    <p v-on:mousemove="updateCoordinates">Coordinates: {{ x }} / {{ y }}</p>
    <span v-on:mousemove.stop=""></span>
    <hr>
    <h3>Key event - Enter</h3>
    <input type="text" v-on:keyup.enter="runThis" v-on:mousemove.stop="">
    <p>{{ keyEventResult }}</p>
    <hr>
    <h3>Model</h3>
    <input type="text" v-model="name">
    <p>{{ name }}</p>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      link: "https://google.com",
      counter: 0,
      x: 0,
      y: 0,
      keyEventResult: "",
      name: "Foo"
    };
  },
  computed: {
    output: function() {}
  },
  watch: {
    counter: function(value) {
      let vm = this;
      setTimeout(function() {
        vm.counter = 0;
      }, 2000);
    }
  },
  methods: {
    increaseCounter: function() {
      this.counter++;
    },
    updateCoordinates: function(event) {
      this.x = event.clientX;
      this.y = event.clientY;
    },
    runThis: function(event) {
      this.keyEventResult = event.target.value;
    }
  }
};
</script>

<style scoped>
</style>