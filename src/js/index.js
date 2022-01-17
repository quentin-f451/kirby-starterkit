import "../scss/application.scss";
import { onLoading } from "./_modules/website";
import { loadPage } from "./_modules/home";

document.addEventListener("DOMContentLoaded", () => {
  onLoading();
  loadPage();
});
