<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_e5c12c5c45e2e9e2bb0da0a3463ec5b2645424b6269187ba5848d463272fed63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "trans", array(0 => ($context["name"] ?? $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")), ($context["object_compare"] ?? $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  47 => 21,  45 => 20,  42 => 19,  39 => 18,  32 => 15,  29 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ admin.trans(name) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/Users/kiemde/Sites/Finso/Finso/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
