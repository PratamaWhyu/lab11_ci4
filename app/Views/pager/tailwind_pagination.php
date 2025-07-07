<?php $pager->setSurroundCount(2); ?>
<nav class="flex justify-center mt-4">
    <ul class="inline-flex -space-x-px">
        <?php if ($pager->hasPrevious()) : ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100">First</a>
            </li>
            <li>
                <a href="<?= $pager->getPrevious() ?>" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100">Prev</a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link): ?>
            <li>
                <a href="<?= $link['uri'] ?>"
                   class="px-3 py-2 leading-tight border <?= $link['active'] ? 'text-white bg-blue-600 border-blue-600' : 'text-gray-500 bg-white border-gray-300 hover:bg-gray-100' ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li>
                <a href="<?= $pager->getNext() ?>" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100">Next</a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100">Last</a>
            </li>
        <?php endif ?>
    </ul>
</nav>
