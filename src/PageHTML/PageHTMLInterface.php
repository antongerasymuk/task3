<?php

namespace Vendor\PageBuilder\PageHTML;

interface PageHTMLInterface
{
    /**
     * @return string
     */
    public function BeginHTML();

    /**
     * @return string
     */
    public function EndHTML();

    /**
     * @return string
     */
    public function Logo();

    /**
     * @return string
     */
    public function Menu();

    /**
     * @return string
     */
    public function MainText();

    /**
     * @return string
     */
    public function Write();
}
