<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditSqlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditSqlRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  time
    * riskLevels  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户
    * queryType  查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    * ruleName  规则名称
    * sqlStatement  sql语句
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * page  页码
    * size  条数
    * timeOrder  时间顺序 - DESC：降序 - ASC：升序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => '\HuaweiCloud\SDK\Dbss\V1\Model\AuditSqlRequestTime',
            'riskLevels' => 'string',
            'clientIp' => 'string',
            'clientName' => 'string',
            'dbIp' => 'string',
            'dbUser' => 'string',
            'queryType' => 'string',
            'ruleName' => 'string',
            'sqlStatement' => 'string',
            'sqlResponse' => 'string',
            'page' => 'int',
            'size' => 'int',
            'timeOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  time
    * riskLevels  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户
    * queryType  查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    * ruleName  规则名称
    * sqlStatement  sql语句
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * page  页码
    * size  条数
    * timeOrder  时间顺序 - DESC：降序 - ASC：升序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'riskLevels' => null,
        'clientIp' => null,
        'clientName' => null,
        'dbIp' => null,
        'dbUser' => null,
        'queryType' => null,
        'ruleName' => null,
        'sqlStatement' => null,
        'sqlResponse' => null,
        'page' => 'int32',
        'size' => 'int32',
        'timeOrder' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * time  time
    * riskLevels  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户
    * queryType  查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    * ruleName  规则名称
    * sqlStatement  sql语句
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * page  页码
    * size  条数
    * timeOrder  时间顺序 - DESC：降序 - ASC：升序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'riskLevels' => 'risk_levels',
            'clientIp' => 'client_ip',
            'clientName' => 'client_name',
            'dbIp' => 'db_ip',
            'dbUser' => 'db_user',
            'queryType' => 'query_type',
            'ruleName' => 'rule_name',
            'sqlStatement' => 'sql_statement',
            'sqlResponse' => 'sql_response',
            'page' => 'page',
            'size' => 'size',
            'timeOrder' => 'time_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  time
    * riskLevels  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户
    * queryType  查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    * ruleName  规则名称
    * sqlStatement  sql语句
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * page  页码
    * size  条数
    * timeOrder  时间顺序 - DESC：降序 - ASC：升序
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'riskLevels' => 'setRiskLevels',
            'clientIp' => 'setClientIp',
            'clientName' => 'setClientName',
            'dbIp' => 'setDbIp',
            'dbUser' => 'setDbUser',
            'queryType' => 'setQueryType',
            'ruleName' => 'setRuleName',
            'sqlStatement' => 'setSqlStatement',
            'sqlResponse' => 'setSqlResponse',
            'page' => 'setPage',
            'size' => 'setSize',
            'timeOrder' => 'setTimeOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  time
    * riskLevels  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户
    * queryType  查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    * ruleName  规则名称
    * sqlStatement  sql语句
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * page  页码
    * size  条数
    * timeOrder  时间顺序 - DESC：降序 - ASC：升序
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'riskLevels' => 'getRiskLevels',
            'clientIp' => 'getClientIp',
            'clientName' => 'getClientName',
            'dbIp' => 'getDbIp',
            'dbUser' => 'getDbUser',
            'queryType' => 'getQueryType',
            'ruleName' => 'getRuleName',
            'sqlStatement' => 'getSqlStatement',
            'sqlResponse' => 'getSqlResponse',
            'page' => 'getPage',
            'size' => 'getSize',
            'timeOrder' => 'getTimeOrder'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['riskLevels'] = isset($data['riskLevels']) ? $data['riskLevels'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['clientName'] = isset($data['clientName']) ? $data['clientName'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['sqlResponse'] = isset($data['sqlResponse']) ? $data['sqlResponse'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['timeOrder'] = isset($data['timeOrder']) ? $data['timeOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['timeOrder'] === null) {
            $invalidProperties[] = "'timeOrder' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets time
    *  time
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AuditSqlRequestTime
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AuditSqlRequestTime $time time
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets riskLevels
    *  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    *
    * @return string|null
    */
    public function getRiskLevels()
    {
        return $this->container['riskLevels'];
    }

    /**
    * Sets riskLevels
    *
    * @param string|null $riskLevels 风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无
    *
    * @return $this
    */
    public function setRiskLevels($riskLevels)
    {
        $this->container['riskLevels'] = $riskLevels;
        return $this;
    }

    /**
    * Gets clientIp
    *  客户端IP
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp 客户端IP
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets clientName
    *  客户端名称
    *
    * @return string|null
    */
    public function getClientName()
    {
        return $this->container['clientName'];
    }

    /**
    * Sets clientName
    *
    * @param string|null $clientName 客户端名称
    *
    * @return $this
    */
    public function setClientName($clientName)
    {
        $this->container['clientName'] = $clientName;
        return $this;
    }

    /**
    * Gets dbIp
    *  数据库IP
    *
    * @return string|null
    */
    public function getDbIp()
    {
        return $this->container['dbIp'];
    }

    /**
    * Sets dbIp
    *
    * @param string|null $dbIp 数据库IP
    *
    * @return $this
    */
    public function setDbIp($dbIp)
    {
        $this->container['dbIp'] = $dbIp;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库用户
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser 数据库用户
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets queryType
    *  查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询类型 - LOGIN：LOGIN - CREATE_TABLE：CREATE TABLE - CREATE_TABLESPACE：CREATE TABLESPACE - DROP_TABLE：DROP TABLE - DROP_TABLESPACE：DROP TABLESPACE - DELETE：DELETE - INSERT：INSERT - INSERT_SELECT：INSERT SELECT - SELECT：SELECT - SELECT_FOR_UPDATE：SELECT FOR UPDATE - UPDATE：UPDATE - CREATE_USER：CREATE USER - DROP_USER：DROP USER - GRANT：GRANT - OPERATE：OPERATE - ALL: ALL
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  sql语句
    *
    * @return string|null
    */
    public function getSqlStatement()
    {
        return $this->container['sqlStatement'];
    }

    /**
    * Sets sqlStatement
    *
    * @param string|null $sqlStatement sql语句
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets sqlResponse
    *  响应结果 - SUCCESS：成功 - FAILED：失败
    *
    * @return string|null
    */
    public function getSqlResponse()
    {
        return $this->container['sqlResponse'];
    }

    /**
    * Sets sqlResponse
    *
    * @param string|null $sqlResponse 响应结果 - SUCCESS：成功 - FAILED：失败
    *
    * @return $this
    */
    public function setSqlResponse($sqlResponse)
    {
        $this->container['sqlResponse'] = $sqlResponse;
        return $this;
    }

    /**
    * Gets page
    *  页码
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 页码
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  条数
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 条数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets timeOrder
    *  时间顺序 - DESC：降序 - ASC：升序
    *
    * @return string
    */
    public function getTimeOrder()
    {
        return $this->container['timeOrder'];
    }

    /**
    * Sets timeOrder
    *
    * @param string $timeOrder 时间顺序 - DESC：降序 - ASC：升序
    *
    * @return $this
    */
    public function setTimeOrder($timeOrder)
    {
        $this->container['timeOrder'] = $timeOrder;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

