<?php 
namespace Controller;
use Lib\ViewModel\ViewModel;
use Model\User;
class UserController
{
	private $viewModel;
	public function __construct()
	{
		$this->viewModel = new ViewModel();
	}
	public function index()
	{
		$users = User::all();
		$this->viewModel->render('user/index',['users' => $users]);
	}
	public function new(){
		$this->viewModel->render('user/new');	
	}
	public function edit(){
		$this->viewModel->render('user/edit');
	}
	public function create()
	{
		print_r($_POST);
	}
}