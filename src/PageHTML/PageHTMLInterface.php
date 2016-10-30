<?php

namespace Vendor\PageBuilder\PageHTML;

interface PageHTMLInterface
{
    public function BeginHTML();

    public function EndHTML();

    public function Logo();

    public function Menu();

    public function MainText();

    public function Write();
}
