<?php get_header(); ?>


<div class="home-content">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 name-row">
          <ul>
            <p class="tag_text">&lt;html&gt;</p>
            <p class="tag_text ms-5">&lt;body&gt;</p>
          </ul>
          <p class="tag_text ms-5">&lt;h2&gt;</p>
          <h2 class="designedby_text ms-5"> designed <span class="secondary">By</span></h2>
          <p class="tag_text_special">&lt;/h2&gt;</p>
          <p class="tag_text ms-5">&lt;h1&gt;</p>
          <h1 class="firstname_text ms-5">Kurt</h1>
          <h1 class="lastname_text ms-5">Simmons</h1>
          <p class="tag_text ms-5 text-end">&lt;/h1&gt;</p>
          <p class="tag_text ms-5">&lt;p&gt;</p>
          <p class="title_description_text ms-5">Frontend Developer - <span class="secondary"> Always Learning </span></p>
          <p class="tag_text text-end">&lt;/p&gt;</p>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 ms-auto nav-row">
          <ul class="mt-3">
            <p class="tag_text"> &lt;ul&gt; </p>
            <a href="/my-skills"> <h2 class="nav_text ms-5"> &lt;mySkills&gt; </h2> </a>
            <a href="/my-work"> <h2 class="nav_text ms-5"> &lt;myWork&gt; </h2> </a>
            <a href="/about-me"> <h2 class="nav_text ms-5"> &lt;aboutMe&gt; </h2> </a>
            <a href="/contact"> <h2 class="nav_text ms-5"> &lt;contactMe&gt; </h2> </a>
            <p class="tag_text text-end me-5"> &lt;/ul&gt; </p>
          </ul>
        </div>
      </div>
    </div>
    <?php the_content();?>
</div>

<?php get_footer();?>