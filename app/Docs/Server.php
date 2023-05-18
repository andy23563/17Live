<?php
/**
 * @OA\Server(
 *      url="http://17live.php81.127.0.0.1.nip.io/",
 *      description="local"
 * )
 *
 * @OA\Server(
 *      url="https://project-kirin-as-api-web-dev-06.azurewebsites.net",
 *      description="dev"
 * )
 *
 * @OA\Server(
 *      url="https://project-kirin-as-api-web-prd-06.azurewebsites.net",
 *      description="main"
 * )
 *
 * @OA\SecurityScheme(
 *     type="http",
 *     description="Login with email and password to get the authentication token",
 *     name="Token based Based",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="apiAuth",
 * )
 */
