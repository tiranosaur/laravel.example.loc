<?php


namespace App\Http\Controllers;


class UserController extends Controller
{
    /**
     * Get a JWT via given credentials.
     * @param EmployerSigninRequest $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @OA\Post(
     *     path="/api/auth/employer/signin",
     *     description="Log in an employer",
     *     operationId="api.auth.employer.signin",
     *     tags={"AuthController"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 required={"email", "password", "remember"},
     *                 @OA\Property(
     *                     property="email",
     *                     description="email",
     *                     @OA\Schema(
     *                         type="string",
     *                     )
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     description="password",
     *                     @OA\Schema(
     *                         type="string",
     *                         minLength=6
     *                     )
     *                 ),
     *                 @OA\Property(
     *                     property="remember",
     *                     description="remember me field",
     *                     @OA\Schema(
     *                         type="boolean"
     *                     )
     *                 ),
     *                 example={"email": "test@me.com", "password": "pass1234", "remember": false}
     *             ),
     *        ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Employer has been logged in successfully"
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid Credentials"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Invalid email or password"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="The given data was invalid"
     *     )
     * )
     */
    public function employerSignin(EmployerSigninRequest $request)
    {
        return response()->json(['status' => 'swagger work']);
    }
}
