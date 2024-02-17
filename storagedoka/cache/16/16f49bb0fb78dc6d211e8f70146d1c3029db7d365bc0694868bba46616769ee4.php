<?php

/* unishop2/template/extension/module/filter.twig */
class __TwigTemplate_8fca3493c781956a51071158221e88d5a3b8881e296bb151cfed34917f7c338c extends Twig_Template
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
        echo "<div class=\"filter-default\">
\t<div class=\"heading\"><span>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</span></div>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filter_groups"]) ? $context["filter_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 4
            echo "\t\t<div class=\"filter-default__group\">
\t\t\t<div class=\"filter-default__group-name\">
\t\t\t\t";
            // line 6
            echo $this->getAttribute($context["filter_group"], "name", array());
            echo " <sup></sup>
\t\t\t\t<span class=\"filter-default__pm\">
\t\t\t\t\t<i class=\"fas fa-minus\"></i>
\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div id=\"filter-group";
            // line 12
            echo $this->getAttribute($context["filter_group"], "filter_group_id", array());
            echo "\">
\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["filter_group"], "filter", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 14
                echo "\t\t\t\t\t<label class=\"filter-default__item input\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 15
                echo $this->getAttribute($context["filter"], "filter_id", array());
                echo "\" ";
                echo ((twig_in_filter($this->getAttribute($context["filter"], "filter_id", array()), (isset($context["filter_category"]) ? $context["filter_category"] : null))) ? ("checked=\"checked\"") : (""));
                echo " /><span></span>";
                echo $this->getAttribute($context["filter"], "name", array());
                echo "
\t\t\t\t\t</label>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t<hr />
\t<div class=\"text-right\">
\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\" aria-hidden=\"true\"></i><span>";
        // line 23
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</span></button>
\t</div>
</div>
<script>
\tvar filterGroups = \$('.filter-default__group'),
\t\tfilterGroupName = \$('.filter-default__group-name'),
\t\tfilterGroupPlusMinus = \$('.filter-default__pm'),
\t\tfilterGroupsShow = 5,
\t\tfilterItemsShow = 10;
\t
\tfilterGroups.each(function() {
\t\tvar \$this = \$(this),
\t\t\tselectedItems = \$(this).find('input[type=\"checkbox\"]:checked').length;
\t\t\t
\t\t\$this.find('input[type=\"checkbox\"]').on('click', function() {
\t\t\t//\$this.find('sup').html(' ('+\$this.find('input[type=\"checkbox\"]:checked').length+')');
\t\t});
\t\t
\t\tif(selectedItems) {
\t\t\t//\$this.find('sup').html(' ('+selectedItems+')');
\t\t}
\t});
\t
\tvar i = 1;
\t
\tfilterGroupName.each(function() {
\t\tif(filterGroupsShow < i++) {
\t\t\t\$(this).find(filterGroupPlusMinus).toggleClass('closed');
\t\t\t\$(this).next().addClass('collapse');
\t\t} else {
\t\t\t\$(this).next().addClass('collapse in');
\t\t}
\t});
\t
\tfilterGroupName.on('click', function() {
\t\t\$(this).find(filterGroupPlusMinus).toggleClass('closed');
\t\t\$(this).next().collapse('toggle')
\t});

\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});
\t
\tvar url = '";
        // line 69
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "&filter=' + filter.join(',');
\t
\t";
        // line 71
        if ((isset($context["ajax_filter"]) ? $context["ajax_filter"] : null)) {
            // line 72
            echo "\t
\tlet products = \$('.products-block'),
\t\tpagination = \$('.pagination'),
\t\tpaginationText = \$('.pagination-text');
\t
\t\$.ajax({
\t\turl: url,
\t\ttype: 'get',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('html body').append('<div class=\"full-width-loading\"></div>');
\t\t},
\t\tcomplete: function() {
\t\t\tuniSelectView.init();
\t\t\tscroll_to('.products-block');
\t\t\t
\t\t\t\$.each(\$('.product-thumb a'), function() {
\t\t\t\t\$(this).attr('target', '_blank');
\t\t\t});
\t\t},
\t\tsuccess: function(data) {
\t\t\tlet result = [];
\t\t\t
\t\t\tresult.product = \$(data).find('.products-block').html();
\t\t\tresult.pagination = \$(data).find('.pagination').html();
\t\t\tresult.paginationText = \$(data).find('.pagination-text').html();
\t\t
\t\t\tif(typeof(result.product) == 'undefined') {
\t\t\t\tresult.product = '";
            // line 100
            echo (isset($context["text_no_product"]) ? $context["text_no_product"] : null);
            echo "';
\t\t\t\tresult.pagination = '';
\t\t\t} else if (typeof(result.pagination) == 'undefined') {
\t\t\t\tresult.pagination = '';
\t\t\t}
\t\t\t
\t\t\twindow.history.pushState('', '', url);
\t\t\t
\t\t\tif(!pagination.length) paginationText.before('<div class=\"pagination\"></div>');
\t\t
\t\t\tproducts.html(result.product);
\t\t\tpagination.html(result.pagination);
\t\t\tpaginationText.html(result.paginationText);
\t\t\t
\t\t\t\$('.full-width-loading').remove();
\t\t}
\t});
\t";
        } else {
            // line 118
            echo "\t\tlocation = url;
\t";
        }
        // line 120
        echo "});

