<?php

namespace App;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiResponse extends Response
{
    public const CODE_SUCCESS = 200;
    public const CODE_FAILURE = 500;
    public static $statusTexts = [
        100 => 'param error',
        200 => 'success',
        500 => 'Internal Server Error',
    ];

    public static function responseJson(mixed $data, int $code, string $msg)
    {
        return new JsonResponse([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ]);
    }

}