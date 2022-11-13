<?php

namespace User\PhpTddUnitTest;

class Member
{
    private $members =[
        [
            "name"=>"Abdurrahim Bulut",
            "age"=>24
        ],
        [
            "name"=>"Lionel Messi",
            "age"=>35
        ],
        [
            "name"=>"Cristiano Ronaldo",
            "age"=>37
        ]
    ];


    /**
     * @return array[]
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @return integer
     * */
    public function sumMembersAge()
    {
        $totalAge = 0;
        foreach ($this->members as $member){
            $totalAge += $member["age"];
        }
        return $totalAge;
    }

}