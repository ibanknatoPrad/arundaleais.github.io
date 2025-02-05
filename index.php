<!-- 
Welcome, this is the default page for your hosting plan, if you are seeing this page it means you have not added any files 
to your hosting account yet.  This page can be deleted at any time.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Directnic Hosting</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js' > </script>
<style>
*{
  margin: 0;
  padding: 0;
}

body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-repeat: no-repeat;
	background-color: #eee;
	text-align:center;
}
#domain {
	margin-left:auto;
	margin-right:auto;
	height:auto;
	text-align:center;
	margin-top:150px;
	display:block;
	padding:0px;
}
#domain h1 {
	color: #4d4d4f;
	text-shadow:0px 2px #a8a8a8;
	font-size:40px;
	margin-top:0px;
	margin-bottom:0px;
	
}
#domain h2 {
	color:#f69039;
	font-size:25px;
	margin-top:0px;
	margin-bottom:0px;
	
}
#dn {
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
	width:800px;
	height:auto;
	text-align:center;
	display:block;
	padding:0px;
}
a{color:#216BB5;}
.trigger{cursor:pointer;}
.popup {
        position: absolute;
        display: none;
        z-index: 50;
        border-collapse: collapse;
}

.popup td.corner {
        height: 15px;
        width: 19px;
}

.popup td#topleft { background-image: url(images/bubble-1.png); }
.popup td.top { background-image: url(images/bubble-2.png); }
.popup td#topright { background-image: url(images/bubble-3.png); }
.popup td.left { background-image: url(images/bubble-4.png); }
.popup td.right { background-image: url(images/bubble-5.png); }
.popup td#bottomleft { background-image: url(images/bubble-6.png); }
.popup td.bottom { background-image: url(images/bubble-7.png); text-align: center;}
.popup td.bottom img { display: block; margin: 0 auto; }
.popup td#bottomright { background-image: url(images/bubble-8.png); }

.popup #msg {
        font-size: 12px;
        line-height: 1.2em;
        background-color: #fff;
        color: #666;
        font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", sans-serif;
        }
.bubbleInfo {
  position: relative;  
  margin-top:-30px;
  margin-bottom:10px;
  width:400px;
  margin-left:200px;
}
</style>
<!--[if lt IE 9]>
<style> .bubbleInfo {  margin-left:0px;} </style>
<![endif]-->
<script>
 $(function(){
  $("#domain h1").html(window.location.hostname);  
          $('.bubbleInfo').each(function () {
            var distance = 10;
            var time = 250;
            var hideDelay = 500;

            var hideDelayTimer = null;

            var beingShown = false;
            var shown = false;
            var trigger = $('.trigger', this);
            var info = $('.popup', this).css('opacity', 0);


            $([trigger.get(0), info.get(0)]).mouseover(function () {
                if (hideDelayTimer) clearTimeout(hideDelayTimer);
                if (beingShown || shown) {
                    // don't trigger the animation again
                    return;
                } else {
                    // reset position of info box
                    beingShown = true;

                    info.css({
                        top: -60,
                        left: 0,
                        display: 'block'
                    }).animate({
                        top: '-=' + distance + 'px',
                        opacity: 1
                    }, time, 'swing', function() {
                        beingShown = false;
                        shown = true;
                    });
                }

                return false;
            }).mouseout(function () {
                if (hideDelayTimer) clearTimeout(hideDelayTimer);
                hideDelayTimer = setTimeout(function () {
                    hideDelayTimer = null;
                    info.animate({
                        top: '-=' + distance + 'px',
                        opacity: 0
                    }, time, 'swing', function () {
                        shown = false;
                        info.css('display', 'none');
                    });

                }, hideDelay);

                return false;
            });
        });
  
  //end bubble
 });
</script>
</head>
<body>
<div id="domain">
<h1>Your Domain Here</h1>
<h2>coming soon</h2>
</div>
<div id="dn">
  <div class="bubbleInfo">
        <div>
            <img class="trigger" src="images/is-this-your-site.jpg" id="download" />
        </div>
        <table id="dpop" class="popup">
                <tbody><tr>
                        <td id="topleft" class="corner"></td>
                        <td class="top"></td>
                        <td id="topright" class="corner"></td>
                </tr>

                <tr>
                        <td class="left"></td>
                        <td id='msg'>
                        <div>
                          If this is your site you can go to 
                          <script>
                          document.write("<a href='http://"+window.location.hostname+"/cpanel/' >http://"+window.location.hostname+"/cpanel/</a>");           
                          </script> to login and administrate this account.
                        </div>                
                        </td>
                        <td class="right"></td>    
                </tr>

                <tr>
                        <td class="corner" id="bottomleft"></td>
                        <td class="bottom"><img width="30" height="29" alt="popup tail" src="images/bubble-tail2.png"/></td>
                        <td id="bottomright" class="corner"></td>
                </tr>
        </tbody>
        </table>
    </div>

  <div><a href="https://secure.directnic.com/dnchosting/"><img src="images/dn_logo.png" width="142" height="51" alt="hosted by directNIC" border="0px"></a></div>
</div>
</body>
</html>
