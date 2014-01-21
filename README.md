EFlatMenu Yii Extension
=========

Yii extension for multilevel responsive menu

This Yii framework extension will provide multi-level responsive menu using [Font Awesome](http://fortawesome.github.io/Font-Awesome/)


**Requirements**

Tested with Yii 1.1.10 and 1.1.12. may work on other versions


**Installation**

* Extract the file under protected/extensions folder.


**Default Usage**

```
$this->widget('application.extensions.eflatmenu.EFlatMenu', array(
    'items' => array(
        array('label' => 'Home', 'url' => array('/site/index'), 'active' => true, 'icon-class'=>'fa-home'),
        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
        array('label' => 'Contact', 'url' => array('/site/contact')),
        array('label'=>'Level 2 Menu', 'url'=>'#', 'items' => array(
            array('label' => 'Sub-Menu 1', 'url' => '#', 'icon-class'=>'fa-home'),
            array('label' => 'Level 3 Menu', 'url' => '#', 'items' => array(
                array('label' => 'Sub-Menu 1', 'url' => '#', 'icon-class'=>'fa-home'),
                 array('label' => 'Sub-Menu 2', 'url' => '#'),
            )),
        )),
        array('label' => 'Login', 'url' => array('site/login'), 'visible' => Yii::app()->user->isGuest),
        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
    )
));
```
