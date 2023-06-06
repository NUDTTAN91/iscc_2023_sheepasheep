<!DOCTYPE html>
<html lang="en">
<title>羊了个羊</title>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <link rel="stylesheet" href="index.css">
  <script src="vue.global.js"></script>
  <title></title>
</head>

<body>

  <section>
  <div id="app">
    <h1>第 {{ level }} 关</h1>
    <header>
      <button class="btn" @click="handleReset">重置关卡</button>
      <button class="btn" @click="handleSwitch('prev')">上一关</button>
      <!-- <button class="btn" @click="handleSwitch('next')">下一关</button> -->
      <button class="btn" @click="handleIscc" disabled = true>冲关秘技</button>
    </header>
    <!-- 容器 -->
    <div class="wrap">
      <div class="container" :style="setContainerStyle()">
        <div class="card-wrap" v-for="(item, index) in cards" :key="index" :style="setCardStyle(item)">
          <div class="card" :class="[item.not && 'is-allow', item.id]" :style="setAnimation(item)"
            @click="clickCard(item, index)">
            <span>{{ item.icon }}</span>
          </div>
        </div>
      </div>
    </div>
    <!-- 卡槽 -->
    <div class="card-slot"></div>
  </div>
</section>
  <script>
    window.oncontextmenu = function () { return false; }
    window.onkeydown = window.onkeyup = window.onkeypress = function () {
      window.event.returnValue = false;
      return false;
    }

      // function SetCookie(name, value, date) {
      //   let Days = date;//此 cookie 将被保存的天数
      //   let exp = new Date();//创建一个时间日期对象;
      //   exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
      //   document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
      // }
      // SetCookie("level","1","1");


    var h = window.innerHeight, w = window.innerWidth;
    window.onresize = function () {
      if (h != window.innerHeight || w != window.innerWidth) {
        window.close();
        window.location = "about:blank";
      }
    }

    const { reactive, ref, toRefs, setup, computed, onMounted, watch } = Vue;
    Vue.createApp().mount('#app');
    

    // console.log("SVNDQ3t0aCFzX0lzX0Zha2VfZjFBZ30="));
  </script>
</body>

</html>