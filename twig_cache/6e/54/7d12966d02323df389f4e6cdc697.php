<?php

/* iclt.js */
class __TwigTemplate_6e547d12966d02323df389f4e6cdc697 extends Twig_Template
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
        echo "\$(function() {
\t\$(\"#ticketType input\").click(function(){alert(\"";
        // line 2
        if (isset($context["fieldTechs"])) { $_fieldTechs_ = $context["fieldTechs"]; } else { $_fieldTechs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fieldTechs_);
        foreach ($context['_seq'] as $context["_key"] => $context["fieldTech"]) {
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "name"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldTech'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\")});

});
";
    }

    public function getTemplateName()
    {
        return "iclt.js";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 2,  17 => 1,);
    }
}
