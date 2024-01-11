/*
Copyright 2017 Ziadin Givan

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

https://github.com/givanz/Vvvebjs
*/
define('local_edwiserpagebuilder/components-edwslider', ['local_edwiserpagebuilder/jquery', 'core/ajax'], function (jQuery, Ajax) {

    function addBlocks(blocks) {
        Vvveb.ComponentsGroup['Edwiser Sliders'] = blocks;
        var SETTINGTITLES = {
            TITLE:'Title',
            TITLECOLOR:'Title color',
            DESCRIPTION:'Description',
            DESCRIPTIONCOLOR:'Description Color',
            IMAGE:'Image',
            IMAEGEDESKTOP:'Image (Desktop)',
            IMAGETAB:'Image (Tab)',
            IMAGEMOB:'Image (Mobile)',
            BACKGROUNDIMG:'Background Image',
            BUTTONTEXT:'Button text',
            LINK:'Link',
            BUTTONBACKGROUNDCOLOR:'Button background color',
            BUTTONBORDERCOLOR:'Button border color',
            BUTTONTEXTCOLOR:'Button text color',
            SHOWNAVIGATIONBUTTONS:'Show navigation buttons',
            SHOWNAVIGATIONBULLETS: 'Show navigation bullets',
            SHOWNAVIGATIONBUTTONSDESKANDTAB:'Show navigation buttons(Desktop and Tablet only)',
            SHOWNAVIGATIONBUTTONSDESKTOP:'Show navigation buttons(Desktop only)',
            SHOWNAVIGATIONBULLETSMOB:'Show navigation bullets(Mobile only)',
            AUTOPLAYSLIDES:'Autoplay slides',
            PAUSESLIDESONHOVER:'Pause slides on hover',
            SLIDEINTERVAL:'Slide interval'
        };

         //Slider 6
         var sliderhtml6 = ` <div class="adv-slider-wrapper_unqreplaceid_ edw_adv_slider edw-adv-slider-1 overflow-hidden"> <div id="edw_slider_unqreplaceid_" class="carousel slide edw-carousel" data-ride="carousel" data-interval="3000" data-pause="hover"> <ol class="carousel-indicators edw-carousel-indicators position-absolute"> <li data-target="#edw_slider_unqreplaceid_" data-slide-to="0" class="active"></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="1" class=""></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="2" class=""></li></ol> <div class="carousel-inner edw-slider-inner-container"> <div class="carousel-item edw-slider-item active" data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Explore Our Diverse Education Courses</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">The set of insights on the definition, structure, and composition of a website header</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn d-none">Try Now</a> </div></div></div><div class="carousel-item edw-slider-item " data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Master New Skills Anytime, Anywhere</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Explore a wide range of subjects, from coding to cooking, and take control of your learning journey</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn d-none">Try Now</a> </div></div></div><div class="carousel-item edw-slider-item " data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">E-learning Courses Making Learning Interactive and Engaging</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Experience a new era of education with e-learning courses that prioritize interactivity and engagement.</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn d-none">Try Now</a> </div></div></div></div><a class="carousel-control-prev edw-control-prev position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="prev"> <img width="46px" height="46px" src="${Vvveb.serverurl}/CDN/slidernewdesign1/icons/leftarrow.svg"> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next edw-control-next position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="next"> <img width="46px" height="46px" src="${Vvveb.serverurl}/CDN/slidernewdesign1/icons/rightarrow.svg"> <span class="sr-only">Next</span> </a> <input name="navigationbutton" class="form-check-input edw-slider-navigationbutton" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-navigationbullets" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-autoplay" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-pauseonhover" type="checkbox" checked="checked" style="display:none !important"> </div></div>`;
         var slidercss6 = `.adv-slider-wrapper_unqreplaceid_ .carousel-item {background-position: top;background-size: cover;background-repeat: no-repeat;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {color: #313848;font-size: 48px;font-style: normal;font-weight: 700;line-height: 56px;letter-spacing: -2px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {color: #4C5A73;font-style: normal;font-weight: 400;font-size: 18px;line-height: 26px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {position: relative;right: unset;transform: unset;padding: unset;bottom: unset;left: unset;padding: 130px 132px 154px 132px;margin: auto; z-index:1}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-text-wrapper {display: flex;flex-direction: column;gap: 22px;margin-bottom: 40px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-trynow-btn {min-width: 145px;text-align: center;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-trynow-btn:hover {filter: brightness(90%);}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {display: flex;flex-direction: column;justify-content: center;align-items: center;min-height: 489px;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next {opacity: 1;position: absolute !important;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next img:hover {filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.12));}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev {opacity: 1;position: absolute !important;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev img:hover {filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.12));}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators {position: absolute !important;margin-bottom: 85px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li {width: 8px;height: 8px;border-radius: 50%;background-color: #647390;margin-bottom: 0px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li.active {background-color: #D5DDEA;}@media (max-width: 769px) {.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {min-height: 402px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {padding: 43px 117px 90px 117px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators {margin-bottom: 20px;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next {display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev {display: none;}}@media (max-width: 425px) {.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {min-height: 374px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {padding: 66px 23px 113px 23px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {font-style: normal;font-size: 34px;font-style: normal;font-weight: 700;line-height: 42px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-indicators {margin-bottom: 66px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {color: #4C5A73;font-size: 18px;font-style: normal;font-weight: 400;line-height: 26px;}}`;
         var sliderjs6 = ``;
         var appendnode6 = `<div class="carousel-item edw-slider-item" data-url="${Vvveb.serverurl}/CDN/slidernewdesign6/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign6/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Unleash Your Learning Potential</h5> <p class="carousel-caption-para edw-carousel-content-para m-0" >Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn d-none">Try Now</a> </div></div></div>`;
         Vvveb.Components.extend("_base", "html/slider6", {
             name: "Slider basic",
             attributes: ['data-ebpb-slider6'],
             image: "icons/slider6.svg",
             classes: ['data-ebpb-slider6'],
             html: (()=> {
                 return `<div title="Slider-basic" class="data-ebpb-slider6" data-vvveb-disabled-area contenteditable="false">${sliderhtml6}<style>${slidercss6}</style></div>`;
             })(),
             beforeInit: function (node){
                 properties = [];
                 var i = 0;
                 var slideno = 0;
                 var id = generateUniqueID();
                 node.innerHTML = node.innerHTML.replaceAll("_unqreplaceid_", id);
                 $(node).find(".edw-slider-item").each(function(e) {
                     i = generateUniqueID();
                     slideno++;
                     var regex = /edw-carousel-item-\d+/;
                     var matchedClass = "";
                     var hasMatchingClass = $(this).filter(function() {
                         var classNames = $(this).attr('class').split(' ');
                         return classNames.some(function(className) {
                             if (regex.test(className)) {
                               matchedClass = className;
                               return true;
                             }
                             return false;
                           });
                       }).length > 0;
                     $(this).removeClass(matchedClass);
                     $(this).addClass("edw-carousel-item-" + i);

                     properties.push(
                         {
                             name: "",
                             key: "slidergrouptitle"+slideno,
                             inputtype: EdwheaderInput,
                             edwclasses: "edwgroupheader",
                             data: {
                                 header: "Slide " + slideno,
                                 extraclass: "edwslideheading m-0",
                                 type: "h6",
                                 style: ""
                             }
                         },
                         {
                             name: "",
                             key: "deleteslideritem",
                             inputtype: EdwbuttonInput,
                             child: `.edw-carousel-item-${i}`,
                             edwclasses: "edwslidedelbtn",
                             data: {text:"", icon:"la-trash", extraclasses: "btn btn-outline-danger"},
                             onChange: function(node, value, input) {
                                 $(node).remove();
                                 Vvveb.Components.render("html/slider6");
                                 return node;
                             },
                         },
                         {
                             name: SETTINGTITLES.TITLE,
                             key: "slidertitle"+i,
                             htmlAttr: "innerHTML",
                             child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                             inputtype: TextInput,
                             edwclasses: "edwinputfield",
                             onChange: function (node, value, input) {
                                 if (value == "") {
                                     $(node).hide();
                                 } else {
                                     $(node).show().text(value);
                                 }
                             }
                         },
                         {
                             name: SETTINGTITLES.TITLECOLOR,
                             key: "color",
                             inline:true,
                             htmlAttr: "style",
                             col:12,
                             inputtype: ColorInput,
                             edwclasses: "edwcolorfield",
                             child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                             onChange: function (node, value, input) {
                                 $(node).parent().find('.edw-carousel-content-heading').css('color',value);
                                 return node;
                             }
                         },
                         {
                             name: SETTINGTITLES.DESCRIPTION,
                             key: "sliderdescription"+i,
                             htmlAttr: "innerHTML",
                             child: `.edw-carousel-item-${i} .edw-carousel-content-para`,
                             inputtype: TextInput,
                             edwclasses: "edwinputfield",
                             onChange: function (node, value, input) {
                                 if (value == "") {
                                     $(node).hide();
                                 } else {
                                     $(node).show().text(value);
                                 }
                             }
                         },
                         {
                             name: SETTINGTITLES.DESCRIPTIONCOLOR,
                             key: "color",
                             inline:true,
                             htmlAttr: "style",
                             col:12,
                             inputtype: ColorInput,
                             edwclasses: "edwcolorfield",
                             child: `.edw-carousel-item-${i}  .edw-carousel-content-para`,
                             onChange: function (node, value, input) {
                                 $(node).parent().find('.edw-carousel-content-para').css('color',value);
                                 return node;
                             }
                         },
                         {
                             name: SETTINGTITLES.IMAGE,
                             key: "sliderimage"+i,
                             htmlAttr: 'data-url',
                             inputtype: ImageInput,
                             edwclasses: "edwfilefield",
                             child: `.edw-carousel-item-${i}`,
                             onChange: function (node, value, input) {
                                 $(node).parent().find(this.child).css("background-image", "url(" + value + ")");
                                 return node;
                             }
                         },
                     );
                 });

                 properties = removeDeleteButton(node,properties);
                 removeSettingsOnSingleSlide(node);
                 if(!$(node).find('.edw-slider-inner-container').children('.edw-slider-item').hasClass('active')){
                     $(node).find('.edw-slider-item').first().addClass('active');
                 }
                 removeDuplicateIndicators(node,i);

                 //remove all option properties
                 this.properties = this.properties.filter(function (item) {
                     return item.key.indexOf("slider") === -1;
                 });
                 //remove all option properties
                 this.properties = this.properties.filter(function (item) {
                     return item.key.indexOf("color") === -1;
                 });
                 this.properties =  properties.concat(this.properties);
                 slideIntervalfielddisabler(node);
                 return node;
             },
             properties: [
                 {
                     name: "",
                     key: "addNewSlide",
                     inputtype: EdwbuttonInput,
                     edwclasses: "edwnewslidebtn",
                     data: {text:"Add new slide", icon:"la-plus", extraclasses: "btn btn-outline-primary"},
                     onChange: function(node)
                     {
                          //render component properties again to include the new column inputs
                          $(node).parent().find('.carousel-inner').append(appendnode6);
                          Vvveb.Components.render("html/slider6");

                          return node;
                     }
                 },
                 {
                     name: SETTINGTITLES.SHOWNAVIGATIONBUTTONS,
                     key: "navigationbutton",
                     htmlAttr: "checked",
                     col:12,
                     inline:true,
                     inputtype: CheckboxInput,
                     edwclasses: "edwcheckfield",
                     child:'.edw-slider-navigationbutton',
                     onChange: function (node, value, input) {
                         if(value == true){
                             $(node).parent().find('.edw-control-prev').removeClass('d-none');
                             $(node).parent().find('.edw-control-next').removeClass('d-none');
                         }else{
                             $(node).parent().find('.edw-control-prev').addClass('d-none');
                             $(node).parent().find('.edw-control-next').addClass('d-none');
                         }
                         return node;
                     }
                 },
                 {
                     name: SETTINGTITLES.SHOWNAVIGATIONBULLETS,
                     key: "navigationbullets",
                     htmlAttr: "checked",
                     col:12,
                     inline:true,
                     inputtype: CheckboxInput,
                     edwclasses: "edwcheckfield",
                     child:'.edw-slider-navigationbullets',
                     onChange: function (node, value, input) {
                         if(value == true){
                             $(node).parent().find('.edw-carousel-indicators').removeClass('d-none');
                         }else{
                             $(node).parent().find('.edw-carousel-indicators').addClass('d-none');
                         }
                         return node;
                     }
                 },
                 {
                     name: SETTINGTITLES.AUTOPLAYSLIDES,
                     key: "autoplayslides",
                     htmlAttr: "checked",
                     col:12,
                     inline:true,
                     inputtype: CheckboxInput,
                     edwclasses: "edwcheckfield",
                     child:'.edw-slider-autoplay',
                     onChange: function (node, value, input) {
                        var slideintervalfield =$(input).closest('section').find('[data-key="slideinterval"]');
                         if(value == true){
                            $(node).parent().attr('data-ride','carousel');
                            $(node).parent().attr('data-interval','3000');
                            slideintervalfield.find('input[name="slideinterval"]').val('3000');
                         }else{
                             $(node).parent().removeAttr('data-ride');
                             $(node).parent().attr('data-interval','0');
                             slideintervalfield.find('input[name="slideinterval"]').val('0');
                         }
                         slideIntervalfielddisabler(node);
                         return node;
                    }
                 },
                 {
                     name: SETTINGTITLES.PAUSESLIDESONHOVER,
                     key: "pauseslides",
                     htmlAttr: "checked",
                     col:12,
                     inline:true,
                     inputtype: CheckboxInput,
                     edwclasses: "edwcheckfield",
                     child:'.edw-slider-pauseonhover',
                     onChange: function (node, value, input) {
                         if(value == true){
                             $(node).parent().attr('data-pause','hover');
                         }else{
                             $(node).parent().attr('data-pause','false');
                         }
                         return node;
                     }
                 },
                 {
                     name: SETTINGTITLES.SLIDEINTERVAL,
                     key: "slideinterval",
                     htmlAttr: "data-interval",
                     inputtype: TextInput,
                     edwclasses: "edwinputfield",
                     child: `.carousel`,
                 }
             ]
         });

        //Slider 1
        var sliderhtml1 = ` <div class="adv-slider-wrapper_unqreplaceid_ edw_adv_slider edw-adv-slider-1 overflow-hidden"> <div id="edw_slider_unqreplaceid_" class="carousel slide edw-carousel" data-ride="carousel" data-interval="3000" data-pause="hover"> <ol class="carousel-indicators edw-carousel-indicators position-absolute"> <li data-target="#edw_slider_unqreplaceid_" data-slide-to="0" class="active"></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="1" class=""></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="2" class=""></li></ol> <div class="carousel-inner edw-slider-inner-container"> <div class="carousel-item edw-slider-item active" data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Explore Our Diverse Education Courses</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">The set of insights on the definition, structure, and composition of a website header</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn">Try Now</a> </div></div></div><div class="carousel-item edw-slider-item " data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Master New Skills Anytime, Anywhere</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Explore a wide range of subjects, from coding to cooking, and take control of your learning journey</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn">Try Now</a> </div></div></div><div class="carousel-item edw-slider-item " data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">E-learning Courses Making Learning Interactive and Engaging</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Experience a new era of education with e-learning courses that prioritize interactivity and engagement.</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn">Try Now</a> </div></div></div></div><a class="carousel-control-prev edw-control-prev position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="prev"> <img width="46px" height="46px" src="${Vvveb.serverurl}/CDN/slidernewdesign1/icons/leftarrow.svg"> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next edw-control-next position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="next"> <img width="46px" height="46px" src="${Vvveb.serverurl}/CDN/slidernewdesign1/icons/rightarrow.svg"> <span class="sr-only">Next</span> </a> <input name="navigationbutton" class="form-check-input edw-slider-navigationbutton" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-navigationbullets" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-autoplay" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-pauseonhover" type="checkbox" checked="checked" style="display:none !important"> </div></div>`;
        var slidercss1 = `.adv-slider-wrapper_unqreplaceid_ .carousel-item {background-position: top;background-size: cover;background-repeat: no-repeat;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {color: #313848;font-size: 48px;font-style: normal;font-weight: 700;line-height: 56px;letter-spacing: -2px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {color: #4C5A73;font-style: normal;font-weight: 400;font-size: 18px;line-height: 26px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {position: relative;right: unset;transform: unset;padding: unset;bottom: unset;left: unset;padding: 130px 132px 154px 132px;margin: auto;z-index:1;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-text-wrapper {display: flex;flex-direction: column;gap: 22px;margin-bottom: 40px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-trynow-btn {min-width: 145px;text-align: center;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-trynow-btn:hover {filter: brightness(90%);}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {display: flex;flex-direction: column;justify-content: center;align-items: center;min-height: 489px;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next {opacity: 1;position: absolute !important;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next img:hover {filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.12));}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev {opacity: 1;position: absolute !important;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev img:hover {filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.12));}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators {position: absolute !important;margin-bottom: 85px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li {width: 8px;height: 8px;border-radius: 50%;background-color: #647390;margin-bottom: 0px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li.active {background-color: #D5DDEA;}@media (max-width: 769px) {.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {min-height: 402px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {padding: 43px 117px 90px 117px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators {margin-bottom: 20px;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next {display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev {display: none;}}@media (max-width: 425px) {.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {min-height: 374px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {padding: 66px 23px 113px 23px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {font-style: normal;font-size: 34px;font-style: normal;font-weight: 700;line-height: 42px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-indicators {margin-bottom: 66px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {color: #4C5A73;font-size: 18px;font-style: normal;font-weight: 400;line-height: 26px;}}`;
        var sliderjs1 = ``;
        var appendnode1 = `<div class="carousel-item edw-slider-item" data-url="${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png" style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign1/sliderbgimg.png');"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Explore Our Diverse Education Courses</h5> <p class="carousel-caption-para edw-carousel-content-para m-0" >The set of insights on the definition, structure, and composition of a website header</p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn">Try Now</a> </div></div></div>`;
        Vvveb.Components.extend("_base", "html/slider1", {
            name: "Slider with CTA",
            attributes: ['data-ebpb-slider1'],
            image: "icons/slider1.svg",
            classes: ['edwiser-pb-slider1'],
            html: (()=> {
                return `<div title="Slider-with-CTA" class="edwiser-pb-slider1" data-vvveb-disabled-area contenteditable="false">${sliderhtml1}<style>${slidercss1}</style></div>`;
            })(),
            beforeInit: function (node){
                properties = [];
                var i = 0;
                var slideno = 0;
                var id = generateUniqueID();
                node.innerHTML = node.innerHTML.replaceAll("_unqreplaceid_", id);
                $(node).find(".edw-slider-item").each(function(e) {
                    i = generateUniqueID();
                    slideno++;
                    var regex = /edw-carousel-item-\d+/;
                    var matchedClass = "";
                    var hasMatchingClass = $(this).filter(function() {
                        var classNames = $(this).attr('class').split(' ');
                        return classNames.some(function(className) {
                            if (regex.test(className)) {
                              matchedClass = className;
                              return true;
                            }
                            return false;
                          });
                      }).length > 0;
                    $(this).removeClass(matchedClass);
                    $(this).addClass("edw-carousel-item-" + i);
                    properties.push(
                        {
                            name: "",
                            key: "slidergrouptitle"+slideno,
                            inputtype: EdwheaderInput,
                            edwclasses: "edwgroupheader",
                            data: {
                                header: "Slide " + slideno,
                                extraclass: "edwslideheading m-0",
                                type: "h6",
                                style: ""
                            }
                        },
                        {
                            name: "",
                            key: "deleteslideritem",
                            inputtype: EdwbuttonInput,
                            child: `.edw-carousel-item-${i}`,
                            edwclasses: "edwslidedelbtn",
                            data: {text:"", icon:"la-trash", extraclasses: "btn btn-outline-danger"},
                            onChange: function(node, value, input) {
                                $(node).remove();
                                Vvveb.Components.render("html/slider1");
                                return node;
                            },
                        },
                        {
                            name: SETTINGTITLES.TITLE,
                            key: "slidertitle"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.TITLECOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-heading').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTION,
                            key: "sliderdescription"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-para`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTIONCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i}  .edw-carousel-content-para`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-para').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXT,
                            key: "sliderbuttontext"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.LINK,
                            key: "sliderlink"+i,
                            htmlAttr: "href",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                        },
                        {
                            name: SETTINGTITLES.IMAGE,
                            key: "sliderimage"+i,
                            htmlAttr: 'data-url',
                            inputtype: ImageInput,
                            edwclasses: "edwfilefield",
                            child: `.edw-carousel-item-${i}`,
                            onChange: function (node, value, input) {
                                $(node).parent().find(this.child).css("background-image", "url(" + value + ")");
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONBACKGROUNDCOLOR,
                            key: "background-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('background',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONBORDERCOLOR,
                            key: "border-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('border-color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXTCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child:  `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('color',value);
                                return node;
                            }
                        }

                    );
                });
                properties = removeDeleteButton(node,properties);
                removeSettingsOnSingleSlide(node);
                if(!$(node).find('.edw-slider-inner-container').children('.edw-slider-item').hasClass('active')){
                    $(node).find('.edw-slider-item').first().addClass('active');
                }
                removeDuplicateIndicators(node,i);
                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("slider") === -1;
                });
                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("color") === -1;
                });
                this.properties =  properties.concat(this.properties);
                slideIntervalfielddisabler(node);
                return node;
            },
            properties: [
                {
                    name: "",
                    key: "addNewSlide",
                    inputtype: EdwbuttonInput,
                    edwclasses: "edwnewslidebtn",
                    data: {text:"Add new slide", icon:"la-plus", extraclasses: "btn btn-outline-primary"},
                    onChange: function(node)
                    {
                         //render component properties again to include the new column inputs
                         $(node).parent().find('.carousel-inner').append(appendnode1);
                         Vvveb.Components.render("html/slider1");

                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBUTTONS,
                    key: "navigationbutton",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbutton',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-control-prev').removeClass('d-none');
                            $(node).parent().find('.edw-control-next').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-control-prev').addClass('d-none');
                            $(node).parent().find('.edw-control-next').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBULLETS,
                    key: "navigationbullets",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbullets',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-carousel-indicators').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-carousel-indicators').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.AUTOPLAYSLIDES,
                    key: "autoplayslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-autoplay',
                    onChange: function (node, value, input) {
                        var slideintervalfield =$(input).closest('section').find('[data-key="slideinterval"]');
                         if(value == true){
                            $(node).parent().attr('data-ride','carousel');
                            $(node).parent().attr('data-interval','3000');
                            slideintervalfield.find('input[name="slideinterval"]').val('3000');
                         }else{
                             $(node).parent().removeAttr('data-ride');
                             $(node).parent().attr('data-interval','0');
                             slideintervalfield.find('input[name="slideinterval"]').val('0');
                         }
                         slideIntervalfielddisabler(node);
                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.PAUSESLIDESONHOVER,
                    key: "pauseslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-pauseonhover',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().attr('data-pause','hover');
                        }else{
                            $(node).parent().attr('data-pause','false');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SLIDEINTERVAL,
                    key: "slideinterval",
                    htmlAttr: "data-interval",
                    inputtype: TextInput,
                    edwclasses: "edwinputfield",
                    child: `.carousel`,
                }
            ]
        });


        // Slider 7
        var sliderhtml7 = ` <div class="adv-slider-wrapper_unqreplaceid_ edw_adv_slider edw-adv-slider-7 overflow-hidden"> <div id="edw_slider_unqreplaceid_" class="carousel slide edw-carousel" data-ride="carousel" data-interval="3000" data-pause="hover"> <ol class="carousel-indicators edw-carousel-indicators position-absolute"> <li data-target="#edw_slider_unqreplaceid_" data-slide-to="0" class="active"></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="1" class=""></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="2" class=""></li></ol> <div class="carousel-inner edw-slider-inner-container"> <div class="carousel-item edw-slider-item active"> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Your Path to Educational Excellence</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects. </p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn ">Enroll Now</a> </div></div><div class="bg-desktop-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school1.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school1.png');"> </div><div class="bg-tab-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2tab.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school1tab.png');"> </div><div class="bg-mob-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2mob.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school1mob.png');"> </div><div class="bg-overlay position-absolute"></div></div><div class="carousel-item edw-slider-item "> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">EDUCATING LEADERS OF CHARACTER</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects. </p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn ">Enroll Now</a> </div></div><div class="bg-desktop-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2.png');"> </div><div class="bg-tab-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2tab.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2tab.png');"> </div><div class="bg-mob-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2mob.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2mob.png');"> </div><div class="bg-overlay position-absolute"></div></div><div class="carousel-item edw-slider-item "> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">Elevate Your Learning with Us</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects. </p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn ">Enroll Now</a> </div></div><div class="bg-desktop-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school3.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school3.png');"> </div><div class="bg-tab-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2tab.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school3tab.png');"> </div><div class="bg-mob-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2mob.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school3mob.png');"> </div><div class="bg-overlay position-absolute"></div></div></div><div class="carousel-button-wrapper"> <a class="carousel-control-prev edw-control-prev" href="#edw_slider_unqreplaceid_" role="button" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next edw-control-next" href="#edw_slider_unqreplaceid_" role="button" data-slide="next"> <span class="sr-only">Next</span> </a> </div></div><input name="navigationbutton" class="form-check-input edw-slider-navigationbutton" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-navigationbullets" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-autoplay" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-pauseonhover" type="checkbox" checked="checked" style="display:none !important"> </div>`;
        var slidercss7 = `.adv-slider-wrapper_unqreplaceid_ .carousel-item {position: relative;padding-bottom: 140px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-mob-img {display: none;left: 0px;top: 0px;width: 100%;height: 100%;background-position: top !important;background-size: cover !important;background-repeat: no-repeat !important;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-tab-img {display: none;left: 0px;top: 0px;width: 100%;height: 100%;background-position: top !important;background-size: cover !important;background-repeat: no-repeat !important;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-desktop-img {left: 0px;top: 0px;width: 100%;height: 100%;background-position: top !important;background-size: cover !important;background-repeat: no-repeat !important;display: flex;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-overlay {left: 0px;top: 0px;width: 100%;height: 100%;background: linear-gradient(90deg, #0D2122 0%, rgba(13, 33, 34, 0.1) 59.01%);}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {color: #FFF;font-size: 70px;font-style: normal;font-weight: bold;line-height: 85px;letter-spacing: 1.4px;text-transform: uppercase;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {color: #FFF;font-size: 22px;font-style: normal;font-weight: 400;line-height: 30px;width: 70%;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {display: flex;flex-direction: column;justify-content: center;align-items: center;min-height: 618px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {position: relative;right: unset;transform: unset;padding: unset;bottom: unset;left: unset;width: 100%;max-width: 900px;text-align: left;margin-right: auto;padding: 62px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-text-wrapper {display: flex;flex-direction: column;gap: 22px;margin-bottom: 40px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-trynow-btn {background: #9A3CDF;color: #FFFFFF;font-style: normal;font-weight: 400;font-size: 18px;line-height: 22px;box-sizing: border-box;padding: 15px 38px;border: 1px solid #9A3CDF;border-radius: 0;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption .carousel-trynow-btn:hover {filter: brightness(90%);}.adv-slider-wrapper_unqreplaceid_ .carousel-button-wrapper {position: absolute !important;display: flex;bottom: 0px;width: 100%;justify-content: center;gap: 30px;padding-bottom: 30px;}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next {opacity: 1;position: relative;width: 60px;height: 60px;background-position: top !important;background-size: cover !important;background-repeat: no-repeat !important;background-image: url("${Vvveb.serverurl}/CDN/slidernewdesign7/icons/rightarrow.svg");}.adv-slider-wrapper_unqreplaceid_ .carousel-control-next:hover {background-image: url("${Vvveb.serverurl}/CDN/slidernewdesign7/icons/activestaterightarrow.svg");}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev {opacity: 1;position: relative;width: 60px;height: 60px;background-position: top !important;background-size: cover !important;background-repeat: no-repeat !important;background-image: url("${Vvveb.serverurl}/CDN/slidernewdesign7/icons/leftarrow.svg");}.adv-slider-wrapper_unqreplaceid_ .carousel-control-prev:hover {background-image: url("${Vvveb.serverurl}/CDN/slidernewdesign7/icons/activestateleftarrow.svg");}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators {margin-bottom: 70px;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li {width: 8px;height: 8px;border-radius: 50%;background-color: #D9D9D9;margin-bottom: 0px;display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li.active {background-color: #9A3CDF;}@media (max-width: 769px) {.adv-slider-wrapper_unqreplaceid_ .carousel-item {min-height: 500px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-desktop-img {display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-mob-img {display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-tab-img {display: flex;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {align-items: start;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {margin: unset;max-width: 70%;width: 100%;padding: 0px 24px 0px 24px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {font-size: 50px;line-height: 60px;letter-spacing: 1px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {color: #FFF;font-size: 18px;font-style: normal;font-weight: 400;line-height: 22px;}.adv-slider-wrapper_unqreplaceid_ .carousel-button-wrapper {padding-bottom: unset;}}@media (max-width: 425px) {.adv-slider-wrapper_unqreplaceid_ .carousel-item {min-height: 756px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-desktop-img {display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-tab-img {display: none;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-mob-img {display: flex;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .bg-overlay {background: linear-gradient(360deg, #0D2122 0%, rgba(13, 33, 34, 0) 100%);}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-wrapper {justify-content: flex-end;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption {text-align: center;max-width: 100%;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-heading {font-size: 38px;line-height: 50px;letter-spacing: 0.76px;}.adv-slider-wrapper_unqreplaceid_ .carousel-item .carousel-caption-para {font-size: 20px;font-style: normal;font-weight: 400;line-height: 35px;width: 100%;}.adv-slider-wrapper_unqreplaceid_ .carousel-indicators li {display: block;}.adv-slider-wrapper_unqreplaceid_ .carousel-button-wrapper {display: none;}}`;
        var  sliderjs7 = ``;
        var appendnode7 = ` <div class="carousel-item edw-slider-item "> <div class="carousel-caption-wrapper w-100"> <div class="carousel-caption "> <div class="carousel-text-wrapper"> <h5 class="carousel-caption-heading edw-carousel-content-heading m-0">EDUCATING LEADERS OF CHARACTER</h5> <p class="carousel-caption-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects. </p></div><a href="#" class="btn btn-primary carousel-trynow-btn edw-carousel-trynow-btn ">Enroll Now</a> </div></div><div class="bg-desktop-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2.png');"></div><div class="bg-tab-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2tab.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2tab.png');"></div><div class="bg-mob-img position-absolute" data-url='${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2mob.png' style="background-image:url('${Vvveb.serverurl}/CDN/slidernewdesign7/slideimages/school2mob.png');"></div><div class="bg-overlay position-absolute"></div></div>`;
        Vvveb.Components.extend("_base", "html/slider7", {
            name: "Slider with controls 1",
            attributes: ['data-ebpb-slider7'],
            image: "icons/slider7.svg",
            classes: ['edwiser-pb-slider7'],
            html: (()=> {
                return `<div title="Slider-with-controls-1" class="edwiser-pb-slider7" data-vvveb-disabled-area contenteditable="false">${sliderhtml7}<style>${slidercss7}</style></div>`;
            })(),
            beforeInit: function (node){
                properties = [];
                var i = 0;
                var slideno = 0;
                var id = generateUniqueID();
                node.innerHTML = node.innerHTML.replaceAll("_unqreplaceid_", id);
                $(node).find(".edw-slider-item").each(function(e) {
                    i = generateUniqueID();
                    slideno++;
                    var regex = /edw-carousel-item-\d+/;
                    var matchedClass = "";
                    var hasMatchingClass = $(this).filter(function() {
                        var classNames = $(this).attr('class').split(' ');
                        return classNames.some(function(className) {
                            if (regex.test(className)) {
                                matchedClass = className;
                                return true;
                            }
                            return false;
                            });
                        }).length > 0;
                    $(this).removeClass(matchedClass);
                    $(this).addClass("edw-carousel-item-" + i);

                    properties.push(
                        {
                            name: "",
                            key: "slidergrouptitle"+slideno,
                            inputtype: EdwheaderInput,
                            edwclasses: "edwgroupheader",
                            data: {
                                header: "Slide " + slideno,
                                extraclass: "edwslideheading m-0",
                                type: "h6",
                                style: ""
                            }
                        },
                        {
                            name: "",
                            key: "deleteslideritem",
                            inputtype: EdwbuttonInput,
                            child: `.edw-carousel-item-${i}`,
                            edwclasses: "edwslidedelbtn",
                            data: {text:"", icon:"la-trash", extraclasses: "btn btn-outline-danger"},
                            onChange: function(node, value, input) {
                                $(node).remove();
                                Vvveb.Components.render("html/slider7");
                                return node;
                            },
                        },
                        {
                            name: SETTINGTITLES.TITLE,
                            key: "slidertitle"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.TITLECOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-heading').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTION,
                            key: "sliderdescription"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-para`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTIONCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i}  .edw-carousel-content-para`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-para').css('color',value);
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXT,
                            key: "sliderbuttontext"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.LINK,
                            key: "sliderlink"+i,
                            htmlAttr: "href",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                        },
                        {
                            name: SETTINGTITLES.BUTTONBACKGROUNDCOLOR,
                            key: "background-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('background',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONBORDERCOLOR,
                            key: "border-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('border-color',value);
                                return node;
                            }

                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXTCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child:  `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.IMAEGEDESKTOP,
                            key: "sliderimage"+i,
                            htmlAttr: 'data-url',
                            inputtype: ImageInput,
                            edwclasses: "edwfilefield",
                            child: `.edw-carousel-item-${i} .bg-desktop-img`,
                            onChange: function (node, value, input) {
                                $(node).css("background-image", "url(" + value + ")");
                                console.log($(node).parent());
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.IMAGETAB,
                            key: "sliderimage"+i,
                            htmlAttr: 'data-url',
                            inputtype: ImageInput,
                            edwclasses: "edwfilefield",
                            child: `.edw-carousel-item-${i} .bg-tab-img`,
                            onChange: function (node, value, input) {
                                $(node).css("background-image", "url(" + value + ")");
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.IMAGEMOB,
                            key: "sliderimage"+i,
                            htmlAttr: 'data-url',
                            inputtype: ImageInput,
                            edwclasses: "edwfilefield",
                            child: `.edw-carousel-item-${i} .bg-mob-img`,
                            onChange: function (node, value, input) {
                                $(node).css("background-image", "url(" + value + ")");
                                return node;
                            }
                        }
                    );
                });
                properties = removeDeleteButton(node,properties);
                removeSettingsOnSingleSlide(node);
                if(!$(node).find('.edw-slider-inner-container').children('.edw-slider-item').hasClass('active')){
                    $(node).find('.edw-slider-item').first().addClass('active');
                }
                removeDuplicateIndicators(node,i);

                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("slider") === -1;
                });
                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("color") === -1;
                });
                this.properties =  properties.concat(this.properties);
                slideIntervalfielddisabler(node);
                return node;
            },
            properties: [
                {
                    name: "",
                    key: "addNewSlide",
                    inputtype: EdwbuttonInput,
                    edwclasses: "edwnewslidebtn",
                    data: {text:"Add new slide", icon:"la-plus", extraclasses: "btn btn-outline-primary"},
                    onChange: function(node)
                    {
                            //render component properties again to include the new column inputs
                            $(node).parent().find('.carousel-inner').append(appendnode7);
                            Vvveb.Components.render("html/slider7");

                            return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBUTTONSDESKANDTAB,
                    key: "navigationbutton",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbutton',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-control-prev').removeClass('d-none');
                            $(node).parent().find('.edw-control-next').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-control-prev').addClass('d-none');
                            $(node).parent().find('.edw-control-next').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBULLETSMOB,
                    key: "navigationbullets",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbullets',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-carousel-indicators').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-carousel-indicators').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.AUTOPLAYSLIDES,
                    key: "autoplayslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-autoplay',
                    onChange: function (node, value, input) {
                        var slideintervalfield =$(input).closest('section').find('[data-key="slideinterval"]');
                         if(value == true){
                            $(node).parent().find('.edw-carousel').attr('data-ride','carousel');
                            $(node).parent().find('.edw-carousel').attr('data-interval','3000');
                            slideintervalfield.find('input[name="slideinterval"]').val('3000');
                         }else{
                            $(node).parent().find('.edw-carousel').removeAttr('data-ride');
                            $(node).parent().find('.edw-carousel').attr('data-interval','0');
                             slideintervalfield.find('input[name="slideinterval"]').val('0');
                         }
                         slideIntervalfielddisabler(node);
                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.PAUSESLIDESONHOVER,
                    key: "pauseslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-pauseonhover',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-carousel').attr('data-pause','hover');
                        }else{
                            $(node).parent().find('.edw-carousel').attr('data-pause','false');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SLIDEINTERVAL,
                    key: "slideinterval",
                    htmlAttr: "data-interval",
                    inputtype: TextInput,
                    edwclasses: "edwinputfield",
                    child: `.carousel`,
                }
            ]
        });

        // Slider 8
        var sliderhtml8 = ` <div class="header-design-slider_unqreplaceid_ edw_adv_slider edw-adv-slider-8 overflow-hidden"> <div class="html-section-body container-fluid bg-white "> <div id="edw_slider_unqreplaceid_" class="carousel slide edw-carousel" data-ride="carousel" data-interval="3000" data-pause="hover"> <ol class="carousel-indicators edw-carousel-indicators position-absolute"> <li data-target="#edw_slider_unqreplaceid_" data-slide-to="0" class="active"></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="1" class=""></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="2" class=""></li></ol> <div class="carousel-inner edw-slider-inner-container"> <div class="carousel-item edw-slider-item active"> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1 p-0"> <img class="header-slider-bg-image" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <img class="header-slider-bg-image-bottom-left position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> LET’S DESIGN YOUR FUTURE! </div><p class="slider-content-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects.</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Explore Academics</a> </div></div><div class="col-sm slider-sec-2 p-0"> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign8/slideimages/universityimg1.png" alt="slider image 1"> </div></div></div><div class="carousel-item edw-slider-item "> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <img class="header-slider-bg-image-bottom-left position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> Shaping Leaders of Tomorrow </div><p class="slider-content-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects.</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Explore Academics</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image " src="${Vvveb.serverurl}/CDN/slidernewdesign8/slideimages/universityimg2.png" alt="slider image 1"> </div></div></div><div class="carousel-item edw-slider-item "> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <img class="header-slider-bg-image-bottom-left position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> Education for a Bright Future </div><p class="slider-content-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects.</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Explore Academics</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign8/slideimages/universityimg3.png" alt="slider image 1"> </div></div></div></div><a class="carousel-control-prev edw-control-prev position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="prev"> <span class="fa fa-angle-left slider-nav-icons" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next edw-control-next position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="next"> <span class="fa fa-angle-right slider-nav-icons" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> <input name="navigationbutton" class="form-check-input edw-slider-navigationbutton" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-navigationbullets" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-autoplay" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-pauseonhover" type="checkbox" checked="checked" style="display:none !important"> </div></div></div>`;
        var slidercss8 = `.header-design-slider_unqreplaceid_ .html-section-body {background: #ffff;padding: 0px;}.header-design-slider_unqreplaceid_ .html-section-body .carousel-inner {padding: 50px 0px;}.header-design-slider_unqreplaceid_ .carousel-indicators {position: absolute !important;}.header-design-slider_unqreplaceid_ .carousel-indicators [data-target="#edw_slider_unqreplaceid_"] {background: #D9D9D9;width: 8px;height: 8px;border-radius: 50%;border: unset;}.header-design-slider_unqreplaceid_ .carousel-indicators .active {background: #3E86F5;}.header-design-slider_unqreplaceid_ .carousel-item-wrapper {padding: 0 10%;}.header-design-slider_unqreplaceid_ .slider-content-heading {font-size: 55px;font-style: normal;font-weight: 700;line-height: 70px;color: #313848;}.header-design-slider_unqreplaceid_ .slider-content-para {font-size: 20px;font-style: normal;font-weight: 400;line-height: 30px;color: #4C5A73;}.header-design-slider_unqreplaceid_ .slider-content-wrapper {display: flex;flex-direction: column;gap: 45px;z-index: 1;}.header-design-slider_unqreplaceid_ .slider-content {display: flex;flex-direction: column;gap: 16px;}.header-design-slider_unqreplaceid_ .slider-sec-1 {padding: unset;display: flex;align-items: center;position: relative;}.header-design-slider_unqreplaceid_ .slider-sec-2 {padding: unset;display: flex;justify-content: center;align-items: center;}.header-design-slider_unqreplaceid_ .trynowbutton {width: fit-content;padding: 14px 34px;font-size: 20px;font-style: normal;font-weight: 400;line-height: 22px;background-color: #0934BA;}.header-design-slider_unqreplaceid_ .trynowbutton:hover {filter: brightness(90%);}.header-design-slider_unqreplaceid_ .header-slider-image {width: 100%;height: auto;}.header-design-slider_unqreplaceid_ .header-slider-bg-image {position: absolute;max-width: 106px;width: 100%;top: 0px;left: 0px;}.header-design-slider_unqreplaceid_ .header-slider-bg-image-bottom-left {position: absolute;max-width: 182px;width: 100%;bottom: 0px;left: 0px;}.header-design-slider_unqreplaceid_ .carousel-control-prev {opacity: 1;width: 8%;position: absolute !important;}.header-design-slider_unqreplaceid_ .carousel-control-next {opacity: 1;width: 8%;position: absolute !important;}.header-design-slider_unqreplaceid_ .slider-nav-icons {display: flex;justify-content: center;align-items: center;color: #0934BA;font-size: 30px;height: 57px;width: 57px;border-radius: 50%;border: 2px solid #0934BA;background-color: white;}.header-design-slider_unqreplaceid_ .slider-nav-icons:hover {background-color: #0934BA;color: white;}@media (max-width: 768px) {.header-design-slider_unqreplaceid_ .carousel-item-wrapper {margin: unset;padding-left: 24px;padding-right: 24px;}.carousel-control-prev {display: none;}.carousel-control-next {display: none;}}@media (max-width: 576px) {.header-design-slider_unqreplaceid_ .html-section-body {padding: 24px;padding-bottom: 60px;}.header-design-slider_unqreplaceid_ .html-section-body .carousel-inner {padding: 0px 0px;}.header-design-slider_unqreplaceid_ .header-slider-bg-image {max-width: 92px;}.header-design-slider_unqreplaceid_ .slider-sec-1 {padding-left: unset;}.header-design-slider_unqreplaceid_ .slider-sec-2 {padding: 0px 15px;}.header-design-slider_unqreplaceid_ .carousel-item-wrapper {padding: unset;gap: 38px;}.header-design-slider_unqreplaceid_ .carousel-item-wrapper.row {margin: unset;}.header-design-slider_unqreplaceid_ .slider-content-wrapper {align-items: center;gap: 30px;}.header-design-slider_unqreplaceid_ .slider-content-heading {font-size: 45px;line-height: 50px;text-align: center;}.header-design-slider_unqreplaceid_ .slider-content-para {font-size: 20px;text-align: center;}.header-design-slider_unqreplaceid_ .slider-content {gap: 32px;}.header-design-slider_unqreplaceid_ .carousel-indicators {bottom: -40px;}.header-design-slider_unqreplaceid_ .header-slider-bg-image-bottom-left {display: none;}}`;
        var sliderjs8 = ``;
        var appendnode8 = ` <div class="carousel-item edw-slider-item"> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <img class="header-slider-bg-image-bottom-left position-absolute" src="https://staticcdn.edwiser.org/demo/university2/headersliderbgimgtopleft.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> LET’S DESIGN YOUR FUTURE! </div><p class="slider-content-para edw-carousel-content-para m-0">Edwiser School inspires a love of learning in children, encouraging creative thinking across all subjects.</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Explore Academics</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign8/slideimages/universityimg1.png" alt="slider image 1"> </div></div></div>`;
        Vvveb.Components.extend("_base", "html/slider8", {
            name: "Slider with controls 2",
            attributes: ['data-ebpb-slider8'],
            image: "icons/slider8.svg",
            classes: ['edwiser-pb-slider8'],
            html: (()=> {
                return `<div title="Slider-with-controls-2" class="edwiser-pb-slider8" data-vvveb-disabled-area contenteditable="false">${sliderhtml8}<style>${slidercss8}</style></div>`;
            })(),
            beforeInit: function (node){
                properties = [];
                var i = 0;
                var slideno = 0;
                var id = generateUniqueID();
                node.innerHTML = node.innerHTML.replaceAll("_unqreplaceid_", id);
                $(node).find(".edw-slider-item").each(function(e) {
                    i = generateUniqueID();
                    slideno++;
                    var regex = /edw-carousel-item-\d+/;
                    var matchedClass = "";
                    var hasMatchingClass = $(this).filter(function() {
                        var classNames = $(this).attr('class').split(' ');
                        return classNames.some(function(className) {
                            if (regex.test(className)) {
                              matchedClass = className;
                              return true;
                            }
                            return false;
                          });
                      }).length > 0;
                    $(this).removeClass(matchedClass);
                    $(this).addClass("edw-carousel-item-" + i);

                    properties.push(
                        {
                            name: "",
                            key: "slidergrouptitle"+slideno,
                            inputtype: EdwheaderInput,
                            edwclasses: "edwgroupheader",
                            data: {
                                header: "Slide " + slideno,
                                extraclass: "edwslideheading m-0",
                                type: "h6",
                                style: ""
                            }
                        },
                        {
                            name: "",
                            key: "deleteslideritem",
                            inputtype: EdwbuttonInput,
                            child: `.edw-carousel-item-${i}`,
                            edwclasses: "edwslidedelbtn",
                            data: {text:"", icon:"la-trash", extraclasses: "btn btn-outline-danger"},
                            onChange: function(node, value, input) {
                                $(node).remove();
                                Vvveb.Components.render("html/slider8");
                                return node;
                            },
                        },
                        {
                            name: SETTINGTITLES.TITLE,
                            key: "slidertitle"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.TITLECOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-heading').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTION,
                            key: "sliderdescription"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-para`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTIONCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i}  .edw-carousel-content-para`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-para').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXT,
                            key: "sliderbuttontext"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.LINK,
                            key: "sliderlink"+i,
                            htmlAttr: "href",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                        },
                        {
                            name: SETTINGTITLES.BUTTONBACKGROUNDCOLOR,
                            key: "background-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('background',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONBORDERCOLOR,
                            key: "border-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('border-color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXTCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child:  `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.IMAGE,
                            key: "sliderimage"+i,
                            htmlAttr: 'src',
                            inputtype: ImageInput,
                            edwclasses: "edwinputfield",
                            child: `.edw-carousel-item-${i} .header-slider-image`
                        }
                    );
                });
                properties = removeDeleteButton(node,properties);
                removeSettingsOnSingleSlide(node);
                if(!$(node).find('.edw-slider-inner-container').children('.edw-slider-item').hasClass('active')){
                    $(node).find('.edw-slider-item').first().addClass('active');
                }
                removeDuplicateIndicators(node,i);
                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("slider") === -1;
                });
                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("color") === -1;
                });
                this.properties =  properties.concat(this.properties);
                slideIntervalfielddisabler(node);
                return node;
            },
            properties: [
                {
                    name: "",
                    key: "addNewSlide",
                    inputtype: EdwbuttonInput,
                    edwclasses: "edwnewslidebtn",
                    data: {text:"Add new slide", icon:"la-plus", extraclasses: "btn btn-outline-primary"},
                    onChange: function(node)
                    {
                         //render component properties again to include the new column inputs
                         $(node).parent().find('.carousel-inner').append(appendnode8);
                         Vvveb.Components.render("html/slider8");

                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBUTTONSDESKTOP,
                    key: "navigationbutton",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbutton',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-control-prev').removeClass('d-none');
                            $(node).parent().find('.edw-control-next').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-control-prev').addClass('d-none');
                            $(node).parent().find('.edw-control-next').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBULLETS,
                    key: "navigationbullets",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbullets',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-carousel-indicators').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-carousel-indicators').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.AUTOPLAYSLIDES,
                    key: "autoplayslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-autoplay',
                    onChange: function (node, value, input) {
                        var slideintervalfield =$(input).closest('section').find('[data-key="slideinterval"]');
                         if(value == true){
                            $(node).parent().attr('data-ride','carousel');
                            $(node).parent().attr('data-interval','3000');
                            slideintervalfield.find('input[name="slideinterval"]').val('3000');
                         }else{
                             $(node).parent().removeAttr('data-ride');
                             $(node).parent().attr('data-interval','0');
                             slideintervalfield.find('input[name="slideinterval"]').val('0');
                         }
                         slideIntervalfielddisabler(node);
                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.PAUSESLIDESONHOVER,
                    key: "pauseslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-pauseonhover',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().attr('data-pause','hover');
                        }else{
                            $(node).parent().attr('data-pause','false');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SLIDEINTERVAL,
                    key: "slideinterval",
                    htmlAttr: "data-interval",
                    inputtype: TextInput,
                    edwclasses: "edwinputfield",
                    child: `.carousel`,
                }
            ]
        });

        // Slider 9
        var sliderhtml9 = ` <div class="header-design-slider_unqreplaceid_ edw_adv_slider edw-adv-slider-9"> <div class="html-section-body container-fluid"> <div id="edw_slider_unqreplaceid_" class="carousel slide edw-carousel" data-ride="carousel" data-interval="3000" data-pause="hover"> <ol class="carousel-indicators edw-carousel-indicators position-absolute"> <li data-target="#edw_slider_unqreplaceid_" data-slide-to="0" class="active"></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="1" class=""></li><li data-target="#edw_slider_unqreplaceid_" data-slide-to="2" class=""></li></ol> <div class="carousel-inner edw-slider-inner-container"> <div class="carousel-item edw-slider-item active"> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/classic2/sliderbgpattern.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> design your dream homepage, in a Snap! </div><p class="slider-content-para edw-carousel-content-para m-0">First-of-its-kind, Edwiser RemUI Homepage Builder to design your dream homepage, in a Snap!</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Try Now</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign9/slideimages/classicimg2.png" alt="slider image 1"> </div></div></div><div class="carousel-item edw-slider-item"> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/classic2/sliderbgpattern.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> Everything you need to build a home page, all in one place. </div><p class="slider-content-para edw-carousel-content-para m-0">First-of-its-kind, Edwiser RemUI Homepage Builder to design your dream homepage, in a Snap!</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Try Now</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign9/slideimages/classicimg1.png" alt="slider image 1"> </div></div></div><div class="carousel-item edw-slider-item "> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/classic2/sliderbgpattern.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> Home Page builder that gives you design superpowers. </div><p class="slider-content-para edw-carousel-content-para m-0">First-of-its-kind, Edwiser RemUI Homepage Builder to design your dream homepage, in a Snap!</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Try Now</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign9/slideimages/classicimg3.png" alt="slider image 1"> </div></div></div></div><a class="carousel-control-prev edw-control-prev position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="prev"> <span class="fa fa-angle-left slider-nav-icons" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next edw-control-next position-absolute" href="#edw_slider_unqreplaceid_" role="button" data-slide="next"> <span class="fa fa-angle-right slider-nav-icons" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> <input name="navigationbutton" class="form-check-input edw-slider-navigationbutton" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-navigationbullets" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-autoplay" type="checkbox" checked="checked" style="display:none !important"> <input name="navigationbutton" class="form-check-input edw-slider-pauseonhover" type="checkbox" checked="checked" style="display:none !important"> </div></div></div>`;
        var slidercss9= `.header-design-slider_unqreplaceid_ .html-section-body {background: #ffff;padding: 0px;}.header-design-slider_unqreplaceid_ .fa-angle-left:before {color: #3E86F5;font-size: 30px;}.header-design-slider_unqreplaceid_ .fa-angle-right:before {color: #3E86F5;font-size: 30px;}.header-design-slider_unqreplaceid_ .slider-content-heading {font-size: 45px;font-style: normal;font-weight: 700;line-height: 55px;letter-spacing: 0.9px;text-transform: capitalize;color: #313848;}.header-design-slider_unqreplaceid_ .slider-content-para {font-size: 18px;font-style: normal;font-weight: 400;line-height: 30px;letter-spacing: 0.36px;text-transform: capitalize;color: #4C5A73;}.header-design-slider_unqreplaceid_ .slider-content-wrapper {display: flex;flex-direction: column;gap: 45px;padding: 40px 0px;z-index: 1;}.header-design-slider_unqreplaceid_ .slider-content {display: flex;flex-direction: column;gap: 16px;}.header-design-slider_unqreplaceid_ .carousel-indicators {position: absolute !important;display: flex;}.header-design-slider_unqreplaceid_ .carousel-indicators [data-target="#edw_slider_unqreplaceid_"] {background: #D9D9D9;width: 8px;height: 8px;border-radius: 50%;border: unset;}.header-design-slider_unqreplaceid_ .carousel-indicators .active {background: #3E86F5;}.header-design-slider_unqreplaceid_ .slider-sec-1 {padding: unset;display: flex;align-items: center;position: relative;padding-left: 10%;}.header-design-slider_unqreplaceid_ .slider-sec-2 {padding: unset;display: flex;align-items: center;}.header-design-slider_unqreplaceid_ .trynowbutton {width: fit-content;font-size: 18px;font-style: normal;font-weight: 400;line-height: 22px;}.header-design-slider_unqreplaceid_ .trynowbutton:hover {filter: brightness(90%);}.header-design-slider_unqreplaceid_ .header-slider-image {width: 100%;height: auto;}.header-design-slider_unqreplaceid_ .header-slider-bg-image {position: absolute;max-width: 388px;width: 100%;top: 0px;left: 0px;}.header-design-slider_unqreplaceid_ .carousel-control-prev {left: 3%;top: 50%;opacity: 1;color: #3E86F5;position: absolute !important;height: 45px;width: 45px;transform: translate(0px, -50%);}.header-design-slider_unqreplaceid_ .carousel-control-prev:hover {color: #0051F9;}.header-design-slider_unqreplaceid_ .carousel-control-prev:hover .fa-angle-left:before {color: #0051F9;}.header-design-slider_unqreplaceid_ .carousel-control-prev:hover .fa-angle-right:before {color: #0051F9;}.header-design-slider_unqreplaceid_ .carousel-control-next {right: 3%;top: 50%;opacity: 1;color: #3E86F5;position: absolute !important;height: 45px;width: 45px;transform: translate(0px, -50%);}.header-design-slider_unqreplaceid_ .carousel-control-next:hover {color: #0051F9;}.header-design-slider_unqreplaceid_ .carousel-control-next:hover .fa-angle-left:before {color: #0051F9;}.header-design-slider_unqreplaceid_ .carousel-control-next:hover .fa-angle-right:before {color: #0051F9;}@media (max-width: 768px) {.header-design-slider_unqreplaceid_ .carousel-control-prev {display: none;}.header-design-slider_unqreplaceid_ .carousel-control-next {display: none;}.header-design-slider_unqreplaceid_ .slider-sec-1 {padding: 0px;}.header-design-slider_unqreplaceid_ .carousel-item-wrapper {margin-left: unset;margin-right: unset;padding: 0px 24px;}.header-design-slider_unqreplaceid_ .slider-content-heading {font-weight: 700;font-size: 26px;line-height: 32px;}.header-design-slider_unqreplaceid_ .slider-content-para {font-weight: 400;font-size: 18px;line-height: 26px;}}@media (max-width: 576px) {.header-design-slider_unqreplaceid_ .html-section-body {padding: 24px 24px 45px 24px;}.header-design-slider_unqreplaceid_ .carousel-inner {padding-bottom: unset;}.header-design-slider_unqreplaceid_ .header-slider-bg-image {display: none;}.header-design-slider_unqreplaceid_ .slider-sec-1 {padding-left: unset;}.header-design-slider_unqreplaceid_ .slider-sec-2 {padding: 0px 15px;}.header-design-slider_unqreplaceid_ .carousel-item-wrapper {gap: 38px;padding: 0px;}.header-design-slider_unqreplaceid_ .slider-content-wrapper {align-items: center;padding: 0px;gap: 29px;}.header-design-slider_unqreplaceid_ .carousel-indicators {bottom: -48px;display: flex;}.header-design-slider_unqreplaceid_ .slider-content-heading {font-weight: 700;font-size: 35px;line-height: 44px;text-align: center;}.header-design-slider_unqreplaceid_ .slider-content-para {font-weight: 400;font-size: 20px;line-height: 30px;text-align: center;}.header-design-slider_unqreplaceid_ .slider-content {gap: 32px;}}`;
        var sliderjs9 = ``;
        var appendnode9 = ` <div class="carousel-item edw-slider-item"> <div class="row carousel-item-wrapper"> <div class="col-sm slider-sec-1"> <img class="header-slider-bg-image position-absolute" src="https://staticcdn.edwiser.org/demo/classic2/sliderbgpattern.png" alt="slider image pattern "> <div class="slider-content-wrapper"> <div class="slider-content"> <div class="slider-content-heading edw-carousel-content-heading"> design your dream homepage, in a Snap! </div><p class="slider-content-para edw-carousel-content-para m-0">First-of-its-kind, Edwiser RemUI Homepage Builder to design your dream homepage, in a Snap!</p></div><a href="#" class="btn btn-primary trynowbutton edw-carousel-trynow-btn">Try Now</a> </div></div><div class="col-sm slider-sec-2 "> <img class="header-slider-image" src="${Vvveb.serverurl}/CDN/slidernewdesign9/slideimages/classicimg2.png" alt="slider image 1"> </div></div></div>`;
        Vvveb.Components.extend("_base", "html/slider9", {
            name: "Slider with controls 3",
            attributes: ['data-ebpb-slider9'],
            image: "icons/slider9.svg",
            classes: ['edwiser-pb-slider9'],
            html: (()=> {
                return `<div title="Slider-with-controls-3" class="edwiser-pb-slider9" data-vvveb-disabled-area contenteditable="false">${sliderhtml9}<style>${slidercss9}</style></div>`;
            })(),
            beforeInit: function (node){
                properties = [];
                var i = 0;
                var slideno = 0;
                var id = generateUniqueID();
                node.innerHTML = node.innerHTML.replaceAll("_unqreplaceid_", id);
                $(node).find(".carousel-item").each(function(e) {
                    i = generateUniqueID();
                    slideno++;
                    var regex = /edw-carousel-item-\d+/;
                    var matchedClass = "";
                    var hasMatchingClass = $(this).filter(function() {
                        var classNames = $(this).attr('class').split(' ');
                        return classNames.some(function(className) {
                            if (regex.test(className)) {
                              matchedClass = className;
                              return true;
                            }
                            return false;
                          });
                      }).length > 0;
                    $(this).removeClass(matchedClass);
                    $(this).addClass("edw-carousel-item-" + i);

                    properties.push(
                        {
                            name: "",
                            key: "slidergrouptitle"+slideno,
                            inputtype: EdwheaderInput,
                            edwclasses: "edwgroupheader",
                            data: {
                                header: "Slide " + slideno,
                                extraclass: "edwslideheading m-0",
                                type: "h6",
                                style: ""
                            }
                        },
                        {
                            name: "",
                            key: "deleteslideritem",
                            inputtype: EdwbuttonInput,
                            child: `.edw-carousel-item-${i}`,
                            edwclasses: "edwslidedelbtn",
                            data: {text:"", icon:"la-trash", extraclasses: "btn btn-outline-danger"},
                            onChange: function(node, value, input) {
                                $(node).remove();
                                Vvveb.Components.render("html/slider9");
                                return node;
                            },
                        },
                        {
                            name: SETTINGTITLES.TITLE,
                            key: "slidertitle"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.TITLECOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-heading`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-heading').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTION,
                            key: "sliderdescription"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-content-para`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.DESCRIPTIONCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i}  .edw-carousel-content-para`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-content-para').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXT,
                            key: "sliderbuttontext"+i,
                            htmlAttr: "innerHTML",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                            onChange: function (node, value, input) {
                                if (value == "") {
                                    $(node).hide();
                                } else {
                                    $(node).show().text(value);
                                }
                            }
                        },
                        {
                            name: SETTINGTITLES.LINK,
                            key: "sliderlink"+i,
                            htmlAttr: "href",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            inputtype: TextInput,
                            edwclasses: "edwinputfield",
                        },
                        {
                            name: SETTINGTITLES.BUTTONBACKGROUNDCOLOR,
                            key: "background-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('background',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONBORDERCOLOR,
                            key: "border-color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child: `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('border-color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.BUTTONTEXTCOLOR,
                            key: "color",
                            inline:true,
                            htmlAttr: "style",
                            col:12,
                            inputtype: ColorInput,
                            edwclasses: "edwcolorfield",
                            child:  `.edw-carousel-item-${i} .edw-carousel-trynow-btn`,
                            onChange: function (node, value, input) {
                                $(node).parent().find('.edw-carousel-trynow-btn').css('color',value);
                                return node;
                            }
                        },
                        {
                            name: SETTINGTITLES.IMAGE,
                            key: "sliderimage"+i,
                            htmlAttr: 'src',
                            inputtype: ImageInput,
                            edwclasses: "edwfilefield",
                            child: `.edw-carousel-item-${i} .header-slider-image`,
                            // onChange: function (node, value, input) {
                            //     $(node).parent().find(this.child).css("background-image", "url(" + value + ")");
                            //     return node;
                            // }
                        }

                    );
                });

                properties = removeDeleteButton(node,properties);
                removeSettingsOnSingleSlide(node);
                if(!$(node).find('.edw-slider-inner-container').children('.edw-slider-item').hasClass('active')){
                    $(node).find('.edw-slider-item').first().addClass('active');
                }
                removeDuplicateIndicators(node,i);

                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("slider") === -1;
                });
                //remove all option properties
                this.properties = this.properties.filter(function (item) {
                    return item.key.indexOf("color") === -1;
                });
                this.properties =  properties.concat(this.properties);
                slideIntervalfielddisabler(node);
                return node;
            },
            properties: [
                {
                    name: "",
                    key: "addNewSlide",
                    inputtype: EdwbuttonInput,
                    edwclasses: "edwnewslidebtn",
                    data: {text:"Add new slide", icon:"la-plus", extraclasses: "btn btn-outline-primary"},
                    onChange: function(node)
                    {
                         //render component properties again to include the new column inputs
                         $(node).parent().find('.carousel-inner').append(appendnode9);
                         Vvveb.Components.render("html/slider9");

                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBUTTONSDESKTOP,
                    key: "navigationbutton",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbutton',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-control-prev').removeClass('d-none');
                            $(node).parent().find('.edw-control-next').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-control-prev').addClass('d-none');
                            $(node).parent().find('.edw-control-next').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SHOWNAVIGATIONBULLETS,
                    key: "navigationbullets",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-navigationbullets',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().find('.edw-carousel-indicators').removeClass('d-none');
                        }else{
                            $(node).parent().find('.edw-carousel-indicators').addClass('d-none');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.AUTOPLAYSLIDES,
                    key: "autoplayslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-autoplay',
                    onChange: function (node, value, input) {
                        var slideintervalfield =$(input).closest('section').find('[data-key="slideinterval"]');
                         if(value == true){
                            $(node).parent().attr('data-ride','carousel');
                            $(node).parent().attr('data-interval','3000');
                            slideintervalfield.find('input[name="slideinterval"]').val('3000');
                         }else{
                             $(node).parent().removeAttr('data-ride');
                             $(node).parent().attr('data-interval','0');
                             slideintervalfield.find('input[name="slideinterval"]').val('0');
                         }
                         slideIntervalfielddisabler(node);
                         return node;
                    }
                },
                {
                    name: SETTINGTITLES.PAUSESLIDESONHOVER,
                    key: "pauseslides",
                    htmlAttr: "checked",
                    col:12,
                    inline:true,
                    inputtype: CheckboxInput,
                    edwclasses: "edwcheckfield",
                    child:'.edw-slider-pauseonhover',
                    onChange: function (node, value, input) {
                        if(value == true){
                            $(node).parent().attr('data-pause','hover');
                        }else{
                            $(node).parent().attr('data-pause','false');
                        }
                        return node;
                    }
                },
                {
                    name: SETTINGTITLES.SLIDEINTERVAL,
                    key: "slideinterval",
                    htmlAttr: "data-interval",
                    inputtype: TextInput,
                    edwclasses: "edwinputfield",
                    child: `.carousel`,
                }
            ]
        });
    }
    function removeDuplicateIndicators(node, i) {
        $(node).find(".edw-carousel-indicators").empty();
        var id = $(node).find('.edw-carousel').attr('id');
        var x = 0;
        $(node).find(".edw-slider-item").each(function(e) {
            $(node).find(".carousel-indicators").append(`<li data-target="#${id}" data-slide-to="${x}"></li>`);
            if ($(this).hasClass('active')) {
                $(node).find(`.edw-carousel-indicators li[data-slide-to='${x}']`).addClass('active');
            }
            x++;
        });
    }
    function generateUniqueID() {
        // Get the current timestamp (milliseconds since Unix Epoch)
        var timestamp = new Date().getTime();

        // Generate a random number (0-99999)
        var randomNum = Math.floor(Math.random() * 100);

        // Concatenate the timestamp and random number to create the unique ID
        var uniqueID =timestamp  + randomNum;

        return uniqueID;
    }

    function removeDeleteButton(node,properties){
        var numberOfChildren = $(node).find(".edw-slider-item").length;
        if(numberOfChildren == 1){
            properties = properties.map(function (item) {
                if(item.key == 'deleteslideritem'){

                    item.data['extraclasses'] = item.data['extraclasses'] + ' disabled';
                }
                return item;
            });
        }
        return properties;
    }
    function removeSettingsOnSingleSlide(node){
        var numberOfChildren = $(node).find(".edw-slider-item").length;
        var navbuttonstatus = $(node).find('.edw-slider-navigationbutton').attr('checked');
        var navbulletstatus  =  $(node).find('.edw-slider-navigationbullets').attr('checked');
        if(numberOfChildren == 1){
            if(navbuttonstatus == 'checked'){
                $(node).parent().find('.edw-control-prev').addClass('d-none');
                $(node).parent().find('.edw-control-next').addClass('d-none');
                // $(node).find('.edw-slider-navigationbutton').removeAttr('checked');
            }
            if(navbulletstatus == 'checked'){
                $(node).parent().find('.edw-carousel-indicators').addClass('d-none');
                // $(node).find('.edw-slider-navigationbullets').removeAttr('checked');
            }

        }else{
            if(navbuttonstatus == 'checked'){
                $(node).parent().find('.edw-control-prev').removeClass('d-none');
                $(node).parent().find('.edw-control-next').removeClass('d-none');
                $(node).find('.edw-slider-navigationbutton').attr('checked' , 'checked');
            }
            if(navbulletstatus == 'checked'){
                $(node).parent().find('.edw-carousel-indicators').removeClass('d-none');
                $(node).find('.edw-slider-navigationbullets').attr('checked' , 'checked');
            }
        }
    }
    function slideIntervalfielddisabler(node){
        $(document).ready(function(){
            // var autoplaycheckedstatus = $(node).parent().find('.edw-slider-autoplay').attr('checked');
            var autoplaycheckedstatus = $(document).find('[name="autoplayslides"]').is(":checked");
            console.log(autoplaycheckedstatus);
            if(!autoplaycheckedstatus){
                $(document).find('#left-panel .edwinputfield[data-key="slideinterval"] input').attr('disabled','disabled');
            }else{
                $(document).find('#left-panel .edwinputfield[data-key="slideinterval"] input').removeAttr('disabled');
            }
        });
    }
    return {
        init: function () {
            var blocks = ["html/slider6","html/slider1","html/slider7","html/slider8","html/slider9"];
            addBlocks(blocks);
        }
    }

});
