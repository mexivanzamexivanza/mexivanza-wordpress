<?php if (!defined("ABSPATH")) exit; ?>
</main>
<footer class="mv-footer">
  <div class="mv-shell mv-footer-grid">
    <div>
      <a class="mv-brand" href="<?= esc_url(home_url("/")) ?>"><span><?= esc_html(get_bloginfo("name")) ?></span></a>
      <p class="mv-muted" style="max-width:32ch;margin-top:.7rem"><?= esc_html__("Mexico travel concierge. Built and operated locally.","mexivanza") ?></p>
    </div>
    <div>
      <h4><?= esc_html__("Explore","mexivanza") ?></h4>
      <ul>
        <li><a href="<?= esc_url(home_url("/trips")) ?>"><?= esc_html__("All trips","mexivanza") ?></a></li>
        <?php $dests = get_terms(["taxonomy"=>"mv_destination","hide_empty"=>false,"number"=>5]); ?>
        <?php if (!is_wp_error($dests)) { foreach ($dests as $t): ?><li><a href="<?= esc_url(get_term_link($t)) ?>"><?= esc_html($t->name) ?></a></li><?php endforeach; } ?>
      </ul>
    </div>
    <div>
      <h4><?= esc_html__("Contact","mexivanza") ?></h4>
      <ul>
        <li><a href="mailto:<?= esc_attr(get_option("mv_brand_email","hola@mexivanza.com")) ?>"><?= esc_html(get_option("mv_brand_email","hola@mexivanza.com")) ?></a></li>
        <li><?= esc_html(get_option("mv_brand_phone","+52 55 0000 0000")) ?></li>
      </ul>
    </div>
    <div>
      <h4><?= esc_html__("Legal","mexivanza") ?></h4>
      <ul>
        <li><a href="/privacy"><?= esc_html__("Privacy","mexivanza") ?></a></li>
        <li><a href="/terms"><?= esc_html__("Terms","mexivanza") ?></a></li>
      </ul>
    </div>
  </div>
  <div class="mv-shell mv-footer-bottom">
    <small>Â© <?= esc_html(date("Y")) ?> <?= esc_html(get_bloginfo("name")) ?>. <?= esc_html__("All rights reserved.","mexivanza") ?></small>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
