<?php require('connect.php');?>

<?php include 'include/header.php';?>

 <!-------Navbar End------------->
 <!-------Banner Start------------->
 <section class="BannerBackground py-5" style="background-image: url('IMAGES/banner.png'); background-repeat: no-repeat; background-size:cover; width:100%; height:100%;">
  <div class="container">
    <div class="row py-5">
      <div class="col-md-8">
        <div class="content">
          <h2 class="text-white  formate">Do You Want To See Your Business Making 3X More Revenue in The Next 90 Days From Now? </h2>
          <h5 class="text-white busi">Do You Want To See Your Business Making 3X More Revenue in The Next 90 Days From Now? </h5>          
        </div>
        <div class="py-5 busi">
        <div class="btn btn-danger"><p class="m-0">let's get started</p></div>
        </div>        
      </div> 
 <div class="col-md-4 p-5">    

 <?php









$err = "";

if(isset($_POST['submit'])){

    $name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cname = $_POST['Cname'];

    $sql = "INSERT INTO `contact`(`fullname`, `email`, `phone`, `Cname`) VALUES ('$name','$email','$phone','$cname')";
    
    $result = mysqli_query($conn, $sql);

    if($result == true){
      $err = '<div class="alert alert-success" role="alert">message sent successfully</div>';
  }else{
      $err = '<div class="alert alert-danger" role="alert">something error</div>';
  }




}


?>


<?php echo $err ;?>
    <form action="" method="post" class="">
    <div class="formborder">
      <h2 class="text-center" style="color:#ffa200;">Book a Free Audit Call Today</h2>
      <div class="mb-2">
        <label  class=" text-white">NAME </label>
        <input type="name" class="form-control"   name="fname">
      </div>
      <div class="mb-2">
        <label  class=" text-white">EMAIL</label>
        <input type="email" class="form-control"   name="email">
      </div>
      <div class="mb-2">
        <label class=" text-white">PHONE</label>
        <input type="phone" class="form-control"   name="phone">
      </div>
      <div class="mb-2">
        <label  class=" text-white">COMPANY NAME</label>
        <input type="subject" class="form-control"   name="Cname">
      </div>
      <div class="mb-2">
      <input type="submit" class="btn btn-danger px-5 py-2" name="submit">
      </div>
      </div> 
    </form>          
    </div>                          
  </div>
 </section>
<section>
  <div class="container">
    <div class="row  py-5">
      <h2 class="text-uppercase text-center"> our services</h2>
      <h3 class="text-capitalize text-center grow">Grow your Business with Us</h3>
      <div class="col-md-3 col-lg-3 pt-5 offset-2">
      <div class="card" style="width: 20rem;">
          <div class="card-body">
          <img src="IMAGES/dm1.png" class="img-fluid">
          <h5 class="card-title">Search Engine Marketing</h5>
          <p class="card-text">Maecenas scelerisque commodo turpis, the quis eleifend. Suspendisse eget dolor porta magna lobortis.</p>
         </div>
         </div>
      </div>
      <div class="col-md-3 col-lg-3 pt-5">
      <div class="card" style="width: 20rem;">
          <div class="card-body">
          <img src="IMAGES/dm2.png" class="img-fluid">
          <h5 class="card-title">Analytics, Data and Graphs</h5>
          <p class="card-text">Maecenas scelerisque commodo turpis, the quis eleifend. Suspendisse eget dolor porta magna lobortis.</p>
         </div>
         </div>
      </div>
      <div class="col-md-3 col-lg-3 pt-5">
      <div class="card" style="width: 20rem;">
          <div class="card-body">
          <img src="IMAGES/dm3.png" class="img-fluid">
          <h5 class="card-title">Social Media Management</h5>
          <p class="card-text">Maecenas scelerisque commodo turpis, the quis eleifend. Suspendisse eget dolor porta magna lobortis.</p>
         </div>
         </div>
      </div>
      <div class="col-md-3 col-lg-3  offset-2 pt-5">
      <div class="card" style="width: 20rem;">
          <div class="card-body">
          <img src="IMAGES/dm4.png" class="img-fluid">
          <h5 class="card-title">Click through Rates</h5>
          <p class="card-text">Maecenas scelerisque commodo turpis, the quis eleifend. Suspendisse eget dolor porta magna lobortis.</p>
         </div>
         </div>
      </div>
      <div class="col-md-3 col-lg-3 pt-5">
      <div class="card" style="width: 20rem;">
          <div class="card-body">
          <img src="IMAGES/dm5.png" class="img-fluid">
          <h5 class="card-title">PPC Services</h5>
          <p class="card-text">Maecenas scelerisque commodo turpis, the quis eleifend. Suspendisse eget dolor porta magna lobortis.</p>
         </div>
         </div>
      </div>
      <div class="col-md-3 col-lg-3 pt-5">
      <div class="card" style="width: 20rem;">
          <div class="card-body">
          <img src="IMAGES/dm6.png" class="img-fluid">
          <h5 class="card-title">Competitor Research </h5>
          <p class="card-text">Maecenas scelerisque commodo turpis, the quis eleifend. Suspendisse eget dolor porta magna lobortis.</p>
         </div>
         </div>
      </div>
    </div>
  </div>
