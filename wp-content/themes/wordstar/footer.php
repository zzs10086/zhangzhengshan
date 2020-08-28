<?php /**
 * WordStar footer file
 *
 * @category WordPress
 * @package  WordStar
 * @author   Linesh Jose <lineshjos@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://linesh.com/projects/wordstar/
 *
 */
?>

<div class="clear"></div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
  <div id="site-publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <meta itemprop="name" content="<?php bloginfo( 'name' );?>" />
    <meta itemprop="url" content="<?php echo esc_url(home_url( '/' )); ?>" />
    <?php if ( has_custom_logo() ) {
			$image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) );
	?>
    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="url" content="<?php echo esc_url( $image[0] ); ?>" />
      <meta itemprop="width" content="<?php echo esc_attr( $image[1] ); ?>" />
      <meta itemprop="height" content="<?php echo esc_attr( $image[2] ); ?>" />
    </div>
    <?php } ?>
  </div>
  <div class="site-info wrapper">
    <?php
    if (has_nav_menu('footer')) {
         wp_nav_menu(
             array( 
             'theme_location' => 'footer', 
             'container' => false, 
             'menu_id' => 'footer-nav', 
             'menu_name' => 'footer_nav', 
             'menu_class' => 'footer-nav ', 
             'link_before' => '<span>', 
             'link_after' => '</span>',
             'fallback_cb'=>false,
             'depth'=>1
             )
         );
    }?>
    <p id="site-generator" class="site-info centertext footer-copy"> 
    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">&copy; <?php echo esc_html(date('Y'));?>&nbsp;<?php bloginfo('name'); ?>.</a> 
我在你身边绕了一个圈，回到原点你却已在远方。</p>
<p class="centertext footer-copy"><a href="http://www.miitbeian.gov.cn/" style="text-decoration:underline" target="_blank">苏ICP备16035736号-3</a>
 <script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
   </p>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body></html>
