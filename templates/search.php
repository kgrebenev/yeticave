<?php include('top-nav.php'); ?>

<div class="container">
    <section class="lots">
        <?php if ($error): ?>
            <h2><span><?= $error; ?></span></h2>
        <?php else: ?>
        <h2>Результаты поиска по запросу «<span><?= $search; ?></span>»</h2>
        <ul class="lots__list">
            <?php foreach ($slice_list as $key): ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="img/<?= $key['image']; ?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?= $key['category_name']; ?></span>
                        <h3 class="lot__title"><a class="text-link"
                                                  href="lot.php?lot=<?= htmlspecialchars($key['id']); ?>"><?= htmlspecialchars($key['lot_name']); ?></a>
                        </h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span
                                    class="lot__cost"><?= transform_format(htmlspecialchars($key['start_price'])); ?></span>
                            </div>
                            <div class="lot__timer timer"><?= time_to_end($key['end_date']); ?>

                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>


        </ul>
    </section>
    <?php if ($pages_count > 1): ?>
        <?= include_template('pagination_block2.php', [
            'pages' => $pages,
            'pages_count' => $pages_count,
            'cur_page' =>
                $cur_page,
            'search' => $search
        ]); ?><?php endif; ?>
    <?php endif; ?>
</div>

