<?php require_once('anti-ddos.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herin Dev</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Josefin+Sans:wght@700&family=Quantico&family=Righteous&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  </head>
  </div>
<body class="Border" onLoad="onCreate()">
    <div class="BlurWebs">
    <div class="Topnav">
    <a class="Active">HOME</a>
    <a style="color:red;">
    <span id="fps">60.0</span> FPS</a></div>
    <br>
  <body onclick="audio.play()" onload="VanDat()">
    <div class="stars-oo">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
  </div>
  <center>
      <div id="header">
        <div id="bg_header">
          <img class="bg-img" src="https://cdn.discordapp.com/attachments/1183443842138128456/1195366008702124053/9aff0fe07a1db674923cf51e80e662ed.gif?ex=65b3ba59&is=65a14559&hm=ac3f979474963a44bacc61bad93122ee8c2960052b7fe8b2e252bcd6510d12dc&">
        </div>
        <div id="in-bg">
          <div class="VanDatAvatar">
            <img class="circle-avt" src="./img/anime-girl-2.jpg">
          </div>
          <div class="VanDatName">
            <h1 class="font-dark light">Nguyễn Đắc Chung <img src="./img/tick-blue.png" width="17" height="17">
              <p class="username">@Herin_Dev</p>
            </h1>
          </div>
          <div id="social-media">
            <div class="icon-social">
              <a href="">
                <img class="fa facebook" title="Facebook cá nhân" src="./img/facebook.png" width="19" height="19">
            </div>
            <div class="icon-social">
              <a href="">
                <img class="fa github" title="Xem dự án của tôi" src="./img/github.png" width="19" height="19">
            </div>
            <div class="icon-social">
              <a href="">
                <img class="fa youtube" title="Đăng kí kênh youtube của tôi!" src="./img/youtube.png" width="19" height="19">
            </div>
            <div class="icon-social">
              <a href="">
                <img class="fa telegram" title="Support ở đây" src="./img/telegram.png" width="19" height="19">
              </a>
            </div>
          </div>
          <hr class="hr-style">
          <div id="payments">
            <h2 class="title">THÔNG TIN CÁ NHÂN</h2>
            <p>Họ Tên Nguyễn Đắc Chung.<br>
            Sinh Năm 01/05/20** (Nam).</p>
            <p>Sở Thích Xem Anime (dân wibu).</p>
            <p>Thứ tôi dùng mỗi ngày laptop , điện thoại.<p>
                <p>App lập trình của tôi Vs Code</p>
                 <hr class="hr-style">
          <div id="payments">
            <h2 class="title">THÔNG TIN THANH TOÁN</h2>
            <div class="banking">
              <img class="img-bank" src="./img/zlp.png" width="53" height="53">
              <span class="stk" onclick="copyText('04844844249999');stk()">09******* <p class="muted">Đắc Chung Member Dev</p>
              </span>
            </div>
          </div>
        </div>
      </div>
      <img id="kbn" src="./img/vaicaloz.gif" alt="Anime Girl">
      <footer>
        <p class="muted-copyright">Design by <a class="xanh-link" title="lmao" href="https://www.facebook.com/taolacheems28727">HERIN DEV</a></p>
        <p class="muted-copyright">&copy Copyright - All rights reserved</p>
      </footer>
      </div>
    </center>
    <script src="./assets/js/index.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<!-- notify -->
</script>
    <script>
      function VanDat() {
        Swal.fire({
  imageUrl: 'https://i.imgur.com/KaxGrd0.gif',
  imageWidth: 200,
  imageHeight: 200,
  imageTitle: 'VanDatXD'
})
    }
    </script>

<!-- click tha tim -->

    <script type='text/javascript'> ! function (e, t, a) { function n() { c( ".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}" ), o(), r() } function r() { for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999"); requestAnimationFrame(r) } function o() { var t = "function" == typeof e.onclick && e.onclick; e.onclick = function (e) { t && t(), i(e) } } function i(e) { var a = t.createElement("div"); a.className = "heart", d.push({ el: a, x: e.clientX - 5, y: e.clientY - 5, scale: 1, alpha: 1, color: s() }), t.body.appendChild(a) } function c(e) { var a = t.createElement("style"); a.type = "text/css"; try { a.appendChild(t.createTextNode(e)) } catch (t) { a.styleSheet.cssText = e } t.getElementsByTagName("head")[0].appendChild(a) } function s() { return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")" } var d = []; e.requestAnimationFrame = function () { return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function (e) { setTimeout(e, 1e3 / 60) } }(), n() }(window, document); </script>

<!--
    <script>
      // day la nhac nen 
      var audio = new Audio('https://files.catbox.moe/jev9vr.mp3');
      audio.oncanplaythrough = function() {
        audio.play();
      }
      audio.loop = true;
      audio.onended = function() {
        audio.play();
      }
    </script>
-->
<script type='text/javascript'>
      //<![CDATA[
        // loading
        $(".siben").delay(5000).fadeOut("fast");
        // open link
        function openlink(url) {
          window.open(url, "_blank").focus();
        }
        </script>
  </body>
</html>
<script>              
    function VietKhanhStart() {
                       audio.play();
                             }
                                   const VietKhanh_List = [
                                    "//files.catbox.moe/p2y2x6.mp3", // thôi thì em hãy về

                                    "//files.catbox.moe/luj77v.mp3", // nào cưới

                                    "//files.catbox.moe/i3cv4q.mp3", // và chỉ mong trong con tym

                                    "//files.catbox.moe/wx8l9n.mp3", //gió

                                    "//files.catbox.moe/gvvchw.mp3", // fly away
                                         ];
                                         //Random music
                                         let index = Math.floor(Math.random() * VietKhanh_List.length);
                                         const audio = new Audio(VietKhanh_List[index]);
                                         function VietKhanhAudio() {
                                           audio.play();
                                           }
                                           document.addEventListener("click", VietKhanhAudio);
                                           audio.addEventListener("ended", function() {
                                             index = (index + 1) % VietKhanh_List.length;
                                               audio.src = VietKhanh_List[index];
                                                 audio.play();
                                                 });
</script>
          </body>
                <script>//<![CDATA[
                      const disabledKeys = ["c", "C", "x", "J", "u", "I"];
                      const showAlert = e => {
                        e.preventDefault();
                        return alert("F12 CÁI CON CẶC !");
                      }
                      document.addEventListener("contextmenu", e => {
                        showAlert(e);
                      });
                      document.addEventListener("keydown", e => {
                        // calling showAlert() function, if the pressed key matched to disabled keys
                        if((e.ctrlKey && disabledKeys.includes(e.key)) || e.key === "F12") {
                          showAlert(e);
                        }
                      });
                      window.addEventListener("load",function(){
                        try {
                          !function t(n) {
                            1 === ("" + n / n).length && 0 !== n || function() {}.constructor("debugger")(), t(++n)
                          }(0)
                        } catch (n) {
                          setTimeout(t, 100)
                        }
                      });
                //]]></script>
                </div>
			</div>
		</div>
        <script>

//▬▬▬▬▬▬▬▬▬▬
   // HOA ANH DAO
//▬▬▬▬▬▬▬▬▬▬
var stop, staticx;
var img = new Image();
img.src = "https://i.imgur.com/R9XUjfF.png";

			function Sakura(x, y, s, r, fn) {
				this.x = x;
				this.y = y;
				this.s = s;
				this.r = r;
				this.fn = fn;
			}

			Sakura.prototype.draw = function(cxt) {
				cxt.save();
				var xc = 40 * this.s / 4;
				cxt.translate(this.x, this.y);
				cxt.rotate(this.r);
				cxt.drawImage(img, 0, 0, 40 * this.s, 40 * this.s)
				cxt.restore();
			}

			Sakura.prototype.update = function() {
				this.x = this.fn.x(this.x, this.y);
				this.y = this.fn.y(this.y, this.y);
				this.r = this.fn.r(this.r);
				if(this.x > window.innerWidth ||
					this.x < 0 ||
					this.y > window.innerHeight ||
					this.y < 0
				) {
					this.r = getRandom('fnr');
					if(Math.random() > 0.4) {
						this.x = getRandom('x');
						this.y = 0;
						this.s = getRandom('s');
						this.r = getRandom('r');
					} else {
						this.x = window.innerWidth;
						this.y = getRandom('y');
						this.s = getRandom('s');
						this.r = getRandom('r');
					}
				}
			}

			SakuraList = function() {
				this.list = [];
			}
			SakuraList.prototype.push = function(sakura) {
				this.list.push(sakura);
			}
			SakuraList.prototype.update = function() {
				for(var i = 0, len = this.list.length; i < len; i++) {
					this.list[i].update();
				}
			}
			SakuraList.prototype.draw = function(cxt) {
				for(var i = 0, len = this.list.length; i < len; i++) {
					this.list[i].draw(cxt);
				}
			}
			SakuraList.prototype.get = function(i) {
				return this.list[i];
			}
			SakuraList.prototype.size = function() {
				return this.list.length;
			}

			function getRandom(option) {
				var ret, random;
				switch(option) {
					case 'x':
						ret = Math.random() * window.innerWidth;
						break;
					case 'y':
						ret = Math.random() * window.innerHeight;
						break;
					case 's':
						ret = Math.random();
						break;
					case 'r':
						ret = Math.random() * 5;
						break;
					case 'fnx':
						random = -0.5 + Math.random() * 1;
						ret = function(x, y) {
							return x + 0.5 * random - 1;
						};
						break;
					case 'fny':
						random = 0.5 + Math.random() * 0.5
						ret = function(x, y) {
							return y + random;
						};
						break;
					case 'fnr':
						random = Math.random() * 0.01;
						ret = function(r) {
							return r + random;
						};
						break;
				}
				return ret;
			}

			function startSakura() {

				requestAnimationFrame = window.requestAnimationFrame ||
					window.mozRequestAnimationFrame ||
					window.webkitRequestAnimationFrame ||
					window.msRequestAnimationFrame ||
					window.oRequestAnimationFrame;
				var canvas = document.createElement('canvas'),
					cxt;
				staticx = true;
				canvas.height = window.innerHeight;
				canvas.width = window.innerWidth;
				canvas.setAttribute('style', 'position: fixed;left: 0;top: 0;pointer-events: none;');
				canvas.setAttribute('id', 'canvas_sakura');
				document.getElementsByTagName('body')[0].appendChild(canvas);
				cxt = canvas.getContext('2d');
				var sakuraList = new SakuraList();
				for(var i = 0; i < 50; i++) {
					var sakura, randomX, randomY, randomS, randomR, randomFnx, randomFny;
					randomX = getRandom('x');
					randomY = getRandom('y');
					randomR = getRandom('r');
					randomS = getRandom('s');
					randomFnx = getRandom('fnx');
					randomFny = getRandom('fny');
					randomFnR = getRandom('fnr');
					sakura = new Sakura(randomX, randomY, randomS, randomR, {
						x: randomFnx,
						y: randomFny,
						r: randomFnR
					});
					sakura.draw(cxt);
					sakuraList.push(sakura);
				}
				stop = requestAnimationFrame(function() {
					cxt.clearRect(0, 0, canvas.width, canvas.height);
					sakuraList.update();
					sakuraList.draw(cxt);
					stop = requestAnimationFrame(arguments.callee);
				})
			}

			window.onresize = function() {
				var canvasSnow = document.getElementById('canvas_snow');
				canvasSnow.width = window.innerWidth;
				canvasSnow.height = window.innerHeight;
			}

			img.onload = function() {
				startSakura();
			}

			function stopp() {
				if(staticx) {
					var child = document.getElementById("canvas_sakura");
					child.parentNode.removeChild(child);
					window.cancelAnimationFrame(stop);
					staticx = false;
				} else {
					startSakura();
				}
			}
		


//////////////////////////////////////////////////////////////

        </script>
	</body>