<?php

namespace Vendor\PageBuilder;

use Vendor\PageBuilder\PageHTML\AbstractPageHTML;

class PageIndex extends AbstractPageHTML
{
    /**
     * {@inheritdoc}
     */
    protected function mainText()
    {
        return "<p>Добро пожаловать на домашнюю страничку!";
    }
}
