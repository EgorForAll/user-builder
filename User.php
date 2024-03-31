<?php

namespace Builder;

class User
{

    public $name;
    public $surname;
    public $profession;

    private function random($arr)
    {
        $randomInt = rand(0, count($arr) - 1);
        return $arr[$randomInt];
    }
    public function setName()
    {
        $names = ['Danil', 'Alex', 'Max', 'Boris'];
        $this->name = $this->random($names);
        return $this;
    }

    public function setSurname()
    {
        $surnames = ['Alexeev', 'Ivanov', 'Petrov', 'Volkov'];
        $this->surname = $this->random($surnames);
        return $this;
    }

    public function setProfession() {
        $profession = ['driver', 'doctor', 'teacher', 'engineer', 'lawyer'];
        $this->profession = $this->random($profession);
        return $this;
    }

}