<a id="touch-menu" class="mobile-menu" href="#"><i class="fa fa-bars"></i>Menu</a>
<nav>
    <ul class="eflat-menu level1">
        <?php $this->controller->renderPartial($menuview, array('items' => $items, 'menuview' => $menuview)); ?>
    </ul>
</nav>