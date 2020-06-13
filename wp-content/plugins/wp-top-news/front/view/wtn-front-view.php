<?php
$wtn_api_settings           = stripslashes_deep( unserialize( get_option('wtn_api_settings') ) );
$apiKey                     = ( !empty( $wtn_api_settings[ 'wtn_api_key' ] ) ) ? $wtn_api_settings['wtn_api_key'] : '';

$wtn_settings               = stripslashes_deep( unserialize( get_option('wtn_settings') ) );
$newsSource                 = ( !empty( $wtn_settings['wtn_select_source'] ) ) ? $wtn_settings['wtn_select_source'] : 'cnn';
$wtn_news_number            = isset( $wtn_settings['wtn_news_number'] ) ? $wtn_settings['wtn_news_number'] : 10;
$newsLayout                 = ( !empty( $wtn_settings['wtn_layout'] ) ) ? $wtn_settings['wtn_layout'] : 'list';
$wtn_title_length           = isset( $wtn_settings['wtn_title_length'] ) ? $wtn_settings['wtn_title_length'] : 4;
$wtn_desc_length            = isset( $wtn_settings['wtn_desc_length'] ) ? $wtn_settings['wtn_desc_length'] : 18;
$wtn_display_news_source    = isset( $wtn_settings['wtn_display_news_source'] ) ? $wtn_settings['wtn_display_news_source'] : '';
$wtn_display_date           = isset( $wtn_settings['wtn_display_date'] ) ? $wtn_settings['wtn_display_date'] : '';

$wtn_news_init_stdclass = !empty( $this->wtn_get_api_data( $newsSource, $apiKey ) ) ? $this->wtn_get_api_data( $newsSource, $apiKey ) : array();
?>

<?php 
if( 'list' === $newsLayout ) { 
    ?>
    <div class="wtn-main-container">
        <?php 
        for( $i = 0; $i < $wtn_news_number; $i++ ) {
            $wtn_news = (array) $wtn_news_init_stdclass[ $i ];
            if( ! empty( $wtn_news ) ) {
                ?>
                <div class="wtn-feed-container">
                    <div class="wtn-img-container">
                        <div class="wtn-img" style="background-image: url('<?php echo esc_attr( $wtn_news['urlToImage'] ); ?>');" ></div>
                    </div>
                    <div class="wtn-feeds">
                        <a href="<?php printf('%s', esc_url($wtn_news['url'])); ?>" target="_blank" class="wtn-feeds-title">
                            <?php echo esc_html( wp_trim_words( $wtn_news['title'], $wtn_title_length, '...' ) ); ?>
                        </a>
                        <p class="wtn-feeds-description">
                            <?php echo esc_html( wp_trim_words( $wtn_news['description'], $wtn_desc_length, '...' ) ); ?>
                        </p>
                        <span>
                            <?php
                            if ( '1' === $wtn_display_news_source ) {
                                $wtn_source = (array) $wtn_news['source']; 
                                printf('%s', $wtn_source['name']); ?> |
                            <?php } ?>
                            <?php 
                            if ( '1' === $wtn_display_date ) {
                                echo date( 'd M, Y', strtotime( $wtn_news['publishedAt'] ) ); 
                            }
                            ?>
                        </span>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <?php
            } 
        }
        ?>
    </div>
    <?php 
} 
?>

<?php 
if( 'grid' === $newsLayout ) {
    ?>
    <div class="wtn-main-wrapper">
        <?php 
        for( $i = 0; $i < $wtn_news_number; $i++ ) {
            $wtn_news = (array) $wtn_news_init_stdclass[ $i ];
            if( ! empty( $wtn_news ) ) {
                ?>
                <div class="wtn-item">
                    <div class="wtn-img-container">
                        <div class="wtn-img" style="background-image: url('<?php echo esc_attr( $wtn_news['urlToImage'] ); ?>');" ></div>
                    </div>
                    <a href="<?php printf('%s', esc_url($wtn_news['url'])); ?>" target="_blank">
                        <?php echo esc_html( wp_trim_words( $wtn_news['title'], $wtn_title_length, '...' ) ); ?>
                    </a>
                    <p class="wtn-item-description">
                        <?php echo esc_html( wp_trim_words( $wtn_news['description'], $wtn_desc_length, '...' ) ); ?>
                    </p>
                    <span>
                        <?php
                        if ( '1' === $wtn_display_news_source ) {
                            $wtn_source = (array) $wtn_news['source']; 
                            printf('%s', $wtn_source['name']); ?> |
                        <?php } ?>
                        <?php 
                        if ( '1' === $wtn_display_date ) {
                            echo date( 'd M, Y', strtotime( $wtn_news['publishedAt'] ) ); 
                        }
                        ?>
                    </span>
                </div>
                <?php 
            }
        }
        ?>
    </div>
    <?php 
} 
?>
<a href="<?php printf('%s', 'https://newsapi.org/'); ?>" target="_blank" class="wtn-powered-by">Powered by NewsAPI.org</a>