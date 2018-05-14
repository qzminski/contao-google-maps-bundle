<?php

namespace HeimrichHannot\GoogleMapsBundle\EventListener;

use Contao\CoreBundle\Framework\ContaoFrameworkInterface;
use HeimrichHannot\GoogleMapsBundle\Manager\MapManager;

class HookListener
{
    /**
     * @var ContaoFrameworkInterface
     */
    private $framework;

    /**
     * @var MapManager
     */
    protected $mapManager;

    /**
     * Constructor.
     *
     * @param ContaoFrameworkInterface $framework
     */
    public function __construct(ContaoFrameworkInterface $framework, MapManager $mapManager)
    {
        $this->framework  = $framework;
        $this->mapManager = $mapManager;
    }

    public function addInsertTags($strTag)
    {
        $arrTag = explode('::', $strTag);

        switch ($arrTag[0]) {
            case 'google_map':
                return $this->mapManager->render($arrTag[1]);
            case 'google_map_html':
                return $this->mapManager->renderHtml($arrTag[1]);
            case 'google_map_css':
                return $this->mapManager->renderCss($arrTag[1]);
            case 'google_map_js':
                return $this->mapManager->renderJs($arrTag[1]);
        }

        return false;
    }
}