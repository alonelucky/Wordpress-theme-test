<?
    if(have_posts()){
        while (have_posts()) {
            the_post();
            echo global $post;
            ?>

    <div class="timeline-date-label clearfix"><? the_time('Y年-M');?></div>

        <!-- timeline item start -->
        <div class="timeline-item object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
            <!-- 第一条新闻 start -->
            <article class="clearfix blogpost">
                <div class="overlay-container">
                    <img src="images/blog-2.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-links">
                            <a href="blog-post.html"><i class="fa fa-link"></i></a>
                            <a href="images/blog-1.jpg" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blogpost-body">
                    <div class="post-info">
                        <span class="day"><? the_time('d');?></span>
                    </div>
                    <div class="blogpost-content">
                        <header>
                            <h2 class="title"><a href="<? the_permalink();?>"><? the_title();?></a></h2>
                            <div class="submitted"><i class="fa fa-user pr-5"></i> 发布人 <a href="#">风擎科技</a></div>
                        </header>
                        <p>作为一个网站优化者，有一些基础seo知识点是大家必须要掌握的，网站排名的好快，和这些基础的SEO优化知识有没做好，有没做到位，有着直接的关系!</p>
                    </div>
                </div>
                <footer class="clearfix">
                    <ul class="links pull-left">
                        <li><i class="fa fa-tags pr-5"></i>标签 | </li>
                        <li><a href="#"><? echo the_category(',');?></a></li>
                    </ul>
                    <a class="pull-right link" href="blog-post.html"><span>阅读全文</span></a>
                </footer>
            </article>
            <!-- 第一条新闻 end -->
        </div>
        <!-- timeline item end -->
<?        }
    }else{
        echo '当前位置没有新闻可以显示。';
    }

?>