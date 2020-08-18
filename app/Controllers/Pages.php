<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo 'Hey';
	}

    public function showMe($page = 'home')
    {
        if ( !is_file(APPPATH . '/Views/pages/' . $page . '.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        // here is where you specify which views to be displayed
        echo view('templates/header');
        echo view('pages/' . $page);
        echo view('templates/footer');
    }

	//--------------------------------------------------------------------

}
