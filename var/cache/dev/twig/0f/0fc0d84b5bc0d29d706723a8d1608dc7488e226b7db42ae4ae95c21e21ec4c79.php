<?php

/* :circuit:index.html.twig */
class __TwigTemplate_d33a12fb7500565dcd23fd4739f2f3ac6b7470f63c61b75fe5c66c060dfa351b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", ":circuit:index.html.twig", 1);
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
        $__internal_5deecc484f408cd403f954e500b395a3754387a4e04efaba1547b742826de2f3 = $this->env->getExtension("native_profiler");
        $__internal_5deecc484f408cd403f954e500b395a3754387a4e04efaba1547b742826de2f3->enter($__internal_5deecc484f408cd403f954e500b395a3754387a4e04efaba1547b742826de2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":circuit:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5deecc484f408cd403f954e500b395a3754387a4e04efaba1547b742826de2f3->leave($__internal_5deecc484f408cd403f954e500b395a3754387a4e04efaba1547b742826de2f3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_3249712b5ce4fc67954df2ef36fc525f8d25ce6261dc9533c59b43ff4546d1af = $this->env->getExtension("native_profiler");
        $__internal_3249712b5ce4fc67954df2ef36fc525f8d25ce6261dc9533c59b43ff4546d1af->enter($__internal_3249712b5ce4fc67954df2ef36fc525f8d25ce6261dc9533c59b43ff4546d1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Nos circuits</h1>

    <table cellspacing=\"100\" cellpadding=\"100\">
        <thead align=\"center\" style=\"margin: 0px auto;\">
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Pays depart</th>
                <th>Ville depart</th>
                <th>Ville arrivee</th>
                <th>Duree circuit</th>
                <th>Actions</th>
                ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 17
            echo "                    <th>Modification</th>
                ";
        }
        // line 19
        echo "
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td align=\"center\" style=\"margin: 0px auto;\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">détails</a>

                        </li>
                    </ul>
                </td>
                ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 40
                echo "
                    <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_modify", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>

                ";
            }
            // line 50
            echo "

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </tbody>
    </table>

    ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 59
            echo "        <br/><br/>

        <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("circuit_add");
            echo "\">Ajouter un voyage</a>




    ";
        }
        // line 67
        echo "    
";
        
        $__internal_3249712b5ce4fc67954df2ef36fc525f8d25ce6261dc9533c59b43ff4546d1af->leave($__internal_3249712b5ce4fc67954df2ef36fc525f8d25ce6261dc9533c59b43ff4546d1af_prof);

    }

    public function getTemplateName()
    {
        return ":circuit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 67,  148 => 61,  144 => 59,  142 => 58,  136 => 54,  127 => 50,  118 => 44,  112 => 40,  110 => 39,  102 => 34,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  73 => 25,  70 => 24,  66 => 23,  60 => 19,  56 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'agvoybase.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <h1>Nos circuits</h1>*/
/* */
/*     <table cellspacing="100" cellpadding="100">*/
/*         <thead align="center" style="margin: 0px auto;">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Description</th>*/
/*                 <th>Pays depart</th>*/
/*                 <th>Ville depart</th>*/
/*                 <th>Ville arrivee</th>*/
/*                 <th>Duree circuit</th>*/
/*                 <th>Actions</th>*/
/*                 {% if is_granted('ROLE_USER') %}*/
/*                     <th>Modification</th>*/
/*                 {% endif %}*/
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for circuit in circuits %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('circuit_show', { 'id': circuit.id }) }}">{{ circuit.id }}</a></td>*/
/*                 <td>{{ circuit.description }}</td>*/
/*                 <td>{{ circuit.paysDepart }}</td>*/
/*                 <td>{{ circuit.villeDepart }}</td>*/
/*                 <td>{{ circuit.villeArrivee }}</td>*/
/*                 <td align="center" style="margin: 0px auto;">{{ circuit.dureeCircuit }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">détails</a>*/
/* */
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*                 {% if is_granted('ROLE_USER') %}*/
/* */
/*                     <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_modify', { 'id': circuit.id }) }}">Modifier</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/* */
/*                 {% endif %}*/
/* */
/* */
/*             </tr>*/
/*         {% endfor %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% if is_granted('ROLE_USER') %}*/
/*         <br/><br/>*/
/* */
/*         <a href="{{ path('circuit_add') }}">Ajouter un voyage</a>*/
/* */
/* */
/* */
/* */
/*     {% endif %}*/
/*     */
/* {% endblock %} {# main #}*/
/* */
