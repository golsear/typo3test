<?php
class FluidCache_Inventory_Inventory_action_list_4a6224919ac78c0b2e95d6c283d849a4bcf71c20 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<table border="1" cellspacing="1" cellpadding="5">

	<tr>

		<td>Productname</td>

		<td>Productdescription</td>

		<td>Quantity</td>

	</tr>

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = $currentVariableContainer->getOrNull('_all');
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = NULL;
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() {return NULL;};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());
return (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments3['encoding'] !== NULL ? $arguments3['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments3['doubleEncode']));
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments6 = array();
$arguments6['each'] = $currentVariableContainer->getOrNull('products');
$arguments6['as'] = 'product';
$arguments6['key'] = '';
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '

		<tr>

			<td valign="top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('product'), 'name', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output8 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output8 .= '</td>
			<td valign="top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$arguments12 = array();
$arguments12['maxCharacters'] = '100';
$arguments12['append'] = '...';
$arguments12['respectWordBoundaries'] = true;
$arguments12['respectHtml'] = true;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('product'), 'description', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());
return (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode']));
};

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output8 .= '</td>

			<td valign="top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('product'), 'quantity', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = NULL;
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() {return NULL;};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output8 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments17['encoding'] !== NULL ? $arguments17['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments17['doubleEncode']));

$output8 .= '</td>

		</tr>

	';
return $output8;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

</table>';


return $output0;
}


}
#1450351136    6240      