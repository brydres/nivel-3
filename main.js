const btn = document.getElementById("button");
const menu = document.getElementById("menu");

btn.addEventListener("click", () => {
  menu.classList.toggle("flex");
  menu.classList.toggle("hidden");
});