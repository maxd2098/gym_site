<nav aria-label="">
    <ul class="pagination justify-content-center">
        <?php if($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?=$page - 1; ?>">Предыдущая</a>
            </li>
            <?php if($page > 2): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?=$page - 2; ?>"><?=$page - 2; ?></a>
                </li>
            <?php endif; ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?=$page - 1; ?>"><?=$page - 1; ?></a>
            </li>
        <?php endif; ?>
        
        <li class="page-item active">
            <a class="page-link main-page"><?=$page; ?></a>
        </li>
        
        <?php if($countPage > $page): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?=$page + 1; ?>"><?=$page + 1; ?></a>
            </li>
            <?php if($countPage - 1 > $page): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?=$page + 2; ?>"><?=$page + 2; ?></a>
                </li>
            <?php endif; ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?=$page + 1; ?>">Следующая</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
