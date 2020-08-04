<?php


namespace Behavioral\ChainOfResponsibility;


class AfafHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if($request->getId() < 20) {
            $request->setHandler(self::class);
            $request->setDone(true);
            return  $request;
        }
        return parent::handle($request);
    }
}