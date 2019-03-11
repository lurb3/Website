<div class="row nav-menu mb-5 mt-5">
    <div class="col-12 text-center">
        <ul class="home-links m-0">
            <?php
                global $wp;
                $current_url = home_url(add_query_arg(array(), $wp->request));
                $home_url = get_home_url();
                if($current_url != $home_url) {
                    echo "
                    <li class='logo'><a href='"; 
                    echo get_site_url();
                    echo "'>{G}</a></li>";
                }
            ?>
            <li><a href="<?php echo get_page_link( get_page_by_title( "about me" )->ID ); ?>">About Me</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title( "blog" )->ID ); ?>">Blog</a></li>
            <li><a href="#">Curriculum</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
    </div>
</div>