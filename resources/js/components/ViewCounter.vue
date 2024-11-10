<template>
  <div class="d-flex align-items-center me-4 ms-2">
    <span class="me-1">
        <i class="bi bi-eye-fill fs-3"></i>
    </span>
    <span class="small">{{ viewsCount }}</span>
  </div>
</template>

<script>
export default {
  props: {
    articleId: {
      type: Number,
      required: true
    },
    initialViews: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      viewsCount: this.initialViews,
    };
  },
  mounted() {
    // Устанавливаем таймер на 5 секунд после монтирования компонента
    setTimeout(() => {
      this.incrementViews();
    }, 5000);
  },
  methods: {
    incrementViews() {
      axios.post(`/api/articles/${this.articleId}/view`)
          .then(response => {
            this.viewsCount = response.data.views_count;
          })
          .catch(error => {
            console.error('Произошла ошибка при инкрементации счетчика просмотров:', error);
          });
    }
  }
};
</script>
