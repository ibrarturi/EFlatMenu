<?php

foreach ($items as $item) {

    if (isset($item['visible']) && !$item['visible'])
        continue;

    if (is_array($item['url'])) {
        $url = Yii::app()->createUrl($item['url'][0], array_slice($item['url'], 1, 1));
    } else {
        $url = $item['url'];
    }

    $pos = strpos($_SERVER['REQUEST_URI'], $url);
    if ($pos === 0 && (strlen($_SERVER['REQUEST_URI']) > 1)) {
        $item['active'] = true;
    }

    echo CHtml::tag('li', (isset($item['active']) && $item['active']) ? array('class' => 'active') : array());

    if (isset($item['icon-class']) && $item['icon-class']) {
        echo CHtml::link(CHtml::tag('i', array('class' => 'fa ' . $item['icon-class'])) . CHtml::closeTag('i') . $item['label'], $item['url']);
    } else {
        echo CHtml::link($item['label'], $item['url']);
    }

    // next level
    if (isset($item['items']) && is_array($item['items'])) {
        if (!isset($level)) {
            $level = 1;
        }
        echo CHtml::tag('ul', array('class' => 'sub-menu level' . ++$level));
        $this->renderPartial($menuview, array('items' => $item['items'], 'level' => $level, 'menuview' => $menuview));
        echo CHtml::closeTag('ul');
    }

    echo CHtml::closeTag('li');

}