</section>






<!-- <section class="bg-light py-5 ">
  <div class="container">
    <div class="row py-5">
    <h2 class="text-center text-uppercase pb-3">our services</h2>
      <div class="col-md-3">  
        <div class="outer">    
        <div class="sectionimg">
        <img class="img-fluid" src="IMAGES/digital1.jpg">       
        <div class="sectiontopic">
          <h3 class="text-uppercase">website design</h3>
        </div>
        </div>
      </div>
      </div> 
      <div class="col-md-3">
      <div class="outer"> 
        <div class="sectionimg">
        <img class="img-fluid" src="IMAGES/digital2.jpg">        
        <div class="sectiontopic">
          <h3 class="text-uppercase">web & mobile app development</h3>
        </div>
        </div>
      </div>
      </div>
      <div class="col-md-3">
      <div class="outer"> 
        <div class="sectionimg">
        <img class="img-fluid" src="IMAGES/digital3.jpg">        
        <div class="sectiontopic">
          <h3 class="text-uppercase">ecommerce development</h3>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-3">
      <div class="outer"> 
        <div class="sectionimg">
        <img class="img-fluid" src="IMAGES/digital4.jpg">    
        <div class="sectiontopic">
          <h3 class="text-uppercase">digital marketing</h3>
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section> -->
 <section class="bg-black">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
      <div class="mapimage text-center">
      <img class="img-fluid py-5 text-center" src="IMAGES/map.png">
      </div>
      </div>
      <div class="col-md-4">
        <h3 class="text-white pt-5 mt-3 pr-4 mapcontent ">#1 choice when it comes to Growth Advertising and Analytics</h3>
        <p class="text-white  mappara">We have proven, time and again, that data can radically improve how brands acquire and grow high-valued customers</p>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container">
  <h2 class="text-center pb-4 ">Achieve all your goals in one place</h2>
    <div class="row py-3">   
      <div class="col-md-4 p-4">
        <div class="listsign text-center">
        <i class="fa-solid fa-list"></i>
        </div>
        <h3 class="text-center font">Maximise leads and conversions</h3>
        <P class="text-center font2">Get better quality leads and enhance conversions.</p>
      </div>
      <div class="col-md-4 pt-4">
        <div class="listsign text-center">
        <i class="fa-solid fa-signal"></i>
        </div>
        <h3 class="text-center font">Increase online sales</h3>
        <P class="text-center font2">Show up where shoppers are and increase <br>site traffic and sales.</p>
      </div>
      <div class="col-md-4 p-4">
        <div class="listsign text-center">
        <i class="fa-solid fa-house"></i>
        </div>
        <h3 class="text-center font">Drive in-store foot traffic</h3>
        <P class="text-center font2">Bring people through your doors and <br>increase offline sales.</p>
      </div>
      <div class="col-md-4 offset-2 pt-5">
        <div class="listsign text-center">
        <i class="fa-solid fa-earth-americas"></i>
        </div>
        <h3 class="text-center font">Show your brand to more people</h3>
        <P class="text-center font2">Put your brand out there to increase <br>reach and engagement.</p>
      </div>
      <div class="col-md-4 py-5">
        <div class="listsign text-center">
       <i class="fa-solid fa-mobile"></i>
        </div>
        <h3 class="text-center font">Market your app to new users</h3>
        <P class="text-center font2">Put your app in front of the right users to <br>drive downloads and engagement.</p>
      </div>
    </div>
  </div>
