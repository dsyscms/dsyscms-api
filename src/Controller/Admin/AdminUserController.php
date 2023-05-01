<?php

namespace App\Controller\Admin;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends BaseController
{
    #[Route('/admin/admin/user', name: 'app_admin_admin_user')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Admin/AdminUserController.php',
        ]);
    }
}
