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
        $this->title = "[Домашняя страница {$this->name}] " . $title;
    }

    /**
     * {@inheritdoc}
     */
    public function BeginHTML()
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
    public function EndHTML()
    {
        return "</body>
                </html>";
    }

    /**
     * {@inheritdoc}
     */
    public function Logo()
    {
        return "<h1>Домашняя страница {$this->name}</h2>";
    }

    /**
     * {@inheritdoc}
     */
    public function Menu()
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
     * @return string
     */
    abstract public function MainText();

    /**
     * {@inheritdoc}
     */
    public function Write()
    {
        $string = '';
        $string .= $this->BeginHTML();
        $string .= $this->Logo();
        $string .= $this->Menu();
        $string .= $this->MainText();
        $string .= $this->EndHTML();

        return $string;
    }
}
