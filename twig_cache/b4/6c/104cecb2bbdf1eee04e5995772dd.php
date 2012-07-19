<?php

/* layout.html */
class __TwigTemplate_b46c104cecb2bbdf1eee04e5995772dd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
<meta lang=\"en\">
<title>ICLT Email Listener</title>

<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css\">
<script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
<script src=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js\"></script>
<meta name=\"viewport\" content=\"target-densitydpi=medium-dpi, initial-scale=1, maximum-scale=1\">

<link rel=\"stylesheet\" href=\"css/iclt.css\">
<script src=\"js/iclt.js\"></script>

</head>
<body>

<div data-role=\"page\">

\t<div data-role=\"header\" data-position=\"fixed\">
\t\t<h1>ICLT Email Listener</h1>
\t</div><!-- /header -->


<div data-role=\"collapsible-set\">

\t<div id=\"fieldTechCollapsible\" data-role=\"collapsible\" data-collapsed=\"false\">
\t\t<h3>Field Technician</h3>
\t\t<fieldset data-role=\"controlgroup\" id=\"fieldTechList\">
";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "fieldTechs"));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldTech"]) {
            // line 31
            echo "\t\t\t<input type=\"radio\" name=\"fieldTech\" id=\"fieldTech_";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\" class=\"sectionOption\">
\t\t\t<label for=\"fieldTech_";
            // line 32
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["fieldTech"])) { $_fieldTech_ = $context["fieldTech"]; } else { $_fieldTech_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_fieldTech_, "name"), "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldTech'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "\t\t</fieldset>
\t</div><!-- /collapsible -->
\t
\t<div id=\"ticketTypeCollapsible\" data-role=\"collapsible\">
\t<h3>Ticket Type</h3>
\t\t<fieldset data-role=\"controlgroup\" id=\"ticketTypeList\">
\t\t\t<input type=\"radio\" name=\"ticketType\" id=\"typeFailure\" value=\"typeFailure\" class=\"sectionOption\">
\t\t\t<label for=\"typeFailure\">Failure</label>

\t\t\t<input type=\"radio\" name=\"ticketType\" id=\"typeRequest\" value=\"typeRequest\" class=\"sectionOption\">
\t\t\t<label for=\"typeRequest\">Request</label>
\t\t</fieldset>
\t</div><!-- /collapsible -->
\t
\t<div id=\"serviceCollapsible\" data-role=\"collapsible\">
\t<h3>Service</h3>
\t<fieldset data-role=\"controlgroup\" id=\"serviceList\">
";
        // line 51
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "services"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 52
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context["serviceId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_service_, "name")), array(" " => "."));
            // line 53
            echo "\t\t<input type=\"radio\" name=\"service\" id=\"service_";
            if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
            echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
            echo "\" value=\"";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_service_, "id"), "html", null, true);
            echo "\" class=\"sectionOption\">
\t\t<label for=\"service_";
            // line 54
            if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
            echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
            echo "\">";
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_service_, "name"), "html", null, true);
            echo "</label>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "\t</fieldset>
\t</div><!-- /collapsible -->
\t
\t<div id=\"categoryCollapsible\" data-role=\"collapsible\">
\t<h3>Category</h3>
\t<fieldset data-role=\"controlgroup\" id=\"categoryList\">
";
        // line 62
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "services"));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 63
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context["serviceId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_service_, "name")), array(" " => "."));
            // line 64
            if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute($_service_, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 65
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                $context["categoryId"] = strtr(twig_lower_filter($this->env, $this->getAttribute($_category_, "name")), array(" " => "."));
                // line 66
                echo "\t\t<input type=\"radio\" name=\"category\" id=\"category_";
                if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
                echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
                echo "_";
                if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                echo twig_escape_filter($this->env, $_categoryId_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                echo twig_escape_filter($this->env, $_categoryId_, "html", null, true);
                echo "\" class=\"sectionOption\">
\t\t<label for=\"category_";
                // line 67
                if (isset($context["serviceId"])) { $_serviceId_ = $context["serviceId"]; } else { $_serviceId_ = null; }
                echo twig_escape_filter($this->env, $_serviceId_, "html", null, true);
                echo "_";
                if (isset($context["categoryId"])) { $_categoryId_ = $context["categoryId"]; } else { $_categoryId_ = null; }
                echo twig_escape_filter($this->env, $_categoryId_, "html", null, true);
                echo "\">";
                if (isset($context["service"])) { $_service_ = $context["service"]; } else { $_service_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_service_, "name"), "html", null, true);
                echo " - ";
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
                echo "</label>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 70
        echo "\t</fieldset>




\t</div><!-- /collapsible -->
\t
\t
\t
\t
\t
</div><!-- /collapsible-set -->






\t<div class=\"clearfix\"></div>
\t<div data-role=\"footer\" id=\"footer\" data-position=\"fixed\" data-theme=\"c\">
\t\t<p>&copy; Paul Sheean 2012</p>
\t</div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 70,  158 => 67,  146 => 66,  143 => 65,  138 => 64,  135 => 63,  130 => 62,  122 => 56,  110 => 54,  101 => 53,  98 => 52,  93 => 51,  74 => 34,  62 => 32,  53 => 31,  48 => 30,  17 => 1,);
    }
}
