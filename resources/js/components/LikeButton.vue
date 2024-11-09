<template>
  <div class="d-flex align-items-center">
    <span @click="likeArticle" class="me-1 like-icon" style="cursor: pointer;">
      <i :class="liked ? 'bi bi-heart-fill fs-3' : 'bi bi-heart fs-3'"></i>
    </span>
    <span class="small">{{ likesCount }}</span>
  </div>
</template>

<script>
export default {
  props: {
    articleId: {
      type: Number,
      required: true
    },
    initialLikes: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      likesCount: this.initialLikes,
      liked: false
    };
  },
  methods: {
    likeArticle() {
      // Обработка клика на лайк
      axios.post(`/api/articles/${this.articleId}/like`)
          .then(response => {
            this.likesCount = response.data.likes_count;
            this.liked = true;
          })
          .catch(error => {
            console.error('Произошла ошибка при добавлении лайка:', error);
          });
    }
  }
};
</script>

<style scoped>
.like-icon:hover {
  color: #dc3545; /* К примеру, изменение цвета на красный при наведении */
}
</style>