\tfunction def_filter() {
\t\tif(\$(window).width() < 767) {
\t\t\t\t\$('.filter-default').css('height', \$(window).height());
\t\t\t\t
\t\t\t\t\$('#column-left').after('<i class=\"filter-default__icon btn-default fas fa-filter\"></i>');
\t\t\t
\t\t\t\t\$('.filter-default__icon').on('click', function() {
\t\t\t\t\t\$('#column-left, .filter-default__icon').toggleClass('show');
\t\t\t\t});
\t\t\t
\t\t\t\t\$('.filter-default #button-filter').on('click', function() {
\t\t\t\t\t\$('#column-left, .filter-default__icon').removeClass('show');
\t\t\t\t});
\t\t} else {
\t\t\t\$('.filter-default__icon').remove();
\t\t}
\t};
\t
\tdef_filter();
\t
\t\$(window).resize(function(){
\t\tdef_filter();
\t});
</script> 
";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 120,  186 => 118,  165 => 100,  135 => 72,  133 => 71,  128 => 69,  79 => 23,  75 => 21,  67 => 18,  54 => 15,  51 => 14,  47 => 13,  43 => 12,  34 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="filter-default">*/
/* 	<div class="heading"><span>{{ heading_title }}</span></div>*/
/* 	{% for filter_group in filter_groups %}*/
/* 		<div class="filter-default__group">*/
/* 			<div class="filter-default__group-name">*/
/* 				{{ filter_group.name }} <sup></sup>*/
/* 				<span class="filter-default__pm">*/
/* 					<i class="fas fa-minus"></i>*/
/* 					<i class="fas fa-plus"></i>*/
/* 				</span>*/
/* 			</div>*/
/* 			<div id="filter-group{{ filter_group.filter_group_id }}">*/
/* 				{% for filter in filter_group.filter %}*/
/* 					<label class="filter-default__item input">*/
/* 						<input type="checkbox" name="filter[]" value="{{ filter.filter_id }}" {{ filter.filter_id in filter_category ? 'checked="checked"' }} /><span></span>{{ filter.name }}*/
/* 					</label>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* 	<hr />*/
/* 	<div class="text-right">*/
/* 		<button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter" aria-hidden="true"></i><span>{{ button_filter }}</span></button>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	var filterGroups = $('.filter-default__group'),*/
/* 		filterGroupName = $('.filter-default__group-name'),*/
/* 		filterGroupPlusMinus = $('.filter-default__pm'),*/
/* 		filterGroupsShow = 5,*/
/* 		filterItemsShow = 10;*/
/* 	*/
/* 	filterGroups.each(function() {*/
/* 		var $this = $(this),*/
/* 			selectedItems = $(this).find('input[type="checkbox"]:checked').length;*/
/* 			*/
/* 		$this.find('input[type="checkbox"]').on('click', function() {*/
/* 			//$this.find('sup').html(' ('+$this.find('input[type="checkbox"]:checked').length+')');*/
/* 		});*/
/* 		*/
/* 		if(selectedItems) {*/
/* 			//$this.find('sup').html(' ('+selectedItems+')');*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	var i = 1;*/
/* 	*/
/* 	filterGroupName.each(function() {*/
/* 		if(filterGroupsShow < i++) {*/
/* 			$(this).find(filterGroupPlusMinus).toggleClass('closed');*/
/* 			$(this).next().addClass('collapse');*/
/* 		} else {*/
/* 			$(this).next().addClass('collapse in');*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	filterGroupName.on('click', function() {*/
/* 		$(this).find(filterGroupPlusMinus).toggleClass('closed');*/
/* 		$(this).next().collapse('toggle')*/
/* 	});*/
/* */
/* $('#button-filter').on('click', function() {*/
/* 	filter = [];*/
/* */
/* 	$('input[name^=\'filter\']:checked').each(function(element) {*/
/* 		filter.push(this.value);*/
/* 	});*/
/* 	*/
/* 	var url = '{{ action }}&filter=' + filter.join(',');*/
/* 	*/
/* 	{% if ajax_filter %}*/
/* 	*/
/* 	let products = $('.products-block'),*/
/* 		pagination = $('.pagination'),*/
/* 		paginationText = $('.pagination-text');*/
/* 	*/
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'get',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('html body').append('<div class="full-width-loading"></div>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			uniSelectView.init();*/
/* 			scroll_to('.products-block');*/
/* 			*/
/* 			$.each($('.product-thumb a'), function() {*/
/* 				$(this).attr('target', '_blank');*/
/* 			});*/
/* 		},*/
/* 		success: function(data) {*/
/* 			let result = [];*/
/* 			*/
/* 			result.product = $(data).find('.products-block').html();*/
/* 			result.pagination = $(data).find('.pagination').html();*/
/* 			result.paginationText = $(data).find('.pagination-text').html();*/
/* 		*/
/* 			if(typeof(result.product) == 'undefined') {*/
/* 				result.product = '{{ text_no_product }}';*/
/* 				result.pagination = '';*/
/* 			} else if (typeof(result.pagination) == 'undefined') {*/
/* 				result.pagination = '';*/
/* 			}*/
/* 			*/
/* 			window.history.pushState('', '', url);*/
/* 			*/
/* 			if(!pagination.length) paginationText.before('<div class="pagination"></div>');*/
/* 		*/
/* 			products.html(result.product);*/
/* 			pagination.html(result.pagination);*/
/* 			paginationText.html(result.paginationText);*/
/* 			*/
/* 			$('.full-width-loading').remove();*/
/* 		}*/
/* 	});*/
/* 	{% else %}*/
/* 		location = url;*/
/* 	{% endif %}*/
/* });*/
/* */
/* 	function def_filter() {*/
/* 		if($(window).width() < 767) {*/
/* 				$('.filter-default').css('height', $(window).height());*/
/* 				*/
/* 				$('#column-left').after('<i class="filter-default__icon btn-default fas fa-filter"></i>');*/
/* 			*/
/* 				$('.filter-default__icon').on('click', function() {*/
/* 					$('#column-left, .filter-default__icon').toggleClass('show');*/
/* 				});*/
/* 			*/
/* 				$('.filter-default #button-filter').on('click', function() {*/
/* 					$('#column-left, .filter-default__icon').removeClass('show');*/
/* 				});*/
/* 		} else {*/
/* 			$('.filter-default__icon').remove();*/
/* 		}*/
/* 	};*/
/* 	*/
/* 	def_filter();*/
/* 	*/
/* 	$(window).resize(function(){*/
/* 		def_filter();*/
/* 	});*/
/* </script> */
/* */
