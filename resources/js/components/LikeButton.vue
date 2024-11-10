<template>
  <button @click="likeArticle" class="like-button d-flex align-items-center" style="cursor: pointer;">
    <i :class="liked ? 'bi bi-heart-fill fs-4' : 'bi bi-heart fs-4'" class=""></i>
    <label for="likesCount" class="like-label ms-1">{{ likesCount }}</label>
  </button>
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
      liked: this.initialLikes > 0
    };
  },
  methods: {
    likeArticle() {
      axios.post(`/api/articles/${this.articleId}/like`)
          .then(response => {
            this.likesCount = response.data.likes_count;
            this.liked = true;
          })
          .catch(error => {
            console.error('Произошла ошибка при инкрементации счетчика лайков:', error);
          });
    }
  }
};
</script>

<style scoped>
.like-button {
  background-color: transparent;
  border: none;
  display: flex;
  align-items: center;
  font-size: 1rem;
  color: #6c757d; /* Цвет кнопки */
  transition: color 0.2s ease-in-out;
}

.like-button:hover {
  color: #dc3545; /* Цвет при наведении */
}

.liked {
  color: #dc3545; /* Цвет для "лайкнутого" состояния */
}

.likes-label {
  font-size: 1rem;
}
</style>
