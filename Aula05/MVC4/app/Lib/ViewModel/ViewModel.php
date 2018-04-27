<?php 
namespace Lib\ViewModel;
class ViewModel
{
	private $header = BASEDIR.'/app/View/Layout/header.php';
	private $footer = BASEDIR.'/app/View/Layout/footer.php';
	public function render(string $view, array $data = null)
	{
		$container = BASEDIR.'/app/View/'.$view.'.php';
		$this->loadPage($container,$data);
	}
	private function loadPage(string $container,array $data = null)
	{
		if (is_array($data)) {
			extract($data);
			unset($data);
		}
		include $this->header;
		include $container;
		include $this->footer;
	}
}