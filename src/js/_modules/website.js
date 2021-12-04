export default class Website {
  constructor() {
    this.addClasses();
    this.blank();
    this.resize();

    $(window).on("resize", () => {
      this.addClasses();
      this.resize();
    });
  }

  addClasses() {
    const isTouch = "ontouchstart" in window || navigator.msMaxTouchPoints > 0;
    const ua = window.navigator.userAgent;
    const iOS = !!ua.match(/iP(ad|hone)/i);
    const webkit = !!ua.match(/WebKit/i);
    const isiOS = iOS && webkit && !ua.match(/CriOS/i);
    const touch = isTouch ? "touch" : "no-touch";
    const os = isiOS ? "ios" : "no-ios";
    $("html").removeClass("touch no-touch ios no-ios").addClass(touch).addClass(os);
  }

  blank() {
    $("a").each((i, el) => {
      if ($(el).attr("target")) {
        return;
      } else if ($(el)[0].host !== window.location.host) {
        $(el).attr("target", "_blank").attr("rel", "noopener");
      } else {
        $(el).attr("target", "_self");
      }
    });
  }

  resize() {
    let vh = window.innerHeight * 0.01;
    $("html").css("--vh", `${vh}px`);
  }
}
