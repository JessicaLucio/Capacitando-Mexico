<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* form_div_layout.html.twig */
class __TwigTemplate_6b75171b478fbe274d751f7877e76268eff1c3c193d1d9d09cae5a897945f3ec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 151
        $this->displayBlock('number_widget', $context, $blocks);
        // line 157
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 162
        $this->displayBlock('money_widget', $context, $blocks);
        // line 166
        $this->displayBlock('url_widget', $context, $blocks);
        // line 171
        $this->displayBlock('search_widget', $context, $blocks);
        // line 176
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 181
        $this->displayBlock('password_widget', $context, $blocks);
        // line 186
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 191
        $this->displayBlock('email_widget', $context, $blocks);
        // line 196
        $this->displayBlock('range_widget', $context, $blocks);
        // line 201
        $this->displayBlock('button_widget', $context, $blocks);
        // line 215
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 220
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 227
        $this->displayBlock('form_label', $context, $blocks);
        // line 249
        $this->displayBlock('button_label', $context, $blocks);
        // line 253
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 261
        $this->displayBlock('form_row', $context, $blocks);
        // line 269
        $this->displayBlock('button_row', $context, $blocks);
        // line 275
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 281
        $this->displayBlock('form', $context, $blocks);
        // line 287
        $this->displayBlock('form_start', $context, $blocks);
        // line 301
        $this->displayBlock('form_end', $context, $blocks);
        // line 308
        $this->displayBlock('form_errors', $context, $blocks);
        // line 318
        $this->displayBlock('form_rest', $context, $blocks);
        // line 339
        echo "
