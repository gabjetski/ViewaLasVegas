<?php
namespace TYPO3Fluid\Fluid\View;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

/**
 * The main template view. Should be used as view if you want Fluid Templating
 *
 * @api
 */
class TemplateView extends AbstractTemplateView
{
    private string $hotelName;
    
    public function getName(): string
    {
        return $this->hotelName;
    }

    public function __construct(string $hotelName){
        $this->hotelName = $hotelName;
    }
}
