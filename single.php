<?php get_header(); ?>
    <!-- main container -->
    <div class="container">
    	<div class="article-list">
        <?php while ( have_posts() ) : the_post(); ?>
                <div class="article">
                <h1><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="article-img">
                	<?php the_post_thumbnail(); ?>
                </div>
				<?php }?>
                <div class="article-content">
				<?php the_content(); ?>
				<div class="article-copyright"><i class="fa fa-share-alt"></i> 码字很辛苦，转载请注明来自<b><a href="<?php bloginfo('wpurl');?>"><?php bloginfo('name') ?></a></b>的<a href="<?php the_permalink();?>">《<?php the_title();?>》</a></div>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
                </div>
                
            </div>
            <?php
			endwhile;
			?>

            <div class="footer">COPYRIGHT &copy; <a href="">fuzhufuzhu.com</a> | WRITE BY <a href="">JackFrost</a></div>
        </div>
        <?php get_sidebar(); ?>

//统计人数的
 <?php wp_footer(); ?>
	<?php
	$counterFile = "counter.txt";
	$fp = fopen($counterFile,"a+");
	$num = fgets($fp,5);
	$num += 1;
	print "您是第 "."$num"." 位访客喔！欢迎您的到访！";
	fclose($fp);
	$fpp=fopen($counterFile,"w");
	fwrite($fpp, $num);
	fclose($fpp);
	?>

    </div>
<!------------------------------>
<?php get_footer(); ?>