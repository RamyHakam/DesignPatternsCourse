<?php


namespace Behavioral\ChainOfResponsibility;


class AliHandler extends AbstractHandler
{
    public function handle(Request $request)
    {
        if($request->getId()%2 === 0)
        {
          $request->setDone(true);
          $request->setHandler(self::class);
          return  $request;
        }

        return parent::handle($request);
    }

}