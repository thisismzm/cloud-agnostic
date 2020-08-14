<?php
use App\Domain\Entity\MySQLDB;
use App\Domain\Entity\AbstractDB;
use App\Domain\Entity\SQLServerDB;
use App\Domain\Service\Factory\DBFactory;

describe('DBFactory', function () {
    describe('->create()', function () {
        it('should return MySQLDB object', function () {
            $dbFactory = new DBFactory();
            $mysqlDb = $dbFactory->create(AbstractDB::ENGINE_MYSQL);
            expect($mysqlDb)->to->be->instanceof(MySQLDB::class);
        });
        it('should return SQLServerDB object', function () {
            $dbFactory = new DBFactory();
            $mysqlDb = $dbFactory->create(AbstractDB::ENGINE_SQL_SERVER);
            expect($mysqlDb)->to->be->instanceof(SQLServerDB::class);
        });
    });
});
