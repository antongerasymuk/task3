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

    public function BeginHTML()
    {
        echo "<html>
              <head>
                  <title>
                      {$this->title}
                  </title>
              </head>
              <body>";
    }

    public function EndHTML()
    {
        echo "</body>
              </html>";
    }

    public function Logo()
    {
        echo "<h1>Домашняя страница {$this->name}</h2>";
    }

    public function Menu()
    {
        echo "<table>
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

    abstract public function MainText();

    public function Write()
    {
        $this->BeginHTML();
        $this->Logo();
        $this->Menu();
        $this->MainText();
        $this->EndHTML();
    }
}
