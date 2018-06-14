<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <script id="obqScript" src="//widget.onlinebooq.net/widget/v2/onlinebooq-v2.js">
    </script>
    <script>
        onlinebooq.init("pavlova","net",{});
        
        $("a").click(function(){
        	if($(this).attr('href') == '#booking')
        	 $('.obq-button').click();
        })
    </script>
    
<img    class="obq-button" src="" data-obqimage="obq-purple1.png" 
style="display:none!;width:1px;height:1px;" />

</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
