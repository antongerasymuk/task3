<?php

namespace Vendor\PageBuilder;

use Vendor\PageBuilder\PageHTML\AbstractPageHTML;

class PageStatus extends AbstractPageHTML
{

    /**
     * {@inheritdoc}
     */
    public function write()
    {
        $string = '';
        $string .= $this->beginHTML();
        $string .= $this->logo();
        $string .= $this->status();
        $string .= $this->mainText();
        $string .= $this->endHTML();

        return $string;
    }
    /**
     * {@inheritdoc}
     */
    protected function mainText()
    {
        return "<p>Добро пожаловать на страничку статуса!";
    }
}
