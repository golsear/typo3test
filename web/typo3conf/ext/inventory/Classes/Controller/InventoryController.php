<?php
namespace GOLUB\Inventory\Controller;

/**
 * Class InventoryController
 *
 * @package GOLUB\Inventory\Controller
 */
class InventoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \GOLUB\Inventory\Domain\Repository\ProductRepository
	 * @inject
	 */
	protected $productRepository;

	public function listAction() {

		//$products = $this->productRepository->findAll();
		$products = $this->productRepository->findByUid(2);
		$this->view->assign('products', $products);
	}
}
?>