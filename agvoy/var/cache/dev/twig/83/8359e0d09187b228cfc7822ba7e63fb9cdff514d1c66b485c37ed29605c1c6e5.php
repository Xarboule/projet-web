<?php

/* circuit/modify.html.twig */
class __TwigTemplate_805b4d74ef1f8da2b359bbef0a13605691db4810f04ff7e84e2c71c9609928af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/modify.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "agvoybase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480331fea0897db1a3e49ad5f1fe4bc9825c5b197d919ac1ddd236965c266f5b = $this->env->getExtension("native_profiler");
        $__internal_480331fea0897db1a3e49ad5f1fe4bc9825c5b197d919ac1ddd236965c266f5b->enter($__internal_480331fea0897db1a3e49ad5f1fe4bc9825c5b197d919ac1ddd236965c266f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_480331fea0897db1a3e49ad5f1fe4bc9825c5b197d919ac1ddd236965c266f5b->leave($__internal_480331fea0897db1a3e49ad5f1fe4bc9825c5b197d919ac1ddd236965c266f5b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7786216bc91ba2277ae3bf03314ae392cf9740d262a0cf3cc96aff338363fc07 = $this->env->getExtension("native_profiler");
        $__internal_7786216bc91ba2277ae3bf03314ae392cf9740d262a0cf3cc96aff338363fc07->enter($__internal_7786216bc91ba2277ae3bf03314ae392cf9740d262a0cf3cc96aff338363fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <h3>Ajout d'un voyage</h3>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </br></br>

    <h3>Étapes</h3>
    <table>
        <thead>
        <tr>
            <th>Numéro</th>
            <th>Ville</th>
            <th>Nombre jours</th>
            <th>Suppression</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "etapes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "numeroEtape", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "villeEtape", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["etape"], "nombreJours", array()), "html", null, true);
            echo " j.</td>
                <td><a href=\"\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("step_remove", array("id" => $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "id", array()), "idStep" => $this->getAttribute($context["etape"], "id", array()))), "html", null, true);
            echo ">Supprimer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " ";
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("step_add", array("id" => $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "id", array()))), "html", null, true);
        echo "\">Ajouter une étape</a>

    </br></br>

    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_remove", array("id" => $this->getAttribute((isset($context["circuit"]) ? $context["circuit"] : $this->getContext($context, "circuit")), "id", array()))), "html", null, true);
        echo "\">Supprimer ce voyage</a>

";
        
        $__internal_7786216bc91ba2277ae3bf03314ae392cf9740d262a0cf3cc96aff338363fc07->leave($__internal_7786216bc91ba2277ae3bf03314ae392cf9740d262a0cf3cc96aff338363fc07_prof);

    }

    public function getTemplateName()
    {
        return "circuit/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  107 => 36,  102 => 33,  100 => 32,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  76 => 26,  72 => 25,  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     <h3>Ajout d'un voyage</h3>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/*     </br></br>*/
/* */
/*     <h3>Étapes</h3>*/
/*     <table>*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Numéro</th>*/
/*             <th>Ville</th>*/
/*             <th>Nombre jours</th>*/
/*             <th>Suppression</th>*/
/*             <th></th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for etape in circuit.etapes %}*/
/*             <tr>*/
/*                 <td>{{ etape.numeroEtape }}</td>*/
/*                 <td>{{ etape.villeEtape }}</td>*/
/*                 <td>{{ etape.nombreJours }} j.</td>*/
/*                 <td><a href=""{{ path('step_remove', {'id' : circuit.id, 'idStep' : etape.id}) }}>Supprimer</a></td>*/
/*             </tr>*/
/*         {% endfor %} {# circuit.etapes #}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('step_add', {'id' : circuit.id }) }}">Ajouter une étape</a>*/
/* */
/*     </br></br>*/
/* */
/*     <a href="{{ path('circuit_remove', { 'id': circuit.id }) }}">Supprimer ce voyage</a>*/
/* */
/* {% endblock %} {# main #}*/
