<?php
$img1 = of_get_option('khach_hang_image1');
$url1 = of_get_option('khach_hang_url1');
$title1 = of_get_option('khach_hang_title1');
$alt1 = of_get_option('khach_hang_alt1');
?>
<?php
$img2 = of_get_option('khach_hang_image2');
$url2 = of_get_option('khach_hang_url2');
$title2 = of_get_option('khach_hang_title2');
$alt2 = of_get_option('khach_hang_alt2');
?>
<?php
$img3 = of_get_option('khach_hang_image3');
$url3 = of_get_option('khach_hang_url3');
$title3 = of_get_option('khach_hang_title3');
$alt3 = of_get_option('khach_hang_alt3');
?>
<?php
$img4 = of_get_option('khach_hang_image4');
$url4 = of_get_option('khach_hang_url4');
$title4 = of_get_option('khach_hang_title4');
$alt4 = of_get_option('khach_hang_alt4');
?>

<?php if(($img1 != '') || ($img2 != '') || ($img3 != '') || ($img4 != '')) {?>

  <li class="sidebox widget_text"><h3 class="sidetitl">Khách hàng tiêu biểu</h3>

    <div class="textwidget">
      <ul class="khach_hang_tieu_bieu">
        <?php if ($img1 != '') { ?>
          <li>
            <p><?php echo $title1; ?></p>
            <a href="<?php echo $url1; ?>" title="<?php echo $title1; ?>"><img alt="<?php echo $alt1; ?>" src="<?php echo $img1; ?>"></a>
          </li>
        <?php } ?>

        <?php if ($img2 != '') { ?>
          <li>
            <p><?php echo $title2; ?></p>
            <a href="<?php echo $url2; ?>" title="<?php echo $title2; ?>"><img alt="<?php echo $alt2; ?>" src="<?php echo $img2; ?>"></a>
          </li>
        <?php } ?>

        <?php if ($img3 != '') { ?>
          <li>
            <p><?php echo $title3; ?></p>
            <a href="<?php echo $url3; ?>" title="<?php echo $title3; ?>"><img alt="<?php echo $alt3; ?>" src="<?php echo $img3; ?>"></a>
          </li>
        <?php } ?>

        <?php if ($img4 != '') { ?>
          <li>
            <p><?php echo $title4; ?></p>
            <a href="<?php echo $url4; ?>" title="<?php echo $title4; ?>"><img alt="<?php echo $alt4; ?>" src="<?php echo $img4; ?>"></a>
          </li>
        <?php } ?>

      </ul>
    </div>
  </li>

<?php }?>