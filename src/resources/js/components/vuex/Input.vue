<template>
  <div class="container">
    <div class="label">
      <h2>Input</h2>
    </div>
    <div class="form">
      <div class="form-control">
        <button @click="removeStateElement">フォームを減らす</button>
        <button @click="addStateElement">フォームを増やす</button>
      </div>
      <div class="form-part" v-for="(state, index) in stateList" :key="index">
        <div class="info-num">
          <p>{{ index }}番目</p>
        </div>
        <div class="form-row">
          <label>
            名前:
            <input
              type="text"
              :value="state.name"
              @input="updateName(index, $event.target.value)"
              placeholder="田中太郎"
            />
          </label>
        </div>
        <div class="form-row" v-for="(email, indexEmail) in state.emailList" :key="indexEmail">
          <label>
            メール:
            <input
              type="text"
              :value="email"
              @input="updateEmail(index, indexEmail, $event.target.value)"
              placeholder="test@sample.com"
            />
            <div class="email-control">
              <button @click="addEmail(index)">+</button>
              <button @click="removeEmail(index, indexEmail)" v-if=" state.emailList.length > 1">-</button>
            </div>
          </label>
        </div>
      </div>
    </div>
    <div class="next-button">
      <router-link to="/vuex/check">
        <button @click="printStoreState">次へ</button>
      </router-link>
    </div>
    <div class="home-button">
      <a href="/">
        <button>ホームへ戻る</button>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    updateName(index, name) {
      this.$store.commit("setName", { index, name });
    },
    updateEmail(indexState, indexEmail, email) {
      this.$store.commit("setEmail", { indexState, indexEmail, email });
    },
    addStateElement() {
      this.$store.commit("addStateElement");
    },
    removeStateElement() {
      this.$store.commit("removeStateElement");
    },
    addEmail(index) {
      this.$store.commit("addEmail", index);
    },
    removeEmail(indexState, indexEmail) {
      this.$store.commit("removeEmail", { indexState, indexEmail });
    },
    printStoreState() {
      this.$store.state.forEach(element => console.log(element));
    }
  },
  computed: {
    stateList() {
      return this.$store.state;
    }
  }
};
</script>

<style scoped>
.form-control button {
  width: 240px;
}

.email-control {
  display: inline-block;
}

.home-button button {
  width: 240px;
}
</style>
