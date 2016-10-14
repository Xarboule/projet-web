<?php

/* circuit/index.html.twig */
class __TwigTemplate_d33a12fb7500565dcd23fd4739f2f3ac6b7470f63c61b75fe5c66c060dfa351b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("agvoybase.html.twig", "circuit/index.html.twig", 1);
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
        $__internal_f4964f29ff5fadea3272aaada80497a28564254a7647d25d3e819f257015e13d = $this->env->getExtension("native_profiler");
        $__internal_f4964f29ff5fadea3272aaada80497a28564254a7647d25d3e819f257015e13d->enter($__internal_f4964f29ff5fadea3272aaada80497a28564254a7647d25d3e819f257015e13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4964f29ff5fadea3272aaada80497a28564254a7647d25d3e819f257015e13d->leave($__internal_f4964f29ff5fadea3272aaada80497a28564254a7647d25d3e819f257015e13d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_51e2fee93bb7506b865eab7ee3409db0ddde8f0d1e21c595900658193ed4732b = $this->env->getExtension("native_profiler");
        $__internal_51e2fee93bb7506b865eab7ee3409db0ddde8f0d1e21c595900658193ed4732b->enter($__internal_51e2fee93bb7506b865eab7ee3409db0ddde8f0d1e21c595900658193ed4732b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
            echo "                    <th>Suppression</th>
                    <th>Modification</th>
                ";
        }
        // line 20
        echo "
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["circuits"]) ? $context["circuits"] : $this->getContext($context, "circuits")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuit"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "paysDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeDepart", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "villeArrivee", array()), "html", null, true);
            echo "</td>
                <td align=\"center\" style=\"margin: 0px auto;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuit"], "dureeCircuit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
            echo "\">détails</a>

                        </li>
                    </ul>
                </td>
                ";
            // line 40
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                    <td>
                        <ul>
                            <li>
                                <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a>
                            </li>
                        </ul>
                    </td>
                    <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circuit_show", array("id" => $this->getAttribute($context["circuit"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                        </li>
                    </ul>
                </td>

                ";
            }
            // line 57
            echo "

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
        </tbody>
    </table>

    ";
        // line 65
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "        <br/><br/>

        <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("circuit_add");
            echo "\">Ajouter un voyage</a>




    ";
        }
        // line 74
        echo "    
";
        
        $__internal_51e2fee93bb7506b865eab7ee3409db0ddde8f0d1e21c595900658193ed4732b->leave($__internal_51e2fee93bb7506b865eab7ee3409db0ddde8f0d1e21c595900658193ed4732b_prof);

    }

    public function getTemplateName()
    {
        return "circuit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 74,  158 => 68,  154 => 66,  152 => 65,  146 => 61,  137 => 57,  128 => 51,  118 => 44,  113 => 41,  111 => 40,  103 => 35,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  74 => 26,  71 => 25,  67 => 24,  61 => 20,  56 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <th>Suppression</th>*/
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
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">Supprimer</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('circuit_show', { 'id': circuit.id }) }}">Modifier</a>*/
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
/*     {% if is_granted('ROLE_ADMIN') %}*/
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
