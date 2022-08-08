<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      @include('layouts.head');
    <body class="page-template-default page page-id-31 elementor-default elementor-kit-134 elementor-page elementor-page-31"><div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: -300px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 500px; width: 1903px;"><img class="parallax-slider" src="https://glbbestjapan.com/wp-content/uploads/2020/01/会社概要ヘッダーpc.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: 134px; left: 0px; height: 713px; width: 1903px; max-width: none;"></div>
	
@include('layouts.nav');

<div class="container-fluid page_header_image">
	<div class="row">
		<div class="col-xs-120 page-splash" data-parallax="scroll" data-image-src="https://glbbestjapan.com/wp-content/uploads/2020/01/会社概要ヘッダーpc.jpg"></div>
	</div>
</div>

<div class="container" style=" background:white">
  
 {{ Breadcrumbs::render('Contact') }}
 
</ul>
		<div class="row mt40 mb40">
		<div class="col-sm-120 nm30">
						<h2 class="headline text-center page_headline">お問い合わせ</h2>
								</div>
	</div>
	</div>

<div class="container nm30">
				<div class="row mb80 mobile-mb-30">
				<div class="col-sm-120">
  <style>
    
    .tcd-submit-button{
      display:inline-block;
      width:auto;
      font-weight:700;
      text-align:center;
      vertical-align:middle;
      -webkit-transition:all .25s ease-in-out;
      -moz-transition:all .25s ease-in-out;
      -o-transition:all .25s ease-in-out;
      -ms-transition:all .25s ease-in-out;
      transition:all .25s ease-in-out;

            
                  border-radius:3px;    }
    .tcd-submit-button:hover{
          }

    .workflow_left_td{
      background-color:#FFFFFF!important;    }

    .workflow_right_td{
      background-color:#FFFFFF!important;    }

    .workflow_top_th{
      background-color:#FFFFFF!important;    }    
  </style>
  <script type="text/javascript">
      const app = angular.module('app211119', [])
      app.controller('MainCtrl211119', function($scope, $http) {
        $scope.data = {
            "name":"\u304a\u554f\u3044\u5408\u308f\u305b",
            "title":"\u304a\u554f\u3044\u5408\u308f\u305b",
            "mainbgcol":"FFFFFF",
            "textboxcol":"FFFFFF",
            "col1":"FFFFFF",
            "textcol1":"000000",
            "col2":"FFFFFF",
            "textcol2":"000000",
            "col3":"FFFFFF",
            "textcol3":"000000",
            "bordercol":"DDDDDD",
            "type":"form",
            "tablewidth":"100%",
            "colwidth":"30%",
            "border":true,
            "steps":[
                {"label1":"\u304a\u540d\u524d","label2":null,"cols":[],"required":true,"answer":"","type":"text","options":null},
                {"label1":"\u3075\u308a\u304c\u306a","label2":null,"cols":[],"required":true,"answer":"","type":"text","options":null},
                {"label1":"\u96fb\u8a71\u756a\u53f7","label2":null,"cols":[],"required":true,"answer":"","type":"text","options":null},
                {"label1":"\u30e1\u30fc\u30eb\u30a2\u30c9\u30ec\u30b9","label2":null,"cols":[],"required":true,"answer":"","type":"email","options":null},
                {"label1":"\u3054\u7528\u4ef6","label2":null,"cols":[],"required":false,"answer":"","type":"radio","options":"\u4f1a\u793e\u306b\u3064\u3044\u3066\n\u63a1\u7528\u306b\u3064\u3044\u3066"},
                {"label1":"\u5e0c\u671b\u8077\u7a2e\uff08\u63a1\u7528\u5e0c\u671b\u306e\u65b9\uff09","label2":null,"cols":[],"required":false,"answer":"","type":"radio","options":"\u65b0\u5352\u63a1\u7528\n\u4e2d\u9014\u63a1\u7528"},
                {"label1":"\u304a\u554f\u3044\u5408\u308f\u305b\u5185\u5bb9","label2":null,"cols":[],"required":true,"answer":"","type":"textarea","options":null}],"columnpadding":"10","layoutstyle":null,"column1":null,"column1head":null,"column1img":null,"column2":null,"column2head":null,"column2img":null,"column3":null,"column3img":null,"column4":null,"column4img":null,"submit":"\u78ba\u8a8d\u753b\u9762\u3078","completed":"\u3054\u9023\u7d61\u3042\u308a\u304c\u3068\u3046\u3054\u3056\u3044\u307e\u3059\u3002\u62c5\u5f53\u8005\u304b\u3089\u3054\u9023\u7d61\u3044\u305f\u3057\u307e\u3059\u306e\u3067\u5c11\u3005\u304a\u5f85\u3061\u304f\u3060\u3055\u3044\u3002","submitalign":"center","submitborderradius":3,"mailsubj":"\u3010\u30b5\u30a4\u30c8\u304b\u3089\u304a\u554f\u3044\u5408\u308f\u305b\u304c\u3042\u308a\u307e\u3057\u305f\u3011","mailto":"contact@glbbestjapan.com","mailnotif":false,"id":"2","mail":null};
        $scope.data.steps.forEach(function(step, i){
          if( $scope.data.steps[i].options ){
            $scope.data.steps[i].options = step.options.split("\n")
          }
        })
        $scope.confirmForm = function(){
          $scope.confirm = true
        }

        $scope.sendForm = function(){
          let str = "";
          let mail = "";
          $scope.data.steps.forEach(function(row){
            str = str + row.label1 + ': ' + row.answer
            str = str + '\r\n----------\r\n'
            if( row.type == 'email' ){
              mail = row.answer
            }
          })
          let obj = { 
            action: "tcd_submit_form",
            data: str,
            steps: angular.toJson($scope.data.steps),
            mail: mail,
            id: 2 }
          $http({
            url: "/contact/submitForm",
            method: "POST",
            params: obj,
          }).then(function(res){
            $scope.completed = true
        })
        }
      })
  </script>
  <div ng-app="app211119" ng-controller="MainCtrl211119" class="ng-scope">

    <h2 class="text-center ng-hide" ng-show="completed">
      ご連絡ありがとうございます。担当者からご連絡いたしますので少々お待ちください。
    </h2>

    <form ng-submit="confirmForm()" ng-hide="completed">
      <table class="workflow_form table table-bordered tcd-workflow wf-form" style="table-layout:auto; background:#FFFFFF">
        <tbody><tr class="workflow_form_headline" style="color:#000000">
          <th class="text-center workflow_top_th" colspan="2">
            <b>@{{data.name}}</b>
          </th>
        </tr>
        <!-- ngRepeat: row in data.steps -->
        <tr ng-repeat="row in data.steps" class="ng-scope">
          <td style="width:30%; vertical-align:middle" class="text-center workflow_left_td">
            <span style="color:#000000;">
                @{{row.label1}}
            </span>

            <!-- ngIf: row.required == '1' -->
            <span style="color:firebrick" ng-if="row.required == '1'">
                &nbsp;*
            </span>
            <!-- end ngIf: row.required == '1' -->
          </td>


          <!-- 按確認前顯示的內容 -->
          <td ng-hide="confirm" class="workflow_right_td">
            <!-- ngIf: row.type == 'text' -->
            <input style="background:#FFFFFF" class="form-control ng-scope" type="text" ng-if="row.type == 'text'" ng-model="row.answer" ng-required="row.required == '1'" required="required" placeholder=" @{{row.label1}}">
            <!-- end ngIf: row.type == 'text' -->

            <!-- ngIf: row.type == 'email' -->
            <input style="background:#FFFFFF" class="form-control ng-scope" type="email" ng-if=" row.type == 'email' " ng-model="row.answer" ng-required=" row.required == '1' " required="required" placeholder=" @{{row.label1}}">
            <!-- end ngIf: row.type == 'email' -->

            <!-- ngIf: row.type == 'radio' -->
            <fieldset ng-if="row.type == 'radio'" class="ng-scope">
              <!-- ngRepeat: option in row.options track by $index -->
              <div style="display:inline-block" ng-repeat="option in row.options track by $index" class="ng-scope">
                <input type="radio" id="@{{option}}" value="@{{option}}" ng-model="row.answer" name="45">&nbsp;&nbsp;@{{option}}
                <label for="@{{option}}" class="ng-binding"></label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
              <!-- end ngRepeat: option in row.options track by $index -->
            </fieldset>
              <!-- end ngIf: row.type == 'radio' -->

              <!-- ngIf: row.type == 'textarea' -->
              <textarea style="background:#FFFFFF" class="form-control ng-scope" ng-if="row.type == 'textarea'" ng-model="row.answer" ng-required="row.required == '1'" required="required" placeholder=" @{{row.label1}}"></textarea>
              <!-- ngIf: row.type == 'textarea' -->
          </td>

            <!-- 按確認後顯示的內容 -->
            <td ng-show="confirm" class="ng-binding">@{{row.answer}}</td>

          </tr>
        <!-- end ngRepeat: row in data.steps -->
        </tbody>
      </table>
      <div class="text-center" colspan="2" ng-hide="confirm">
        <input type="submit" class="tcd-submit-button" value="確認画面へ">
      </div>

      <div class="text-center ng-hide" colspan="2" ng-show="confirm">
        <button type="button" class="tcd-submit-button" ng-click="confirm = false">キャンセル</button>
        <button type="button" class="tcd-submit-button" ng-click="sendForm()">送信</button>
      </div>
    </form>
</div>
</div>
			</div>
	</div>

  <div class="container">
    <div class="row mb10">
      <div class="col-sm-120">
        <div class="desc1 mb0"><p>※お問い合わせ内容によって、担当者からの返答に数日かかる場合がございますが、必ず返答させていただきます。</p>
      </div>
    </div>
  </div>
  <div class="row mb80 mobile-mb-30">
    <div class="col-sm-120">
      <p>・当社から返信致しますメールは、お問い合わせ頂きましたお客様に対してお答えさせて頂くことを目的としています。当社の許可なくメールの一部または全体を転載、二次使用すること、ならびに当該お客様以外に開示することは固くお断りいたします。</p>
      <p>・お問い合わせの内容によってはグループ会社、並びに店舗よりご連絡させて頂く場合がございます。</p>
      <p>・お問い合わせの内容によっては電話等でのお答えをさせていただく場合がございます。</p>
      <p>・こちらの問い合わせ先からの営業・商談・営利目的のメール送信はお断りいたします。</p>
      <p>・回答に時間がかかる場合がございます。</p>
      <p>また、頂いたご意見・お問い合わせすべてに対し、ご希望に添えない場合がございます。<br>
      お急ぎの場合はお電話にて直接お問い合わせください。</p>
    </div>
  </div>
</div>


@include('layouts.footer');

<script type="text/javascript" src="https://glbbestjapan.com/wp-content/themes/agent_tcd033/includes/js/skip-link-focus-fix.js?ver=20130115" id="_tk-skip-link-focus-fix-js"></script>
<script type="text/javascript" src="https://glbbestjapan.com/wp-includes/js/wp-embed.min.js?ver=5.7.1" id="wp-embed-js"></script>
<script type="text/javascript" src="https://glbbestjapan.com/wp-includes/js/comment-reply.min.js?ver=5.7.1" id="comment-reply-js"></script>

<script type="text/javascript">
	(function($){

    equalheight=function(t){
      var i, e=0, h=0, r=new Array;
      $(t).each(function(){
        if(i=$(this),$(i).height("auto"),topPostion=i.position().top,h!=topPostion){
          for(currentDiv=0;currentDiv<r.length;currentDiv++)r[currentDiv].height(e);r.length=0,h=topPostion,e=i.height(),r.push(i)
        }else r.push(i),e=e<i.height()?i.height():e;
        for(currentDiv=0;currentDiv<r.length;currentDiv++)r[currentDiv].height(e)
      })};


    if( $( window ).width() > 767 ){
      $('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
    		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
    	}, function() {
    		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
    	})
  	}

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

      slides.fadeOut('slow')
      $(slides[cursor]).fadeIn('slow')

      cursor++;
    }

    setInterval(newSlide, 3000)
    newSlide()

		$("#agent-splash-text").removeClass('translated-right')
		$("#next-button").removeClass('opaque')

    $("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=jQuery(this.hash);if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html,body").animate({scrollTop:e.offset().top},1e3),!1}});

    $(".navbar-toggle").click(function(){
      setTimeout(function(){
        $(".menu-item").addClass('open')  
      }, 300)
    })
    
    $(".menu-item").click(function(){ })
    
    $(".menu-item a").click(function(){
      if( !$(this).attr('href') ){
        return false
      }
    })

	})(jQuery)
</script>
</body>
</html>
