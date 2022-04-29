<template>
  <div class="section">
    <div class="description">Наша компания занимается качественным позиционным исследованием, что требует от нас анализа новых предложений. Ключевые особенности структуры проекта лишь добавляют фракционных разногласий.</div>
    <div class="requisition">
      <h2>Оставить заявку</h2>
      <input type="text" placeholder="Ваше имя">
      <input type="text" placeholder="Ваш телефон">
      <button>Отправить</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "SectionRequisition"
}
</script>

<style scoped>
.section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-height: 580px;
  padding: 112px 135px;
  background: rgba(252, 227, 3, 0.80);
}
.description {
  font-size: 24px;
}
.requisition {
  position: relative;
  display: inline-block;
  color: white;
  text-align: center;
  background-color: black;
  width: 470px;
  text-transform: uppercase;
  padding: 48px;
}
input {
  display: block;
  width: 100%;
  font-size: 16px;
  font-family: Oswald, Helvetica, Arial, sans-serif;
  padding: 10px 24px;
  outline: none;
  border: none;
  margin-bottom: 20px;
  margin-top: 10px;
  transition: .25s;
}
input:focus {
  transform: scale(1.05);
  padding: 10px 30px;
}
button {
  cursor: pointer;
  color: white;
  font-size: 16px;
  font-family: Oswald, Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  background: transparent url('../assets/button-red.png') no-repeat center;
  background-size: contain;
  border: none;
  outline: none;
  padding: 12px 40px;
  transition: .25s;
}
button:hover {
  transform: scale(1.2);
}
</style>
