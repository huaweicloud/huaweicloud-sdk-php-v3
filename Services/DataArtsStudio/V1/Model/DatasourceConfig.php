<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasourceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasourceConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据源的类型
    * connectionName  数据连接名称
    * connectionId  数据连接ID
    * database  数据库名
    * datatable  数据表名称
    * tableId  数据表ID
    * queue  DLI的队列名称
    * accessType  取数方式
    * accessMode  获取数据的模式
    * pagination  pagination
    * sql  脚本模式下的sql语句
    * backendParas  API后端参数
    * responseParas  配置类API返回参数
    * orderParas  排序参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'connectionName' => 'string',
            'connectionId' => 'string',
            'database' => 'string',
            'datatable' => 'string',
            'tableId' => 'string',
            'queue' => 'string',
            'accessType' => 'string',
            'accessMode' => 'string',
            'pagination' => 'string',
            'sql' => 'string',
            'backendParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiRequestPara[]',
            'responseParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiResponsePara[]',
            'orderParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceOrderPara[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据源的类型
    * connectionName  数据连接名称
    * connectionId  数据连接ID
    * database  数据库名
    * datatable  数据表名称
    * tableId  数据表ID
    * queue  DLI的队列名称
    * accessType  取数方式
    * accessMode  获取数据的模式
    * pagination  pagination
    * sql  脚本模式下的sql语句
    * backendParas  API后端参数
    * responseParas  配置类API返回参数
    * orderParas  排序参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'connectionName' => null,
        'connectionId' => null,
        'database' => null,
        'datatable' => null,
        'tableId' => null,
        'queue' => null,
        'accessType' => null,
        'accessMode' => null,
        'pagination' => null,
        'sql' => null,
        'backendParas' => null,
        'responseParas' => null,
        'orderParas' => null
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
    * type  数据源的类型
    * connectionName  数据连接名称
    * connectionId  数据连接ID
    * database  数据库名
    * datatable  数据表名称
    * tableId  数据表ID
    * queue  DLI的队列名称
    * accessType  取数方式
    * accessMode  获取数据的模式
    * pagination  pagination
    * sql  脚本模式下的sql语句
    * backendParas  API后端参数
    * responseParas  配置类API返回参数
    * orderParas  排序参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'connectionName' => 'connection_name',
            'connectionId' => 'connection_id',
            'database' => 'database',
            'datatable' => 'datatable',
            'tableId' => 'table_id',
            'queue' => 'queue',
            'accessType' => 'access_type',
            'accessMode' => 'access_mode',
            'pagination' => 'pagination',
            'sql' => 'sql',
            'backendParas' => 'backend_paras',
            'responseParas' => 'response_paras',
            'orderParas' => 'order_paras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据源的类型
    * connectionName  数据连接名称
    * connectionId  数据连接ID
    * database  数据库名
    * datatable  数据表名称
    * tableId  数据表ID
    * queue  DLI的队列名称
    * accessType  取数方式
    * accessMode  获取数据的模式
    * pagination  pagination
    * sql  脚本模式下的sql语句
    * backendParas  API后端参数
    * responseParas  配置类API返回参数
    * orderParas  排序参数
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'connectionName' => 'setConnectionName',
            'connectionId' => 'setConnectionId',
            'database' => 'setDatabase',
            'datatable' => 'setDatatable',
            'tableId' => 'setTableId',
            'queue' => 'setQueue',
            'accessType' => 'setAccessType',
            'accessMode' => 'setAccessMode',
            'pagination' => 'setPagination',
            'sql' => 'setSql',
            'backendParas' => 'setBackendParas',
            'responseParas' => 'setResponseParas',
            'orderParas' => 'setOrderParas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据源的类型
    * connectionName  数据连接名称
    * connectionId  数据连接ID
    * database  数据库名
    * datatable  数据表名称
    * tableId  数据表ID
    * queue  DLI的队列名称
    * accessType  取数方式
    * accessMode  获取数据的模式
    * pagination  pagination
    * sql  脚本模式下的sql语句
    * backendParas  API后端参数
    * responseParas  配置类API返回参数
    * orderParas  排序参数
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'connectionName' => 'getConnectionName',
            'connectionId' => 'getConnectionId',
            'database' => 'getDatabase',
            'datatable' => 'getDatatable',
            'tableId' => 'getTableId',
            'queue' => 'getQueue',
            'accessType' => 'getAccessType',
            'accessMode' => 'getAccessMode',
            'pagination' => 'getPagination',
            'sql' => 'getSql',
            'backendParas' => 'getBackendParas',
            'responseParas' => 'getResponseParas',
            'orderParas' => 'getOrderParas'
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
    const TYPE_MYSQL = 'MYSQL';
    const TYPE_DLI = 'DLI';
    const TYPE_DWS = 'DWS';
    const TYPE_HIVE = 'HIVE';
    const TYPE_HBASE = 'HBASE';
    const ACCESS_TYPE_SCRIPT = 'SCRIPT';
    const ACCESS_TYPE_CONFIGURAITON = 'CONFIGURAITON';
    const ACCESS_MODE_SQL = 'SQL';
    const ACCESS_MODE_ROW_KEY = 'ROW_KEY';
    const ACCESS_MODE_PREFIX_FILTER = 'PREFIX_FILTER';
    const PAGINATION__DEFAULT = 'DEFAULT';
    const PAGINATION_CUSTOM = 'CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MYSQL,
            self::TYPE_DLI,
            self::TYPE_DWS,
            self::TYPE_HIVE,
            self::TYPE_HBASE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessTypeAllowableValues()
    {
        return [
            self::ACCESS_TYPE_SCRIPT,
            self::ACCESS_TYPE_CONFIGURAITON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessModeAllowableValues()
    {
        return [
            self::ACCESS_MODE_SQL,
            self::ACCESS_MODE_ROW_KEY,
            self::ACCESS_MODE_PREFIX_FILTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPaginationAllowableValues()
    {
        return [
            self::PAGINATION__DEFAULT,
            self::PAGINATION_CUSTOM,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['connectionName'] = isset($data['connectionName']) ? $data['connectionName'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['datatable'] = isset($data['datatable']) ? $data['datatable'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['accessMode'] = isset($data['accessMode']) ? $data['accessMode'] : null;
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['backendParas'] = isset($data['backendParas']) ? $data['backendParas'] : null;
        $this->container['responseParas'] = isset($data['responseParas']) ? $data['responseParas'] : null;
        $this->container['orderParas'] = isset($data['orderParas']) ? $data['orderParas'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAccessTypeAllowableValues();
                if (!is_null($this->container['accessType']) && !in_array($this->container['accessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAccessModeAllowableValues();
                if (!is_null($this->container['accessMode']) && !in_array($this->container['accessMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPaginationAllowableValues();
                if (!is_null($this->container['pagination']) && !in_array($this->container['pagination'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pagination', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  数据源的类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 数据源的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets connectionName
    *  数据连接名称
    *
    * @return string|null
    */
    public function getConnectionName()
    {
        return $this->container['connectionName'];
    }

    /**
    * Sets connectionName
    *
    * @param string|null $connectionName 数据连接名称
    *
    * @return $this
    */
    public function setConnectionName($connectionName)
    {
        $this->container['connectionName'] = $connectionName;
        return $this;
    }

    /**
    * Gets connectionId
    *  数据连接ID
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 数据连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets database
    *  数据库名
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets datatable
    *  数据表名称
    *
    * @return string|null
    */
    public function getDatatable()
    {
        return $this->container['datatable'];
    }

    /**
    * Sets datatable
    *
    * @param string|null $datatable 数据表名称
    *
    * @return $this
    */
    public function setDatatable($datatable)
    {
        $this->container['datatable'] = $datatable;
        return $this;
    }

    /**
    * Gets tableId
    *  数据表ID
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 数据表ID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets queue
    *  DLI的队列名称
    *
    * @return string|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param string|null $queue DLI的队列名称
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets accessType
    *  取数方式
    *
    * @return string|null
    */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
    * Sets accessType
    *
    * @param string|null $accessType 取数方式
    *
    * @return $this
    */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;
        return $this;
    }

    /**
    * Gets accessMode
    *  获取数据的模式
    *
    * @return string|null
    */
    public function getAccessMode()
    {
        return $this->container['accessMode'];
    }

    /**
    * Sets accessMode
    *
    * @param string|null $accessMode 获取数据的模式
    *
    * @return $this
    */
    public function setAccessMode($accessMode)
    {
        $this->container['accessMode'] = $accessMode;
        return $this;
    }

    /**
    * Gets pagination
    *  pagination
    *
    * @return string|null
    */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
    * Sets pagination
    *
    * @param string|null $pagination pagination
    *
    * @return $this
    */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;
        return $this;
    }

    /**
    * Gets sql
    *  脚本模式下的sql语句
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql 脚本模式下的sql语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets backendParas
    *  API后端参数
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiRequestPara[]|null
    */
    public function getBackendParas()
    {
        return $this->container['backendParas'];
    }

    /**
    * Sets backendParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiRequestPara[]|null $backendParas API后端参数
    *
    * @return $this
    */
    public function setBackendParas($backendParas)
    {
        $this->container['backendParas'] = $backendParas;
        return $this;
    }

    /**
    * Gets responseParas
    *  配置类API返回参数
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiResponsePara[]|null
    */
    public function getResponseParas()
    {
        return $this->container['responseParas'];
    }

    /**
    * Sets responseParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApiResponsePara[]|null $responseParas 配置类API返回参数
    *
    * @return $this
    */
    public function setResponseParas($responseParas)
    {
        $this->container['responseParas'] = $responseParas;
        return $this;
    }

    /**
    * Gets orderParas
    *  排序参数
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceOrderPara[]|null
    */
    public function getOrderParas()
    {
        return $this->container['orderParas'];
    }

    /**
    * Sets orderParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DatasourceOrderPara[]|null $orderParas 排序参数
    *
    * @return $this
    */
    public function setOrderParas($orderParas)
    {
        $this->container['orderParas'] = $orderParas;
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

