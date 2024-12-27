<?php

namespace App\Http\Controllers\Swagger;


use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;


/**
 * @OA\Tag(
 *     name="Orders",
 *     description="Operations related to orders"
 * ),
 * @OA\Get(
 *     path="/api/orders",
 *     summary="Get all orders",
 *     tags={"Orders"},
 *     @OA\Response(
 *         response="200",
 *         description="Successfully retrieved the orders",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 type="array",
 *                 @OA\Items(ref="#/components/schemas/Order")
 *             )
 *         )
 *     )
 * ),
 * @OA\Patch(
 *     path="/api/orders/{orderNumber}",
 *     summary="Update order status",
 *     description="Update the status of an order",
 *     tags={"Orders"},
 *     @OA\Parameter(
 *          name="orderNumber",
 *          in="path",
 *          required=true,
 *          description="Order number",
 *          @OA\Schema(type="string")
 *      ),
 *     @OA\RequestBody(
 *          required=true,
 *          @OA\JsonContent(
 *              required={"status"},
 *              @OA\Property(
 *                  property="status",
 *                  type="string",
 *                  enum={"pending", "processing", "completed", "cancelled"},
 *                  description="New status for the order"
 *              )
 *          )
 *      ),
 *     @OA\Response(
 *          response=200,
 *          description="Order status updated successfully",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string"),
 *              @OA\Property(property="order", ref="#/components/schemas/Order")
 *          )
 *      ),
 *      @OA\Response(
 *          response=404,
 *          description="Order not found"
 *      ),
 *      @OA\Response(
 *          response=422,
 *          description="Validation error"
 *      )
 * ),
 * @OA\Get(
 *      path="/api/orders/{orderNumber}",
 *      summary="Get order by order number",
 *      tags={"Orders"},
 *      @OA\Parameter(
 *          name="orderNumber",
 *          in="path",
 *          required=true,
 *          description="Order number",
 *          @OA\Schema(type="string")
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/Order")
 *      ),
 *      @OA\Response(
 *          response=404,
 *          description="Order not found"
 *      )
 *  )
 * @OA\Schema(
 *      schema="Order",
 *      type="object",
 *      @OA\Property(property="id", type="integer"),
 *      @OA\Property(property="order_number", type="string"),
 *      @OA\Property(property="status", type="string", enum={"pending", "processing", "completed", "cancelled"}),
 *      @OA\Property(property="created_at", type="string", format="datetime"),
 *      @OA\Property(property="updated_at", type="string", format="datetime"),
 *      @OA\Property(
 *          property="order_items",
 *          type="array",
 *          @OA\Items(ref="#/components/schemas/OrderItem")
 *      )
 *  ),
 * @OA\Schema(
 *      schema="OrderItem",
 *      type="object",
 *      @OA\Property(property="order_id", type="integer"),
 *      @OA\Property(property="product_name", type="string"),
 *      @OA\Property(property="quantity", type="integer"),
 *      @OA\Property(property="price", type="number", format="float")
 *  )
 */
class OrderController extends Controller
{

}
