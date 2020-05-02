<template>
  <div class="container">
    <div class="form">
      <div class="form-row">
        <label>
          郵便番号:
          <input type="text" v-model="zipcode" placeholder="1000000" />
        </label>
      </div>
      <div class="form-row">
        <label>
          都道府県:
          <select v-model="prefecture">
            <option v-for="pref in prefList" :key="pref" :value="pref">{{ pref }}</option>
          </select>
        </label>
      </div>
      <div class="form-row">
        <label>
          市区町村:
          <input type="text" v-model="city" placeholder="〇〇市" />
        </label>
      </div>
      <div class="form-row">
        <label>
          町名:
          <input type="text" v-model="town" placeholder="××町" />
        </label>
      </div>
      <div class="home-button">
        <a href="/">
          <button>ホームへ戻る</button>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import prefList from "../../config/prefList";

export default {
  data() {
    return {
      prefList: prefList,
      zipcode: "",
      prefecture: "",
      city: "",
      town: ""
    };
  },
  watch: {
    zipcode(newValue, oldValue) {
      const apiUrl = `https://zip-cloud.appspot.com/api/search?zipcode=${newValue}`;
      axios
        .get(apiUrl)
        .then(response => {
          console.log(response);
        })
        .catch(error => {
          console.log(error.response);
        });
    }
  }
};
</script>

<style scoped>
.home-button button {
  width: 240px;
}
</style>
