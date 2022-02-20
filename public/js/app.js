gsap.registerPlugin(ScrollTrigger);

gsap.from(".logo", { delay: 0.8, duration: 1, opacity: 0 });
gsap.from("li:nth-of-type(1)", { delay: 0.5, duration: 0.6, y: -60 });
gsap.from("li:nth-of-type(2)", { delay: 0.7, duration: 0.6, y: -60 });
gsap.from("li:nth-of-type(3)", { delay: 1, duration: 0.6, y: -60 });
gsap.from("li:nth-of-type(4)", { delay: 1.2, duration: 0.6, y: -60 });
gsap.from("li:nth-of-type(5)", { delay: 1.4, duration: 0.6, y: -60 });
gsap.from(".intro-text", { delay: 0.5, duration: 1, opacity: 0, y: -30 });
gsap.from(".explore-btn", { delay: 1.2, duration: 1, opacity: 0 });
gsap.from(".login-main", { delay: 1, duration: 1, opacity: 0 });
gsap.from(".register-main", { delay: 1, duration: 1, opacity: 0 });

gsap.from(".places-card-list", {
    scrollTrigger: ".places-card-list",
    duration: 1,
    opacity: 0,
    y: 80,
});

gsap.from(".activities-card-list", {
    scrollTrigger: ".activities-card-list",
    duration: 1.5,
    opacity: 0,
    y: 80,
});

gsap.from(".main-title", {
    scrollTrigger: ".main-title",
    duration: 1.5,
    opacity: 0,
    y: 60,
});

new Splide(".splide").mount();
