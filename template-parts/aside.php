<aside class="site__aside">
        <h3>Menu Secondaire</h3>
        <?php
            $leMenu = "note-wp";
            if (in_category('cours')) {
                $leMenu = "cours";
            } else if (in_category('Légumes')) {
                $leMenu = "Légumes";
            }

            wp_nav_menu(array(
            "menu"      => $leMenu,
            "container" => "nav"
        )); ?>
    </aside>