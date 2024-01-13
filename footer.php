            <footer>
                <?php
                wp_nav_menu([
                    'menu'            => 'social-menu',
                    'menu_id'         => 'ay-social-menu',
                    'container'       => 'nav',
                    'container_class' => 'ay-social-container',
                    'theme_location'  => 'social-menu',
                ]);
                ?>
            </footer>
        </div>
    </main>

    <?php wp_footer(); ?>
</body>
</html>