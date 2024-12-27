<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="Order Management API",
 *     version="1.0.0",
 *     description="This API allows you to manage orders, update their statuses, and retrieve order details."
 * ),
 * @OA\PathItem(
 *     path="/api"
 * )
 */
class MainController extends Controller
{
    //
}
