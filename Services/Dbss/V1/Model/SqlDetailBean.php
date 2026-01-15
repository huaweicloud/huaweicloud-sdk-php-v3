<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlDetailBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlDetailBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * auditResult  审计结果
    * clientPort  客户端端口
    * clientIp  客户端IP
    * clientMac  客户端MAC地址
    * clientName  客户端名称
    * clientOsName  客户端系统主机名称
    * clientOsUser  客户端操作系统用户名
    * clientPortStr  客户端端口字符
    * clientTool  客户端连接工具
    * dbPort  数据库端口
    * dbInstance  数据库实例
    * dbIp  数据库IP
    * dbMac  数据库MAC地址
    * dbPortStr  数据库端口字符
    * dbServiceName  数据库服务名称
    * dbSessionId  数据库连接ID
    * dbType  数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    * dbUser  数据库用户
    * endTime  请求结束时间
    * executeTime  执行时长
    * field  操作对象类型信息
    * id  记录ID
    * level  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * lines  影响行数
    * logResult  登入登出结果
    * object  操作对象
    * objectType  操作对象类型
    * queryId  查询ID
    * queryType  操作类型
    * responseLength  数据长度
    * responseStatus  响应状态
    * ruleId  规则ID
    * ruleName  规则名称
    * ruleType  规则类型
    * schema  数据库SCHEMA
    * scopeId  审计范围ID
    * scopeName  审计范围名称
    * sqlResponse  SQL返回结果
    * sqlResult  SQL处理结果
    * sqlStatement  SQL语句内容
    * startTime  请求开始时间
    * tcpSessionId  TCP连接ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'auditResult' => 'string',
            'clientPort' => 'int',
            'clientIp' => 'string',
            'clientMac' => 'string',
            'clientName' => 'string',
            'clientOsName' => 'string',
            'clientOsUser' => 'string',
            'clientPortStr' => 'string',
            'clientTool' => 'string',
            'dbPort' => 'int',
            'dbInstance' => 'string',
            'dbIp' => 'string',
            'dbMac' => 'string',
            'dbPortStr' => 'string',
            'dbServiceName' => 'string',
            'dbSessionId' => 'string',
            'dbType' => 'string',
            'dbUser' => 'string',
            'endTime' => 'string',
            'executeTime' => 'int',
            'field' => 'string',
            'id' => 'string',
            'level' => 'string',
            'lines' => 'string',
            'logResult' => 'string',
            'object' => 'string',
            'objectType' => 'string',
            'queryId' => 'string',
            'queryType' => 'string',
            'responseLength' => 'int',
            'responseStatus' => 'string',
            'ruleId' => 'string',
            'ruleName' => 'string',
            'ruleType' => 'string',
            'schema' => 'string',
            'scopeId' => 'string',
            'scopeName' => 'string',
            'sqlResponse' => 'string',
            'sqlResult' => 'string',
            'sqlStatement' => 'string',
            'startTime' => 'string',
            'tcpSessionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * auditResult  审计结果
    * clientPort  客户端端口
    * clientIp  客户端IP
    * clientMac  客户端MAC地址
    * clientName  客户端名称
    * clientOsName  客户端系统主机名称
    * clientOsUser  客户端操作系统用户名
    * clientPortStr  客户端端口字符
    * clientTool  客户端连接工具
    * dbPort  数据库端口
    * dbInstance  数据库实例
    * dbIp  数据库IP
    * dbMac  数据库MAC地址
    * dbPortStr  数据库端口字符
    * dbServiceName  数据库服务名称
    * dbSessionId  数据库连接ID
    * dbType  数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    * dbUser  数据库用户
    * endTime  请求结束时间
    * executeTime  执行时长
    * field  操作对象类型信息
    * id  记录ID
    * level  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * lines  影响行数
    * logResult  登入登出结果
    * object  操作对象
    * objectType  操作对象类型
    * queryId  查询ID
    * queryType  操作类型
    * responseLength  数据长度
    * responseStatus  响应状态
    * ruleId  规则ID
    * ruleName  规则名称
    * ruleType  规则类型
    * schema  数据库SCHEMA
    * scopeId  审计范围ID
    * scopeName  审计范围名称
    * sqlResponse  SQL返回结果
    * sqlResult  SQL处理结果
    * sqlStatement  SQL语句内容
    * startTime  请求开始时间
    * tcpSessionId  TCP连接ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'auditResult' => null,
        'clientPort' => 'int32',
        'clientIp' => null,
        'clientMac' => null,
        'clientName' => null,
        'clientOsName' => null,
        'clientOsUser' => null,
        'clientPortStr' => null,
        'clientTool' => null,
        'dbPort' => 'int32',
        'dbInstance' => null,
        'dbIp' => null,
        'dbMac' => null,
        'dbPortStr' => null,
        'dbServiceName' => null,
        'dbSessionId' => null,
        'dbType' => null,
        'dbUser' => null,
        'endTime' => null,
        'executeTime' => 'int64',
        'field' => null,
        'id' => null,
        'level' => null,
        'lines' => null,
        'logResult' => null,
        'object' => null,
        'objectType' => null,
        'queryId' => null,
        'queryType' => null,
        'responseLength' => 'int32',
        'responseStatus' => null,
        'ruleId' => null,
        'ruleName' => null,
        'ruleType' => null,
        'schema' => null,
        'scopeId' => null,
        'scopeName' => null,
        'sqlResponse' => null,
        'sqlResult' => null,
        'sqlStatement' => null,
        'startTime' => null,
        'tcpSessionId' => null
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
    * auditResult  审计结果
    * clientPort  客户端端口
    * clientIp  客户端IP
    * clientMac  客户端MAC地址
    * clientName  客户端名称
    * clientOsName  客户端系统主机名称
    * clientOsUser  客户端操作系统用户名
    * clientPortStr  客户端端口字符
    * clientTool  客户端连接工具
    * dbPort  数据库端口
    * dbInstance  数据库实例
    * dbIp  数据库IP
    * dbMac  数据库MAC地址
    * dbPortStr  数据库端口字符
    * dbServiceName  数据库服务名称
    * dbSessionId  数据库连接ID
    * dbType  数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    * dbUser  数据库用户
    * endTime  请求结束时间
    * executeTime  执行时长
    * field  操作对象类型信息
    * id  记录ID
    * level  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * lines  影响行数
    * logResult  登入登出结果
    * object  操作对象
    * objectType  操作对象类型
    * queryId  查询ID
    * queryType  操作类型
    * responseLength  数据长度
    * responseStatus  响应状态
    * ruleId  规则ID
    * ruleName  规则名称
    * ruleType  规则类型
    * schema  数据库SCHEMA
    * scopeId  审计范围ID
    * scopeName  审计范围名称
    * sqlResponse  SQL返回结果
    * sqlResult  SQL处理结果
    * sqlStatement  SQL语句内容
    * startTime  请求开始时间
    * tcpSessionId  TCP连接ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'auditResult' => 'audit_result',
            'clientPort' => 'client_port',
            'clientIp' => 'client_ip',
            'clientMac' => 'client_mac',
            'clientName' => 'client_name',
            'clientOsName' => 'client_os_name',
            'clientOsUser' => 'client_os_user',
            'clientPortStr' => 'client_port_str',
            'clientTool' => 'client_tool',
            'dbPort' => 'db_port',
            'dbInstance' => 'db_instance',
            'dbIp' => 'db_ip',
            'dbMac' => 'db_mac',
            'dbPortStr' => 'db_port_str',
            'dbServiceName' => 'db_service_name',
            'dbSessionId' => 'db_session_id',
            'dbType' => 'db_type',
            'dbUser' => 'db_user',
            'endTime' => 'end_time',
            'executeTime' => 'execute_time',
            'field' => 'field',
            'id' => 'id',
            'level' => 'level',
            'lines' => 'lines',
            'logResult' => 'log_result',
            'object' => 'object',
            'objectType' => 'object_type',
            'queryId' => 'query_id',
            'queryType' => 'query_type',
            'responseLength' => 'response_length',
            'responseStatus' => 'response_status',
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'ruleType' => 'rule_type',
            'schema' => 'schema',
            'scopeId' => 'scope_id',
            'scopeName' => 'scope_name',
            'sqlResponse' => 'sql_response',
            'sqlResult' => 'sql_result',
            'sqlStatement' => 'sql_statement',
            'startTime' => 'start_time',
            'tcpSessionId' => 'tcp_session_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * auditResult  审计结果
    * clientPort  客户端端口
    * clientIp  客户端IP
    * clientMac  客户端MAC地址
    * clientName  客户端名称
    * clientOsName  客户端系统主机名称
    * clientOsUser  客户端操作系统用户名
    * clientPortStr  客户端端口字符
    * clientTool  客户端连接工具
    * dbPort  数据库端口
    * dbInstance  数据库实例
    * dbIp  数据库IP
    * dbMac  数据库MAC地址
    * dbPortStr  数据库端口字符
    * dbServiceName  数据库服务名称
    * dbSessionId  数据库连接ID
    * dbType  数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    * dbUser  数据库用户
    * endTime  请求结束时间
    * executeTime  执行时长
    * field  操作对象类型信息
    * id  记录ID
    * level  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * lines  影响行数
    * logResult  登入登出结果
    * object  操作对象
    * objectType  操作对象类型
    * queryId  查询ID
    * queryType  操作类型
    * responseLength  数据长度
    * responseStatus  响应状态
    * ruleId  规则ID
    * ruleName  规则名称
    * ruleType  规则类型
    * schema  数据库SCHEMA
    * scopeId  审计范围ID
    * scopeName  审计范围名称
    * sqlResponse  SQL返回结果
    * sqlResult  SQL处理结果
    * sqlStatement  SQL语句内容
    * startTime  请求开始时间
    * tcpSessionId  TCP连接ID
    *
    * @var string[]
    */
    protected static $setters = [
            'auditResult' => 'setAuditResult',
            'clientPort' => 'setClientPort',
            'clientIp' => 'setClientIp',
            'clientMac' => 'setClientMac',
            'clientName' => 'setClientName',
            'clientOsName' => 'setClientOsName',
            'clientOsUser' => 'setClientOsUser',
            'clientPortStr' => 'setClientPortStr',
            'clientTool' => 'setClientTool',
            'dbPort' => 'setDbPort',
            'dbInstance' => 'setDbInstance',
            'dbIp' => 'setDbIp',
            'dbMac' => 'setDbMac',
            'dbPortStr' => 'setDbPortStr',
            'dbServiceName' => 'setDbServiceName',
            'dbSessionId' => 'setDbSessionId',
            'dbType' => 'setDbType',
            'dbUser' => 'setDbUser',
            'endTime' => 'setEndTime',
            'executeTime' => 'setExecuteTime',
            'field' => 'setField',
            'id' => 'setId',
            'level' => 'setLevel',
            'lines' => 'setLines',
            'logResult' => 'setLogResult',
            'object' => 'setObject',
            'objectType' => 'setObjectType',
            'queryId' => 'setQueryId',
            'queryType' => 'setQueryType',
            'responseLength' => 'setResponseLength',
            'responseStatus' => 'setResponseStatus',
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'ruleType' => 'setRuleType',
            'schema' => 'setSchema',
            'scopeId' => 'setScopeId',
            'scopeName' => 'setScopeName',
            'sqlResponse' => 'setSqlResponse',
            'sqlResult' => 'setSqlResult',
            'sqlStatement' => 'setSqlStatement',
            'startTime' => 'setStartTime',
            'tcpSessionId' => 'setTcpSessionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * auditResult  审计结果
    * clientPort  客户端端口
    * clientIp  客户端IP
    * clientMac  客户端MAC地址
    * clientName  客户端名称
    * clientOsName  客户端系统主机名称
    * clientOsUser  客户端操作系统用户名
    * clientPortStr  客户端端口字符
    * clientTool  客户端连接工具
    * dbPort  数据库端口
    * dbInstance  数据库实例
    * dbIp  数据库IP
    * dbMac  数据库MAC地址
    * dbPortStr  数据库端口字符
    * dbServiceName  数据库服务名称
    * dbSessionId  数据库连接ID
    * dbType  数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    * dbUser  数据库用户
    * endTime  请求结束时间
    * executeTime  执行时长
    * field  操作对象类型信息
    * id  记录ID
    * level  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * lines  影响行数
    * logResult  登入登出结果
    * object  操作对象
    * objectType  操作对象类型
    * queryId  查询ID
    * queryType  操作类型
    * responseLength  数据长度
    * responseStatus  响应状态
    * ruleId  规则ID
    * ruleName  规则名称
    * ruleType  规则类型
    * schema  数据库SCHEMA
    * scopeId  审计范围ID
    * scopeName  审计范围名称
    * sqlResponse  SQL返回结果
    * sqlResult  SQL处理结果
    * sqlStatement  SQL语句内容
    * startTime  请求开始时间
    * tcpSessionId  TCP连接ID
    *
    * @var string[]
    */
    protected static $getters = [
            'auditResult' => 'getAuditResult',
            'clientPort' => 'getClientPort',
            'clientIp' => 'getClientIp',
            'clientMac' => 'getClientMac',
            'clientName' => 'getClientName',
            'clientOsName' => 'getClientOsName',
            'clientOsUser' => 'getClientOsUser',
            'clientPortStr' => 'getClientPortStr',
            'clientTool' => 'getClientTool',
            'dbPort' => 'getDbPort',
            'dbInstance' => 'getDbInstance',
            'dbIp' => 'getDbIp',
            'dbMac' => 'getDbMac',
            'dbPortStr' => 'getDbPortStr',
            'dbServiceName' => 'getDbServiceName',
            'dbSessionId' => 'getDbSessionId',
            'dbType' => 'getDbType',
            'dbUser' => 'getDbUser',
            'endTime' => 'getEndTime',
            'executeTime' => 'getExecuteTime',
            'field' => 'getField',
            'id' => 'getId',
            'level' => 'getLevel',
            'lines' => 'getLines',
            'logResult' => 'getLogResult',
            'object' => 'getObject',
            'objectType' => 'getObjectType',
            'queryId' => 'getQueryId',
            'queryType' => 'getQueryType',
            'responseLength' => 'getResponseLength',
            'responseStatus' => 'getResponseStatus',
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'ruleType' => 'getRuleType',
            'schema' => 'getSchema',
            'scopeId' => 'getScopeId',
            'scopeName' => 'getScopeName',
            'sqlResponse' => 'getSqlResponse',
            'sqlResult' => 'getSqlResult',
            'sqlStatement' => 'getSqlStatement',
            'startTime' => 'getStartTime',
            'tcpSessionId' => 'getTcpSessionId'
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
        $this->container['auditResult'] = isset($data['auditResult']) ? $data['auditResult'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['clientMac'] = isset($data['clientMac']) ? $data['clientMac'] : null;
        $this->container['clientName'] = isset($data['clientName']) ? $data['clientName'] : null;
        $this->container['clientOsName'] = isset($data['clientOsName']) ? $data['clientOsName'] : null;
        $this->container['clientOsUser'] = isset($data['clientOsUser']) ? $data['clientOsUser'] : null;
        $this->container['clientPortStr'] = isset($data['clientPortStr']) ? $data['clientPortStr'] : null;
        $this->container['clientTool'] = isset($data['clientTool']) ? $data['clientTool'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['dbInstance'] = isset($data['dbInstance']) ? $data['dbInstance'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbMac'] = isset($data['dbMac']) ? $data['dbMac'] : null;
        $this->container['dbPortStr'] = isset($data['dbPortStr']) ? $data['dbPortStr'] : null;
        $this->container['dbServiceName'] = isset($data['dbServiceName']) ? $data['dbServiceName'] : null;
        $this->container['dbSessionId'] = isset($data['dbSessionId']) ? $data['dbSessionId'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['logResult'] = isset($data['logResult']) ? $data['logResult'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['responseLength'] = isset($data['responseLength']) ? $data['responseLength'] : null;
        $this->container['responseStatus'] = isset($data['responseStatus']) ? $data['responseStatus'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['scopeId'] = isset($data['scopeId']) ? $data['scopeId'] : null;
        $this->container['scopeName'] = isset($data['scopeName']) ? $data['scopeName'] : null;
        $this->container['sqlResponse'] = isset($data['sqlResponse']) ? $data['sqlResponse'] : null;
        $this->container['sqlResult'] = isset($data['sqlResult']) ? $data['sqlResult'] : null;
        $this->container['sqlStatement'] = isset($data['sqlStatement']) ? $data['sqlStatement'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['tcpSessionId'] = isset($data['tcpSessionId']) ? $data['tcpSessionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets auditResult
    *  审计结果
    *
    * @return string|null
    */
    public function getAuditResult()
    {
        return $this->container['auditResult'];
    }

    /**
    * Sets auditResult
    *
    * @param string|null $auditResult 审计结果
    *
    * @return $this
    */
    public function setAuditResult($auditResult)
    {
        $this->container['auditResult'] = $auditResult;
        return $this;
    }

    /**
    * Gets clientPort
    *  客户端端口
    *
    * @return int|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param int|null $clientPort 客户端端口
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
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
    * Gets clientMac
    *  客户端MAC地址
    *
    * @return string|null
    */
    public function getClientMac()
    {
        return $this->container['clientMac'];
    }

    /**
    * Sets clientMac
    *
    * @param string|null $clientMac 客户端MAC地址
    *
    * @return $this
    */
    public function setClientMac($clientMac)
    {
        $this->container['clientMac'] = $clientMac;
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
    * Gets clientOsName
    *  客户端系统主机名称
    *
    * @return string|null
    */
    public function getClientOsName()
    {
        return $this->container['clientOsName'];
    }

    /**
    * Sets clientOsName
    *
    * @param string|null $clientOsName 客户端系统主机名称
    *
    * @return $this
    */
    public function setClientOsName($clientOsName)
    {
        $this->container['clientOsName'] = $clientOsName;
        return $this;
    }

    /**
    * Gets clientOsUser
    *  客户端操作系统用户名
    *
    * @return string|null
    */
    public function getClientOsUser()
    {
        return $this->container['clientOsUser'];
    }

    /**
    * Sets clientOsUser
    *
    * @param string|null $clientOsUser 客户端操作系统用户名
    *
    * @return $this
    */
    public function setClientOsUser($clientOsUser)
    {
        $this->container['clientOsUser'] = $clientOsUser;
        return $this;
    }

    /**
    * Gets clientPortStr
    *  客户端端口字符
    *
    * @return string|null
    */
    public function getClientPortStr()
    {
        return $this->container['clientPortStr'];
    }

    /**
    * Sets clientPortStr
    *
    * @param string|null $clientPortStr 客户端端口字符
    *
    * @return $this
    */
    public function setClientPortStr($clientPortStr)
    {
        $this->container['clientPortStr'] = $clientPortStr;
        return $this;
    }

    /**
    * Gets clientTool
    *  客户端连接工具
    *
    * @return string|null
    */
    public function getClientTool()
    {
        return $this->container['clientTool'];
    }

    /**
    * Sets clientTool
    *
    * @param string|null $clientTool 客户端连接工具
    *
    * @return $this
    */
    public function setClientTool($clientTool)
    {
        $this->container['clientTool'] = $clientTool;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口
    *
    * @return int|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int|null $dbPort 数据库端口
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
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
    * Gets dbMac
    *  数据库MAC地址
    *
    * @return string|null
    */
    public function getDbMac()
    {
        return $this->container['dbMac'];
    }

    /**
    * Sets dbMac
    *
    * @param string|null $dbMac 数据库MAC地址
    *
    * @return $this
    */
    public function setDbMac($dbMac)
    {
        $this->container['dbMac'] = $dbMac;
        return $this;
    }

    /**
    * Gets dbPortStr
    *  数据库端口字符
    *
    * @return string|null
    */
    public function getDbPortStr()
    {
        return $this->container['dbPortStr'];
    }

    /**
    * Sets dbPortStr
    *
    * @param string|null $dbPortStr 数据库端口字符
    *
    * @return $this
    */
    public function setDbPortStr($dbPortStr)
    {
        $this->container['dbPortStr'] = $dbPortStr;
        return $this;
    }

    /**
    * Gets dbServiceName
    *  数据库服务名称
    *
    * @return string|null
    */
    public function getDbServiceName()
    {
        return $this->container['dbServiceName'];
    }

    /**
    * Sets dbServiceName
    *
    * @param string|null $dbServiceName 数据库服务名称
    *
    * @return $this
    */
    public function setDbServiceName($dbServiceName)
    {
        $this->container['dbServiceName'] = $dbServiceName;
        return $this;
    }

    /**
    * Gets dbSessionId
    *  数据库连接ID
    *
    * @return string|null
    */
    public function getDbSessionId()
    {
        return $this->container['dbSessionId'];
    }

    /**
    * Sets dbSessionId
    *
    * @param string|null $dbSessionId 数据库连接ID
    *
    * @return $this
    */
    public function setDbSessionId($dbSessionId)
    {
        $this->container['dbSessionId'] = $dbSessionId;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 数据库类型 - MYSQL：MySQL - ORACLE：Oracle - POSTGRESQL：PostgreSQL - SQLSERVER：SQL Server - DAMENG：DAMENG - TAURUS：Taurus DB - DWS：GaussDB(DWS) - KINGBASE：Kingbase - GAUSSDBOPENGAUSS：GaussDB/openGauss - GREENPLUM：Greenplum - HIGHGO：HIGHGO - SHENTONG：ShenTong - GBASE8A：GBase 8a - GBASE8S：GBase 8s - GBASEXDM：GBase XDM - MONGODB：MongoDB - DDS：DDS(MongoDB)
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
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
    * Gets endTime
    *  请求结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 请求结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets executeTime
    *  执行时长
    *
    * @return int|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param int|null $executeTime 执行时长
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets field
    *  操作对象类型信息
    *
    * @return string|null
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string|null $field 操作对象类型信息
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets id
    *  记录ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets level
    *  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets lines
    *  影响行数
    *
    * @return string|null
    */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
    * Sets lines
    *
    * @param string|null $lines 影响行数
    *
    * @return $this
    */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;
        return $this;
    }

    /**
    * Gets logResult
    *  登入登出结果
    *
    * @return string|null
    */
    public function getLogResult()
    {
        return $this->container['logResult'];
    }

    /**
    * Sets logResult
    *
    * @param string|null $logResult 登入登出结果
    *
    * @return $this
    */
    public function setLogResult($logResult)
    {
        $this->container['logResult'] = $logResult;
        return $this;
    }

    /**
    * Gets object
    *  操作对象
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object 操作对象
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets objectType
    *  操作对象类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 操作对象类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets queryId
    *  查询ID
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId 查询ID
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets queryType
    *  操作类型
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
    * @param string|null $queryType 操作类型
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets responseLength
    *  数据长度
    *
    * @return int|null
    */
    public function getResponseLength()
    {
        return $this->container['responseLength'];
    }

    /**
    * Sets responseLength
    *
    * @param int|null $responseLength 数据长度
    *
    * @return $this
    */
    public function setResponseLength($responseLength)
    {
        $this->container['responseLength'] = $responseLength;
        return $this;
    }

    /**
    * Gets responseStatus
    *  响应状态
    *
    * @return string|null
    */
    public function getResponseStatus()
    {
        return $this->container['responseStatus'];
    }

    /**
    * Sets responseStatus
    *
    * @param string|null $responseStatus 响应状态
    *
    * @return $this
    */
    public function setResponseStatus($responseStatus)
    {
        $this->container['responseStatus'] = $responseStatus;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
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
    * Gets ruleType
    *  规则类型
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 规则类型
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets schema
    *  数据库SCHEMA
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema 数据库SCHEMA
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets scopeId
    *  审计范围ID
    *
    * @return string|null
    */
    public function getScopeId()
    {
        return $this->container['scopeId'];
    }

    /**
    * Sets scopeId
    *
    * @param string|null $scopeId 审计范围ID
    *
    * @return $this
    */
    public function setScopeId($scopeId)
    {
        $this->container['scopeId'] = $scopeId;
        return $this;
    }

    /**
    * Gets scopeName
    *  审计范围名称
    *
    * @return string|null
    */
    public function getScopeName()
    {
        return $this->container['scopeName'];
    }

    /**
    * Sets scopeName
    *
    * @param string|null $scopeName 审计范围名称
    *
    * @return $this
    */
    public function setScopeName($scopeName)
    {
        $this->container['scopeName'] = $scopeName;
        return $this;
    }

    /**
    * Gets sqlResponse
    *  SQL返回结果
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
    * @param string|null $sqlResponse SQL返回结果
    *
    * @return $this
    */
    public function setSqlResponse($sqlResponse)
    {
        $this->container['sqlResponse'] = $sqlResponse;
        return $this;
    }

    /**
    * Gets sqlResult
    *  SQL处理结果
    *
    * @return string|null
    */
    public function getSqlResult()
    {
        return $this->container['sqlResult'];
    }

    /**
    * Sets sqlResult
    *
    * @param string|null $sqlResult SQL处理结果
    *
    * @return $this
    */
    public function setSqlResult($sqlResult)
    {
        $this->container['sqlResult'] = $sqlResult;
        return $this;
    }

    /**
    * Gets sqlStatement
    *  SQL语句内容
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
    * @param string|null $sqlStatement SQL语句内容
    *
    * @return $this
    */
    public function setSqlStatement($sqlStatement)
    {
        $this->container['sqlStatement'] = $sqlStatement;
        return $this;
    }

    /**
    * Gets startTime
    *  请求开始时间
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
    * @param string|null $startTime 请求开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets tcpSessionId
    *  TCP连接ID
    *
    * @return string|null
    */
    public function getTcpSessionId()
    {
        return $this->container['tcpSessionId'];
    }

    /**
    * Sets tcpSessionId
    *
    * @param string|null $tcpSessionId TCP连接ID
    *
    * @return $this
    */
    public function setTcpSessionId($tcpSessionId)
    {
        $this->container['tcpSessionId'] = $tcpSessionId;
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

