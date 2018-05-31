</div><br><br>
<!-- here is doing the footer of the page -->
<footer class="text-center" id="footer">&copy; Copyright 2013 -2017 Shaunta Boutique</footer>






<!-- the start of our script is here-->
<script>
  //tageting the element that you need
  jQuery(window).scroll(function() {
    var vscroll = jQuery(this).scrollTop();
    jQuery('#logotext').css({
      // using this to get it exatly on the center till we scrollup all the way to pass it.
      "transform": "translate(0px," + vscroll / 2 + "px)"
    });
    // over here we do adjust the scrolling up with the margin in the saide for the left side background back-flower
    // the ratio for vscroll/12 is how fast it will go up we divied it by 12 to make it go up at slower rate
    var vscroll = jQuery(this).scrollTop();
    jQuery('#back-flower').css({
      "transform": "translate(" + vscroll / 5 + "px, -" + vscroll / 12 + "px)"
    });
    // over here we do intdting the right side bar.
    var vscroll = jQuery(this).scrollTop();
    jQuery('#fore-flower').css({
      "transform": "translate(0px,-" + vscroll / 2 + "px)"
    });


  });
</script>
</body>
