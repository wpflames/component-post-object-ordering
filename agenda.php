<h2>Day 1</h2>
<?php
    $args = array(
        'post_type' => 'agenda_2022', 
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'agenda_2022_cat',
                'field' => 'slug',
                'terms' => 'day-1'
            )
        )
    );
    $the_query = new WP_Query( $args ); ?>
    <div class="agenda">
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="agenda-item">
                <div class="agenda-item-min"><?php the_field('min'); ?></div>
                <div class="agenda-item-from"><?php the_field('from'); ?></div>
                <div class="agenda-item-till"><?php the_field('till'); ?></div>
                <div class="agenda-item-title">
                    <div class="agenda-item-title-topic"><?php the_field('topic'); ?></div>
                    <div class="agenda-item-title-speaker"><?php the_field('speaker'); ?></div>
                </div>
                <div class="agenda-item-cat"><?php the_field('cat'); ?></div>
            </div>
        
        <?php endwhile; endif; ?>
    </div>
    <?php wp_reset_postdata(); ?>

    <h2>Day 2</h2>

    <?php
    $args = array(
        'post_type' => 'agenda_2022', 
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'agenda_2022_cat',
                'field' => 'slug',
                'terms' => 'day-2'
            )
        )
    );
    $the_query = new WP_Query( $args ); ?>
    <div class="agenda">
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="agenda-item">
                <div class="agenda-item-min"><?php the_field('min'); ?></div>
                <div class="agenda-item-from"><?php the_field('from'); ?></div>
                <div class="agenda-item-till"><?php the_field('till'); ?></div>
                <div class="agenda-item-title">
                    <div class="agenda-item-title-topic"><?php the_field('topic'); ?></div>
                    <div class="agenda-item-title-speaker"><?php the_field('speaker'); ?></div>
                </div>
                <div class="agenda-item-cat"><?php the_field('cat'); ?></div>
            </div>
        
        <?php endwhile; endif; ?>
    </div>
    <?php wp_reset_postdata(); ?>