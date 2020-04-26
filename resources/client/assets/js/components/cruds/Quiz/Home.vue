<template>
  <div class="home">
    <QuizPopup v-if="modal" v-show="modal" :modal="showModal" @clicked="onChildClick" v-once />
  </div>
</template>

<script>
// @ is an alias to /src
import QuizPopup from "../quiz/Popup";

export default {
  name: "Home",
  components: {
    QuizPopup
  },
  data() {
    return {
      modal: false
    };
  },
  methods: {
    showModal() {
      this.modal = true;
    },
    onChildClick() {
      this.modal = false;
    }
    // refresh() {
    //   window.location.reload();
    // }
  },
  created() {
    this.showModal();
  }
};
</script>

<style scoped>
* {
  height: 94.7vh;
}
</style>
