<template>
  <form @submit.stop="sendCode">
    <textarea v-model="code"></textarea>
    <textarea v-model="result"></textarea>
    <div>
    <button type="submit">Отправить</button>
    </div>
  </form>
</template>

<script>
export default {
  name: 'PHPForm',
  data() {
    return {
      code: '$qwe = "adf";\n' +
          'echo $qwe;',
      result: '',
    }
  },
  methods: {
    sendCode: async function (e) {
      let self = this
      e.preventDefault()

      this.$api.php.exec(this.code).then((response) => {
        self.result = response.result
      })
    }
  }
}
</script>

<style scoped>
textarea {
  width: 500px;
  height: 250px;
}
</style>
