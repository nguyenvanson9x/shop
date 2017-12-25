<?php

/* web/search.twig */
class __TwigTemplate_773da100f46b1ceb467945c33a75755476eec19178869606c2e58ecaa3d7f135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"signup search-main search-template\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t";
        // line 6
        if ($this->getAttribute(($context["search"] ?? null), "performed", array())) {
            // line 7
            echo "\t\t\t\t\t";
            if (($this->getAttribute(($context["search"] ?? null), "terms", array()) != ($context["blank"] ?? null))) {
                // line 8
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["search"] ?? null), "results", array()), "size", array()) == 0)) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<div class=\"bg-danger padding-15 margin-bottom-15\">
\t\t\t\t\t\t\t\t<p class=\"margin-0\">Không tìm thấy bất kỳ kết quả với từ khóa: <b class=\"keysearch\">\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "terms", array()));
                    echo "\"</b></p>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t\t\t\t<div class=\"bg-success padding-15 margin-bottom-15\">
\t\t\t\t\t\t\t\t<p class=\"margin-0\">Có <b>";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["search"] ?? null), "results", array()), "size", array()), "html", null, true);
                    echo "</b> kết quả tìm kiếm với từ khoá <b>\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["search"] ?? null), "terms", array()), "html", null, true);
                    echo "\"</b></p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<section class=\"section-products products-view products-view-grid lg4\">
\t\t\t\t\t\t\t\t<div class=\"product-grid-show products\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["search"] ?? null), "results", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3 item\" >
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 22
                        $this->loadTemplate("product-grid-item", "web/search.twig", 22)->display($context);
                        // line 23
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>


\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t\t<div class=\"bg-danger padding-15 margin-bottom-15\">Vui lòng nhập từ khóa tìm kiếm</div>
\t\t\t\t\t\t";
                // line 33
                $this->loadTemplate("search-module", "web/search.twig", 33)->display($context);
                // line 34
                echo "\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "web/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  113 => 35,  110 => 34,  108 => 33,  105 => 32,  102 => 31,  94 => 25,  79 => 23,  77 => 22,  74 => 21,  57 => 20,  46 => 14,  43 => 13,  37 => 10,  34 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"signup search-main search-template\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t{% if search.performed %}
\t\t\t\t\t{% if search.terms != blank %}
\t\t\t\t\t\t{% if search.results.size == 0 %}
\t\t\t\t\t\t\t<div class=\"bg-danger padding-15 margin-bottom-15\">
\t\t\t\t\t\t\t\t<p class=\"margin-0\">Không tìm thấy bất kỳ kết quả với từ khóa: <b class=\"keysearch\">\"{{ search.terms | escape }}\"</b></p>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"bg-success padding-15 margin-bottom-15\">
\t\t\t\t\t\t\t\t<p class=\"margin-0\">Có <b>{{ search.results.size }}</b> kết quả tìm kiếm với từ khoá <b>\"{{ search.terms }}\"</b></p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<section class=\"section-products products-view products-view-grid lg4\">
\t\t\t\t\t\t\t\t<div class=\"product-grid-show products\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t{% for product in search.results %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3 item\" >
\t\t\t\t\t\t\t\t\t\t\t{% include 'product-grid-item' %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>


\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"bg-danger padding-15 margin-bottom-15\">Vui lòng nhập từ khóa tìm kiếm</div>
\t\t\t\t\t\t{% include 'search-module' %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "web/search.twig", "D:\\NguyenVanSon\\xampp\\htdocs\\shop\\application\\views\\web\\search.twig");
    }
}
