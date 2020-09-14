<?php
  /*
    ./app/vues/templates/partials/_contact.php
  */
 ?>

 <div class="blog_left_sidebar">

               <div class="d-none d-sm-block mb-5 pb-4">
                   <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                   <script>
                       function initMap() {
                           var uluru = {
                               lat: -25.363,
                               lng: 131.044
                           };
                           var grayStyles = [{
                                   featureType: "all",
                                   stylers: [{
                                           saturation: -90
                                       },
                                       {
                                           lightness: 50
                                       }
                                   ]
                               },
                               {
                                   elementType: 'labels.text.fill',
                                   stylers: [{
                                       color: '#ccdee9'
                                   }]
                               }
                           ];
                           var map = new google.maps.Map(document.getElementById('map'), {
                               center: {
                                   lat: -31.197,
                                   lng: 150.744
                               },
                               zoom: 9,
                               styles: grayStyles,
                               scrollwheel: false
                           });
                       }
                   </script>
                   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzmlGVrmJwZ0ZX1NbQ50D8KBg8TZgpNn4&amp;callback=initMap">
                   </script>

               </div>
               <div class="row">
                   <div class="col-12">
                       <h2 class="contact-title">Get in Touch</h2>
                   </div>
                   <div class="col-12">
                       <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                           <div class="row">
                               <div class="col-12">
                                   <div class="form-group">
                                       <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                   </div>
                               </div>
                               <div class="col-sm-6">
                                   <div class="form-group">
                                       <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="form-group">
                                       <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                   </div>
                               </div>
                           </div>
                           <div class="form-group mt-3">
                               <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                           </div>
                       </form>
                   </div>

               </div>

 </div>
