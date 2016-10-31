<?php

namespace Vendor\PageBuilder\PageHTML;

abstract class AbstractPageHTML implements PageHTMLInterface
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    public $templatePath;

    /**
     * @var /Twig_Environment
     */
    protected $twig;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $title
     * @param string $name
     */
    public function __construct($title, $name)
    {
        $this->templatePath = __DIR__."/Template";
        $this->name = $name;
        $this->title = "[{$title}] ".$this->name;
    }

    /**
     * @param \Twig_Environment $twig
     */
    public function twigInit(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * {@inheritdoc}
     */
    protected function beginHTML()
    {
        return $this->twig->render('beginHTML.twig', array('title' => $this->title));
    }

    /**
     * {@inheritdoc}
     */
    protected function endHTML()
    {
        return $this->twig->render('endHTML.twig', array());
    }

    /**
     * {@inheritdoc}
     */
    protected function logo()
    {
        return $this->twig->render('logo.twig', array('title' => $this->title));
    }

    /**
     * {@inheritdoc}
     */
    protected function menu()
    {
        return $this->twig->render('menu.twig', array());
    }

    /**
     * {@inheritdoc}
     */
    public function status()
    {
        $time = date("F j, Y, g:i a");
        return $this->twig->render('status.twig', array('time' => $time));
    }

    /**
     * @return string
     */
    protected abstract function mainText();

    /**
     * {@inheritdoc}
     */
    public function write()
    {
        $string = '';
        $string .= $this->beginHTML();
        $string .= $this->logo();
        $string .= $this->menu();
        $string .= $this->mainText();
        $string .= $this->endHTML();

        return $string;
    }
}
