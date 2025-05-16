<?php
class User {
    public static function all() {
        return [
            ["id" => 1, "name" => "Maria", "email" => "maria@example.com"],
            ["id" => 2, "name" => "Giorgos", "email" => "giorgos@example.com"]
        ];
    }

    public static function find($id) {
        foreach (self::all() as $user) {
            if ($user['id'] == $id) return $user;
        }
        return null;
    }
}
