<?php

namespace Vendor\PageBuilder;

use Vendor\PageBuilder\PageHTML\AbstractPageHTML;

class PageIndex extends AbstractPageHTML
{
    /**
     * {@inheritdoc}
     */
    public function MainText()
    {
        return "<p>Добро пожаловать на домашнюю страничку Васи Пупкина";
    }
}
