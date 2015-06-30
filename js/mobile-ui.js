window.onload = function () {

  var mobilemenu = document.getElementById("menu-main-nav");

  var mobiletag = document.getElementsByClassName("mobile-tag");

  mobiletag[0].addEventListener("click", whatClicked, false);
  
  function whatClicked(evt) {

    mobilemenu.style.height = "auto";

    //mobiletag.addclass(toggleOpen) or (toggleClosed)

  };

};
