<template>
  <div class="container">
    <div class="label">
      <h2>Check</h2>
    </div>
    <div class="info">
      <div class="info-part" v-for="(state, index) in stateList" :key="index">
        <div class="info-num">
          <p>{{ index }}番目</p>
        </div>
        <div class="info-row">
          <p>名前: {{ state.name }}</p>
        </div>
        <div class="info-row">
          <p>メール: {{ state.emailList.join(", ")}}</p>
        </div>
      </div>
    </div>
    <div class="back-button">
      <router-link to="/vuex">
        <button>戻る</button>
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    stateList() {
      return this.$store.state;
    }
  }
};
</script>
