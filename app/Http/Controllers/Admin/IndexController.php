<?php

/**
 * @author: Gavin Schreiber gavin@zando.co.za
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class IndexController
 *
 * @package App\Http\Controllers\Admin
 * @Controller(domain=ADMIN_URL)
 * @Middleware("web")
 */
class IndexController extends Controller
{

    /**
     * @Get("/", as="dashboard")
     * @Middleware("auth")
     */
    public function index()
    {
        echo "hello";
    }
}