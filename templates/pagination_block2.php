<ul class="pagination-list">
    <li class="pagination-item pagination-item-prev"><?php if ($cur_page > 1): ?><a
            href="?search=<?= $search; ?>&page=<?= $cur_page - 1; ?>"><?php endif; ?>Назад</a></li>
    <?php foreach ($pages as $page): ?>
        <li class="pagination-item <?php if ($page == $cur_page): ?>pagination-item-active<?php endif; ?>">
            <a <?php if ($page != $cur_page): ?>href="?search=<?= $search; ?>&page=<?= $page; ?>"<?php endif;
            ?>><?= $page; ?></a></li>
    <?php endforeach; ?>
    <li class="pagination-item pagination-item-next"><?php if ($cur_page < $pages_count): ?><a
            href="?search=<?= $search; ?>&page=<?= $cur_page + 1; ?>"><?php endif; ?>Вперед</a></li>
</ul>

