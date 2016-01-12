<?php get_header(); ?>
      <div class="row-fluid">
         <div class="span12">
            <div class="moduletable">
               <div id="vmTouchSlider94" class="ordasoft">
                  <div class="vehicleSlider  horizontal" style="max-width: 1350px;">
                     <span class="arrow-left"></span>
                     <span class="arrow-right"></span>
                     <div class="swiper-container" style="height: 500px;">
                        <span id="loaderGif" style="display:block;"></span>
                        <div class="swiper-wrapper" style="visibility:hidden;">
                           <div class="swiper-slide">
                              <img id="slideImgVm" src="http://ordasvit.com/vehiclemanager16/components/com_vehiclemanager/photos/4E324BEF-AC55-4FDD-AEE2-B646855F2044_Ford_500_1350.jpg" alt="img"/>
                              <div id="captionSlide">
                                 <div class="slide-title">FORD NEW KUGA</div>
                                 <div class="slide-button"><a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/2/ford-new-kuga?Itemid=155"  class="btn btn-primary">Read More</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <img id="slideImgVm" src="http://ordasvit.com/vehiclemanager16/components/com_vehiclemanager/photos/543EEB61-3F53-4839-1ED3-1795C99B3C7D_chevrolet_500_1350.jpg" alt="img"/>
                              <div id="captionSlide">
                                 <div class="slide-title">Chevrolet Comaro</div>
                                 <div class="slide-button"><a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/8/chevrolet-comaro?Itemid=155"  class="btn btn-primary">Read More</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <img id="slideImgVm" src="http://ordasvit.com/vehiclemanager16/components/com_vehiclemanager/photos/5C43905F-7DBD-0285-060A-3E3C33F1EA31_Mer_500_1350.jpg" alt="img"/>
                              <div id="captionSlide">
                                 <div class="slide-title">Mercedes-Benz S Class</div>
                                 <div class="slide-button"><a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/50/Sale/9/mercedes-benz-s-class?Itemid=155"  class="btn btn-primary">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiperPagination"></div>
               </div>
               <script type="text/javascript">
                  jQuery(window).load(function() {
                  
                     var mySwiper94 = new Swiper('#vmTouchSlider94 .swiper-container',{
                             pagination: '#vmTouchSlider94 .swiperPagination',
                             loop: true,
                       mode:'horizontal',
                       speed:500, 
                       autoplay:3500,
                       autoResize: true,
                       DOMAnimation: true,
                       preventLinks: true,
                       grabCursor: false,
                       createPagination: true,
                       paginationClickable: true
                     });
                  
                           jQuery('#vmTouchSlider94 .arrow-left').on('click', function() {
                         mySwiper94.swipePrev();
                       });
                       jQuery('#vmTouchSlider94 .arrow-right').on('click', function() {
                         mySwiper94.swipeNext();
                       });
                     
                     setTimeout(
                       function(){
                         jQuery(".swiper-wrapper").css("visibility", "visible");
                         jQuery("#loaderGif").css("display", "none");
                       }, 1400);
                  
                       function vmSliderResize() {
                           var heightImg = 0;
                         jQuery("#vmTouchSlider94 .swiper-slide img#slideImgVm").css('height', 'auto');
                           var vmImgHeight = jQuery('#vmTouchSlider94 .swiper-slide img#slideImgVm').height();
                         jQuery("#vmTouchSlider94 .swiper-container").height(vmImgHeight);
                         jQuery("#vmTouchSlider94 .vehicleSlider").height(vmImgHeight);
                       } 
                         // vmSliderResize();
                  
                       jQuery(window).resize(function() { 
                         vmSliderResize(); 
                       });
                  
                  });
                  
               </script>		
            </div>
         </div>
      </div>
      <div id="wrapper" class="container">
         <div class="row-fluid">
            <div class="span12">
               <div class="Local_about">
                  <div class="moduletable">
                     <h3>Added new cars</h3>
                     <style type="text/css">
                        .vehiclemanager_ {
                        overflow: hidden;
                        }
                        .block_list_in {
                        margin: 10px;
                        padding: 10px;
                        overflow: hidden;
                        border: 1px solid #D6D6D6;
                        /* width:200px;
                        height: 250px;*/
                        }
                        .block_list_in a {}
                        .block_list_img {
                        text-align: center;
                        margin-bottom: 10px;
                        }
                        .block_list_in img {}
                        .block_list_model {}
                        .priceAndHits {}
                        .block_list_price {}
                        .block_list_hits {}
                     </style>
                     <div class="vehiclemanager_ ">
                        <div class="block_list">
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/8/chevrolet-comaro?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/543EEB61-3F53-4839-1ED3-1795C99B3C7D_chevrolet_1200_1600.jpg" alt="Chevrolet Comaro" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/8/chevrolet-comaro?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/8/chevrolet-comaro?Itemid=155" target="_self">Chevrolet Comaro</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 66 995.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 2807</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/50/Sale/9/mercedes-benz-s-class?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/5C43905F-7DBD-0285-060A-3E3C33F1EA31_Mer_1200_1600.jpg" alt="Mercedes-Benz S Class" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/50/Sale/9/mercedes-benz-s-class?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/50/Sale/9/mercedes-benz-s-class?Itemid=155" target="_self">Mercedes-Benz S Class</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 11 999.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 3924</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/2/ford-new-kuga?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/4E324BEF-AC55-4FDD-AEE2-B646855F2044_Ford_1200_1600.jpg" alt="FORD NEW KUGA" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/2/ford-new-kuga?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/2/ford-new-kuga?Itemid=155" target="_self">FORD NEW KUGA</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 32 600.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 2448</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/47/Sedan/6/audi?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/287B93D7-731B-AF7C-9764-FE6313DD68E4_Audi_1200_1600.jpg" alt=" AUDI" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/47/Sedan/6/audi?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/47/Sedan/6/audi?Itemid=155" target="_self"> AUDI</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 62 500.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 1501</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/47/Sedan/3/bmw?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/DB3EEFA5-5AF0-CECE-434B-ACBE158B9739_Bmw_1200_1600.jpg" alt="BMW" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/47/Sedan/3/bmw?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/47/Sedan/3/bmw?Itemid=155" target="_self">BMW</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 29 500.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 1672</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/7/alfa-romeo?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/19169D10-2535-4A50-D563-BF4CA08B01C9_alfa0_1200_1600.jpg" alt="Alfa Romeo" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/7/alfa-romeo?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/46/Smart/7/alfa-romeo?Itemid=155" target="_self">Alfa Romeo</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 111.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 1070</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/5/lamborghini-gallardo?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/46D2639F-EA6F-A40F-195F-DA9F1D31F518_Lamborghini_1200_1600.jpg" alt="Lamborghini Gallardo" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/5/lamborghini-gallardo?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/49/Sport/5/lamborghini-gallardo?Itemid=155" target="_self">Lamborghini Gallardo</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 198 000.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 1911</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/48/Trucks/4/citroen?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/2ACE6317-B283-9E49-DED3-24A2312F467E_sitroen_1200_1600.jpg" alt="CITROEN" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/48/Trucks/4/citroen?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/48/Trucks/4/citroen?Itemid=155" target="_self">CITROEN</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 11 590.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 1109</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="block_list_in" style="background:none; float:left;">
                              <div class="block_list_img">
                                 <a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/51/Rent/10/honda?Itemid=155"><img src="/vehiclemanager16/./components/com_vehiclemanager/photos/D761B568-74EB-9866-0442-A235CEF65C5F_Honda_1200_1600.jpg" alt="HONDA" hspace="2" vspace="2" border="0" 
                                    style="height:280px" /></a>
                                 <div class="newst_img"><a href="/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/51/Rent/10/honda?Itemid=155"><i class='fa fa-search'></i></a></div>
                              </div>
                              <div class="block_list_model">
                                 <a href="http://ordasvit.com/vehiclemanager16/index.php/component/vehiclemanager/155/view_vehicle/51/Rent/10/honda?Itemid=155" target="_self">HONDA</a>
                              </div>
                              <div class="priceAndHits">
                                 <div class="block_list_price">
                                    <p>
                                       Price: USD 126 350.00        
                                    </p>
                                 </div>
                                 <div class="block_list_hits">
                                    <p>Hits: 894</p>
                                    <div class="price-shadow"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="moduletable">
                     <div class="custom"  >
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- autoseller responsive pos0 -->
                        <ins class="adsbygoogle"
                           style="display:block"
                           data-ad-client="ca-pub-5549008594502436"
                           data-ad-slot="1916974542"
                           data-ad-format="auto"></ins>
                        <script>
                           (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="globalContent">
            <div class="row-fluid">
               <div id="contentBox" class="span12">
                  <div>
                     <div id="system-message-container">
                        <div id="system-message"></div>
                     </div>
                  </div>
                  <div>
                     <div class="blog-featured">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--globalContent-->
      </div>
      <!--wrapper-->
      <div class="information_top">
         <div id="wrapper" class="container">
            <div class="span7">
               <div class="moduletable">
                  <h3>About Us</h3>
                  <div class="custom"  >
                     <img src="/vehiclemanager16/images/13.jpg" alt="" />
                     <div class="first">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <ul>
                           <li><span><i class="fa fa-caret-right"></i>The largest selection of cars</span></li>
                           <li><span><i class="fa fa-caret-right"></i>Convenient location</span></li>
                           <li><span><i class="fa fa-caret-right"></i>Responsible personnel</span></li>
                           <li><span><i class="fa fa-caret-right"></i>Quality guarantee</span></li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="span5">
               <div class="local_mapp">
                  <div class="moduletable">
                     <h3>Location Map</h3>
                     <style>
                        #map_canvas205782391 img {
                        max-width: none !important;
                        }
                     </style>
                     <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false" ></script>
                     <noscript>Javascript is required to use Google Maps location Joomla module <a href="http://ordasoft.com/location-map.html">Google Maps location module
                        for Joomla </a>, 
                        <a href="http://ordasoft.com/location-map.html">Google Maps location module
                        for Joomla</a>
                     </noscript>
                     <script type="text/javascript">
                        window.onload = function() {
                             var map;
                             var marker = new Array();
                             var infowindow = new Array();
                             var myOptions = {
                               zoom: 9,
                               center: new google.maps.LatLng(50, 36.26),
                                             mapTypeId: google.maps.MapTypeId.ROADMAP
                             };
                             var map = new google.maps.Map(document.getElementById("map_canvas205782391"), myOptions);
                        
                                     marker.push(new google.maps.Marker({
                                position: new google.maps.LatLng(50, 36.25),
                                map: map
                          }));
                        
                          infowindow.push(new google.maps.InfoWindow({
                          content: "Orda Soft"
                          }));
                          
                          google.maps.event.addListener(marker[0], 'mouseover', function() {
                                infowindow[0].close(map,marker[0]);
                            infowindow[0].open(map,marker[0]);
                          });
                             };
                        
                     </script>
                     <div id="map_canvas205782391" style=
                        "width: 470px; height: 300px;
                        float: rigth;" >
                     </div>
                     <br>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
<?php get_footer(); ?>
