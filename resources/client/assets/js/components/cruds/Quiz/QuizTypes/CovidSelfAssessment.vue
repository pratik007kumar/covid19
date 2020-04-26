<template>
  <div>
    <iframe
      id="typeform-full"
      width="100%"
      height="100%"
      frameborder="0"
      allow="camera; microphone; autoplay; encrypted-media;"
      src="https://empeal-health.typeform.com/to/IX28V2"
    ></iframe>
  </div>
</template>


<script type="text/javascript" src="https://embed.typeform.com/embed.js"></script>

<script>
export default {
  head() {
    return {
      title: "Covid Quiz | Empeal",
      meta: [
        {
          // title will be injected into parent titleTemplate
          title: "Covid Quiz"
        },
        {
          hid: "description",
          name: "description",
          content: "Covid Quiz"
        }
      ]
    };
  }
};
</script>

<style scoped>
* {
  height: 100vh;
}
</style>
