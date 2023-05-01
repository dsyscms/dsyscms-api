<?php

namespace App\Controller;

use App\ApiResponse;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;

class ErrorController extends BaseController
{
    public function show(FlattenException $exception, DebugLoggerInterface $logger = null)
    {
        $data = null;
//        $envMode = $this->getParameter('app.env');
//        if ($envMode === 'dev') {
//            $data['error_msg'] = $exception->getMessage();
//        }
        return $this->response($data, $exception->getCode(), $exception->getMessage());
    }


}