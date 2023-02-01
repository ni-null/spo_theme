<?php
/*
Template Name: 雲端服務 - 檢測流程
Template Post Type:page
*/
?>

<?php get_header(); ?>
<?php wp_footer(); ?>
<?php
while ( have_posts() ) :
	the_post();
	?>

<div class="container" id="page">
<h1 class="page_title"> <?php the_title(); ?></h1>
	
<p class="page_content"><?php the_content(); ?></p>
	
</div>
	


<?php endwhile; // end of the loop. ?>


<?php
echo '<script type="text/JavaScript"> 
const a = document.getElementById("alphasvg");

    a.addEventListener("load", function () {

        const svgDoc = a.contentDocument;
      
        const delta = svgDoc.getElementById("a5842");
   
        delta.addEventListener("mousedown", function () {
            window.open("https://ask.spo.org.tw/survey_item/")
        }, false);
    }, false);
     </script>'

?>

<?php get_footer(); ?>
