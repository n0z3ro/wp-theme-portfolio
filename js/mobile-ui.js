window.onload = function () {

  var mobilemenu = document.getElementById("menu-main-nav");
  var mobilesubmenu = document.getElementsByClassName("sub-menu")[0];
  var mobiletag = document.getElementsByClassName("mobile-tag");

  mobiletag[0].addEventListener("click", function(e){toggleMobile(e, mobilemenu)}, false);
  mobiletag[1].addEventListener("click", function(e){toggleMobile(e, mobilesubmenu)}, false);
  
  function toggleMobile(evt, menu_name) {
    
    var mobileClasses = menu_name.classList;

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
