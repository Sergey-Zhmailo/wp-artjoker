<?php
?>

    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
        <div class="form-group">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="<?php _e('Поиск', 'timezone'); ?>"
                       onfocus="this.placeholder = ''"
                       onblur="this.placeholder = '<?php _e("Поиск", "timezone"); ?>'"
                       value="<?php echo get_search_query() ?>" name="s" id="s">
                <div class="input-group-append">
                    <button class="btns" type="submit"><i class="ti-search"></i></button>
                </div>
            </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                type="submit" id="searchsubmit"><?php _e('Поиск', 'timezone'); ?></button>
    </form>


