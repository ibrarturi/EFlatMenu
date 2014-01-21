<?php

/**
 * Resposive Multilevel Flat Menu
 *
 * @author turi
 */
class EFlatMenu extends CWidget {

    private $cssFile = 'eflatmenu.css';
    private $jsFile = 'eflatmenu.js';
    private $fontawesomeCSSFile = 'font-awesome.css';
    public $items = array();

    /**
     * Init widget
     */
    public function init() {
        $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'resources';

        $baseUrl = Yii::app()->getAssetManager()->publish($dir);

        $this->cssFile = $baseUrl . DIRECTORY_SEPARATOR . $this->cssFile;
        $this->jsFile = $baseUrl . DIRECTORY_SEPARATOR . $this->jsFile;
        $this->fontawesomeCSSFile = $baseUrl . DIRECTORY_SEPARATOR . 'font-awesome' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . $this->fontawesomeCSSFile;

        $this->registerClientScript();
        parent::init();
    }

    protected function registerClientScript() {
        $cs = Yii::app()->clientScript;

        $cs->registerCssFile($this->cssFile);
        $cs->registerCssFile($this->fontawesomeCSSFile);
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($this->jsFile, CClientScript::POS_END);
    }

    public function run() {
        $items = $this->items;

        $this->render('view', array('items' => $items));
    }

}

?>
