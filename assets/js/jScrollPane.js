!function(t){t.jScrollPaneCusel={active:[]},t.fn.jScrollPaneCusel=function(i){i=t.extend({},t.fn.jScrollPaneCusel.defaults,i);var r=function(){return!1};return this.each(function(){function n(){var t=(_-D)/i.animateStep;t>1||-1>t?N(D+t):(N(_),ii())}var e=t(this),a=this.parentNode.offsetWidth;e.css("overflow","hidden");var o=this;if(t(this).parent().is(".jScrollPaneContainer")){var s=i.maintainPosition?e.position().top:0,l=t(this).parent(),c=a,d=l.outerHeight(),h=d;t(">.jScrollPaneTrack, >.jScrollArrowUp, >.jScrollArrowDown",l).remove(),e.css({top:0})}else{var s=0;this.originalPadding=e.css("paddingTop")+" "+e.css("paddingRight")+" "+e.css("paddingBottom")+" "+e.css("paddingLeft"),this.originalSidePaddingTotal=(parseInt(e.css("paddingLeft"))||0)+(parseInt(e.css("paddingRight"))||0);var c=a,d=e.innerHeight(),h=d;if(e.wrap("<div class='jScrollPaneContainer'></div>").parent().css({height:d+"px",width:c+"px"}),!window.navigator.userProfile){var u=parseInt(t(this).parent().css("border-left-width"))+parseInt(t(this).parent().css("border-right-width"));c-=u,t(this).css("width",c+"px").parent().css("width",c+"px")}t(document).bind("emchange",function(){e.jScrollPaneCusel(i)})}if(i.reinitialiseOnImageLoad){var p=t.data(o,"jScrollPaneImagesToLoad")||t("img",e),f=[];p.length&&p.each(function(r,n){t(this).bind("load",function(){-1==t.inArray(r,f)&&(f.push(n),p=t.grep(p,function(t){return t!=n}),t.data(o,"jScrollPaneImagesToLoad",p),i.reinitialiseOnImageLoad=!1,e.jScrollPaneCusel(i))}).each(function(){(this.complete||void 0===this.complete)&&(this.src=this.src)})})}var g=this.originalSidePaddingTotal,v={height:"auto",width:c-i.scrollbarWidth-i.scrollbarMargin-g+"px"};i.scrollbarOnLeft?v.paddingLeft=i.scrollbarMargin+i.scrollbarWidth+"px":v.paddingRight=i.scrollbarMargin+"px",e.css(v);var m=e.outerHeight(),b=d/m;if(.99>b){var w=e.parent();w.append(t('<div class="jScrollPaneTrack"></div>').css({width:i.scrollbarWidth+"px"}).append(t('<div class="jScrollPaneDrag"></div>').css({width:i.scrollbarWidth+"px"}).append(t('<div class="jScrollPaneDragTop"></div>').css({width:i.scrollbarWidth+"px"}),t('<div class="jScrollPaneDragBottom"></div>').css({width:i.scrollbarWidth+"px"}))));var S=t(">.jScrollPaneTrack",w),j=t(">.jScrollPaneTrack .jScrollPaneDrag",w);if(i.showArrows){var P,x,I,C,T=function(){(C>4||C%4==0)&&N(D+x*k),C++},A=function(){t("html").unbind("mouseup",A),P.removeClass("jScrollActiveArrowButton"),clearInterval(I)},M=function(){t("html").bind("mouseup",A),P.addClass("jScrollActiveArrowButton"),C=0,T(),I=setInterval(T,100)};w.append(t("<div></div>").attr({"class":"jScrollArrowUp"}).css({width:i.scrollbarWidth+"px"}).bind("mousedown",function(){return P=t(this),x=-1,M(),this.blur(),!1}).bind("click",r),t("<div></div>").attr({"class":"jScrollArrowDown"}).css({width:i.scrollbarWidth+"px"}).bind("mousedown",function(){return P=t(this),x=1,M(),this.blur(),!1}).bind("click",r));var $=t(">.jScrollArrowUp",w),L=t(">.jScrollArrowDown",w);if(i.arrowSize)h=d-i.arrowSize-i.arrowSize,S.css({height:h+"px",top:i.arrowSize+"px"});else{var W=$.height();i.arrowSize=W,h=d-W-L.height(),S.css({height:h+"px",top:W+"px"})}}var y,H,k,z=t(this).css({position:"absolute",overflow:"visible"}),D=0,B=b*d/2,O=function(t,i){var r="X"==i?"Left":"Top";return t["page"+i]||t["client"+i]+(document.documentElement["scroll"+r]||document.body["scroll"+r])||0},R=function(){return!1},U=function(){ii(),y=j.offset(!1),y.top-=D,H=h-j[0].offsetHeight,k=2*i.wheelSpeed*H/m},Y=function(i){return U(),B=O(i,"Y")-D-y.top,t("html").bind("mouseup",E).bind("mousemove",Q),t.browser.msie&&t("html").bind("dragstart",R).bind("selectstart",R),!1},E=function(){t("html").unbind("mouseup",E).unbind("mousemove",Q),B=b*d/2,t.browser.msie&&t("html").unbind("dragstart",R).unbind("selectstart",R)},N=function(t){t=0>t?0:t>H?H:t,D=t,j.css({top:t+"px"});var r=t/H;z.css({top:(d-m)*r+"px"}),e.trigger("scroll"),i.showArrows&&($[0==t?"addClass":"removeClass"]("disabled"),L[t==H?"addClass":"removeClass"]("disabled"))},Q=function(t){N(O(t,"Y")-y.top-B)},X=Math.max(Math.min(b*(d-2*i.arrowSize),i.dragMaxHeight),i.dragMinHeight);j.css({height:X+"px"}).bind("mousedown",Y);var q,F,G,J=function(){(F>8||F%4==0)&&N(D-(D-G)/2),F++},K=function(){clearInterval(q),t("html").unbind("mouseup",K).unbind("mousemove",V)},V=function(t){G=O(t,"Y")-y.top-B},Z=function(i){U(),V(i),F=0,t("html").bind("mouseup",K).bind("mousemove",V),q=setInterval(J,100),J()};S.bind("mousedown",Z),w.bind("mousewheel",function(t,i){U(),ii();N(D-i*k);return!1});var _,ti,ii=function(){ti&&(clearInterval(ti),delete _)},ri=function(r,a){if("string"==typeof r){if($e=t(r,e),!$e.length)return;r=$e.offset().top-e.offset().top}w.scrollTop(0),ii();var o=-r/(d-m)*H;a||!i.animateTo?N(o):(_=o,ti=setInterval(n,i.animateInterval))};e[0].scrollTo=ri,e[0].scrollBy=function(t){var i=-parseInt(z.css("top"))||0;ri(i+t)},U(),ri(-s,!0),t("*",this).bind("focus",function(){for(var r=t(this),n=0;r[0]!=e[0];)n+=r.position().top,r=r.offsetParent();var a=-parseInt(z.css("top"))||0,o=a+d,s=n>a&&o>n;if(!s){var l=n-i.scrollbarMargin;n>a&&(l+=t(this).height()+15+i.scrollbarMargin-d),ri(l)}}),location.hash&&ri(location.hash),t(document).bind("click",function(i){if($target=t(i.target),$target.is("a")){var r=$target.attr("href");"#"==r.substr(0,1)&&ri(r)}}),t.jScrollPaneCusel.active.push(e[0])}else e.css({height:d+"px",width:c-this.originalSidePaddingTotal+"px",padding:this.originalPadding}),e.parent().unbind("mousewheel")})},t.fn.jScrollPaneRemoveCusel=function(){t(this).each(function(){$this=t(this);var i=$this.parent();i.is(".jScrollPaneContainer")&&($this.css({top:"",height:"",width:"",padding:"",overflow:"",position:""}),$this.attr("style",$this.data("originalStyleTag")),i.after($this).remove())})},t.fn.jScrollPaneCusel.defaults={scrollbarWidth:10,scrollbarMargin:5,wheelSpeed:18,showArrows:!1,arrowSize:0,animateTo:!1,dragMinHeight:1,dragMaxHeight:99999,animateInterval:100,animateStep:3,maintainPosition:!0,scrollbarOnLeft:!1,reinitialiseOnImageLoad:!1},t(window).bind("unload",function(){for(var i=t.jScrollPaneCusel.active,r=0;r<i.length;r++)i[r].scrollTo=i[r].scrollBy=null})}(jQuery);
