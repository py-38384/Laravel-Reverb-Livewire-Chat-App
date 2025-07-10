<?php

namespace App\Livewire;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use Livewire\Component;

class Chat extends Component
{
    public $user;
    private $userService;
    public function mount(UserServiceInterface $userService, $userId){
        $this->userService = $userService;

        $this->user = $this->userService->getSingleUser($userId);
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
