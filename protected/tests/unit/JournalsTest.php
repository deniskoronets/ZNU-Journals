<?php

class JournalsTest extends CDbTestCase
{
    protected $journal;

    protected function setUp()
    {
        parent::setUp();
        $this->journal = new Journals();
    }

    public function testTitleIsRequired()
    {
        $this->category->title = '';
        $this->assertFalse($this->journal->validate(array('title')));
    }
}