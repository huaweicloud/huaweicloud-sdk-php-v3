<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDatabaseRequestDatabase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDatabaseRequest_database';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbClassification  数据库分类 - ECS:自建数据库
    * name  数据库名称
    * type  数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
    * version  数据库版本
    * charset  字符集。 - GBK - UTF8
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
    * instanceName  数据库实例名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbClassification' => 'string',
            'name' => 'string',
            'type' => 'string',
            'version' => 'string',
            'charset' => 'string',
            'ip' => 'string',
            'port' => 'string',
            'os' => 'string',
            'instanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbClassification  数据库分类 - ECS:自建数据库
    * name  数据库名称
    * type  数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
    * version  数据库版本
    * charset  字符集。 - GBK - UTF8
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
    * instanceName  数据库实例名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbClassification' => null,
        'name' => null,
        'type' => null,
        'version' => null,
        'charset' => null,
        'ip' => null,
        'port' => null,
        'os' => null,
        'instanceName' => null
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
    * dbClassification  数据库分类 - ECS:自建数据库
    * name  数据库名称
    * type  数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
    * version  数据库版本
    * charset  字符集。 - GBK - UTF8
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
    * instanceName  数据库实例名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbClassification' => 'db_classification',
            'name' => 'name',
            'type' => 'type',
            'version' => 'version',
            'charset' => 'charset',
            'ip' => 'ip',
            'port' => 'port',
            'os' => 'os',
            'instanceName' => 'instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbClassification  数据库分类 - ECS:自建数据库
    * name  数据库名称
    * type  数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
    * version  数据库版本
    * charset  字符集。 - GBK - UTF8
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
    * instanceName  数据库实例名称
    *
    * @var string[]
    */
    protected static $setters = [
            'dbClassification' => 'setDbClassification',
            'name' => 'setName',
            'type' => 'setType',
            'version' => 'setVersion',
            'charset' => 'setCharset',
            'ip' => 'setIp',
            'port' => 'setPort',
            'os' => 'setOs',
            'instanceName' => 'setInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbClassification  数据库分类 - ECS:自建数据库
    * name  数据库名称
    * type  数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
    * version  数据库版本
    * charset  字符集。 - GBK - UTF8
    * ip  数据库IP
    * port  数据库端口
    * os  数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
    * instanceName  数据库实例名称
    *
    * @var string[]
    */
    protected static $getters = [
            'dbClassification' => 'getDbClassification',
            'name' => 'getName',
            'type' => 'getType',
            'version' => 'getVersion',
            'charset' => 'getCharset',
            'ip' => 'getIp',
            'port' => 'getPort',
            'os' => 'getOs',
            'instanceName' => 'getInstanceName'
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
    const CHARSET_GBK = 'GBK';
    const CHARSET_UTF8 = 'UTF8';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCharsetAllowableValues()
    {
        return [
            self::CHARSET_GBK,
            self::CHARSET_UTF8,
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
        $this->container['dbClassification'] = isset($data['dbClassification']) ? $data['dbClassification'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['charset'] = isset($data['charset']) ? $data['charset'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbClassification'] === null) {
            $invalidProperties[] = "'dbClassification' can't be null";
        }
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
            $allowedValues = $this->getCharsetAllowableValues();
                if (!is_null($this->container['charset']) && !in_array($this->container['charset'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'charset', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dbClassification
    *  数据库分类 - ECS:自建数据库
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
    * @param string $dbClassification 数据库分类 - ECS:自建数据库
    *
    * @return $this
    */
    public function setDbClassification($dbClassification)
    {
        $this->container['dbClassification'] = $dbClassification;
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
    *  数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
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
    * @param string $type 数据库类型 - MYSQL - ORACLE - POSTGRESQL - SQLSERVER - DAMENG - TAURUS - DWS - KINGBASE - GAUSSDBOPENGAUSS - GREENPLUM - HIGHGO - SHENTONG - GBASE8A - GBASE8S - GBASEXDM - MONGODB - DDS
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
    *  字符集。 - GBK - UTF8
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
    * @param string $charset 字符集。 - GBK - UTF8
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
    *  数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
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
    * @param string $os 数据库操作系统 - LINUX64 - WINDOWS64 - UNIX
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets instanceName
    *  数据库实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 数据库实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
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

