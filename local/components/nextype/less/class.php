<?php
require __DIR__ . '/libs/less/Less.php';

use Bitrix\Main;
use Bitrix\Main\Application as App;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc as Loc;
use Bitrix\Main\Page\Asset as Asset;
use Bitrix\Main\SystemException as SystemException;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

class NextypeLessComponent extends CBitrixComponent {
    
    var $rootFolder = null;
    
    private function getFileList()
    {
        $dir = $this->rootFolder . $this->arParams['PATH_TO_FILES'];
        $arFiles = Array ();
        foreach ($this->arParams['FILES'] as $file)
        {
            if (file_exists($dir . $file))
                $arFiles[$dir . $file] = $this->arParams['PATH_TO_FILES_CSS'];
        }

        return $arFiles;
        
    }
    
    private function getOptions()
    {
        
        $arOptions = array();
        $arOptions['cache_dir'] = $this->rootFolder . '/bitrix/cache/less_cache/' . SITE_ID;
        $arOptions['compress'] = true;
        $arOptions['sourceMap'] = false;
        $arOptions['sourceRoot'] = '/';
        $arOptions['output'] = $this->rootFolder . $this->arParams['PATH_TO_FILES_CSS'] . '/template_styles.css';
        $arOptions['indentation'] = "\t";
        $arOptions['relativeUrls'] = false;

        return $arOptions;
    }
    
    public function onPrepareComponentParams($params)
    {
        $params['PATH_TO_FILES'] = isset($params['PATH']) && strlen(trim($params['PATH'])) ? preg_replace(array('~^/~', '~/$~'), '/', trim($params['PATH'])) : SITE_TEMPLATE_PATH . '/less/';
        $params['PATH_TO_FILES_CSS'] = isset($params['PATH_CSS']) && strlen(trim($params['PATH_CSS'])) ? preg_replace(array('~^/~', '~/$~'), '/', trim($params['PATH_CSS'])) : SITE_TEMPLATE_PATH . '/less_compile';
        $params['FILES'] = explode(",", $params['FILES']);
        
        return $params;
    }
    
    public function executeComponent()
    {
        
        $context = App::getInstance()->getContext();
        $this->rootFolder = $context->getServer()->getDocumentRoot();

        $lessFiles = $this->getFileList();

        try
        {
            $filePath = \Less_Cache::Get($lessFiles, $this->getOptions());
            $error = false;
        }
        catch (\Exception $e)
        {
            $filePath = false;
            $error = $e->getMessage();
        }
        
        $arReturn = array(
            'filePath' => $filePath,
            'error' => $error,
        );
        
        if ($arReturn['error'])
        {
            Asset::getInstance()->addString('<style>.less-error-wrapper{position:fixed;z-index:1500;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.7)}.less-error-content{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:100%}.less-error{padding:40px;color:#666;background:#fff;font:400 17px/30px Consolas,Menlo,"DejaVu Sans Mono","Courier New",monospace,serif;margin:0;word-wrap:break-word;-webkit-box-shadow:0 0 30px rgba(0,0,0,.6);box-shadow:0 0 30px rgba(0,0,0,.6)}.less-error-header{font-size:24px;font-weight:700;margin-bottom:20px;text-align:center;color:#f75b5b}.less-error-content pre{line-height:1;border:0;background-color:transparent}.less-error-hide{display:block;position:absolute;top:20px;right:20px;width:30px;height:30px;background:#f75b5b;color:#fff;font:400 28px/32px Arial,sans-serif;vertical-align:middle;text-align:center;border-radius:15px;cursor:pointer}.less-error-hide:hover{background:#666}</style>');

            // Выведем текст ошибки
            $errorText = '<div id="less-error" class="less-error-wrapper"><div class="less-error-content"><div class="less-error"><div class="less-error-header">Error less compile</div><pre>' . str_replace($this->rootFolder, '', $arReturn['error']) . '</pre> <span class="less-error-hide" onclick="lessHide(\'less-error\')" title="' . Loc::GetMessage('CN_ERROR_LESS_COMPILE_ERROR_HIDE') . '">&times;</span></div></div></div><script>function lessHide(e){var n=document.getElementById(e);n.style.display="none"}</script>';
            echo $errorText;
        }
        else
        {
            Asset::getInstance()->addCss($this->arParams['PATH_TO_FILES_CSS'] . '/template_styles.css');
        }
        

    }
	

}