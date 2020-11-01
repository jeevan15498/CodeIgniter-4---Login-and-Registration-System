<?php namespace App\Controllers;

class Users extends BaseController
{
    /**
     * User Registration
     */
    public function registration()
	{
        helper(['form']);

        // Page Title
        $data["title"] = "User Registration";

        // Form Data
        if ($this->request->getMethod(true) === "POST") {

            // Validation Rules
            $validation_rules = [
                'first_name' => ['label' => 'First Name', 'rules' => 'required|max_length[50]'],
                'last_name' => ['label' => 'Last Name', 'rules' => 'required|max_length[50]'],
                'mobile' => ['label' => 'Mobile','rules' => 'required|max_length[10]|min_length[10]|numeric'],
                'email' => ['label' => 'Email','rules' => 'required|max_length[250]|valid_email'],
                'username' => ['label' => 'Username', 'rules' => 'required|max_length[250]|alpha_numeric'],
                'password' => ['label' => 'Password', 'rules' => 'required|max_length[250]'],
                'confirm_password' => ['label' => 'Confirm Password', 'rules' => 'required|max_length[250]|matches[password]'],
            ];

            // Check Validation Rules
            if (!$this->validate($validation_rules))
            {
                $data['validation'] = $this->validator;
            } else {

                // Save Data in the Database
            }
        }

        echo view('components/header', $data);
        echo view('components/nav');
        echo view('users/registration');
        echo view('components/footer');
    }

    public function profile()
	{
		echo view('users/profile');
    }
    public function login()
	{
		echo view('users/login');
	}
}
