<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\View\View;
use App\Services\Interfaces\UserServiceInterface;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserServiceInterface $userService){
        $this->userService = $userService;
    }
    /**
     * Summary of index
     * function: index
     * Description: Get all the other user and display it to the dashboard. 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View {
        $users = $this->userService->getAllOtherUser();
        return view('dashboard',['users'=> $users]);
    }
    public function userChat(string $userId):View{
        return view('user-chat',['userId' => $userId]);
    }
}
