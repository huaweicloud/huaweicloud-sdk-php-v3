<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库ID
    * name  数据库名称
    * type  添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
    * version  数据库版本
    * charset  数据库字符集
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统
    * status  开启状态（1：开启，0：关闭）
    * instanceName  数据库实例名
    * auditStatus  数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    * agentUrl  agent的唯一ID
    * dbClassification  数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'version' => 'string',
            'charset' => 'string',
            'ip' => 'string',
            'port' => 'string',
            'os' => 'string',
            'status' => 'string',
            'instanceName' => 'string',
            'auditStatus' => 'string',
            'agentUrl' => 'string[]',
            'dbClassification' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库ID
    * name  数据库名称
    * type  添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
    * version  数据库版本
    * charset  数据库字符集
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统
    * status  开启状态（1：开启，0：关闭）
    * instanceName  数据库实例名
    * auditStatus  数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    * agentUrl  agent的唯一ID
    * dbClassification  数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'version' => null,
        'charset' => null,
        'ip' => null,
        'port' => null,
        'os' => null,
        'status' => null,
        'instanceName' => null,
        'auditStatus' => null,
        'agentUrl' => null,
        'dbClassification' => null
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
    * name  数据库名称
    * type  添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
    * version  数据库版本
    * charset  数据库字符集
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统
    * status  开启状态（1：开启，0：关闭）
    * instanceName  数据库实例名
    * auditStatus  数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    * agentUrl  agent的唯一ID
    * dbClassification  数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'version' => 'version',
            'charset' => 'charset',
            'ip' => 'ip',
            'port' => 'port',
            'os' => 'os',
            'status' => 'status',
            'instanceName' => 'instance_name',
            'auditStatus' => 'audit_status',
            'agentUrl' => 'agent_url',
            'dbClassification' => 'db_classification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库ID
    * name  数据库名称
    * type  添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
    * version  数据库版本
    * charset  数据库字符集
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统
    * status  开启状态（1：开启，0：关闭）
    * instanceName  数据库实例名
    * auditStatus  数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    * agentUrl  agent的唯一ID
    * dbClassification  数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'version' => 'setVersion',
            'charset' => 'setCharset',
            'ip' => 'setIp',
            'port' => 'setPort',
            'os' => 'setOs',
            'status' => 'setStatus',
            'instanceName' => 'setInstanceName',
            'auditStatus' => 'setAuditStatus',
            'agentUrl' => 'setAgentUrl',
            'dbClassification' => 'setDbClassification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库ID
    * name  数据库名称
    * type  添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
    * version  数据库版本
    * charset  数据库字符集
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统
    * status  开启状态（1：开启，0：关闭）
    * instanceName  数据库实例名
    * auditStatus  数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    * agentUrl  agent的唯一ID
    * dbClassification  数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'version' => 'getVersion',
            'charset' => 'getCharset',
            'ip' => 'getIp',
            'port' => 'getPort',
            'os' => 'getOs',
            'status' => 'getStatus',
            'instanceName' => 'getInstanceName',
            'auditStatus' => 'getAuditStatus',
            'agentUrl' => 'getAgentUrl',
            'dbClassification' => 'getDbClassification'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['auditStatus'] = isset($data['auditStatus']) ? $data['auditStatus'] : null;
        $this->container['agentUrl'] = isset($data['agentUrl']) ? $data['agentUrl'] : null;
        $this->container['dbClassification'] = isset($data['dbClassification']) ? $data['dbClassification'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['charset'] === null) {
            $invalidProperties[] = "'charset' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['os'] === null) {
            $invalidProperties[] = "'os' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['dbClassification'] === null) {
            $invalidProperties[] = "'dbClassification' can't be null";
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
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 数据库ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  数据库名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 数据库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
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
    * @param string $type 添加的数据库类型： 枚举值：  MYSQL  ORACLE  POSTGRESQL  SQLSERVER  DAMENG  TAURUS  DWS  KINGBASE  GAUSSDBOPENGAUSS   GREENPLUM   HIGHGO   SHENTONG   GBASE8A   GBASE8S   GBASEXDM   MONGODB   DDS
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets charset
    *  数据库字符集
    *
    * @return string
    */
    public function getCharset()
    {
        return $this->container['charset'];
    }

    /**
    * Sets charset
    *
    * @param string $charset 数据库字符集
    *
    * @return $this
    */
    public function setCharset($charset)
    {
        $this->container['charset'] = $charset;
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
    * Gets os
    *  数据库操作系统
    *
    * @return string
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string $os 数据库操作系统
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets status
    *  开启状态（1：开启，0：关闭）
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 开启状态（1：开启，0：关闭）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets instanceName
    *  数据库实例名
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
    * @param string $instanceName 数据库实例名
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets auditStatus
    *  数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    *
    * @return string|null
    */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
    * Sets auditStatus
    *
    * @param string|null $auditStatus 数据库的运行状态 枚举值：  ACTIVE  SHUTOFF  ERROR
    *
    * @return $this
    */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;
        return $this;
    }

    /**
    * Gets agentUrl
    *  agent的唯一ID
    *
    * @return string[]|null
    */
    public function getAgentUrl()
    {
        return $this->container['agentUrl'];
    }

    /**
    * Sets agentUrl
    *
    * @param string[]|null $agentUrl agent的唯一ID
    *
    * @return $this
    */
    public function setAgentUrl($agentUrl)
    {
        $this->container['agentUrl'] = $agentUrl;
        return $this;
    }

    /**
    * Gets dbClassification
    *  数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @return string
    */
    public function getDbClassification()
    {
        return $this->container['dbClassification'];
    }

    /**
    * Sets dbClassification
    *
    * @param string $dbClassification 数据库分类，取值范围： RDS（表示RDS数据库）和 ECS（自建数据库）
    *
    * @return $this
    */
    public function setDbClassification($dbClassification)
    {
        $this->container['dbClassification'] = $dbClassification;
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

