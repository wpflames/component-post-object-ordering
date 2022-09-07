<div class="agenda">

    <?php if( have_rows('agenda_ordering', 'option') ): ?>
        <?php while ( have_rows('agenda_ordering', 'option') ) : the_row(); ?>   

            <?php $post_object = get_sub_field('post_object_title', 'option'); ?>

                <?php if( $post_object ): ?>

                    <?php 
                        $post = $post_object; setup_postdata( $post ); 

                        $title = get_the_title( $post_object->ID);
                        $topic = get_field( 'topic', $post_object->ID); 
                        $speaker = get_field('speaker', $post_object->ID); 
                        $from = get_field('from', $post_object->ID); 
                        $till = get_field('till', $post_object->ID); 
                        $min = get_field('min', $post_object->ID); 
                    ?>

                    <div class="agenda-item">
                        <div class="agenda-item-min"><?= $min; ?></div>
                        <div class="agenda-item-from"><?= $from; ?></div>
                        <div class="agenda-item-till"><?= $till; ?></div>
                        <div class="agenda-item-title">
                            <div class="agenda-item-title-topic"><?= $topic; ?></div>
                            <div class="agenda-item-title-speaker"><?= $speaker; ?></div>
                        </div>
                    </div>                       

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>