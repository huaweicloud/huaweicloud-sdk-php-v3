<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RdsNoAgentDbRequestDatabases implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RdsNoAgentDbRequest_databases';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库ID
    * dbName  数据库名称
    * status  数据库状态 - ON：启用 - OFF：关闭
    * port  数据库端口
    * ip  数据库IP
    * instanceName  数据库实例名称
    * version  数据库版本
    * type  数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    * enterpriseId  企业项目ID
    * enterpriseName  企业项目名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'dbName' => 'string',
            'status' => 'string',
            'port' => 'string',
            'ip' => 'string',
            'instanceName' => 'string',
            'version' => 'string',
            'type' => 'string',
            'enterpriseId' => 'string',
            'enterpriseName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库ID
    * dbName  数据库名称
    * status  数据库状态 - ON：启用 - OFF：关闭
    * port  数据库端口
    * ip  数据库IP
    * instanceName  数据库实例名称
    * version  数据库版本
    * type  数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    * enterpriseId  企业项目ID
    * enterpriseName  企业项目名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'dbName' => null,
        'status' => null,
        'port' => null,
        'ip' => null,
        'instanceName' => null,
        'version' => null,
        'type' => null,
        'enterpriseId' => null,
        'enterpriseName' => null
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
    * id  数据库ID
    * dbName  数据库名称
    * status  数据库状态 - ON：启用 - OFF：关闭
    * port  数据库端口
    * ip  数据库IP
    * instanceName  数据库实例名称
    * version  数据库版本
    * type  数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    * enterpriseId  企业项目ID
    * enterpriseName  企业项目名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'dbName' => 'db_name',
            'status' => 'status',
            'port' => 'port',
            'ip' => 'ip',
            'instanceName' => 'instance_name',
            'version' => 'version',
            'type' => 'type',
            'enterpriseId' => 'enterprise_id',
            'enterpriseName' => 'enterprise_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库ID
    * dbName  数据库名称
    * status  数据库状态 - ON：启用 - OFF：关闭
    * port  数据库端口
    * ip  数据库IP
    * instanceName  数据库实例名称
    * version  数据库版本
    * type  数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    * enterpriseId  企业项目ID
    * enterpriseName  企业项目名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'dbName' => 'setDbName',
            'status' => 'setStatus',
            'port' => 'setPort',
            'ip' => 'setIp',
            'instanceName' => 'setInstanceName',
            'version' => 'setVersion',
            'type' => 'setType',
            'enterpriseId' => 'setEnterpriseId',
            'enterpriseName' => 'setEnterpriseName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库ID
    * dbName  数据库名称
    * status  数据库状态 - ON：启用 - OFF：关闭
    * port  数据库端口
    * ip  数据库IP
    * instanceName  数据库实例名称
    * version  数据库版本
    * type  数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    * enterpriseId  企业项目ID
    * enterpriseName  企业项目名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'dbName' => 'getDbName',
            'status' => 'getStatus',
            'port' => 'getPort',
            'ip' => 'getIp',
            'instanceName' => 'getInstanceName',
            'version' => 'getVersion',
            'type' => 'getType',
            'enterpriseId' => 'getEnterpriseId',
            'enterpriseName' => 'getEnterpriseName'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['enterpriseName'] = isset($data['enterpriseName']) ? $data['enterpriseName'] : null;
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
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['enterpriseId'] === null) {
            $invalidProperties[] = "'enterpriseId' can't be null";
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
    *  数据库ID
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
    * @param string $id 数据库ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets status
    *  数据库状态 - ON：启用 - OFF：关闭
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 数据库状态 - ON：启用 - OFF：关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口
    *
    * @return string
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string $port 数据库端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets ip
    *  数据库IP
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 数据库IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets instanceName
    *  数据库实例名称
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 数据库实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets version
    *  数据库版本
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 数据库版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets type
    *  数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 数据库类型 - MYSQL: MySQL - ORACLE: Oracle - POSTGRESQL: PostgreSQL - TAURUS: Taurus DB - DWS: GaussDB(DWS) - GAUSSDBOPENGAUSS：GaussDB/openGauss - DDS： DDS(MongoDB)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseId
    *  企业项目ID
    *
    * @return string
    */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
    * Sets enterpriseId
    *
    * @param string $enterpriseId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;
        return $this;
    }

    /**
    * Gets enterpriseName
    *  企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseName()
    {
        return $this->container['enterpriseName'];
    }

    /**
    * Sets enterpriseName
    *
    * @param string|null $enterpriseName 企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseName($enterpriseName)
    {
        $this->container['enterpriseName'] = $enterpriseName;
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