";
        // line 342
        $this->displayBlock('form_rows', $context, $blocks);
        // line 348
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 378
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 12
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = [])
    {
        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", []))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        // line 23
        echo "</div>";
    }

    // line 26
    public function block_collection_widget($context, array $blocks = [])
    {
        // line 27
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), ["data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')]);
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 33
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>";
    }

    // line 37
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : null))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : null)) &&  !(isset($context["multiple"]) ? $context["multiple"] : null)) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", [], "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", []) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : null))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            ((((isset($context["placeholder"]) ? $context["placeholder"] : null) != "")) ? (print (twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = [])
    {
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], [], (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", [])) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", []);
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null) === false)) ? ($this->getAttribute($context["choice"], "label", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 91
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 95
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", []), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", []), 'widget');
            // line 104
            echo "</div>";
        }
    }

    // line 108
    public function block_date_widget($context, array $blocks = [])
    {
        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), ["{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", []), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", []), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", []), 'widget')]);
            // line 118
            echo "</div>";
        }
    }

    // line 122
    public function block_time_widget($context, array $blocks = [])
    {
        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", []), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", []), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", []), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 129
            echo "        </div>";
        }
    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            // line 139
            if ((isset($context["with_years"]) ? $context["with_years"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "years", []), 'widget');
            }
            // line 140
            if ((isset($context["with_months"]) ? $context["with_months"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "months", []), 'widget');
            }
            // line 141
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "weeks", []), 'widget');
            }
            // line 142
            if ((isset($context["with_days"]) ? $context["with_days"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "days", []), 'widget');
            }
            // line 143
            if ((isset($context["with_hours"]) ? $context["with_hours"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hours", []), 'widget');
            }
            // line 144
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minutes", []), 'widget');
            }
            // line 145
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "seconds", []), 'widget');
            }
            // line 146
            if ((isset($context["with_invert"]) ? $context["with_invert"] : null)) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "invert", []), 'widget');
            }
            // line 147
            echo "</div>";
        }
    }

    // line 151
    public function block_number_widget($context, array $blocks = [])
    {
        // line 153
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 157
    public function block_integer_widget($context, array $blocks = [])
    {
        // line 158
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 162
    public function block_money_widget($context, array $blocks = [])
    {
        // line 163
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), ["{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)]);
    }

    // line 166
    public function block_url_widget($context, array $blocks = [])
    {
        // line 167
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 171
    public function block_search_widget($context, array $blocks = [])
    {
        // line 172
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "search")) : ("search"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 176
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 177
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 178
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
    }

    // line 181
    public function block_password_widget($context, array $blocks = [])
    {
        // line 182
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "password")) : ("password"));
        // line 183
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 186
    public function block_hidden_widget($context, array $blocks = [])
    {
        // line 187
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 188
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 191
    public function block_email_widget($context, array $blocks = [])
    {
        // line 192
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "email")) : ("email"));
        // line 193
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 196
    public function block_range_widget($context, array $blocks = [])
    {
        // line 197
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "range")) : ("range"));
        // line 198
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 201
    public function block_button_widget($context, array $blocks = [])
    {
        // line 202
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 203
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                // line 204
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), ["%name%" =>                 // line 205
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                 // line 206
(isset($context["id"]) ? $context["id"] : null)]);
            } else {
                // line 209
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
            }
        }
        // line 212
        echo "<button type=\"";
        echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
        echo "</button>";
    }

    // line 215
    public function block_submit_widget($context, array $blocks = [])
    {
        // line 216
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 217
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 220
    public function block_reset_widget($context, array $blocks = [])
    {
        // line 221
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "reset")) : ("reset"));
        // line 222
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 227
    public function block_form_label($context, array $blocks = [])
    {
        // line 228
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 229
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 230
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["for" => (isset($context["id"]) ? $context["id"] : null)]);
            }
            // line 232
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 233
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), ["class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 235
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 236
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 237
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), ["%name%" =>                     // line 238
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 239
(isset($context["id"]) ? $context["id"] : null)]);
                } else {
                    // line 242
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 245
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
            echo "</label>";
        }
    }

    // line 249
    public function block_button_label($context, array $blocks = [])
    {
    }

    // line 253
    public function block_repeated_row($context, array $blocks = [])
    {
        // line 258
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 261
    public function block_form_row($context, array $blocks = [])
    {
        // line 262
        echo "<div>";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 266
        echo "</div>";
    }

    // line 269
    public function block_button_row($context, array $blocks = [])
    {
        // line 270
        echo "<div>";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 272
        echo "</div>";
    }

    // line 275
    public function block_hidden_row($context, array $blocks = [])
    {
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
    }

    // line 281
    public function block_form($context, array $blocks = [])
    {
        // line 282
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 284
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    // line 287
    public function block_form_start($context, array $blocks = [])
    {
        // line 288
        $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "setMethodRendered", [], "method");
        // line 289
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 290
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), [0 => "GET", 1 => "POST"])) {
            // line 291
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
        } else {
            // line 293
            $context["form_method"] = "POST";
        }
        // line 295
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 296
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 297
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />";
        }
    }

    // line 301
    public function block_form_end($context, array $blocks = [])
    {
        // line 302
        if (( !(isset($context["render_rest"]) || array_key_exists("render_rest", $context)) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 303
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        }
        // line 305
        echo "</form>";
    }

    // line 308
    public function block_form_errors($context, array $blocks = [])
    {
        // line 309
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 310
            echo "<ul>";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 312
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "</ul>";
        }
    }

    // line 318
    public function block_form_rest($context, array $blocks = [])
    {
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 320
            if ( !$this->getAttribute($context["child"], "rendered", [])) {
                // line 321
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "
    ";
        // line 325
        if (( !$this->getAttribute((isset($context["form"]) ? $context["form"] : null), "methodRendered", []) && (null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", [])))) {
            // line 326
            $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "setMethodRendered", [], "method");
            // line 327
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
            // line 328
            if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), [0 => "GET", 1 => "POST"])) {
                // line 329
                $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
            } else {
                // line 331
                $context["form_method"] = "POST";
            }
            // line 334
            if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
                // line 335
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 342
    public function block_form_rows($context, array $blocks = [])
    {
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 344
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 348
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 349
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        // line 350
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 351
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 364
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        // line 365
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 367
            echo " ";
            // line 368
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 369
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 370
$context["attrvalue"] === true)) {
                // line 371
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 372
$context["attrvalue"] === false)) {
                // line 373
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 378
    public function block_button_attributes($context, array $blocks = [])
    {
        // line 379
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 380
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 381
            echo " ";
            // line 382
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 384
$context["attrvalue"] === true)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 386
$context["attrvalue"] === false)) {
                // line 387
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 392
    public function block_attributes($context, array $blocks = [])
    {
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], [], (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1099 => 400,  1097 => 399,  1092 => 398,  1090 => 397,  1085 => 396,  1083 => 395,  1081 => 394,  1077 => 393,  1074 => 392,  1062 => 387,  1060 => 386,  1055 => 385,  1053 => 384,  1048 => 383,  1046 => 382,  1044 => 381,  1040 => 380,  1031 => 379,  1028 => 378,  1016 => 373,  1014 => 372,  1009 => 371,  1007 => 370,  1002 => 369,  1000 => 368,  998 => 367,  994 => 366,  988 => 365,  985 => 364,  973 => 359,  971 => 358,  966 => 357,  964 => 356,  959 => 355,  957 => 354,  955 => 353,  951 => 352,  947 => 351,  943 => 350,  937 => 349,  934 => 348,  926 => 344,  922 => 343,  919 => 342,  911 => 335,  909 => 334,  906 => 331,  903 => 329,  901 => 328,  899 => 327,  897 => 326,  895 => 325,  892 => 324,  885 => 321,  883 => 320,  879 => 319,  876 => 318,  871 => 314,  863 => 312,  859 => 311,  857 => 310,  855 => 309,  852 => 308,  848 => 305,  845 => 303,  843 => 302,  840 => 301,  833 => 297,  831 => 296,  804 => 295,  801 => 293,  798 => 291,  796 => 290,  794 => 289,  792 => 288,  789 => 287,  785 => 284,  783 => 283,  781 => 282,  778 => 281,  774 => 276,  771 => 275,  767 => 272,  765 => 271,  763 => 270,  760 => 269,  756 => 266,  754 => 265,  752 => 264,  750 => 263,  748 => 262,  745 => 261,  741 => 258,  738 => 253,  733 => 249,  713 => 245,  709 => 242,  706 => 239,  705 => 238,  704 => 237,  702 => 236,  700 => 235,  697 => 233,  695 => 232,  692 => 230,  690 => 229,  688 => 228,  685 => 227,  681 => 222,  679 => 221,  676 => 220,  672 => 217,  670 => 216,  667 => 215,  657 => 212,  653 => 209,  650 => 206,  649 => 205,  648 => 204,  646 => 203,  644 => 202,  641 => 201,  637 => 198,  635 => 197,  632 => 196,  628 => 193,  626 => 192,  623 => 191,  619 => 188,  617 => 187,  614 => 186,  610 => 183,  608 => 182,  605 => 181,  600 => 178,  598 => 177,  595 => 176,  591 => 173,  589 => 172,  586 => 171,  582 => 168,  580 => 167,  577 => 166,  573 => 163,  570 => 162,  566 => 159,  564 => 158,  561 => 157,  557 => 154,  555 => 153,  552 => 151,  547 => 147,  543 => 146,  539 => 145,  535 => 144,  531 => 143,  527 => 142,  523 => 141,  519 => 140,  515 => 139,  513 => 138,  509 => 137,  506 => 135,  504 => 134,  501 => 133,  496 => 129,  486 => 128,  481 => 127,  479 => 126,  476 => 124,  474 => 123,  471 => 122,  466 => 118,  464 => 116,  463 => 115,  462 => 114,  461 => 113,  457 => 112,  454 => 110,  452 => 109,  449 => 108,  444 => 104,  442 => 103,  440 => 102,  438 => 101,  436 => 100,  432 => 99,  429 => 97,  427 => 96,  424 => 95,  410 => 92,  407 => 91,  393 => 88,  390 => 87,  360 => 82,  357 => 80,  355 => 79,  353 => 78,  348 => 77,  346 => 76,  329 => 75,  326 => 74,  322 => 71,  320 => 70,  318 => 69,  312 => 66,  310 => 65,  308 => 64,  306 => 63,  304 => 62,  295 => 60,  293 => 59,  286 => 58,  283 => 56,  281 => 55,  278 => 54,  274 => 51,  268 => 49,  266 => 48,  262 => 47,  258 => 46,  255 => 45,  250 => 41,  247 => 39,  245 => 38,  242 => 37,  234 => 34,  231 => 33,  227 => 30,  224 => 28,  222 => 27,  219 => 26,  215 => 23,  213 => 22,  211 => 21,  208 => 19,  206 => 18,  202 => 17,  199 => 16,  185 => 13,  183 => 12,  180 => 11,  175 => 7,  172 => 5,  170 => 4,  167 => 3,  163 => 392,  161 => 378,  159 => 364,  157 => 348,  155 => 342,  152 => 339,  150 => 318,  148 => 308,  146 => 301,  144 => 287,  142 => 281,  140 => 275,  138 => 269,  136 => 261,  134 => 253,  132 => 249,  130 => 227,  128 => 220,  126 => 215,  124 => 201,  122 => 196,  120 => 191,  118 => 186,  116 => 181,  114 => 176,  112 => 171,  110 => 166,  108 => 162,  106 => 157,  104 => 151,  102 => 133,  100 => 122,  98 => 108,  96 => 95,  94 => 91,  92 => 87,  90 => 74,  88 => 54,  86 => 45,  84 => 37,  82 => 33,  80 => 26,  78 => 16,  76 => 11,  74 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "/home/capacita/public_html/capmex/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
