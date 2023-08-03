<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataConnector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataConnector';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectorName' => 'string',
            'sourceType' => 'string',
            'sourceInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectorName' => null,
        'sourceType' => null,
        'sourceInfo' => null
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
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectorName' => 'connector_name',
            'sourceType' => 'source_type',
            'sourceInfo' => 'source_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @var string[]
    */
    protected static $setters = [
            'connectorName' => 'setConnectorName',
            'sourceType' => 'setSourceType',
            'sourceInfo' => 'setSourceInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @var string[]
    */
    protected static $getters = [
            'connectorName' => 'getConnectorName',
            'sourceType' => 'getSourceType',
            'sourceInfo' => 'getSourceInfo'
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
    const SOURCE_TYPE_RDS_MYSQL = 'RDS_MYSQL';
    const SOURCE_TYPE_RDS_POSTGRES = 'RDS_POSTGRES';
    const SOURCE_TYPE_GAUSSDB_MYSQL = 'gaussdb-mysql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_RDS_MYSQL,
            self::SOURCE_TYPE_RDS_POSTGRES,
            self::SOURCE_TYPE_GAUSSDB_MYSQL,
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
        $this->container['connectorName'] = isset($data['connectorName']) ? $data['connectorName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceInfo'] = isset($data['sourceInfo']) ? $data['sourceInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectorName'] === null) {
            $invalidProperties[] = "'connectorName' can't be null";
        }
            if ((mb_strlen($this->container['connectorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectorName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['connectorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectorName', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['connectorName'])) {
                $invalidProperties[] = "invalid value for 'connectorName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sourceInfo'] === null) {
            $invalidProperties[] = "'sourceInfo' can't be null";
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
    * Gets connectorName
    *  数据连接名称。
    *
    * @return string
    */
    public function getConnectorName()
    {
        return $this->container['connectorName'];
    }

    /**
    * Sets connectorName
    *
    * @param string $connectorName 数据连接名称。
    *
    * @return $this
    */
    public function setConnectorName($connectorName)
    {
        $this->container['connectorName'] = $connectorName;
        return $this;
    }

    /**
    * Gets sourceType
    *  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    *
    * @return string
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string $sourceType 数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceInfo
    *  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @return string
    */
    public function getSourceInfo()
    {
        return $this->container['sourceInfo'];
    }

    /**
    * Sets sourceInfo
    *
    * @param string $sourceInfo 数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @return $this
    */
    public function setSourceInfo($sourceInfo)
    {
        $this->container['sourceInfo'] = $sourceInfo;
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

