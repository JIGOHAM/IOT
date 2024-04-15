<?php

namespace App\Http\Controllers;

use Exception;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;


class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //injection de dependence creation d un objet repository
    // public function __construct(Repository $repository)
    // {
    //     $this->repository = $repository;
    // }

    //afficher la page d accueil
    public function accueil()
    {
        return view("accueil");
    }
}
