<?php 
/*
    Template Name: Protfolio
*/
get_header(); 

?>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.mixitup.min.js"></script>
<div id="content-row">
    <div class="row-container visible visible-first">
        <div class="container">
            <div class="content-inner row">   
                <div id="component" class="span12">
                    <main role="main">
                        <div class="note"></div>
                            <section class="page-gallery page-gallery__">
                            <header class="page_header">
                            <h3 class="visible visible-first">
                                <span>Portfolio</span> </h3>  
                            </header>
                            <!-- Filter -->
                                <ul id="isotopeContainer" class="gallery items-row cols-3 hover_false grid loaded">
                                    <?php 
                                        query_posts(array('cat' =>160, 'order' => DESC));
                                        $cnt = 0;                                        
                                        while (have_posts()) : the_post();
                                        $thumb_id = get_post_thumbnail_id();
                                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                        $thumb_url = $thumb_url_array[0];
                                        $cnt++;
                                    ?>
                                    <li class="gallery-item mix mix_all gallery-grid   firstItem" style="display: inline-block; opacity: 1;">
                                        <!-- Image  -->
                                        <figure class="item_img img-intro img-intro__none">
                                            <a class="zoom galleryZoomIcon fancybox-thumb" data-fancybox-type="image" data-fancybox-group="gallery" data-fancybox="fancybox" href="<?php echo $thumb_url; ?>">
                                                <?php the_post_thumbnail('full'); ?>
                                            </a>
                                        </figure>    
                                        <!--  title/author -->
                                        <div class="item_header">
                                            <h4 class="item_title visible visible-first">  					
                                                <a href="<?php the_permalink(); ?>"> 
                                                <span><?php the_title(); ?></span> 
                                                </a>
                                            </h4>
                                        </div>
                                        <!-- Introtext -->
                                        <div class="item_introtext">
                                        Sed justo felis, lacinia at scelerisque a, semper et ante.        </div>
                                        
                                        <!-- info BOTTOM -->
                                        <div class="clearfix"></div>
                                    </li> 
                                    <?php endwhile; ?>
                                <li class="gap"></li>
                                <li class="gap"></li>
                                <li class="gap lastItem"></li>
                                </ul>
                            </section>
                        
                        <script>
                        jQuery(document).ready(function($) {
                        $(window).load(function(){
                        
                        var $cols = 3;
                        var $container = $('#isotopeContainer');
                        
                        $item = $('.gallery-item')
                        
                        $container.mixitup({
                        targetSelector: '.gallery-item',
                        filterSelector: '.filter',
                        sortSelector: '.sort',
                        buttonEvent: 'click',
                        effects: [],
                        listEffects: null,
                        easing: 'smooth',
                        layoutMode: 'grid',
                        targetDisplayGrid: 'inline-block',
                        targetDisplayList: 'block',
                        gridClass: 'grid',
                        listClass: 'list',
                        transitionSpeed: 600,
                        showOnLoad: 'all',
                        sortOnLoad: false,
                        multiFilter: false,
                        filterLogic: 'or',
                        resizeContainer: true,
                        minHeight: 0,
                        failClass: 'fail',
                        perspectiveDistance: '3000',
                        perspectiveOrigin: '50% 50%',
                        animateGridList: true,
                        onMixLoad: function(){
                        $container.addClass('loaded');
                        },
                        onMixStart: function(config){
                        if(config.layoutMode == 'list'){
                        config.effects = ['fade','scale']
                        }
                        else{
                        config.effects = []
                        $container.find('.mix').removeClass('gallery-list').addClass('gallery-grid');
                        }
                        },
                        onMixEnd: function(config){
                        if(config.layoutMode == 'list'){
                        $container.find('.mix').addClass('gallery-list').removeClass('gallery-grid');
                        }
                        }
                        });
                        
                        $('.toGrid').click(function(){
                        $('.layout-mode a').removeClass('active');
                        $(this).addClass('active');
                        $container.mixitup('toGrid')
                        })
                        
                        $('.toList').click(function(){
                        $('.layout-mode a').removeClass('active');
                        $(this).addClass('active');
                        $container.mixitup('toList');
                        
                        })
                        
                        $('ul#isotopeContainer a[data-fancybox="fancybox"]').fancybox({
                        padding: 0,
                        margin: 0,
                        loop: true,
                        openSpeed:500,
                        closeSpeed:500,
                        nextSpeed:500,
                        prevSpeed:500,
                        afterLoad : function (){
                        $('.fancybox-inner').click(function(){
                        if(click == true){
                        $('body').toggleClass('fancybox-full');
                        }
                        })
                        },
                        beforeShow: function() {
                        $('body').addClass('fancybox-lock');
                        },
                        afterClose : function() {
                        $('body').removeClass('fancybox-lock');
                        },
                        tpl : {
                        image    : '<div class="fancybox-image" style="background-image: url(\'{href}\');"/>',
                        iframe: '<span class="iframe-before"/><iframe id="fancybox-frame{rnd}" width="60%" height="60%" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0"' + ($.browser.msie ? ' allowtransparency="true"' : '') + '/>'
                        },
                        helpers: {
                        title : null,
                        thumbs: {
                        height: 50,
                        width: 80,
                        source  : function(current) {
                        return $(current.element).find('img').data('src') ? $(current.element).find('img').data('src') : $(current.element).find('img').attr('src');
                        }
                        },
                        overlay : {
                        css : {
                        'background' : '#191919'
                        }
                        }
                        }
                        });
                        $('#sort .sort').click(function(){
                        $('#sort .sort').removeClass('selected').removeClass('active');
                        $(this).addClass('selected');
                        if($(this).attr('data-order')=='desc'){
                        $(this).attr('data-order', 'asc')
                        }
                        else{
                        $(this).attr('data-order', 'desc')
                        }
                        })
                        });
                        }); 
                        </script>   
                    </main>
                </div>        
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>