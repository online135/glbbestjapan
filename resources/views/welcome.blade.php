<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.head');

  <body class="home page-template page-template-page-welcome page-template-page-welcome-php page page-id-18 elementor-default elementor-kit-134 elementor-page elementor-page-18"><div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 386px; width: 1903px;"><img class="parallax-slider" src="https://glbbestjapan.com/wp-content/uploads/2021/05/名称未設定のデザイン-47.png" style="transform: translate3d(0px, 0px, 0px); position: absolute; left: 0px; height: 713px; width: 1903px; max-width: none;"></div><div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 384px; width: 1903px;"><img class="parallax-slider" src="https://glbbestjapan.com/wp-content/uploads/2021/05/名称未設定のデザイン-46.png" style="transform: translate3d(0px, 0px, 0px); position: absolute; left: 0px; height: 713px; width: 1903px; max-width: none;"></div>
    @include('layouts.nav');

          <div id="top" class="heightasviewport" style="height: 589px;">
      <div class="heightasviewport splash-image" style="background-image: url(&quot;https://glbbestjapan.com/wp-content/uploads/2021/04/Top-9.png&quot;); height: 589px; display: block;"></div>        
      <div class="heightasviewport no-pointer-events" style="position: relative; height: 589px;">
        <div class="verticalcenter container" style="padding-top: 112.5px;">
          <div class="row">
            <div id="agent-splash-text" class="col-xs-120 serif animated">
              <h2 class="agent-splash-text-h2 smaller-mobile-h2">世界中があっと驚く<br>
  未来のあたりまえを創りたい</h2>
            </div>
          </div>
        </div>
      </div>

          <a href="#section-two" class="next-button animated serif" style="width:100px; height:100px;">
          <span>more</span>
      </a>
        </div>

      <div class="section" id="section-two">
      <div class="container">
        <div class="row">
          <div class="col-xs-120 text-center">
            <h3 class="section-two-h3 smaller-mobile-h2">世界のFintech技術に挑む、<br>
  エンジニアリング集団。</h3>
            <div class="desc1">ブロックチェーン技術をはじめとする最新のIT・金融システム業界・業務に精通した<br>
  知識及びIT技術を保有するエンジニアのプロフェッショナル集団であり、高度なソリューションを提供しています。</div>
            <div class="text-center">
              <img src="https://glbbestjapan.com/wp-content/uploads/2021/05/名称未設定のデザイン-43.png" class="section-two_circle_img">
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="section-3">
    <div class="separator" data-parallax="scroll" data-speed="0.6" data-image-src="https://glbbestjapan.com/wp-content/uploads/2021/05/名称未設定のデザイン-46.png">
      <div class="title">
        <div class="container">
          <div class="row">
            <div class="col-xs-120">
              <h4 class="liner">Global Best Japanについて</h4>
              <span class="lead romaji">about us</span>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="section container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <div class="row text-left">
            <div class="text-center col-sm-40 mobile-mb-30" style="padding-left:30px;padding-right:30px;">
              <div class="circleimages"><a href="{{ url('outline') }}"><img src="https://glbbestjapan.com/wp-content/uploads/2021/05/forex-2.png"></a></div>            <h5 class="text-center section3-h5">会社概要</h5>
              <div class="text-justify desc2">グローバルベストジャパンは、日本から最高のサービスを世界のクライアントに提供することを目指しています。</div>
              <a class="read-more romaji mobile-mt-0" href="{{ url('outline') }}">詳しく見る</a>          </div>
            <div class="text-center col-sm-40 mobile-mb-30" style="padding-left:30px;padding-right:30px;">
              <div class="circleimages"><a href="{{ url('business') }}"><img src="https://glbbestjapan.com/wp-content/uploads/2021/05/forex.png"></a></div>            <h5 class="text-center section3-h5">事業案内</h5>
              <div class="text-justify desc2">長年金融業界に携わった経験と豊富なITスキルをベースにクライアント様のご要望に柔軟にお応えします。</div>
              <a class="read-more romaji mobile-mt-0" href="{{ url('business') }}">詳しく見る</a>          </div>
            <div class="text-center col-sm-40" style="padding-left:30px;padding-right:30px;">
              <div class="circleimages"><a href="{{ url('recruit') }}"><img src="https://glbbestjapan.com/wp-content/uploads/2020/01/380-380_3.jpg"></a></div>            <h5 class="text-center section3-h5">採用情報</h5>
              <div class="text-justify desc2">私達とともに世界に向けて活躍する人材を求めています。<br>
  <br></div>
              <a class="read-more romaji mobile-mt-0" href="{{ url('recruit') }}">詳しく見る</a>          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.footer');

  <script type="text/javascript" src="https://glbbestjapan.com/wp-content/themes/agent_tcd033/includes/js/skip-link-focus-fix.js?ver=20130115" id="_tk-skip-link-focus-fix-js"></script>
  <script type="text/javascript" src="https://glbbestjapan.com/wp-includes/js/wp-embed.min.js?ver=5.7.1" id="wp-embed-js"></script>
  <script type="text/javascript" src="https://glbbestjapan.com/wp-includes/js/comment-reply.min.js?ver=5.7.1" id="comment-reply-js"></script>

  <script type="text/javascript">
    (function($){

      equalheight=function(t){var i,e=0,h=0,r=new Array;$(t).each(function(){if(i=$(this),$(i).height("auto"),topPostion=i.position().top,h!=topPostion){for(currentDiv=0;currentDiv<r.length;currentDiv++)r[currentDiv].height(e);r.length=0,h=topPostion,e=i.height(),r.push(i)}else r.push(i),e=e<i.height()?i.height():e;for(currentDiv=0;currentDiv<r.length;currentDiv++)r[currentDiv].height(e)})};

            $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
          $(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
        }, function() {
          $(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
        })
      

  var doHeightAsViewport = function(){
      $('.heightasviewport').css('height', $(window).height())
    }

      function fixStuff() {
        jQuery(".heightaswidth").each(function(){
          $(this).css('height', $(this).outerWidth())
        })
      }

      fixStuff();
      doHeightAsViewport();

      setInterval(fixStuff, 1000)
      setInterval(doHeightAsViewport, 300)

      equalheight('.equal-height');

      $(".verticalcenter").each(function(){
        var center = ($(this).parent().outerHeight() / 2) - parseInt($(this).parent().css('padding-top'))
        var size = $(this).outerHeight() / 2

        $(this).css('padding-top', center - size)
      })
      

      var cursor = 0
      var slides = $(".splash-image")
      slides.hide()

      var newSlide = function(){
        if( cursor >= slides.length ){
          cursor = 0
        }

        if (slides.length!=1){
          slides.fadeOut('slow')
        }
        $(slides[cursor]).fadeIn('slow')

        cursor++;
      }

      setInterval(newSlide, 3000)
      newSlide()

      $("#agent-splash-text").removeClass('translated-right')
      $("#next-button").removeClass('opaque')

      $("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html,body").animate({scrollTop:e.offset().top},1e3),!1}});
      
      if( $(window).width() < 1200 ){
        $(".navbar-toggle").click(function(){
          setTimeout(function(){
            $(".menu-item").addClass('open')  
          }, 300)
        })
      }
      
      $(".menu-item").click(function(){ })
      
      $(".menu-item a").click(function(){
        if( !$(this).attr('href') ){
          return false
        }
      })

    window.onpageshow = function(event) {
      if (event.persisted) {
        window.location.reload() 
      }
    }

    })(jQuery)

  </script>
  </body>
</html>
