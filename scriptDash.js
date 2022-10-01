let tab = document.querySelectorAll(".sidenav__list li");
let a = document.querySelectorAll(".a");
console.log(a);
let b = document.querySelectorAll(".b");
let c = document.querySelectorAll(".c");
let d = document.querySelectorAll(".d");
let e = document.querySelectorAll(".e");
let tabs = document.querySelectorAll(".tabs");
a.forEach((a) => {
  a.style.display = "block";
});
b.forEach((b) => {
  b.style.display = "none";
});
c.forEach((c) => {
  c.style.display = "none";
});
d.forEach((d) => {
  d.style.display = "none";
});
e.forEach((e) => {
  e.style.display = "none";
});
tab.forEach((element) => {
  element.addEventListener("click", () => {
    var tabVar = element.getAttribute("data-tabs");
    tabs.forEach((element2) => {
      element2.style.display = "none";
    });
    if (tabVar == "a") {
      a.forEach((a) => {
        a.style.display = "block";
      });
    } else if (tabVar == "b") {
      b.forEach((b) => {
        b.style.display = "block";
      });
    } else if (tabVar == "c") {
      c.forEach((c) => {
        c.style.display = "block";
      });
    } else if (tabVar == "d") {
      d.forEach((d) => {
        d.style.display = "block";
      });
    } else if (tabVar == "e") {
      e.forEach((e) => {
        e.style.display = "block";
      });
    }
    // else {
    //   tabs.forEach((tabs) => {
    //     tabs.style.display = "block";
    //   });
    // }
  });
});
