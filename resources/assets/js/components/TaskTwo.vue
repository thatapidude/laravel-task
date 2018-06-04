<template>
  <div>
    <div class="demo" @click="attachedRed = !attachedRed" :class="divClasses"></div>
    <div class="demo" :class="color"></div>
    <div class="demo" :class="{red: attachedRed}"></div>
    <hr>
    <input type="text" v-model="color">
    <hr>
    <div class="demotwo" :style="{backgroundColor: colortwo}"></div>
    <div class="demotwo" :style="myStyle"></div>
    <select v-model="colortwo">
      <option disabled value="">Please select one</option>
      <option>blueviolet</option>
      <option>red</option>
      <option>green</option>
    </select>
    <input type="text" v-model="width">
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      attachedRed: false,
      color: "green",
      colortwo: "darkgray",
      width: 100
    };
  },
  computed: {
    divClasses: function() {
      return {
        red: this.attachedRed,
        green: !this.attachedRed
      };
    },
    myStyle: function() {
      return {
        backgroundColor: this.colortwo,
        width: this.width + "px"
      };
    }
  }
};
</script>

<style scoped>
.demo {
  width: 100px;
  height: 100px;
  background-color: grey;
  display: inline-block;
  margin: 10px;
}

.demotwo {
  width: 100px;
  height: 100px;
  background-color: darkgray;
  display: inline-block;
  margin: 10px;
}
.red {
  background-color: red;
}

.green {
  background-color: green;
}

.blue {
  background-color: blueviolet;
}
</style>