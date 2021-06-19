<template>
  <div class="store_manager">
    <!-- 店舗代表者権限発行 -->
    <Management />
    <h2>店舗代表者権限発行</h2>
    <table>
      <tr>
        <th>ID:</th>
        <td>
          <input type="text" v-model="login_id" />
          <p v-if="error" class="error">IDを入力してください</p>
        </td>
      </tr>
    </table>

    <button class="button" @click="make_password">パスワードを発行する</button>
    <!-- パスワード表示カード -->
    <div class="password_card" v-if="password_card">
      <p class="password_issuance">パスワードを発行しました</p>
      <p class="password">{{ password }}</p>
      <p>この画面を閉じるとパスワードが表示されなくなります</p>
      <p>必ずメモしてください</p>
      <button class="close_button" @click="password_card = false">
        閉じる
      </button>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import Management from "../components/Management.vue";
export default {
  data() {
    return {
      password_card: false,
      login_id: "",
      password: "",
      error: false,
    };
  },
  components: {
    Management,
  },
  methods: {
    // パスワード発行
    make_password() {
      // バリデーション
      // IDが空ならメッセージ表示
      if (this.login_id == "") {
        this.error = true;
      } else {
        // そうでなければパスワード発行
        axios
          .post(
            "https://rese-booking.herokuapp.com/api/manage/storeManager/create",
            {
              login_id: this.login_id,
            }
          )
          // ランダム英字のパスワード発行
          .then((response) => {
            this.password = response.data.password;
            this.password_card = true;
          })
          .catch(() => {
            alert("登録できませんでした。お手数ですが再度お試しください。");
          });
      }
    },
  },
};
</script>

<style scoped>
/* ====================
  店舗代表者権限発行
==================== */
  .store_manager {
    width: 80%;
    margin: 0 200px 0;
  }
  h2 {
    font-size: 25px;
  }
  table {
    width: 100%;
    margin-top: 20px;
    text-align: left;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.4);
  }
  tr {
    border: 1px solid #c2c2c2;
  }
  th {
    width: 25%;
    font-size: 18px;
    padding: 40px 20px;
    background-color: rgb(212, 208, 201);
  }
  td {
    width: 60%;
    padding: 15px;
  }
  td:nth-of-type(1) {
    padding-bottom: 30px;
  }
  input,
  textarea,
  select {
    width: 100%;
    box-sizing: border-box;
    padding: 5px;
    font-size: 18px;
  }
  .button {
    background-color: #000;
    padding: 10px;
    margin: 20px 0 0 50%;
    transform: translate(-50%);
  }
  .password_card {
    width: 60%;
    margin: 40px auto;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.4);
    text-align: center;
    padding: 10px;
  }
  .password_issuance {
    padding: 5px;
    border-bottom: 1px solid #ccc;
  }
  .password {
    margin: 30px 0;
    font-size: 35px;
    font-weight: bold;
  }
  .close_button {
    padding: 5px 10px;
    margin: 10px auto;
    background-color: #000;
    color: #fff;
  }
  .error {
    margin-top: 5px;
    color: red;
  }
</style>
