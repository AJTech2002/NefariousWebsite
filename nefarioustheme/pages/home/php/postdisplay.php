<html id="PostDisplay">
  <div class="HomePostGrid">

    <div class="BigPostDisplay" id="O1">
      <div class="ImageCover">
        <div class="BottomBar">
          <h3>Title of the post</h3>
            <button class="BlueCallToAction"> READ MORE </button>
      </div>
        <b> Description</b>
        <p> This is a short description of what the actual <br/>
          description will look like when the mouse hovers <br />
          over this part of the web page </p>
      </div>
    </div>

    <div class="BigPostDisplay" id="O2">
      <div class="ImageCover">
        <div class="BottomBar">
            <h3>Title of the post</h3>
              <button class="BlueCallToAction"> READ MORE </button>
        </div>
        <b> Description</b>
        <p> This is a short description of what the actual <br/>
          description will look like when the mouse hovers <br />
          over this part of the web page </p>
        </div>
    </div>

  </div>
  <!--<button id="SeeMore" class="BlueCallToAction" style="background-color:#F9503A">SEE MORE POSTS</button>-->
  <!--Manages the hovering aspect of the top two slides-->
  <script>


    $("#O1").hover (
      function() {
        onHover("#O1");
      },
      function() {
        onHoverLeave("#O1");
      }
    );
    $("#O2").hover (
      function() {
        onHover("#O2");
      },
      function() {
        onHoverLeave("#O2");
      }
    );

    function onHover (id) {
      $(id + " b").css("opacity","1");
      $(id + " p").css("opacity","1");
      $(id + " .ImageCover").css("background-color","rgba(224, 224, 224, 0.2)");

    }

    function onHoverLeave (id) {
      $(id + " b").css("opacity","0");
      $(id + " p").css("opacity","0");
      $(id + " .ImageCover").css("background-color","rgba(224, 224, 224, 0)");
    }



  </script>

  <!--These images will need to be optimised using SVG files (small ones)-->
<!--  <div id="UnderHomePost">
    <div id="UnderSub" class="Subscribe"/>

    <div id="QuadPost">

    </div>
  </div> -->
</html>
