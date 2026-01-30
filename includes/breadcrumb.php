<?php if (!empty($page_breadcrumb_name)): ?>
<nav aria-label="Breadcrumb" class="breadcrumb-nav mb-20">
  <ol class="breadcrumb-list" style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem;">
    <li style="display: inline;"><a href="<?php echo $site_url; ?>/" style="text-decoration: none;">Home</a></li>
    <li style="display: inline;"> / </li>
    <li style="display: inline;" aria-current="page"><?php echo htmlspecialchars($page_breadcrumb_name); ?></li>
  </ol>
</nav>
<?php endif; ?>