</section>
<section class="bg-dark py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h3 class="text-center text-capitalize text-white pb-3">Let's Discuss Your Project>></h3>
        <h5 class="text-center text-white pb-3">Get free consultation and let us know your project idea to turn it into an amazing digital product.</h5>
        <div class="btn btn-danger text-capitalize"> talk to our experts</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid bg-light py-5">
    <div class="row">
        <p class="text-center faqs pt-5 mb-0 ">FAQs</p>
        <h2 class=" text-center OurHeading pb-4 mb-0">MOST COMMON FAQs</h2>
        <div class="col-md-8 mx-auto">
        <div class="accordion" id="accordionExample"  >
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                Accordion Item #4
              </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingfive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                Accordion Item #5
              </button>
            </h2>
            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</section>
<section class="animatednumber py-5 mt-5 ">
<div class="container">
  <div class="row text-center">
    <div class="col-md-3">
    <h2 class="number-container m-0" data-target="1000">0</h2>
      <p class="text-uppercase">project completed<p>
    </div>
    <div class="col-md-3">
    <h2 class="number-container m-0" data-target="2000">0</h2>
      <p class="text-uppercase">google lead add<p>
    </div>
    <div class="col-md-3">
    <h2 class="number-container m-0" data-target="6000">0</h2>
      <p class="text-uppercase">facebook & insta add<p>
    </div>
    <div class="col-md-3">
    <h2 class="number-container m-0" data-target="30">0</h2>
      <p class="text-uppercase">years of experience<p>
    </div>
  </div>
</div>
</section>
<section class="testimonials py-5 mt-5" style="background-image: url('IMAGES/call-shap1.webp'); background-repeat: no-repeat; background-size:cover; width:100%; height:100%; background-color:black">
  <div class="container py-5">
    <div class="row text-center">
      <div class="col-md-12 sides" >
      <div class="testimonial-slider">
  <div class="slides-container">
    <div class="slide">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>      
    </div>
    <div class="slide">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="slide">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="slide">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="slide">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="slide">
    <div class="card">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
  <div class="slider-controls">
    <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
  </div>
</div>
      </div>
    </div>
  </div>
</section>
<section class="text-center">
  <div class="container ">
    <div class="row">
      <div class="col">
      <div id="owl-demo" class="owl-carousel owl-theme text-center">          
          <div class="item text-center"><img src="IMAGES/eastern-infloytics.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div>
          <div class="item text-center"><img src="IMAGES/mantra.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div>
          <div class="item text-center"><img src="IMAGES/neon-lite.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div>
          <div class="item text-center"><img src="IMAGES/rd-weld.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div>
          <div class="item text-center"><img src="IMAGES/mantra.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div>
          <div class="item text-center"><img src="IMAGES/grd-india.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div>              
          <div class="item text-center"><img src="IMAGES/mantra.webp" alt="Owl Image" style="width:181.2px; margin-right:60px;"></div> 
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'include/footer.php';?>
