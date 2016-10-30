<?php

namespace Vendor\PageBuilder;

use Vendor\PageBuilder\PageHTML\AbstractPageHTML;

class PageIndex extends AbstractPageHTML
{
    public function MainText()
    {
        echo "<p>Добро пожаловать на домашнюю страничку Васи Пупкина";
    }
}
