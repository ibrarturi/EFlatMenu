<?php
/**
 * Resposive Multilevel Flat Menu
 *
 * @author turi
 */
class EFlatMenu extends CWidget {

    public $items = array();

    /**
     * Init widget
     */
    public function init() {
        parent::init();
 
        $cs=Yii::app()->getClientScript();
        $scriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.extensions.eflatmenu.resources'));
 
        $cs->registerCssFile($scriptUrl . '/eflatmenu.css');
        $cs->registerCssFile($scriptUrl . '/font-awesome/css/font-awesome.css');
        $cs->registerScriptFile($scriptUrl . '/eflatmenu.js');
    }

    public function run() {
        $items = $this->items;

        $this->render('view', array('items' => $items));
    }

}
?>