<?php
/* Template Name: condition-treated */
?>
<?php get_header(); ?>
 <?php	$image=get_post_meta(9,"banner-inner",true);
		$thumb = wp_get_attachment_image_src($image, 'banner-inner' );
	  ?>
    <div class="banner banner-inner wow slideInUp" data-wow-duration="1s" style=" background-image: url(<?php echo $url = $thumb['0'];?>);">
        <div class="container">

            <div class="banner-text-cvr">
                <div class="banner-inner-text">
                    
                </div>
            </div>

        </div>
    </div>




<div class="head-neck-main condition-treated-main">
        <div class="container">
            <div class="con-trt-top-text">
                <h1>CONDITIONS TREATED</h1>
                <p>Click on the one of the common injury buttons to find out more information</p>
            </div>

            <div class="con-couple-cvr">
                <div class="con-couple-left">
                    <div class="con-couple-left-list">
                        <ul>
							<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'CTCatagory',
									);
								$categories = get_categories( $args );
								$time = 1.4;
								foreach ( $categories as $category ) {
									
								?>
						
                            <li class="wow fadeInDown" data-wow-duration="<?php echo $time; ?>s">
                                <div class="con-list-img">
								<a href="#"><img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="img-responsive"></a></div>
                                <div class="con-list-text">
                                    <a href="#"><?php echo $name = $category->name ?></a>
                                </div>

                            </li> 
								<?php $time = $time+0.2; } ?> 
                           
                        </ul>
                    </div>
					 <?php	$image=get_post_meta(260,"boy_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );?>
					
                    <div class="con-couple-left-img wow slideInRight" data-wow-duration="1s">
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </div>
                </div>

                <div class="con-couple-right">

                    <div class="con-couple-right-list">
                        <ul>
						<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'CTCatagory',
									);
								$rightside = get_categories( $args );
								$time = 1.4;
								foreach ( $rightside as $right ) {
									
								?>
                            <li class="wow fadeInDown" data-wow-duration="<?php echo $time; ?>s">
                                <div class="con-list-text">
                                    <a href="#"><?php echo $name = $right->name ?></a>
                                </div>
                                <div class="con-list-img"><a href="#"><img src="<?php echo z_taxonomy_image_url($right->term_id); ?>" class="img-responsive"></a></div>

                            </li>
								<?php $time = $time = 0.2; } ?>
							
						</ul>
                    </div>
					<?php	$image=get_post_meta(260,"girl_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );?>
					
                    <div class="con-couple-right-img wow slideInLeft" data-wow-duration="1s">
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </div>

                </div>

            </div>




        </div>



</div>
	
	
	
	
	
	
	
	
	
<?php get_footer(); ?>