<a id="touch-menu" class="mobile-menu" href="#"><i class="fa fa-bars"></i>Menu</a>
<nav>
    <ul class="eflat-menu">

        <?php
        foreach ($items as $item) {
            if (isset($item['visible']) && !$item['visible'])
                continue;

            echo CHtml::tag('li', (isset($item['active']) && $item['active']) ? array('class' => 'active') : array());
            if (isset($item['icon-class']) && $item['icon-class'])
                echo CHtml::link(CHtml::tag('i', array('class' => 'fa ' . $item['icon-class'])) . CHtml::closeTag('i') . $item['label'], $item['url']);
            else
                echo CHtml::link($item['label'], $item['url']);

            // second level
            if (isset($item['items']) && is_array($item['items'])) {
                echo CHtml::tag('ul', array('class' => 'sub-menu'));
                foreach ($item['items'] as $sub_item) {
                    if (isset($sub_item['visible']) && !$sub_item['visible'])
                        continue;

                    echo CHtml::tag('li');
                    if (isset($sub_item['icon-class']) && $sub_item['icon-class'])
                        echo CHtml::link(CHtml::tag('i', array('class' => 'fa ' . $sub_item['icon-class'])) . CHtml::closeTag('i') . $sub_item['label'], $sub_item['url']);
                    else
                        echo CHtml::link($sub_item['label'], $sub_item['url']);

                    // third level
                    if (isset($sub_item['items']) && is_array($sub_item['items'])) {
                        echo CHtml::tag('ul');

                        foreach ($sub_item['items'] as $third_sub_item) {
                            if (isset($third_sub_item['visible']) && !$third_sub_item['visible'])
                                continue;

                            echo CHtml::tag('li');

                            if (isset($third_sub_item['icon-class']) && $third_sub_item['icon-class'])
                                echo CHtml::link(CHtml::tag('i', array('class' => 'fa ' . $third_sub_item['icon-class'])) . CHtml::closeTag('i') . $third_sub_item['label'], $third_sub_item['url']);
                            else
                                echo CHtml::link($third_sub_item['label'], $third_sub_item['url']);

                            echo CHtml::closeTag('li');
                        }

                        echo CHtml::closeTag('ul');
                    }

                    echo CHtml::closeTag('li');
                }
                echo CHtml::closeTag('ul');
            }

            echo CHtml::closeTag('li');
        }
        ?>

<!--        <li><a href="#"><i class="icon-home"></i>HOME</a>
            <ul class="sub-menu">
                <li><a href="#">Sub-Menu 1</a></li>
                <li><a href="#">Sub-Menu 2</a></li>
                <li><a href="#">Sub-Menu 3</a></li>
            </ul>
        </li>
        <li><a  href="#"><i class="icon-user"></i>ABOUT</a></li>
        <li><a  href="#"><i class="icon-camera"></i>PORTFOLIO</a>
            <ul class="sub-menu">
                <li><a href="#">Sub-Menu 1</a></li>
                <li><a href="#">Level 3 Menu</a>
                    <ul>
                        <li><a href="#">Sub-Menu 4</a></li>
                        <li><a href="#">Sub-Menu 5</a></li>
                        <li><a href="#">Sub-Menu 6</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a  href="#"><i class="icon-bullhorn"></i>BLOG</a></li>
        <li><a  href="#"><i class="icon-envelope-alt"></i>CONTACT</a></li>-->
    </ul>
</nav>