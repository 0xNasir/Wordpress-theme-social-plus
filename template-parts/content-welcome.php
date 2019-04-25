<?php $options = get_option( 'cs_frameworks' );
if ($options['show_subscription']): ?>
<div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2><?php echo $options['subscription_title']; ?></h2>
                <p><?php echo $options['subscription_description']; ?></p>
                <a href="<?php echo $options['subscription_btn_url']; ?>" id="" class="ready-btn"><?php echo $options['subscription_btn_text']; ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>