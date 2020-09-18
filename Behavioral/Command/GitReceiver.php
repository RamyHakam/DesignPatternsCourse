<?php


namespace Behavioral\Command;


class GitReceiver
{
    private $gitLog = [];

    /**
     * @return array
     */
    public function getGitLog(): array
    {
        return $this->gitLog;
    }

    public function gitCommit()
    {
        $this->gitLog [] = 'Git - Commit';
    }

    public function gitAdd()
    {
        $this->gitLog [] = 'Git - Add';
    }

    public function gitPush()
    {
        $this->gitLog [] = 'Git - Push';
    }

    public function gitRevert()
    {
        $this->gitLog  = ['Git - Revert'];
    }
}