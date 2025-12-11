<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditSqlResponseSql implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditSqlResponse_sql';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * sqlStatement  sql语句
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户名
    * queryType  查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * operatedObjInfo  操作对象列表
    * ruleName  规则名称
    * riskLevel  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    * startTime  审计开始时间
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * dbInstance  数据库实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sqlStatement' => 'string',
            'clientIp' => 'string',
            'clientName' => 'string',
            'dbIp' => 'string',
            'dbUser' => 'string',
            'queryType' => 'string',
            'operatedObjInfo' => '\HuaweiCloud\SDK\Dbss\V1\Model\AuditSqlResponseSqlOperatedObjInfo[]',
            'ruleName' => 'string',
            'riskLevel' => 'string',
            'startTime' => 'string',
            'sqlResponse' => 'string',
            'dbInstance' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * sqlStatement  sql语句
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户名
    * queryType  查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * operatedObjInfo  操作对象列表
    * ruleName  规则名称
    * riskLevel  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    * startTime  审计开始时间
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * dbInstance  数据库实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sqlStatement' => null,
        'clientIp' => null,
        'clientName' => null,
        'dbIp' => null,
        'dbUser' => null,
        'queryType' => null,
        'operatedObjInfo' => null,
        'ruleName' => null,
        'riskLevel' => null,
        'startTime' => null,
        'sqlResponse' => null,
        'dbInstance' => null
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
    * id  ID
    * sqlStatement  sql语句
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户名
    * queryType  查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * operatedObjInfo  操作对象列表
    * ruleName  规则名称
    * riskLevel  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    * startTime  审计开始时间
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * dbInstance  数据库实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sqlStatement' => 'sql_statement',
            'clientIp' => 'client_ip',
            'clientName' => 'client_name',
            'dbIp' => 'db_ip',
            'dbUser' => 'db_user',
            'queryType' => 'query_type',
            'operatedObjInfo' => 'operated_obj_info',
            'ruleName' => 'rule_name',
            'riskLevel' => 'risk_level',
            'startTime' => 'start_time',
            'sqlResponse' => 'sql_response',
            'dbInstance' => 'db_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * sqlStatement  sql语句
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户名
    * queryType  查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * operatedObjInfo  操作对象列表
    * ruleName  规则名称
    * riskLevel  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    * startTime  审计开始时间
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * dbInstance  数据库实例
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sqlStatement' => 'setSqlStatement',
            'clientIp' => 'setClientIp',
            'clientName' => 'setClientName',
            'dbIp' => 'setDbIp',
            'dbUser' => 'setDbUser',
            'queryType' => 'setQueryType',
            'operatedObjInfo' => 'setOperatedObjInfo',
            'ruleName' => 'setRuleName',
            'riskLevel' => 'setRiskLevel',
            'startTime' => 'setStartTime',
            'sqlResponse' => 'setSqlResponse',
            'dbInstance' => 'setDbInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * sqlStatement  sql语句
    * clientIp  客户端IP
    * clientName  客户端名称
    * dbIp  数据库IP
    * dbUser  数据库用户名
    * queryType  查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * operatedObjInfo  操作对象列表
    * ruleName  规则名称
    * riskLevel  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    * startTime  审计开始时间
    * sqlResponse  响应结果 - SUCCESS：成功 - FAILED：失败
    * dbInstance  数据库实例
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sqlStatement' => 'getSqlStatement',
            'clientIp' => 'getClientIp',
            'clientName' => 'getClientName',
            'dbIp' => 'getDbIp',
            'dbUser' => 'getDbUser',
            'queryType' => 'getQueryType',
            'operatedObjInfo' => 'getOperatedObjInfo',
            'ruleName' => 'getRuleName',
            'riskLevel' => 'getRiskLevel',
            'startTime' => 'getStartTime',
            'sqlResponse' => 'getSqlResponse',
            'dbInstance' => 'getDbInstance'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['clientName'] = isset($data['clientName']) ? $data['clientName'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['operatedObjInfo'] = isset($data['operatedObjInfo']) ? $data['operatedObjInfo'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['sqlResponse'] = isset($data['sqlResponse']) ? $data['sqlResponse'] : null;
        $this->container['dbInstance'] = isset($data['dbInstance']) ? $data['dbInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['sqlResponse'] === null) {
            $invalidProperties[] = "'sqlResponse' can't be null";
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
    * Gets id
    *  ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    *  数据库用户名
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
    * @param string|null $dbUser 数据库用户名
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
    *  查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
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
    * @param string|null $queryType 查询类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets operatedObjInfo
    *  操作对象列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AuditSqlResponseSqlOperatedObjInfo[]|null
    */
    public function getOperatedObjInfo()
    {
        return $this->container['operatedObjInfo'];
    }

    /**
    * Sets operatedObjInfo
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AuditSqlResponseSqlOperatedObjInfo[]|null $operatedObjInfo 操作对象列表
    *
    * @return $this
    */
    public function setOperatedObjInfo($operatedObjInfo)
    {
        $this->container['operatedObjInfo'] = $operatedObjInfo;
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
    * Gets riskLevel
    *  风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险级别 - HIGH：高 - MEDIUM：中 - LOW：低 - NO_RISK：无风险
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets startTime
    *  审计开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 审计开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets sqlResponse
    *  响应结果 - SUCCESS：成功 - FAILED：失败
    *
    * @return string
    */
    public function getSqlResponse()
    {
        return $this->container['sqlResponse'];
    }

    /**
    * Sets sqlResponse
    *
    * @param string $sqlResponse 响应结果 - SUCCESS：成功 - FAILED：失败
    *
    * @return $this
    */
    public function setSqlResponse($sqlResponse)
    {
        $this->container['sqlResponse'] = $sqlResponse;
        return $this;
    }

    /**
    * Gets dbInstance
    *  数据库实例
    *
    * @return string|null
    */
    public function getDbInstance()
    {
        return $this->container['dbInstance'];
    }

    /**
    * Sets dbInstance
    *
    * @param string|null $dbInstance 数据库实例
    *
    * @return $this
    */
    public function setDbInstance($dbInstance)
    {
        $this->container['dbInstance'] = $dbInstance;
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

