<!DOCTYPE html>
<html>

    <?php wp_head(); ?>
  <head>

    <?php include('global/php/geticons.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Francois+One" rel="stylesheet">
    <title>NEFARIOUS</title>

    <!-- This is my code (First is the header, second is the changed header area for phones) -->

    <div class="Header">
      <b id="HeaderName" style="color: #F1F2F2; height: 100%; vertical-align: middle;">CODE WITH <b style="color: #262262"> AJAY</b> </b>
      <?php echoicon("menulogo","class='HeaderMenuIcon'","",""); ?>
      <div id="HeaderSocialIcons">
          <?php echoicon("youtube","class='HeaderSocialIcon'","",""); ?>
          <?php echoicon("facebooklogo","class='HeaderSocialIcon'","",""); ?>
          <?php echoicon("twitterlogo","class='HeaderSocialIcon'","",""); ?>
          <?php echoicon("instagramlogo","class='HeaderSocialIcon'","",""); ?>
      </div>
      <div id="SearchField">
        <input type="text" placeholder="Search for Anything" id="HeaderSearchField" class="InputBoxContainer" style="background-color: #E6E7E8;">
          <?php echoicon("searchlogo","class='InputSearchLogo';","","") ?>
        </input>
      </div>
      <div id="MenuItems">
          <ul id="MenuList">
            <li>ABOUT</li>
            <li>PROJECTS</li>
            <li>TUTORIALS</li>
            <li>BLOG</li>
          </ul>
      </div>
      <div class="ScrollProgress"></div>
    </div>

    <!--This is the phone side of the header -->

    <div class="PhoneHeadMenu">
        <div id="SocialIcons">
          <?php echoicon("youtube","class='HeaderSocialIcon'","",""); ?>
          <?php echoicon("facebooklogo","class='HeaderSocialIcon'","",""); ?>
          <?php echoicon("twitterlogo","class='HeaderSocialIcon'","",""); ?>
          <?php echoicon("instagramlogo","class='HeaderSocialIcon'","",""); ?>
        </div>

        <div id="PhoneSearchField">
          <input type="text" placeholder="Search for Anything" id="HeaderSearchField" class="InputBoxContainer" style="background-color: #BCBEC0; height: 35px; width: 90%;">
            <?php echoicon("searchlogo","class='InputSearchLogo';","","") ?>
          </input>
        </div>

        <div id="PhoneMenuItems">
          <ul id="PhoneMenuList">
            <li class="PhoneMenuListItem"><p>BLOG</p></li>
            <li class="PhoneMenuListItem"><p>TUTORIALS</p></li>
            <li class="PhoneMenuListItem"><p>PROJECTS</p></li>
            <li class="PhoneMenuListItem"><p>ABOUT</p></li>
          </ul>
        </div>

        <div id="EmailItems">
          <input type="text" placeholder="Email..." id="HeaderSearchField" class="InputBoxContainer" style="background-color: #BCBEC0; height: 35px; width: 90%;">
          </input>

        </div>
        <div class="WidthCover">
        <div id="PhoneSubscribeButton" style="overflow: hidden" class="GreenCallToAction"><p>SUBSCRIBE</p></div>
      </div>
        <b> You will add latest posts here once you are completed the home page </b>

        </div>

    </div>



  </head>

<script>

$(".HeaderMenuIcon").click (function() {
  if ($(".PhoneHeadMenu").css("height") == "0px") {
    $(".PhoneHeadMenu").css("height","100%");
    $('body').scrollTop(0);

  }
  else {
    $(".PhoneHeadMenu").css("height","0%");

  }
});

$(window).on("resize", function() {
  if ($(window).width() > 889) {
    $(".PhoneHeadMenu").css("height","0%");
  }
});


</script>

</html>
