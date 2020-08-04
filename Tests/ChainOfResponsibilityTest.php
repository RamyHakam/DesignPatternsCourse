<?php


namespace Tests;


use Behavioral\ChainOfResponsibility\AfafHandler;
use Behavioral\ChainOfResponsibility\AliHandler;
use Behavioral\ChainOfResponsibility\MohsenHandler;
use Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testAliCanHandlerRequest()
    {
        $ali = new AliHandler();
        $afaf = new AfafHandler();
        $mohsen = new MohsenHandler();
        $ali->setNext($afaf->setNext($mohsen));
        $request = new Request();
        $request->setId(4);
        /**@var Request $reponse
         */
        $response =  $ali->handle($request);

        self::assertTrue($response->isDone());
        self::assertEquals(AliHandler::class,$response->getHandler());
    }

    public function testAFAFCanHandlerRequest()
    {
        $ali = new AliHandler();
        $afaf = new AfafHandler();
        $mohsen = new MohsenHandler();

        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request = new Request();
        $request->setId(9);
        /**@var Request $reponse
         */
        $response =  $ali->handle($request);

        self::assertTrue($response->isDone());
        self::assertEquals(AfafHandler::class,$response->getHandler());
    }

    public function testMohsenCanHandlerRequest()
    {
        $ali = new AliHandler();
        $afaf = new AfafHandler();
        $mohsen = new MohsenHandler();

        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request = new Request();
        $request->setId(27);
        /**@var Request $reponse
         */
        $response =  $ali->handle($request);

        self::assertTrue($response->isDone());
        self::assertEquals(MohsenHandler::class,$response->getHandler());
    }

    public function testNOoneCanHandlerRequest()
    {
        $ali = new AliHandler();
        $afaf = new AfafHandler();
        $mohsen = new MohsenHandler();

        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request = new Request();
        $request->setId(71);
        /**@var Request $reponse
         */
        $response =  $ali->handle($request);

        self::assertFalse($response->isDone());
    }
}