<?php

namespace Tests;

use \Structural\FluentBuilder\QueryBuilder;

class FluentBuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testCanGetSQLFromQueryBuilder()
    {
        $queryBuilder = new QueryBuilder();
        $queryBuilder
            ->select(['name','email'])
            ->from('Accounts','ac')
            ->where(['id = 30','first_name = ramy']);

        $this->assertEquals('SELECT name,email FROM Accounts AS ac WHERE id = 30ANDfirst_name = ramy',$queryBuilder->getSQL());
    }
}