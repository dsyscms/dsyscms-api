<?php

namespace App\Controller;

use App\ApiResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/', name: 'app_admin_admin_user')]
class BaseController extends AbstractController
{
    public function __construct()
    {
    }

    public function response(mixed $data = null, int $code = 200, string $msg = '')
    {
        switch ($code){
            case 0:
                break;
            default:
                $msg = ApiResponse::$statusTexts[$code];
                break;
        }
        return ApiResponse::responseJson($data, $code, $msg);
    }

}
