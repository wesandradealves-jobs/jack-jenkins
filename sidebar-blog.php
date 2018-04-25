<aside class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
<!--<form action="">
    <input type="text">
    <button><i class="glyphicon glyphicon-search"></i></button>
</form>
<div>
    <p><strong>Categories</strong></p>
    <ul class="cat-list">
        <li class="clearfix">
            <a href="" title="" target="_blank" class="pull-left">Web Design</a>
            <a href="" title="" target="_blank" class="pull-right category-counter">289</a>
        </li>
        <li class="clearfix">
            <a href="" title="" target="_blank" class="pull-left">Marketing</a>
            <a href="" title="" target="_blank" class="pull-right category-counter">289</a>
        </li>
        <li class="clearfix">
            <a href="" title="" target="_blank" class="pull-left">Grouth Hacker</a>
            <a href="" title="" target="_blank" class="pull-right category-counter">289</a>
        </li>
        <li class="clearfix">
            <a href="" title="" target="_blank" class="pull-left">E-Commerce</a>
            <a href="" title="" target="_blank" class="pull-right category-counter">289</a>
        </li>
        <li class="clearfix">
            <a href="" title="" target="_blank" class="pull-left">Analytics</a>
            <a href="" title="" target="_blank" class="pull-right category-counter">289</a>
        </li>
    </ul>
</div>
<div>
    <p><strong>Recent Posts</strong></p>
    <ul class="recent-posts">
        <li>
            <p><a href="" title="" target="_top">
            Lorem ipsum dolor sit amet, consectetur.    
            </a></p>
            <p><small>09 June, 2017 by Jack Jenkins</small></p>
        </li>
        <li>
            <p><a href="" title="" target="_top">
            Lorem ipsum dolor sit amet, consectetur.    
            </a></p>
            <p><small>09 June, 2017 by Jack Jenkins</small></p>
        </li>
        <li>
            <p><a href="" title="" target="_top">
            Lorem ipsum dolor sit amet, consectetur.    
            </a></p>
            <p><small>09 June, 2017 by Jack Jenkins</small></p>
        </li>
        <li>
            <p><a href="" title="" target="_top">
            Lorem ipsum dolor sit amet, consectetur.    
            </a></p>
            <p><small>09 June, 2017 by Jack Jenkins</small></p>
        </li>
        <li>
            <p><a href="" title="" target="_top">
            Lorem ipsum dolor sit amet, consectetur.    
            </a></p>
            <p><small>09 June, 2017 by Jack Jenkins</small></p>
        </li>
    </ul>
</div>-->
    <?php if ( is_active_sidebar( 'blog' ) ) : ?>
            <?php dynamic_sidebar( 'blog' ); ?>
    <?php endif; ?>

    <?php 
        if(is_category()||is_search()) :
    ?>
    <style>.recent-posts{display:none;}</style>
    <?php endif; ?>
</aside>