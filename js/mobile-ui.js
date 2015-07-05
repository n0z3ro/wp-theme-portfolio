window.onload = function () {

  var mobilemenu = document.getElementById("menu-main-nav");
  var mobiletag = document.getElementsByClassName("mobile-tag");

  mobiletag[0].addEventListener("click", toggleMobile, false);
  
  function toggleMobile(evt) {
    
    var mobileClasses = mobilemenu.classList;

    if (mobileClasses.contains("mobile-open")){
      mobileClasses.remove("mobile-open");
      mobileClasses.add("mobile-closed");
    } else if (mobileClasses.contains("mobile-closed")){
      mobileClasses.remove("mobile-closed");
      mobileClasses.add("mobile-open");
    } else { //has neither class - uninitiated menu
      mobileClasses.add("mobile-open");
    };

  };

};
