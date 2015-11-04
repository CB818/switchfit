<?php

/* RSQueueBundle:Collector:rsqueue.html.twig */
class __TwigTemplate_35229ada7163c3dae05e3e9dfc7f2908edfd48ed1bacf6dccfbc1a41cc8caa40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "RSQueueBundle:Collector:rsqueue.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <img width=\"20\" height=\"28\" alt=\"RSQueues\" style=\"border-width: 0; vertical-align: middle\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAWCAYAAAAb+hYkAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB90GGhceM6BoDDYAAACZSURBVDjL7ZSxDcIwEEXfj1JQho4yA2SHywSeBTFIZjI7pMgIdKSkOzrLEgqxKZCQ+J3v/O5/F2f4lmRmDhBjPEpaty66ezeO4x2gyer9jkHq51C3A6V+m3JKcRoG33yHJDN7cSpWmx8u86xq6F28fOA/3m/ES6tRoyaEsNQAIYRF7n4GrGA1AFbgKnfvgRNwKIAewO2jP+IJyzUx7olHw64AAAAASUVORK5CYII=\"/>
        <span class=\"sf-toolbar-status";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "total", array()) > 0)) {
            echo " sf-toolbar-status-red";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "total", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Producer</b>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "producer", array())), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Publisher</b>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "publisher", array())), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "RSQueueBundle:Collector:rsqueue.html.twig", 19)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAgCAYAAADwvkPPAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB90GGhcgGE0R7gsAAAO6SURBVEjH5ZVNaFxVFMd/5947TpNmdEJDJgacoQnOTDIUdVOKDdNF3ChZiLtAoViF0hYXQhAX3eiiC0lc+FGEIqEoRVy4Km4KgouKpFChYj5IiM6InRbSJq2xnZd57x0XeZlMOzN1dOuFy4PLvf/7/zjnXfhfDCkWiy8B1hhzd2Ji4qepqSmv08PT09PxS5cuvRCG4VMi4jvgMoCILCYSiZeB3zoFSyQST4vILJBX1dAAqCrW2kQul0upqu0ESFVtLpdLWWsTqoqImDqYs9bvTSb3Aa5DYq43mdznrPVVdXth1z3BxmIO2AtsTefzzthmkmEQMLW46AN7bSzmENlFBzDGUPW8zR9v3pybO3786Mzo6OuIbCKiTYlZKzOjoz2zhw7NhmfPfl31vE2zLRAnEbIfBLU3x8dvfpzLHZBY7Pm28YuACH9tbBx4a3z8o7FisWYjDLOjV0QMk5NxY20lOncX1eYJdwGMtRUmJ+MiYuoyd5gJuEOVStep+fn3PywUPgfCNjECmFPz83980d/fIw2+uyhWgHDdueBiNpsDXkTEk1ZY25/4xWz2h3XnyqlaLXwogGhTsJTJVNdv3DgpIqf1cW0DrDv36VIm83b/ykqwc6mRhmijmE0k5Z+GaSyLh5gJ2P3lcjwRBLO3nSuhWm1PTfYkguC7/eVyXMC28swMep47trR0daZQ+BXQVnWGqijIsaWltcMDA0mgnmZdpoJ/JZV6cG5k5IxAGZHrqP7cNEWuC5TPjYycuZJKPVDwm2QCSl9fGIoMAV1A16OePNRWIkP09YXcuqUtZVKpWKt6DWMOA/d2K6EpzCet6jUqFdsos7FobfHOna6TCwufzBQKnyGCtko1Wj+5sOAX+/t7aQygkfkv3d1b5/P5V+7Ba8B9aSEzgu8+n89/82539/eF+/fDJpkKwe10essrlV4VeEN3W6eJmYjgGRPeTqcv6+JivWhdw+1CtSoCm48Ucbsu2KRalcjDXZn1EC5c2Drl3HtfDg19a2CrbZLwxNHV1aun5+e35MiR+nkZGxtTEcEYU0b1nXXnVv90TqxqW1qBiCZ8X3t9fwiRD8IwTEe/fhvZo2ngq6Tvk/T9jh6BHV+NMQrgDh48eGt5eTlZKpX2WGv/9cMbBAGZTMbLZrMbrlgszg0MDKSHh4eficViRh5jeovnjlqtFg4ODv6ey+VKoqongGHg2aiNpE3lt+oEBR4Ay8CKqOpzwD6gD4j/BzAPWAPWRFV7IpC4qhrZ1tkRmKqqiIQRoPc3/K+WHQHWojUAAAAASUVORK5CYII=\" alt=\"RSQueues\" /></span>
        <strong>RSQueue</strong>
        <span class=\"count\">
            <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "total", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 32
    public function block_panel($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 34
        echo "
    <h2>RSQueue</h2>
    ";
        // line 36
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "total", array()) == 0)) {
            // line 37
            echo "        <p><em>No queue interaction</em></p>
    ";
        } else {
            // line 39
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "producer", array())) > 0)) {
                // line 40
                echo "            <strong>Producer</strong>
            <table>
                <thead>
                    <tr>
                        <th>Queue alias</th>
                        <th>Queue name</th>
                        <th>Payload</th>
                    </tr>
                </thead>
                <tbody>
                    ";
                // line 50
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "producer", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 51
                    echo "                        <tr>
                            <td>";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "alias", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "queue", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "payload", array()), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                </tbody>
            </table>
        ";
            }
            // line 60
            echo "
        ";
            // line 61
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "publisher", array())) > 0)) {
                // line 62
                echo "            <strong>Publisher</strong>
            <table>
                <thead>
                    <tr>
                        <th>Queue alias</th>
                        <th>Queue name</th>
                        <th>Payload</th>
                    </tr>
                </thead>
                <tbody>
                    ";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "publisher", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 73
                    echo "                        <tr>
                            <td>";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "alias", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "queue", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "payload", array()), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "                </tbody>
            </table>
        ";
            }
            // line 82
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "RSQueueBundle:Collector:rsqueue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 82,  192 => 79,  183 => 76,  179 => 75,  175 => 74,  172 => 73,  168 => 72,  156 => 62,  154 => 61,  151 => 60,  146 => 57,  137 => 54,  133 => 53,  129 => 52,  126 => 51,  122 => 50,  110 => 40,  107 => 39,  103 => 37,  101 => 36,  97 => 34,  95 => 33,  92 => 32,  84 => 27,  78 => 23,  75 => 22,  70 => 19,  64 => 16,  57 => 12,  53 => 10,  50 => 9,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
