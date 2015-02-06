

  <div id="skip-link">
      <div id="container" class="clearfix">
        <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        <?php if ($main_menu): ?>
          <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
        <?php endif; ?>
      </div> <!-- /#container -->
  </div>

  <header id="header" role="banner" class="clearfix">
      <div id="container" class="clearfix">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
        <?php if ($site_name || $site_slogan): ?>
          <hgroup id="site-name-slogan">
            <?php if ($site_name): ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </hgroup>
        <?php endif; ?>

        <?php print render($page['header']); ?>

        <?php if ($main_menu || $secondary_menu || !empty($page['navigation'])): ?>
          <nav id="navigation" role="navigation" class="clearfix">
            <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
              <?php print render($page['navigation']); ?>
            <?php endif; ?>

          </nav> <!-- /#navigation -->
        <?php endif; ?>
        <?php if ($breadcrumb): print $breadcrumb; endif;?>
      </div> <!-- /#container -->
  </header> <!-- /#header -->

  <div id="container" class="clearfix">
      <section id="main" role="main" class="clearfix">
        <?php print $messages; ?>
        <a id="main-content"></a>
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </section> <!-- /#main -->

      <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" role="complementary" class="sidebar clearfix">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>
</div> <!-- /#container -->

  <footer id="footer" role="contentinfo" class="clearfix">
    <div id="container" class="clearfix">
        <?php print render($page['footer']) ?>
        <?php print $feed_icons ?>
    </div> <!-- /#container -->
  </footer> <!-- /#footer -->


