<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div style="position: relative;">
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Enter Search Term" />

        <input type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
        <span class="dashicons dashicons-search"></span>
    </div>
</form>