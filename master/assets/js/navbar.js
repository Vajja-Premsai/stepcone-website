let downnavbar = document.getElementById("downnavbar");
let togglenav = document.getElementById("togglenav");
let downbg = document.getElementById("downbg");
let selectnavlink = document.getElementsByClassName("selectnavlink");
let selectforhover = document.getElementsByClassName("selectforhover");
document.addEventListener("scroll", () => {
  if (window.scrollY >= 57) {
    for (let i = 0; i < selectnavlink.length; i++) {
      selectnavlink[i].classList.add("jsnavlink");
      selectnavlink[i].classList.remove("innavlink");
    }
    downnavbar.style.position = "fixed";
    downnavbar.style.top = "0";
    downnavbar.style.zIndex = "100";
    downnavbar.style.backgroundColor = "#fff";
    downbg.classList.add("down-bg");
    togglenav.style.marginRight="15rem";
    for (let j = 0; j < selectforhover.length; j++) {
      selectforhover[j].classList.add("forhover");
    }
  } else {
    downnavbar.style.position = "relative";
    downnavbar.style.top = "0";
    downnavbar.style.zIndex = "100";
    downbg.classList.remove("down-bg");
    for (let i = 0; i < selectnavlink.length; i++) {
      selectnavlink[i].classList.remove("jsnavlink");
      selectnavlink[i].classList.add("innavlink");
    }

    for (let j = 0; j < selectforhover.length; j++) {
      selectforhover[j].classList.remove("forhover");
    }
  }
});
