<?php

final class MemberTest extends \PHPUnit\Framework\TestCase
{
    public function testSumMembersAge(){
        $member = new \User\PhpTddUnitTest\Member();
        $this->assertEquals(96,$member->sumMembersAge());
    }

    public function testGetMember(){
        $member = new \User\PhpTddUnitTest\Member();
        $this->assertCount(3,$member->getMembers());
    }
}