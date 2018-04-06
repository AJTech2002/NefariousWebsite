function amountscrolled(){
    var winheight = jQuery('body').height()
    var docheight = jQuery(document).height()
    var scrollTop = jQuery('body').scrollTop()
    var trackLength = docheight - winheight
    var pctScrolled = Math.floor(scrollTop/trackLength * 100) // gets percentage scrolled (ie: 80 NaN if tracklength == 0)
    //console.log(pctScrolled + '% scrolled')
    return pctScrolled;
}

document.addEventListener('scroll', function (event) {

    var pct = amountscrolled();

    if (pct > 4) {
      $('.Header').css("opacity",0.9);
  //    $('.Header').css("background-color","#414042");
    }
    else {
      $('.Header').css("opacity",1);
    }

}, true /*Capture event*/);
