<template>
  <div class="comment-form">
    <!-- Сообщение об успехе -->
    <div v-if="successMessage" class="alert alert-success">
      {{ successMessage }}
    </div>

    <!-- Форма для отправки комментария, отображается только если комментарий ещё не отправлен -->
    <form v-else @submit.prevent="submitComment">
      <div class="mb-3">
        <label for="subject" class="form-label">Тема сообщения</label>
        <input
            type="text"
            id="subject"
            class="form-control"
            v-model="subject"
            required
            maxlength="255">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Сообщение</label>
        <textarea
            id="body"
            class="form-control"
            v-model="body"
            required
            rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-outline-secondary">Отправить</button>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    articleId: {
      type: Number,
      required: true,
    }
  },
  data() {
    return {
      subject: '',
      body: '',
      successMessage: '',
      errorMessage: ''
    };
  },
  methods: {
    async submitComment() {
      try {
        this.successMessage = '';
        this.errorMessage = '';

        const response = await axios.post(`/api/articles/${this.articleId}/comment`, {
          subject: this.subject,
          body: this.body
        });

        if (response.status === 200) {
          this.successMessage = 'Ваше сообщение успешно отправлено.';
          this.subject = '';
          this.body = '';
        }
      } catch (error) {
        if (error.response && error.response.status === 422) {
          this.errorMessage = 'Пожалуйста, заполните все поля корректно.';
        } else {
          this.errorMessage = 'Произошла ошибка при отправке комментария. Попробуйте еще раз.';
        }
      }
    }
  }
}
</script>

<style scoped>
.comment-form {
  margin-top: 20px;
}
</style>
