<?php
 /**
  * The template for displaying the footer
  *
  * Contains the closing of the #content div and all content after.
  *
  * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
  *
  * @package cyberize-app-dev
  */

?>
<!-- FOOTER CONTENT -->
<section class="footer-content container-fluid">
  <div class="row">
    <div class="col-md-3">
      <article class="left-col">
        <div class="text">
          <h5 class="text-light">800.522.2781</h5>
          <h5 class="text-light">3801 KIRBY DRIVE, SUITE 152, HOUSTON, TEXAS 77098</h5>
          <h5 class="text-light">HOUSTON DALLAS FORT WORTH AUSTIN</h5>
        </div>
      </article>
    </div>
    <div class="col-md-7">
      <article class="right-col text-center">
        <div class="text">
          <img src="/wp-content/uploads/2022/08/footer-logo.jpg" alt="">
          <h5 class="text-light">BBB Rating: A+</h5>
          <p class="text-light">Texas Real Estate Commission Consumer Protection Notice | Texas Real Estate Commission
            Information About
            Brokerage Services HOUSEforPURCHASE.com® agents are licensed as either brokers or salespersons by the
            Texas Real Estate Commission.</p>
        </div>
      </article>
    </div>
    <div class="col-md-2"></div>

  </div>
</section>


<footer id="site-footer" class="site-footer navbar fixed-bottom navbar-light bg-dark">

  <!-- COPYRIGHT BAR -->
  <div class="site-info text-light">
    Copyright &copy; <?php echo date("Y"); ?> HOUSEforPURCHASE.COM, INC. ALL RIGHTS RESERVED
  </div><!-- .site-info -->

  <!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

  <!-- <div style="color: dodgerblue"><strong>Current template:</strong>
    <?php echo get_current_template(true); ?>
  </div> -->

  <!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>


</body>

</html>