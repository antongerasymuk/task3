<?php

namespace Vendor\PageBuilder\PageHTML;

abstract class AbstractPageHTML implements PageHTMLInterface
{
    /**
     * @var string
     */
    protected $title = "";

    /**
     * @var string
     */
    protected $name = "";

    /**
     * @param string $title
     * @param string $name
     */
    public function __construct($title, $name)
    {
        $this->name = $name;
        $this->title = "[{$title}] ".$this->name;
    }

    /**
     * {@inheritdoc}
     */
    protected function beginHTML()
    {
        return "<html>
              <head>
                  <title>
                      {$this->title}
                  </title>
              </head>
              <body>";
    }

    /**
     * {@inheritdoc}
     */
    protected function endHTML()
    {
        return "</body>
                </html>";
    }

    /**
     * {@inheritdoc}
     */
    protected function logo()
    {
        return "<h1>{$this->title}</h2>";
    }

    /**
     * {@inheritdoc}
     */
    protected function menu()
    {
        return "<table>
                  <tr>
                      <td>
                          <a href='index.php'>Главная страница</a>
                      </td>
                      <td>
                          <a href='bio.php'>Биография</a>
                      </td>
                      <td>
                          <a href='links.php'>Ссылки</a>
                      </td>
                  </tr>
              </table>";
    }

    /**
     * {@inheritdoc}
     */
    public function status()
    {
        $time = date("F j, Y, g:i a");
        return "<table>
                  <tr>
                      <td>
                          <h3>Статус</h3>
                          $time
                      </td>
                  </tr>
              </table>";
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
