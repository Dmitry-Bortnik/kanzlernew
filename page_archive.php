<?php
require_once('params.php');
require_once('head.php');
?>

<div class="archive-page">
  <div class="wrapper">

    <div class="main-section">
      <div class="row">
        <div class="columns medium-12">
          <div class="dr-list archive-list">
            <?php foreach ($dataArchive as $item) : ?>
            <div class="archive-item dr-list-item dr-list-item__horizontal">
              <div class="dr-row">
                <div class="medium-5 columns">
                  <div class="collect-box box-3 archive-item__photo">
                    <div class="img" style="background-image: url(<?=$item['photo']; ?>);"></div>
                  </div>
                </div>
                <div class="medium-7 columns">
                  <div class="archive-item__content">
                    <div class="dr-h4 archive-item__title"><?=$item['title']; ?></div>
                    <div class="archive-item__description dr-text dr-text-default"><?=$item['description']; ?></div>
                    <a href="<?=$item['link']; ?>" class="main-button dr-main-button">Читать далее</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <nav class="navigation">
            <a class="navigation__btn navigation__prev dr-disabled" href="">Назад</a>
            <ul>
              <li><a class="navigation__btn navigation__num is-active" href="#">1</a></li>
              <li><a class="navigation__btn navigation__num" href="#">2</a></li>
              <li><a class="navigation__btn navigation__num" href="#">3</a></li>
              <li><a class="navigation__btn navigation__num" href="#">4</a></li>
              <li><a class="navigation__btn navigation__num" href="#">5</a></li>
            </ul>
            <a class="navigation__btn navigation__next" href="">Вперед</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
require_once("footer.php");
require_once('foot.php');?>
