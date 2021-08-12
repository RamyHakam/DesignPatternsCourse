<?php

namespace Behavioral\Visitor;

interface VisitorInterface
{
    public function visitCairo(Cairo $cairo);
    public function visitLondon(London $landon);
    public function visitSydney(Sydney $sydney);
    public function visitBali(Bali $bali);
}