<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_cf932035a46bd8e88a34243af1806418993a342937e2a74d0b84575a7e1046c4 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  303 => 140,  292 => 135,  236 => 109,  347 => 134,  338 => 130,  319 => 124,  265 => 126,  262 => 105,  239 => 97,  213 => 82,  212 => 74,  210 => 73,  202 => 77,  167 => 48,  137 => 37,  12 => 34,  114 => 44,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  324 => 82,  315 => 123,  302 => 73,  299 => 116,  293 => 113,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  545 => 169,  541 => 168,  529 => 164,  524 => 162,  517 => 161,  511 => 159,  492 => 137,  481 => 128,  478 => 127,  458 => 107,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  351 => 135,  334 => 120,  320 => 115,  307 => 82,  301 => 117,  296 => 77,  281 => 110,  255 => 71,  206 => 71,  195 => 54,  192 => 88,  186 => 38,  180 => 56,  174 => 67,  148 => 60,  20 => 11,  170 => 79,  710 => 213,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  632 => 190,  615 => 189,  602 => 185,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 170,  536 => 166,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  507 => 157,  502 => 140,  499 => 139,  495 => 138,  489 => 136,  483 => 129,  477 => 127,  464 => 147,  462 => 108,  459 => 145,  450 => 141,  422 => 134,  420 => 127,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  358 => 139,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  326 => 83,  323 => 125,  321 => 91,  318 => 145,  316 => 89,  308 => 88,  288 => 81,  271 => 108,  244 => 65,  194 => 53,  188 => 49,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 210,  701 => 209,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  649 => 192,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  610 => 187,  608 => 223,  605 => 186,  603 => 194,  599 => 184,  596 => 189,  593 => 180,  588 => 179,  584 => 174,  575 => 180,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  544 => 172,  539 => 171,  533 => 169,  521 => 154,  518 => 153,  514 => 160,  509 => 158,  506 => 153,  504 => 156,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  485 => 129,  482 => 142,  476 => 141,  473 => 110,  470 => 149,  467 => 137,  460 => 136,  451 => 103,  448 => 140,  443 => 138,  431 => 129,  425 => 135,  419 => 164,  416 => 163,  411 => 126,  404 => 87,  399 => 124,  392 => 104,  386 => 119,  378 => 117,  371 => 113,  367 => 180,  357 => 125,  352 => 91,  350 => 117,  343 => 132,  330 => 105,  327 => 126,  317 => 86,  310 => 80,  304 => 81,  300 => 139,  297 => 77,  291 => 75,  284 => 67,  279 => 65,  274 => 129,  270 => 4,  260 => 124,  256 => 121,  250 => 60,  242 => 113,  228 => 88,  198 => 66,  181 => 29,  178 => 45,  172 => 51,  165 => 77,  146 => 47,  153 => 72,  139 => 51,  124 => 49,  96 => 40,  53 => 10,  76 => 57,  58 => 25,  277 => 109,  263 => 125,  257 => 103,  253 => 1,  237 => 64,  232 => 91,  225 => 87,  216 => 100,  205 => 56,  200 => 55,  184 => 47,  161 => 59,  145 => 56,  129 => 59,  120 => 56,  83 => 36,  65 => 83,  74 => 23,  160 => 76,  157 => 58,  134 => 56,  127 => 54,  113 => 44,  104 => 49,  100 => 23,  84 => 16,  70 => 33,  52 => 20,  34 => 26,  289 => 112,  286 => 133,  280 => 131,  275 => 73,  272 => 14,  266 => 74,  261 => 102,  251 => 101,  248 => 116,  233 => 81,  222 => 94,  218 => 43,  211 => 81,  207 => 90,  197 => 90,  190 => 84,  185 => 86,  175 => 53,  155 => 38,  152 => 63,  118 => 49,  97 => 47,  90 => 20,  81 => 15,  23 => 18,  150 => 58,  126 => 48,  110 => 77,  77 => 27,  37 => 19,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 89,  423 => 166,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 98,  368 => 96,  365 => 141,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 143,  309 => 120,  305 => 119,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 127,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 94,  229 => 61,  220 => 57,  214 => 99,  177 => 54,  169 => 66,  140 => 53,  132 => 59,  128 => 58,  111 => 30,  107 => 52,  61 => 27,  273 => 108,  269 => 75,  254 => 102,  246 => 99,  243 => 98,  240 => 50,  238 => 57,  235 => 63,  230 => 106,  227 => 46,  224 => 103,  221 => 79,  219 => 101,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 39,  143 => 59,  135 => 45,  131 => 55,  119 => 44,  108 => 28,  102 => 43,  71 => 31,  67 => 32,  63 => 50,  59 => 49,  47 => 43,  98 => 47,  93 => 68,  88 => 37,  78 => 40,  40 => 20,  38 => 17,  43 => 20,  28 => 14,  201 => 56,  196 => 65,  183 => 37,  171 => 72,  166 => 71,  163 => 45,  158 => 75,  156 => 41,  151 => 36,  142 => 58,  138 => 61,  136 => 60,  123 => 57,  121 => 51,  117 => 34,  115 => 33,  105 => 39,  91 => 34,  69 => 24,  62 => 29,  49 => 9,  101 => 73,  94 => 35,  89 => 43,  85 => 30,  79 => 37,  75 => 39,  68 => 30,  56 => 23,  50 => 44,  24 => 13,  32 => 12,  87 => 35,  72 => 56,  66 => 29,  55 => 21,  46 => 35,  41 => 18,  44 => 19,  35 => 16,  27 => 13,  25 => 12,  21 => 11,  31 => 15,  29 => 15,  26 => 20,  22 => 12,  19 => 11,  209 => 96,  203 => 93,  199 => 67,  193 => 33,  189 => 71,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 62,  147 => 69,  144 => 68,  141 => 67,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 45,  112 => 52,  109 => 53,  106 => 44,  103 => 50,  99 => 41,  95 => 22,  92 => 45,  86 => 64,  82 => 28,  80 => 41,  73 => 32,  64 => 28,  60 => 22,  57 => 80,  54 => 25,  51 => 24,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 9,);
    }
}
