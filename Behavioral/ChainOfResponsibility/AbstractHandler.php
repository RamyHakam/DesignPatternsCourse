<?php


namespace Behavioral\ChainOfResponsibility;


abstract class AbstractHandler implements HandlerInterface
{
    private ?HandlerInterface $nextHandler = null;

    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;
          return $handler;
    }

    public function handle(Request $request)
    {
        if ($this->nextHandler)
        {
            return $this->nextHandler->handle($request);
        }
        return  $request;
    }
}