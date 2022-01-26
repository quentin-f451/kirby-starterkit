export const onLoading = () => {
  addClassesToHTML();
  addTargetBlank();
  addVHValue();
};

const addClassesToHTML = () => {
  const isTouch = "ontouchstart" in window || navigator.msMaxTouchPoints > 0;
  const ua = window.navigator.userAgent;
  const iOS = !!ua.match(/iP(ad|hone)/i);
  const webkit = !!ua.match(/WebKit/i);
  const isiOS = iOS && webkit && !ua.match(/CriOS/i);
  const touch = isTouch ? "touch" : "no-touch";
  const os = isiOS ? "ios" : "no-ios";
  document.documentElement.classList.remove("touch", "no-touch", "ios", "no-ios");
  document.documentElement.classList.add(touch, os);
};

const addTargetBlank = () => {
  const links = document.querySelectorAll("a");
  links.forEach((link) => {
    if (link.target) {
      return;
    } else if (link.host !== window.location.host) {
      link.target = "_blank";
      link.rel = "noopener";
    } else {
      link.target = "_self";
    }
  });
};

const addVHValue = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);

  window.addEventListener("resize", () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  });
};
