<?php


namespace Behavioral\ChainOfResponsibility;


class MohsenHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if($request->getId() <60)
        {
            $request->setDone(true);
            $request->setHandler(self::class);
            return  $request;
        }
        return parent::handle($request);
    }

}