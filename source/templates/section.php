<section>
    <h2><?= $title ?></h2>

    <ul>
    <?php foreach ($items as $item): ?>
        <?php 
        $class = 'v'.str_replace('.', '-', $item['from']);
        $class .= ' '.str_replace('.', '-', $item['doc']);

        if (isset($item['deprecated'])) {
            $class .= ' v'.str_replace('.', '-', $item['deprecated']).'-d';
        }

        if (isset($item['removed'])) {
            $class .= ' v'.str_replace('.', '-', $item['removed']).'-r';
        }
        ?>

        <li>
            <a class="<?= $class ?>" title="<?= $item['title'] ?>" href="https://api.jquery.com/<?= $item['doc'] ?>/" data-src="<?= isset($item['src']) ? $item['src'] : ''; ?>">
                <?= $item['text'] ?>
            </a>
        </li>

    <?php endforeach ?>
    </ul>
</section>
