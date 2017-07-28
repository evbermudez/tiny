<?php

/**
 * Class App
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class App extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/app/index 
     */
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/app/index.php';
        require APP . 'views/_templates/footer.php';
    }
	
	public function reimbursementForm()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/app/reimbursement-form.php';
        require APP . 'views/_templates/footer.php';
    }
	
	public function addReimbursementForm()
    {
        
    }
	
	public function addEmployeeModalTemplate(){
        $positions = $this->model->getAllPosition();
		require APP . 'views/_templates/modal/add-employee.php';
	}
	
	public function addPositionModalTemplate(){
		require APP . 'views/_templates/modal/add-position.php';
	}

	public function addPosition(){
            $this->position_model->addPosition($_POST["name"], $_POST["description"]);
	}

    public function addEmployee(){
            $this->employee_model->addEmployee($_POST["first_name"], $_POST["middle_name"], $_POST["last_name"], $_POST["position_id"]);
	}

}