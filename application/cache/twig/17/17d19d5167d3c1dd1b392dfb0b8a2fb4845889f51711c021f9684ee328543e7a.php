<?php

/* welcome.twig */
class __TwigTemplate_32be1b9ff0daceb18ff81396562c003ac45027c77973fcfd9132e9f2443c5eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "</body>
</html>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  38 => 10,  33 => 12,  31 => 10,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
\t{% block content %}
\t{% endblock %}
</body>
</html>", "welcome.twig", "D:\\NguyenVanSon\\Coding\\laragon\\www\\mobile\\application\\views\\welcome.twig");
    }
}
