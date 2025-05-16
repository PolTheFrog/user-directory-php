<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function index() {
        $users = User::all();
        include __DIR__ . '/../views/user_list.php';
    }

    public function show($id) {
        $user = User::find($id);
        include __DIR__ . '/../views/user_detail.php';
    }
}
