<?php

namespace App\Controller\Admin;

use App\ApiResponse;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Exception\InvalidParameterException;

class IndexController extends BaseController
{
    #[Route('/admin/login', name: 'app_admin_login')]
    public function index(Request $request)
    {

        $headers = $request->headers->all();
        if ($headers) {
            throw new InvalidParameterException('param error');
//            throw new \Exception('param errorffff');
        }

        $data = [
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Admin/AdminUserController.php',
            'headers' => $headers,
        ];

        return $this->response($data);
    }
}
