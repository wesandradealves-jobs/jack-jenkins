<?php 
     $role = get_field('role','option');
     $service = get_field('service','option');
     $testimonial = get_field('testimonial','option');
     $colored_box = get_field('colored_box','option');
?>


<?php if(get_field('hero_title','option')||get_field('hero_subtitle','option')): ?>
<section id="webdoor" style="background-image:url(<?php echo get_field('hero_background','option'); ?>)">
    <div class="container">
        <div class="col-lg-10">
            <?php if(get_field('hero_title','option')): ?><h1><?php echo get_field('hero_title','option'); ?></h1><?php endif; ?>
            <?php if(get_field('hero_subtitle','option')): ?><h2><?php echo get_field('hero_subtitle','option'); ?></h2><?php endif; ?>
            <?php if(get_field('button_label','option')&&get_field('button_url','option')): ?>
            <a href="<?php echo get_field('button_url','option'); ?>" title="<?php echo get_field('button_label','option'); ?>" class="btn btn1 waves-effect waves-light"><?php echo get_field('button_label','option'); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(get_field('about_title','option')&&get_field('about_text','option')): ?>
<section id="about-me">
    <div class="container">
        <div id="about-me--profile">
            <div id="about-me--profilePic">
                <div>
                    <h3><?php echo get_field('about_title','option'); ?></h3>
                    <p><?php echo get_field('about_text','option'); ?></p>                                    
                </div>
            </div>
            <?php if(get_field('about_avatar','option')): ?>
                <style>
                    #about-me--profilePic::after{
                        content:"Jack Jenkins";
                    }
                    #about-me--profilePic::before{
                        background-image:url('<?php echo get_field('about_avatar','option'); ?>');
                    }
                </style>
            <?php endif; ?>
        </div>
        <?php if($role): ?>
        <div id="about-me--currentRoles" class="clearfix section">
            <h3 class="text-center">My Current Roles</h3>
            <ul class="hlist">
                <?php foreach( $role as $row ) : ?>
                <li>
                    <?php echo '<img src="'.$row[role_thumbnail][url].'" alt="'.$row[role_title].'" />'; ?>
                    <p><?php echo $row[role_title]; ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php if($service): ?>
<section id="my-services">
    <div class="section-header text-center">
        <h3>My Services</h3>
    </div>
    <ul id="my-services--cards">
        <?php foreach( $service as $row ) : ?>
        <li style="<?php if($row[service_background_color]): ?>background-color:<?php echo $row[service_background_color]; ?>;<?php endif; ?>">
            <div>
                <h4><?php echo $row[service_title]; ?></h4>
            </div>
            <div style="<?php if($row[service_background]): ?>background-image:url(<?php echo $row[service_background]; ?>);<?php endif; ?><?php if($row[service_background_color]): ?>background-color:<?php echo $row[service_background_color]; ?>;<?php endif; ?>">
                <div>
                    <p><strong><?php echo $row[service_title]; ?></strong><br/><br/><?php echo $row[service_text]; ?></p>
                    <?php if($row[service_url]): ?>
                    <br/><br/>
                    <a href="<?php echo $row[service_url]; ?>" title="Make Enquiry" class="btn btn1 waves-effect waves-light">Make Enquiry</a>
                    <?php endif; ?>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<?php endif; ?>
<?php if(get_field('my_approach_text','option')): ?>
<section id="myApproach">
    <div class="section-header text-center">
        <h3>My Approach</h3>
        <?php if(get_field('my_approach_session_subtitle','option')): ?>
        <p>
            <?php echo get_field('my_approach_session_subtitle','option'); ?>
        </p>
        <?php endif; ?>
    </div>
    <div id="myApproach-container" class="clearfix">
        <?php if(get_field('my_approach_image','option')): ?>
        <div class="col-lg-6 col-md-6 hidden-sm hidden-xs" style="background-image:url(<?php echo get_field('my_approach_image','option'); ?>);"><!----></div>
        <?php endif; ?>
        <div class="<?php if(get_field('my_approach_image','option')): ?>col-lg-6 col-md-6<?php else: ?> col-lg-12 col-md-12<?php endif; ?> col-sm-12 col-xs-12">
            <div>
                <p><strong>About Me</strong></p>
                <p>
                    <?php echo get_field('my_approach_text','option'); ?>
                </p>                                
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if( $testimonial ): ?>
<section id="testimonials" class="container">
    <div class="section-header text-center">
        <h3>Client Testimonials</h3>
    </div>
    <div id="testimonials--testimonialSlider" class="owl-carousel owl-theme">
        <?php foreach( $testimonial as $row ) : ?>
        <div class="item testimonial post_<?php echo $row[testimonial_id]; ?>">
            <p class="testimonial--quote">
                <?php echo $row[testimonial_quote]; ?>
            </p>
            <div class="testimonial--footer">
                <span class="testimonial--avatar">
                    <span>
                        <?php echo $row[testimonial_name].",<br/>".$row[testimonial_role]; ?><br/>
                        <img src="<?php echo $row[testimonial_company]; ?>" alt="">
                    </span>
                </span>
                <?php echo '
                <style type="text/css">
                    .testimonial.post_'.$row[testimonial_id].' .testimonial--avatar::before{
                        background-image:url('.$row[testimonial_avatar].');
                    }
                </style>';
                ?>
            </div>
        </div>  
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
<?php if( $colored_box ): ?>
<section id="work-with-me">
    <div class="container">
        <?php foreach( $colored_box as $row ) : ?>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center colored_box post_<?php echo $row[colored_box_id]; ?>">
            <div style="<?php if($row[colored_box_background]): ?>background-color:<?php echo $row[colored_box_background]; ?>;<?php endif; ?>">
                <h3><?php echo $row[colored_box_title]; ?></h3>
                <p><?php echo $row[colored_box_text]; ?></p>
                <?php if($row[colored_box_url]): ?>
                <a target="_blank" href="<?php echo $row[colored_box_url]; ?>" title="<?php echo $row[button_label]; ?>" class="btn btn2 waves-effect waves-light"><?php echo $row[button_label]; ?></a>       
                <?php endif; ?>                         
            </div>
            <?php  
                if($row[colored_box_background]): 
                    echo '
                    <style type="text/css">
                        .colored_box.post_'.$row[colored_box_id].' .btn{
                            color:'.$row[colored_box_background].';
                        }
                    </style>';
                endif;
            ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

