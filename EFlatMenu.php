<?php
/**
 * Resposive Multilevel Flat Menu
 *
 * @author turi
 */
class EFlatMenu extends CWidget
{

    public $items = array();
    public $menuview = 'ext.eflatmenu.views.menu';

    /**
     * Init widget
     */
    public function init()
    {
        parent::init();

        $cs        = Yii::app()->getClientScript();
        $scriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.extensions.eflatmenu.resources'));

        $cs->registerCssFile($scriptUrl . '/eflatmenu.css');
        $cs->registerCssFile($scriptUrl . '/font-awesome/css/font-awesome.css');
        $cs->registerScriptFile($scriptUrl . '/eflatmenu.js');
    }


    public function run()
    {

        $this->render('view', array('items' => $this->items, 'menuview' => $this->menuview));

    }

}

?>