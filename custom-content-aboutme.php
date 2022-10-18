<div class="carousel-container mt-5">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_1');?>" class="d-block w-100" alt="Image 1">  
                </div>
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_2');?>" class="d-block w-100" alt="Image 2">  
                </div>
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_3');?>" class="d-block w-100" alt="Image 3">  
                </div>
            </div>
          </div>
    
          <div class="carousel-item">
            <div class="row">
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_4');?>" class="d-block w-100" alt="Image 4">  
                </div>
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_5');?>" class="d-block w-100" alt="Image 5">  
                </div>
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_6');?>" class="d-block w-100" alt="Image 6">  
                </div>
          </div>
          </div>

          <div class="carousel-item">
            <div class="row">
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_7');?>" class="d-block w-100" alt="Image 7">  
                </div>
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_8');?>" class="d-block w-100" alt="Image 8">  
                </div>
                <div class="col-lg-4">
                  <img src="<?php the_field('carousel_image_9');?>" class="d-block w-100" alt="Image 9">  
                </div>
          </div>
          </div>
 </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</div>