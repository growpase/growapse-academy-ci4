<?php


namespace App\Controllers;

use App\Models\EnquiryModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    protected $EnquiryModel;

    public function _construct()
    {
        $this->EnquiryModel = new EnquiryModel();
    }

    public function index(): string
    {
        return view('home');
    }

    public function about(): string
    {
        return view('about');
    }
    public function contact(): string
    {
        return view('contact');
    }

    public function courses(): string
    {
        return view('courses');
    }

    public function  digitalmarketinginternship(): string
    {
        return view('digitalmarketinginternship');
    }

    public function  fullstackdevelopmentinternship(): string
    {
        return view('fullstackdevelopmentinternship');
    }
    public function  insertmodel(): string
    {
        return view('insertmodel');
    }

    public function webdesign(): string
    {
        return view('webdesign');
    }
    public function webdevelopment(): string
    {
        return view('webdevelopment');
    }
    public function productmanagement(): string
    {
        return view('productmanagement');
    }
    public function marketing(): string
    {
        return view('marketing');
    }
    public function graphicsdesign(): string
    {
        return view('graphicsdesign');
    }
    public function services(): string
    {
        return view('services');
    }
    public function termsofservice(): string
    {
        return view('termsofservice');
    }
    public function privacypolicy(): string
    {
        return view('privacypolicy');
    }





    /*   public function submitForm()
{
    $request = service('request');
    $name = $request->getPost('name');
    $email = $request->getPost('email');
    $phone = $request->getPost('phone');

    $validation = \Config\Services::validation();
    $validation->setRules([
        'name' => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'phone' => 'required|numeric|min_length[10]'
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return $this->response->setJSON([
            'success' => false,
            'message' => $validation->listErrors()
        ]);
    }

    return $this->response->setJSON([
        'success' => true,
        'message' => 'Registration successful'
    ]) ;
}
*/



    public function submitForm()
    {
        // If validation passes, insert into the database
        $userModel = new EnquiryModel();
        
        $_POST['createdate'] = date('Y-m-d');

        // Insert data into the database
        if ($userModel->insert($_POST)) {
            return $this->response->setJSON([
                'status' => true,
                'message' => 'CONGRATULATION! YOUR REGISTRATION IS SUCCESSFUL.'
            ]);
        } else {
            // If insertion fails, return error
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Database error, please try again later'
            ]);
        }
    }



    // public function submitForm()
    // {
    //     $validation = \Config\Services::validation();

    //     // Validate form input
    //     $validation->setRules([
    //         'name'  => 'required',
    //         'email' => 'required|valid_email',
    //         'phone' => 'required'
    //     ]);

    //     if ($validation->withRequest($this->request)->run()) {
    //         // If validation passes, insert data into the database
    //         $data = [
    //             'name' => $this->request->getPost('name'),
    //             'email' => $this->request->getPost('email'),
    //             'phone' => $this->request->getPost('phone')
    //         ];

    //         // Assuming you have a model for saving the form data
    //         $model = new \App\Models\EnquiryModel();

    //         if ($model->insert($data)) {
    //             // Return success response
    //             return $this->response->setJSON([
    //                 'success' => true,
    //                 'message' => 'Registration successful'
    //             ]);
    //         } else {
    //             // Return failure response
    //             return $this->response->setJSON([
    //                 'success' => false,
    //                 'message' => 'Failed to save data'
    //             ]);
    //         }
    //     } else {
    //         // Validation failed, return errors
    //         return $this->response->setJSON([
    //             'success' => false,
    //             'message' => 'Validation failed'
    //         ]);
    //     }
    // }
}
