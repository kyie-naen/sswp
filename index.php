<?php
    get_header();
?>
<body>
    <?php
        $the_query = new WP_Query(array('post_type'=>'post'));

        if ( $the_query->have_posts() ) {
            echo '<ul>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li>' . esc_html( get_the_title() ) . '</li>';
            }
            echo '</ul>';
        } else {
            esc_html_e( 'Sorry, no posts matched your criteria.' );
        }
    ?>
</body>
<?php
    get_footer();
?>
</html>