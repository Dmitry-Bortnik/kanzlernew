<?php
require_once('params.php');
require_once('head.php');
?>

<div class="guide-page">
  <div class="wrapper">

    <div class="main-section">
      <div class="dr-h3 dr-title center dr-title-w-line">
        <span class="dr-title-line"></span>
        <span class="dr-title-inner">Стильная мужская одежда: Быть в тренде - Легко!</span>
        <span class="dr-title-line"></span>
      </div>
      <div class="row">
        <div class="columns medium-8">
          <div class="guide-list">
            <?php foreach ($data['main'] as $item) : ?>
              <a href="<?=$item['link'];?>" class="guide-item collect-item">
                <div class="collect-box box-2">
                  <div class="img" style="background-image: url(<?= $item['photo']; ?>);"></div>
                </div>
                <div class="guide-item-content">
                  <h3 class="guide-item-title dr-h4"><?= $item['title']; ?></h3>
                  <p class="dr-text dr-text-default guide-item-description"><?= $item['description']; ?></p>
                </div>
              </a>
            <?php endforeach; ?>
          </div>

        </div>
        <div class="columns medium-4">
          <div class="sidebar">
            <div class="guide-list guide-list-sidebar">
              <?php
              $iterator = 0;
              const MAX_COUNT_ITEM = 4;
              foreach ($data['sidebar'] as $item) :?>

                <a href="<?=$item['link'];?>" class="guide-item collect-item">
                  <div class="collect-box box-3">
                    <div class="img" style="background-image: url(<?= $item['photo']; ?>);"></div>
                  </div>
                  <div class="guide-item-content">
                    <h3 class="guide-item-title dr-h4"><?= $item['title']; ?></h3>
                    <p class="dr-text dr-text-default guide-item-description"><?= $item['description']; ?></p>
                  </div>
                </a>
                <?php $iterator++;
                if ($iterator >= MAX_COUNT_ITEM) {
                  break;
                } ?>

              <?php endforeach; ?>

              <?php if (count($data['sidebar']) >= MAX_COUNT_ITEM) : ?>
                <div class="dr-btn-wrapper">
                  <a href="#" class="main-button dr-main-button">Смотреть все</a>
                </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-section">
      <div class="dr-h3 dr-title center dr-title-w-line">
        <span class="dr-title-line"></span>
        <span class="dr-title-inner">Какие вещи должны составлять базовый гардероб мужчины</span>
        <span class="dr-title-line"></span>
      </div>
      <div class="row">
        <div class="goods-list">
          <?php
          foreach ($data['goods'] as $item) :?>
            <div class="columns medium-3 small-6">
              <a href="<?=$item['link'];?>" class="good-item collect-item">
                <div class="good-item-image collect-box box-3">
                  <div class="good-item-btn">
                    <div class="btn-zoom">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                           xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
  <g>
    <path d="M505.7,475.6L360.1,330c28.2-34.8,45.2-79.1,45.2-127.3C405.3,90.9,314.4,0,202.7,0S0,90.9,0,202.7
			s90.9,202.7,202.7,202.7c48.2,0,92.5-17,127.3-45.2l145.6,145.6c4.2,4.2,9.6,6.3,15.1,6.3s10.9-2.1,15.1-6.3
			C514.1,497.4,514.1,483.9,505.7,475.6z M202.7,362.7c-88.2,0-160-71.8-160-160s71.8-160,160-160s160,71.8,160,160
			S290.9,362.7,202.7,362.7z"/>
  </g>
</g>
                        <filter id="dropShadow">
                          <feGaussianBlur in="SourceAlpha" stdDeviation="10" result="DROP" ></feGaussianBlur>

                          <feOffset in="SHADOW" dx="30" dy="25" result="DROPSHADOW"></feOffset>

                          <feColorMatrix type="matrix" in="DROPSHADOW" result="FINALSHADOW"
                                         values="1 0 0 0 0
                                      0 1 0 0 0
                                      0 0 1 0 0
                                      0 0 0 .4 0"></feColorMatrix>

                          <feMerge>
                            <feMergeNode in="SFINALHADOW"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                          </feMerge>
                        </filter>
</svg>
                    </div>
                  </div>
                  <div class="img" style="background-image: url(<?= $item['photo']; ?>);"></div>
                </div>
                <div class="good-item-content">
                  <div class="good_name">
                    <div class="good_name_wrap" itemprop="name">Полуприталенный пиджак из хлопка</div>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>

    <div class="main-section">
      <div class="dr-h3 dr-title center dr-title-w-line">
        <span class="dr-title-line"></span>
        <span class="dr-title-inner">Одется как Леонардо Дикаприо в «поймай меня если сможешь»</span>
        <span class="dr-title-line"></span>
      </div>
      <div class="row">
        <div class="guide-list guide-list-footer">
          <?php foreach($data['footer'] as $item) :?>
          <div class="columns medium-4 small-12">
            <a href="<?=$item['link'];?>" class="guide-item collect-item">
              <div class="collect-box box-3">
                <div class="img" style="background-image: url(<?= $item['photo']; ?>);"></div>
              </div>
              <div class="guide-item-content">
                <h3 class="guide-item-title"><?= $item['title']; ?></h3>
                <p class="dr-text dr-text-default guide-item-description"><?= $item['description']; ?></p>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
require_once("footer.php");
require_once('foot.php'); ?>
