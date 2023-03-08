<aside class="site__aside">
        <h3>Menu Secondaire</h3>
        <?php 
            $category = get_queried_object();

            if (isset($category)) {

                $leMenu = $category->slug;
            } else {
                $leMenu = "note-wp";
            }

            wp_nav_menu(array(
            "menu"      => $leMenu,
            "container" => "nav"
        )); ?>
    </aside>