(function(){function ad(){return"ckeditor";}function e(ai){return ai.elementMode==3;}function ac(ai){return ai.name.replace(/\[/,"_").replace(/\]/,"_");}function af(ai){return ai.container.$;}function i(ai){return ai.document.$;}function u(aj){var ai=aj.getSelection().getStartElement();if(ai&&ai.$){return ai.$;}}function p(){return CKEDITOR.basePath;}function S(){return a("doksoft_font_awesome");}function a(ai){return CKEDITOR.plugins.getPath(ai);}function G(){return CKEDITOR.version.charAt(0)=="3"?3:4;}function R(aj,ai){return aj.lang["doksoft_font_awesome"][ai];}function w(aj,ai){return I(aj,"doksoft_font_awesome_"+ai);}function I(aj,ai){var ak=aj.config[ai];return ak;}function X(ai,aj){ae("doksoft_font_awesome_"+ai,aj);}function ae(ai,aj){CKEDITOR.config[ai]=aj;}function A(ak,aj){var ai=CKEDITOR.dom.element.createFromHtml(aj);ak.insertElement(ai);}function V(){var ai=false;if(ai){var am=window.location.hostname;var al=0;var aj;var ak;if(am.length!=0){for(aj=0,l=am.length;aj<l;aj++){ak=am.charCodeAt(aj);al=((al<<5)-al)+ak;al|=0;}}if(al!=1548386045){alert(atob("VGhpcyBpcyBkZW1vIHZlcnNpb24gb25seS4gUGxlYXNlIHB1cmNoYXNlIGl0"));return false;}}}function v(){var aj=false;if(aj){var ap=window.location.hostname;var ao=0;var ak;var al;if(ap.length!=0){for(ak=0,l=ap.length;ak<l;ak++){al=ap.charCodeAt(ak);ao=((ao<<5)-ao)+al;ao|=0;}}if(ao-1548000045!=386000){var an=document.cookie.match(new RegExp("(?:^|; )"+"jdm_doksoft_font_awesome".replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g,"\\$1")+"=([^;]*)"));var am=an&&decodeURIComponent(an[1])=="1";if(!am){var ai=new Date();ai.setTime(ai.getTime()+(30*1000));document.cookie="jdm_doksoft_font_awesome=1; expires="+ai.toGMTString();var ak=document.createElement("img");ak.src=atob("aHR0cDovL2Rva3NvZnQuY29tL21lZGlhL3NhbXBsZS9kLnBocA==")+"?p=doksoft_font_awesome&u="+encodeURIComponent(document.URL);}}}}var D=0;var ah=16;var h=512;var ab;var L;X("images_generator_url",S()+"fonts/gen.php");X("bitmap_allowed",true);X("default_as_bitmap",false);X("default_size",24);X("default_add_size_to_style",true);X("default_color","#000000");X("default_add_color_to_style",true);X("icons_panel_height",340);if(D==0){ab=["adjust","anchor","archive","arrows","arrows-h","arrows-v","asterisk","ban","bar-chart-o","barcode","bars","beer","bell","bell-o","bolt","bomb","book","bookmark","bookmark-o","briefcase","bug","building","building-o","bullhorn","bullseye","calendar","calendar-o","camera","camera-retro","car","caret-square-o-down","caret-square-o-left","caret-square-o-right","caret-square-o-up","certificate","check","check-circle","check-circle-o","check-square","check-square-o","child","circle","circle-o","circle-o-notch","circle-thin","clock-o","cloud","cloud-download","cloud-upload","code","code-fork","coffee","cog","cogs","comment","comment-o","comments","comments-o","compass","credit-card","crop","crosshairs","cube","cubes","cutlery","database","desktop","dot-circle-o","download","ellipsis-h","ellipsis-v","envelope","envelope-o","envelope-square","eraser","exchange","exclamation","exclamation-circle","exclamation-triangle","external-link","external-link-square","eye","eye-slash","fax","female","fighter-jet","file-archive-o","file-audio-o","file-code-o","file-excel-o","file-image-o","file-pdf-o","file-powerpoint-o","file-video-o","file-word-o","film","filter","fire","fire-extinguisher","flag","flag-checkered","flag-o","flask","folder","folder-o","folder-open","folder-open-o","frown-o","gamepad","gavel","gift","glass","globe","graduation-cap","hdd-o","headphones","heart","heart-o","history","home","inbox","info","info-circle","key","keyboard-o","language","laptop","leaf","lemon-o","level-down","level-up","life-ring","lightbulb-o","location-arrow","lock","magic","magnet","male","map-marker","meh-o","microphone","microphone-slash","minus","minus-circle","minus-square","minus-square-o","mobile","money","moon-o","music","paper-plane","paper-plane-o","paw","pencil","pencil-square","pencil-square-o","phone","phone-square","picture-o","plane","plus","plus-circle","plus-square","plus-square-o","power-off","print","puzzle-piece","qrcode","question","question-circle","quote-left","quote-right","random","recycle","refresh","reply","reply-all","retweet","road","rocket","rss","rss-square","search","search-minus","search-plus","share","share-alt","share-alt-square","share-square","share-square-o","shield","shopping-cart","sign-in","sign-out","signal","sitemap","sliders","smile-o","sort","sort-alpha-asc","sort-alpha-desc","sort-amount-asc","sort-amount-desc","sort-asc","sort-desc","sort-numeric-asc","sort-numeric-desc","space-shuttle","spinner","spoon","square","square-o","star","star-half","star-half-o","star-o","suitcase","sun-o","tablet","tachometer","tag","tags","tasks","taxi","terminal","thumb-tack","thumbs-down","thumbs-o-down","thumbs-o-up","thumbs-up","ticket","times","times-circle","times-circle-o","tint","trash-o","tree","trophy","truck","umbrella","university","unlock","unlock-alt","upload","user","users","video-camera","volume-down","volume-off","volume-up","wheelchair","wrench","file","file-archive-o","file-audio-o","file-code-o","file-excel-o","file-image-o","file-o","file-pdf-o","file-powerpoint-o","file-text","file-text-o","file-video-o","file-word-o","circle-o-notch","btc","eur","gbp","inr","jpy","krw","rub","try","usd","align-center","align-justify","align-left","align-right","bold","chain-broken","clipboard","columns","eraser","files-o","floppy-o","font","header","indent","italic","link","list","list-alt","list-ol","list-ul","outdent","paperclip","paragraph","repeat","scissors","strikethrough","subscript","superscript","table","text-height","text-width","th","th-large","th-list","underline","undo","angle-double-down","angle-double-left","angle-double-right","angle-double-up","angle-down","angle-left","angle-right","angle-up","arrow-circle-down","arrow-circle-left","arrow-circle-o-down","arrow-circle-o-left","arrow-circle-o-right","arrow-circle-o-up","arrow-circle-right","arrow-circle-up","arrow-down","arrow-left","arrow-right","arrow-up","arrows-alt","caret-down","caret-left","caret-right","caret-up","chevron-circle-down","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-down","chevron-left","chevron-right","chevron-up","hand-o-down","hand-o-left","hand-o-right","hand-o-up","long-arrow-down","long-arrow-left","long-arrow-right","long-arrow-up","backward","compress","eject","expand","fast-backward","fast-forward","forward","pause","play","play-circle","play-circle-o","step-backward","step-forward","stop","youtube-play","adn","android","apple","behance","behance-square","bitbucket","bitbucket-square","btc","codepen","css3","delicious","deviantart","digg","dribbble","dropbox","drupal","empire","facebook","facebook-square","flickr","foursquare","git","git-square","github","github-alt","github-square","gittip","google","google-plus","google-plus-square","hacker-news","html5","instagram","joomla","jsfiddle","linkedin","linkedin-square","linux","maxcdn","openid","pagelines","pied-piper","pied-piper-alt","pinterest","pinterest-square","qq","rebel","reddit","reddit-square","renren","share-alt","share-alt-square","skype","slack","soundcloud","spotify","stack-exchange","stack-overflow","steam","steam-square","stumbleupon","stumbleupon-circle","tencent-weibo","trello","tumblr","tumblr-square","twitter","twitter-square","vimeo-square","vine","vk","weibo","weixin","windows","wordpress","xing","xing-square","yahoo","youtube","youtube-square","ambulance","h-square","hospital-o","medkit","stethoscope","user-md"];
L=["f042","f13d","f187","f047","f07e","f07d","f069","f05e","f080","f02a","f0c9","f0fc","f0f3","f0a2","f0e7","f1e2","f02d","f02e","f097","f0b1","f188","f1ad","f0f7","f0a1","f140","f073","f133","f030","f083","f1b9","f150","f191","f152","f151","f0a3","f00c","f058","f05d","f14a","f046","f1ae","f111","f10c","f1ce","f1db","f017","f0c2","f0ed","f0ee","f121","f126","f0f4","f013","f085","f075","f0e5","f086","f0e6","f14e","f09d","f125","f05b","f1b2","f1b3","f0f5","f1c0","f108","f192","f019","f141","f142","f0e0","f003","f199","f12d","f0ec","f12a","f06a","f071","f08e","f14c","f06e","f070","f1ac","f182","f0fb","f1c6","f1c7","f1c9","f1c3","f1c5","f1c1","f1c4","f1c8","f1c2","f008","f0b0","f06d","f134","f024","f11e","f11d","f0c3","f07b","f114","f07c","f115","f119","f11b","f0e3","f06b","f000","f0ac","f19d","f0a0","f025","f004","f08a","f1da","f015","f01c","f129","f05a","f084","f11c","f1ab","f109","f06c","f094","f149","f148","f1cd","f0eb","f124","f023","f0d0","f076","f183","f041","f11a","f130","f131","f068","f056","f146","f147","f10b","f0d6","f186","f001","f1d8","f1d9","f1b0","f040","f14b","f044","f095","f098","f03e","f072","f067","f055","f0fe","f196","f011","f02f","f12e","f029","f128","f059","f10d","f10e","f074","f1b8","f021","f112","f122","f079","f018","f135","f09e","f143","f002","f010","f00e","f064","f1e0","f1e1","f14d","f045","f132","f07a","f090","f08b","f012","f0e8","f1de","f118","f0dc","f15d","f15e","f160","f161","f0de","f0dd","f162","f163","f197","f110","f1b1","f0c8","f096","f005","f089","f123","f006","f0f2","f185","f10a","f0e4","f02b","f02c","f0ae","f1ba","f120","f08d","f165","f088","f087","f164","f145","f00d","f057","f05c","f043","f014","f1bb","f091","f0d1","f0e9","f19c","f09c","f13e","f093","f007","f0c0","f03d","f027","f026","f028","f193","f0ad","f15b","f1c6","f1c7","f1c9","f1c3","f1c5","f016","f1c1","f1c4","f15c","f0f6","f1c8","f1c2","f1ce","f15a","f153","f154","f156","f157","f159","f158","f195","f155","f037","f039","f036","f038","f032","f127","f0ea","f0db","f12d","f0c5","f0c7","f031","f1dc","f03c","f033","f0c1","f03a","f022","f0cb","f0ca","f03b","f0c6","f1dd","f01e","f0c4","f0cc","f12c","f12b","f0ce","f034","f035","f00a","f009","f00b","f0cd","f0e2","f103","f100","f101","f102","f107","f104","f105","f106","f0ab","f0a8","f01a","f190","f18e","f01b","f0a9","f0aa","f063","f060","f061","f062","f0b2","f0d7","f0d9","f0da","f0d8","f13a","f137","f138","f139","f078","f053","f054","f077","f0a7","f0a5","f0a4","f0a6","f175","f177","f178","f176","f04a","f066","f052","f065","f049","f050","f04e","f04c","f04b","f144","f01d","f048","f051","f04d","f16a","f170","f17b","f179","f1b4","f1b5","f171","f172","f15a","f1cb","f13c","f1a5","f1bd","f1a6","f17d","f16b","f1a9","f1d1","f09a","f082","f16e","f180","f1d3","f1d2","f09b","f113","f092","f184","f1a0","f0d5","f0d4","f1d4","f13b","f16d","f1aa","f1cc","f0e1","f08c","f17c","f136","f19b","f18c","f1a7","f1a8","f0d2","f0d3","f1d6","f1d0","f1a1","f1a2","f18b","f1e0","f1e1","f17e","f198","f1be","f1bc","f18d","f16c","f1b6","f1b7","f1a4","f1a3","f1d5","f181","f173","f174","f099","f081","f194","f1ca","f189","f18a","f1d7","f17a","f19a","f168","f169","f19e","f167","f166","f0f9","f0fd","f0f8","f0fa","f0f1","f0f0"];}else{if(D==1){ab=["asterisk","plus","euro","minus","cloud","envelope","pencil","glass","music","search","heart","star","star-empty","user","film","th-large","th","th-list","ok","remove","zoom-in","zoom-out","off","signal","cog","trash","home","file","time","road","download-alt","download","upload","inbox","play-circle","repeat","refresh","list-alt","lock","flag","headphones","volume-off","volume-down","volume-up","qrcode","barcode","tag","tags","book","bookmark","print","camera","font","bold","italic","text-height","text-width","align-left","align-center","align-right","align-justify","list","indent-left","indent-right","facetime-video","picture","map-marker","adjust","tint","edit","share","check","move","step-backward","fast-backward","backward","play","pause","stop","forward","fast-forward","step-forward","eject","chevron-left","chevron-right","plus-sign","minus-sign","remove-sign","ok-sign","question-sign","info-sign","screenshot","remove-circle","ok-circle","ban-circle","arrow-left","arrow-right","arrow-up","arrow-down","share-alt","resize-full","resize-small","exclamation-sign","gift","leaf","fire","eye-open","eye-close","warning-sign","plane","calendar","random","comment","magnet","chevron-up","chevron-down","retweet","shopping-cart","folder-close","folder-open","resize-vertical","resize-horizontal","hdd","bullhorn","bell","certificate","thumbs-up","thumbs-down","hand-right","hand-left","hand-up","hand-down","circle-arrow-right","circle-arrow-left","circle-arrow-up","circle-arrow-down","globe","wrench","tasks","filter","briefcase","fullscreen","dashboard","paperclip","heart-empty","link","phone","pushpin","usd","gbp","sort","sort-by-alphabet","sort-by-alphabet-alt","sort-by-order","sort-by-order-alt","sort-by-attributes","sort-by-attributes-alt","unchecked","expand","collapse-down","collapse-up","log-in","flash","log-out","new-window","record","save","open","saved","import","export","send","floppy-disk","floppy-saved","floppy-remove","floppy-save","floppy-open","credit-card","transfer","cutlery","header","compressed","earphone","phone-alt","tower","stats","sd-video","hd-video","subtitles","sound-stereo","sound-dolby","sound-5-1","sound-6-1","sound-7-1","copyright-mark","registration-mark","cloud-download","cloud-upload","tree-conifer","tree-deciduous"];
L=["2a","2b","20ac","2212","2601","2709","270f","e001","e002","e003","e005","e006","e007","e008","e009","e010","e011","e012","e013","e014","e015","e016","e017","e018","e019","e020","e021","e022","e023","e024","e025","e026","e027","e028","e029","e030","e031","e032","e033","e034","e035","e036","e037","e038","e039","e040","e041","e042","e043","e044","e045","e046","e047","e048","e049","e050","e051","e052","e053","e054","e055","e056","e057","e058","e059","e060","e062","e063","e064","e065","e066","e067","e068","e069","e070","e071","e072","e073","e074","e075","e076","e077","e078","e079","e080","e081","e082","e083","e084","e085","e086","e087","e088","e089","e090","e091","e092","e093","e094","e095","e096","e097","e101","e102","e103","e104","e105","e106","e107","e108","e109","e110","e111","e112","e113","e114","e115","e116","e117","e118","e119","e120","e121","e122","e123","e124","e125","e126","e127","e128","e129","e130","e131","e132","e133","e134","e135","e136","e137","e138","e139","e140","e141","e142","e143","e144","e145","e146","e148","e149","e150","e151","e152","e153","e154","e155","e156","e157","e158","e159","e160","e161","e162","e163","e164","e165","e166","e167","e168","e169","e170","e171","e172","e173","e174","e175","e176","e177","e178","e179","e180","e181","e182","e183","e184","e185","e186","e187","e188","e189","e190","e191","e192","e193","e194","e195","e197","e198","e199","e200"];}else{if(D==3){ab=[];L=[];ae("doksoft_font_awesome","x2648-x2653,x2654-x265F,x2660-x2667,x2669-x266F,x20B3,x0E3F,xFFE0,x20A1,x00A2,x20A2,x20B5,x20AB,x20AC,xFFE1,x00A3,x20A4,x20A3,x0192,x20B2,x20AD,x20A5,x20A6,x20B1,xFF04,x0024,x20AE,x20A9,xFFE6,x00A5,xFFE5,x20B4,x00A4,x20B0,x20AA,x20AF,x20A0,x20A7,x0BF9,xFDFC,x3350,x09F2,x2701-x2704,x2706-x2709,x270C-x2727,x2729-x274B,x274F-x2752,x275B-x275E,x2781-x2793,x2190-x21EA,x00AB,x00BB,x275D-x275E,x00D7,x2030-x2031,x00A7,x00F7,x00B1,x203C,x00A1,x00BF,x2047,x2049,x2048,x203D,x00BC,x00BD,x00BE,x2155,x2159,x215B,x00B2,x00B3,x00A9,x00AE,x2122,x2120,x2260,x221A,x221B,x221C,x221E,x03B2,x03A6,x03A3,x20AC,x20A4,xFF40,xFF42,x2318,x2605");X("font","universalia.ttf");}}}function T(ai){if(ai.charAt(0)=="x"){ai="0"+ai;}if(ai.charAt(0)=="0"&&ai.charAt(1)=="x"){return parseInt(ai,16);}else{return parseInt(ai,10);}}function d(aq){var ao=[];var ap=aq.split(",");for(var an=0;an<ap.length;an++){var al=ap[an];if(al.length==0){}else{if(al.length==1){ao.push("&#"+al.charCodeAt(0)+";");}else{if(al.indexOf("-")==-1){ao.push("&#"+T(al)+";");}else{var aj=al.split("-");var ai=T(aj[0]);var am=T(aj[1]);for(var ak=ai;ak<=am;ak++){ao.push("&#"+ak+";");}}}}}return ao;}function o(ai){if(D==0){Y(ai,"http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css",true);}aa(ai,S()+"jscolor/jscolor.js",true);}function U(al){var aj="";if(D==3){ab=d(I(al,"doksoft_font_awesome"));L=[];for(var ai=0;ai<ab.length;ai++){L[ai]=parseInt(ab[ai].replace("&#","").replace(";",""));}}for(var ai=0;ai<ab.length;ai++){var ak=ab[ai];if(D==0){aj+='<div class="doksoft_font_awesome-icon" style="text-align:center;display:inline-block;vertical-align:top;cursor:pointer;box-sizing:content-box">'+'<span class="doksoft_font_awesome-glyphicon fa fa-'+ak+'" style="cursor:pointer"></span>'+'<span class="doksoft_font_awesome-title" style="font-size:14px;display:block;text-align:center;cursor:pointer;vertical-align: bottom">'+ak+"</span>"+"</div>";}else{if(D==1){aj+='<div class="doksoft_font_awesome-icon" style="text-align:center;display:inline-block;vertical-align:top;cursor:pointer;box-sizing:content-box">'+'<span class="doksoft_font_awesome-glyphicon glyphicon glyphicon-'+ak+'" style="cursor:pointer"></span>'+'<span class="doksoft_font_awesome-title" style="font-size:14px;display:block;text-align:center;cursor:pointer;vertical-align: bottom">'+ak+"</span>"+"</div>";}else{if(D==3){aj+='<div class="doksoft_font_awesome-icon" data-icon-id="'+ai+'" style="text-align:center;display:inline-block;vertical-align:top;cursor:pointer;box-sizing:content-box;cursor:pointer">'+'<span class="doksoft_font_awesome-glyphicon" style="cursor:pointer">'+ab[ai]+"</span>"+"</div>";}}}}return aj;}function N(an,am){an=an.replace(/<br>/g,"");if(am==0){return an;}var aj="";var ai=0;while(an.length>0){var al=an.charAt(0);aj+=al;ai++;if(ai>=am&&al=="-"){aj+="<br>";ai=0;}an=an.substr(1);}if(aj.indexOf("<br>")==-1){var ak=aj.lastIndexOf("-");if(aj.length-ak>=am){aj=aj.substr(0,ak+1)+"<br>"+aj.substr(ak+1);}}if(aj.indexOf("<br>")===0){aj=aj.substr(4,aj.length-4);}return aj;}function H(ai){if(ai===""){return false;}if(ai==="inherit"){return false;}if(ai==="transparent"){return false;}var aj=document.createElement("img");aj.style.color="rgb(0, 0, 0)";aj.style.color=ai;if(aj.style.color!=="rgb(0, 0, 0)"){return true;}aj.style.color="rgb(255, 255, 255)";aj.style.color=ai;return aj.style.color!=="rgb(255, 255, 255)";}var f="black";function x(am){var ai=document.getElementById("doksoft_font_awesome-color-"+ac(am)).value;if(H(ai)){var al=document.getElementsByClassName("doksoft_font_awesome-glyphicon");
for(var aj=0;aj<al.length;aj++){var ak=al[aj];ak.style.color=ai;}f=ai;}}var t=24;function K(ap){var au=parseInt(document.getElementById("doksoft_font_awesome-size-"+ac(ap)).value);if(au!=NaN){if(au<ah){au=ah;}if(au>h){au=h;}var aq=document.getElementsByClassName("doksoft_font_awesome-icon");for(var al=0;al<aq.length;al++){var ar=aq[al];if(au<24){if(D==3){ar.style.width=au+"px";ar.style.minWidth=au+"px";}else{ar.style.width="150px";ar.style.minWidth="150px";}ar.style.height=au+"px";ar.style.textAlign="left";ar.style.padding="3px 10px";ar.style.margin="2px";}else{if(D==3){ar.style.width=au+"px";ar.style.minWidth=au+"px";ar.style.height=au+"px";}else{ar.style.width=au+"px";ar.style.minWidth=(au<70?70:au)+"px";ar.style.height=(au+35)+"px";}ar.style.textAlign="center";ar.style.padding=(au<=64?5:10)+"px";ar.style.margin="2px";}}var ak=document.getElementsByClassName("doksoft_font_awesome-glyphicon");for(var al=0;al<ak.length;al++){var am=ak[al];am.style.fontSize=au+"px";}var ai=document.getElementsByClassName("doksoft_font_awesome-title");for(var al=0;al<ai.length;al++){var ao=ai[al];if(au<24&&t>=24){ao.style.display="initial";ao.style.marginTop="0";ao.style.marginLeft="10px";ao.innerHTML=N(ao.innerHTML,0);ao.style.fontSize="14px";ao.style.lineHeight="16px";}else{if(au>=24&&t<24){ao.style.display="block";ao.style.marginTop="10px";ao.style.marginLeft="0";ao.innerHTML=N(ao.innerHTML,6);var aj=ao.innerHTML.match(/<br>/g);if(aj!=null){c=aj.length;}else{c=0;}if(c>=2){ao.style.fontSize="10px";ao.style.lineHeight="10px";}else{if(c==1){ao.style.fontSize="14px";ao.style.lineHeight="14px";}else{ao.style.fontSize="14px";ao.style.lineHeight="16px";}}}}}var at=document.getElementById("doksoft_font_awesome-zoom-in-"+ac(ap));if(au<h){at.style.cursor="pointer";at.style.filter="";at.style.opacity="";}else{at.style.cursor="arrow";at.style.filter="alpha(opacity=25)";at.style.opacity="0.25";}var an=document.getElementById("doksoft_font_awesome-zoom-out-"+ac(ap));if(au>ah){an.style.cursor="pointer";an.style.filter="";an.style.opacity="";}else{an.style.cursor="arrow";an.style.filter="alpha(opacity=25)";an.style.opacity="0.25";}t=au;}}var y=null;function g(){var ai=this;if(this.tagName.toLowerCase()!="div"){ai=this.parentElement;}y=ai;E();}function E(){var aj=document.getElementsByClassName("doksoft_font_awesome-icon");for(var ak=0;ak<aj.length;ak++){var ai=aj[ak];if(ai==y){ai.style.outline="1px solid #778CAF";ai.style.backgroundColor="rgba(194, 235, 255, 0.22)";}else{ai.style.outline="";ai.style.backgroundColor="";}}}function P(am){var ao=document.getElementById("doksoft_font_awesome-search-"+ac(am)).value.toLowerCase();var aj=document.getElementsByClassName("doksoft_font_awesome-icon");for(var al=0;al<aj.length;al++){var ai=aj[al];var ak=ai.getElementsByClassName("doksoft_font_awesome-title");if(ak.length>0){var an=N(ai.getElementsByClassName("doksoft_font_awesome-title")[0].innerHTML,0).trim();if(an.length==0||an.indexOf(ao)!=-1){ai.style.display="inline-block";}else{ai.style.display="none";if(y==ai){ai.style.outline="";ai.style.backgroundColor="";y=null;}}}}}function B(am){var ap=w(am,"images_generator_url");var at=w(am,"bitmap_allowed");var au=w(am,"default_as_bitmap");var aj=w(am,"default_size");var ar=w(am,"default_add_size_to_style");var aq=w(am,"default_color");var an=w(am,"default_add_color_to_style");var al=w(am,"icons_panel_height");var ai='<img src="'+S()+'images/search.png" style="vertical-align:middle;margin-right:5px;'+(D==3?"display:none":"")+'"/>'+'<input style="width:165px;font-size:14px;padding:2px;border:1px solid #AAA'+(D==3?"display:none":"")+'" id="doksoft_font_awesome-search-'+ac(am)+'"/>';var ao='<label style="font-weight:normal;font-size:14'+(at?"":";display:none")+'">'+'<input type="checkbox" id="doksoft_font_awesome-as-bitmap-'+ac(am)+'" style="margin:0 5px"'+(au?' checked="checked"':"")+">"+R(am,"insert_as_bitmap")+"</label>";var ak='<style type="text/css">'+".doksoft_font_awesome-icon:hover, .doksoft_font_awesome-icon:focus { outline: 1px solid #778CAF; background-color: rgba(194, 235, 255, 0.22); }"+"</style>"+'<table style="width:100%">'+"<tbody>"+'<tr style="height:30px">'+'<td style="width:50%">'+(D==3?ao:ai)+"</td>"+'<td style="width:50px">'+'<span style="font-size:14px">'+R(am,"size")+":</span>"+"</td>"+"<td>"+'<input style="width:40px;font-size:14px;padding:2px;border:1px solid #AAA;margin-left:5px" id="doksoft_font_awesome-size-'+ac(am)+'" value="'+aj+'"/>'+'<img src="'+S()+'images/zoom_out.png" style="vertical-align:middle;margin:0 5px;cursor:pointer" id="doksoft_font_awesome-zoom-out-'+ac(am)+'"/>'+'<img src="'+S()+'images/zoom_in.png" style="vertical-align:middle;margin:0 5px;cursor:pointer" id="doksoft_font_awesome-zoom-in-'+ac(am)+'"/>'+"</td>"+'<td style="width:200px;padding-left:7px">'+'<label style="font-size:12px;font-weight:normal">'+'<input type="checkbox" id="doksoft_font_awesome-add-size-to-style-'+ac(am)+'" style="margin-right:4px" '+(ar?'checked="checked"':"")+">"+R(am,"add_to_style")+"</label>"+"</td>"+"</tr>"+"<tr>"+"<td>"+(D==3?ai:ao)+"</td>"+"<td>"+'<span style="font-size:14px">'+R(am,"color")+":</span>"+"</td>"+"<td>"+'<input class="doksoft-icons-color-box" style="width:110px;font-size:14px;padding:2px;border:1px solid #AAA;margin-left:5px" id="doksoft_font_awesome-color-'+ac(am)+'" value="'+aq+'"/>'+"</td>"+'<td style="padding-left:7px">'+'<label style="font-size:12px;font-weight:normal">'+'<input type="checkbox" id="doksoft_font_awesome-add-color-to-style-'+ac(am)+'" style="font-weight:normal;margin-right:4px" '+(an?'checked="checked"':"")+">"+R(am,"add_to_style")+"</label>"+"</td>"+"</tr>"+"</tbody>"+"</table>"+'<div style="border-top: 1px solid #ccc;padding-top: 3px;margin-top: 10px;"></div>'+'<div style="width:100%;margin-top:10px;white-space:normal;height:'+al+"px;min-height:"+al+"px;max-height:"+al+'px;overflow-y:scroll;">'+U(am)+"</div>";
return ak;}function m(am){document.getElementById("doksoft_font_awesome-zoom-in-"+ac(am)).onclick=function(){var av=t;if(av<20){av+=2;}else{if(av<36){av+=4;}else{if(av<64){av+=12;}else{av+=24;}}}if(av>h){av=h;}document.getElementById("doksoft_font_awesome-size-"+ac(am)).value=av;K(am);};document.getElementById("doksoft_font_awesome-zoom-out-"+ac(am)).onclick=function(){var av=t;if(av<=20){av-=2;}else{if(av<=36){av-=4;}else{if(av<=64){av-=12;}else{av-=24;}}}if(av<ah){av=ah;}document.getElementById("doksoft_font_awesome-size-"+ac(am)).value=av;K(am);};var ar=document.getElementById("doksoft_font_awesome-size-"+ac(am));var ap=(function(){var av=am;return function(){K(av);};})();ar.onchange=ap;ar.onkeyup=ap;ar.onpaste=ap;ar.oninput=ap;jscolor.bind();var ai=document.getElementById("doksoft_font_awesome-color-"+ac(am));var au=(function(){var av=am;return function(){x(av);};})();ai.onchange=au;ai.onkeyup=au;ai.onpaste=au;ai.oninput=au;ai.color.onImmediateChange=au();var an=document.getElementById("doksoft_font_awesome-search-"+ac(am));var at=(function(){var av=am;return function(){P(av);};})();an.value="";an.onchange=at;an.onkeyup=at;an.onpaste=at;an.oninput=at;var aq=document.getElementsByClassName("doksoft_font_awesome-icon");for(var al=0;al<aq.length;al++){var ao=aq[al];ao.onclick=g;var ak=ao.getElementsByTagName("span");for(var aj=0;aj<ak.length;aj++){ak[aj].onclick=ao.onclick;}}y=null;E();t=23;K(am);x(am);P(am);}function M(aq){if(y==null){alert(R(aq,"selectIcon"));return false;}var au;var ap=-1;if(D==3){var al=y.getAttribute("data-icon-id");au=ab[al];ap=L[al];}else{au=N(y.getElementsByClassName("doksoft_font_awesome-title")[0].innerHTML,0);}var aj="";var am=document.getElementById("doksoft_font_awesome-add-size-to-style-"+ac(aq)).checked;var at=document.getElementById("doksoft_font_awesome-add-color-to-style-"+ac(aq)).checked;var ar=w(aq,"bitmap_allowed")&&document.getElementById("doksoft_font_awesome-as-bitmap-"+ac(aq)).checked;if(ar){if(ap==-1){var ak;for(var an=0;an<ab.length&&ak==0;an++){if(ab[an]==au){ak=L[an];}}ap=parseInt(ak,16);}var ai=w(aq,"images_generator_url")+"?color="+f.substr(1)+"&size="+t+"&code="+ap;var ao='<img src="'+ai+'" alt="'+au+'"/>';A(aq,ao);}else{if(am||at){aj=(am?("font-size:"+t+"px;"):"")+(at?("color:"+f):"");}if(aj.length>0){aj=' style="'+aj+'"';}if(D==0){var ao='<span class="fa fa-'+au+'"'+aj+"></span>";}else{if(D==1){var ao='<span class="glyphicon glyphicon-'+au+'" '+aj+"></span>";}else{if(D==3){var ao="<span "+aj+">"+au+"</span>";}}}A(aq,ao);}}function Q(ai){if(typeof(ai)=="undefined"){return"";}var al=1000;if(ai<al){return ai+" b";}var aj=["Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];var ak=-1;do{ai/=al;++ak;}while(ai>=al);return ai.toFixed(1)+" "+aj[ak];}function C(ai){return ai.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#039;");}function Z(ai){var aj=document.createElement("div");aj.innerHTML=ai;return aj.childNodes;}function b(ai){return ai.getElementsByTagName("head")[0];}function k(ai){return ai.getElementsByTagName("body")[0];}function n(al,an){if(!al){return;}var ai=al.getElementsByTagName("link");var am=false;for(var aj=0;aj<ai.length;aj++){if(ai[aj].href.indexOf(an)!=-1){am=true;}}if(!am){var ak=al.createElement("link");ak.href=an;ak.type="text/css";ak.rel="stylesheet";b(al).appendChild(ak);}}function W(al,an){if(!al){return;}var ai=al.getElementsByTagName("script");var am=false;for(var ak=0;ak<ai.length;ak++){if(ai[ak].src.indexOf(an)!=-1){am=true;}}if(!am){var aj=al.createElement("script");aj.src=an;aj.type="text/javascript";b(al).appendChild(aj);}}function Y(ai,ak,aj){n(i(ai),ak);if(document!=i(ai)&&aj){n(document,ak);}}function aa(ai,ak,aj){W(i(ai),ak);if(document!=i(ai)&&aj){W(document,ak);}}function J(aj,ai){var ak=i(aj);r(ak,ai);}function r(ak,ai){var aj=ak.createElement("style");b(ak).appendChild(aj);aj.innerHTML=ai;}function z(aj,ai){if(O(aj,ai)){return;}aj.className=aj.className.length==0?ai:aj.className+" "+ai;}function q(al,ai){var ak=F(al);var am="";for(var aj=0;aj<ak.length;aj++){if(am.length>0){am+=" ";}if(ak[aj]!=ai){am+=ak[aj];}}al.className=am;al.className=al.className.trim();}function F(ai){if(typeof(ai.className)==="undefined"||ai.className==null){return[];}return ai.className.split(/\s+/);}function O(al,ai){var ak=F(al);for(var aj=0;aj<ak.length;aj++){if(ak[aj].toLowerCase()==ai.toLowerCase()){return true;}}return false;}function ag(ak,al){var aj=F(ak);for(var ai=0;ai<aj.length;ai++){if(aj[ai].indexOf(al)===0){return true;}}return false;}function j(ak){if(typeof(ak.getAttribute("style"))==="undefined"||ak.getAttribute("style")==null){return{};}var am={};var al=ak.getAttribute("style").split(/;/);for(var aj=0;aj<al.length;aj++){var an=al[aj].trim();var ai=an.indexOf(":");if(ai>-1){am[an.substr(0,ai).trim()]=an.substr(ai+1);}else{am[an]="";}}return am;}function s(al,ak,ai){var am=j(al);for(var aj in am){var an=am[aj];if(aj==ak&&an==ai){return true;}}return false;}CKEDITOR.plugins.add("doksoft_font_awesome",{lang:"en",icons:"doksoft_font_awesome",init:function(ai){var aj=this.path;
ai.on("contentDom",function(){var ak=ai.document.$;CKEDITOR.dtd.$removeEmpty["span"]=false;o(ai);});ai.addCommand("doksoft_font_awesome-"+ac(ai),new CKEDITOR.dialogCommand("doksoft_font_awesome-"+ac(ai)));ai.ui.addButton("doksoft_font_awesome",{title:R(ai,"doksoft_font_awesome_title"),icon:this.path+"icons/doksoft_font_awesome_4.png",command:"doksoft_font_awesome-"+ac(ai)});CKEDITOR.dialog.add("doksoft_font_awesome-"+ac(ai),function(ak){return{title:R(ak,"doksoft_font_awesome_title"),minWidth:540,width:540,resizable:false,onShow:function(){m(ak);},onOk:function(){M(ak);},contents:[{id:"tab1-"+ac(ak),label:"",title:"",expand:true,padding:0,elements:[{id:"icons_doksoft_font_awesome-"+ac(ak),type:"html",html:B(ak)}]}]};});}});})();