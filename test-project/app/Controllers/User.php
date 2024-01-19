<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = ['meta_title' => 'New User', 'title' => 'Create new user'];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|is_unique[users.username]|alpha',
                'first_number' => [
                    'rules' => 'required|numeric',
                    'label' => 'first number'
                ],
                'second_number' => [
                    'rules' => 'required|numeric',
                    'label' => 'second number'
                ]
            ];

            if ($this->validate($rules)) {
                $postData = $this->request->getPost();

                $result = $postData['first_number'] + $postData['second_number'];

                $postData['result'] = $result;

                $model = new UserModel();
                $model->save($postData);

                // Redirect to welcomeMessage page
                return redirect()->to('/user/welcomeMessage');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('new_user', $data);
    }

    public function welcomeMessage()
    {
        $data['meta_title'] = 'Welcome Message';
        $data['title'] = 'Our Users';

        // Retrieve all users from the database ordered by id column
        $model = new UserModel();
        $allUsers = $model->orderBy('id', 'DESC')->findAll();

        // Get the newest user
        $newestUser = reset($allUsers);

        // Remove the newest user from the list
        array_shift($allUsers);

        // Pass the data to the view
        $data['newestUser'] = $newestUser;
        $data['otherUsers'] = $allUsers;

        return view('welcome', $data);
    }
}
