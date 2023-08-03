<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDataConnectorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDataConnectorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectorId  连接id
    * sourceType  数据源类别
    * connectorName  数据连接名称
    * limit  每页返回的资源个数
    * offset  分页查询起始偏移量
    * available  数据连接是否有效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectorId' => 'string',
            'sourceType' => 'string',
            'connectorName' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'available' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectorId  连接id
    * sourceType  数据源类别
    * connectorName  数据连接名称
    * limit  每页返回的资源个数
    * offset  分页查询起始偏移量
    * available  数据连接是否有效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectorId' => null,
        'sourceType' => null,
        'connectorName' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'available' => null
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
    * connectorId  连接id
    * sourceType  数据源类别
    * connectorName  数据连接名称
    * limit  每页返回的资源个数
    * offset  分页查询起始偏移量
    * available  数据连接是否有效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectorId' => 'connector_id',
            'sourceType' => 'source_type',
            'connectorName' => 'connector_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'available' => 'available'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectorId  连接id
    * sourceType  数据源类别
    * connectorName  数据连接名称
    * limit  每页返回的资源个数
    * offset  分页查询起始偏移量
    * available  数据连接是否有效
    *
    * @var string[]
    */
    protected static $setters = [
            'connectorId' => 'setConnectorId',
            'sourceType' => 'setSourceType',
            'connectorName' => 'setConnectorName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'available' => 'setAvailable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectorId  连接id
    * sourceType  数据源类别
    * connectorName  数据连接名称
    * limit  每页返回的资源个数
    * offset  分页查询起始偏移量
    * available  数据连接是否有效
    *
    * @var string[]
    */
    protected static $getters = [
            'connectorId' => 'getConnectorId',
            'sourceType' => 'getSourceType',
            'connectorName' => 'getConnectorName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'available' => 'getAvailable'
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
        $this->container['connectorId'] = isset($data['connectorId']) ? $data['connectorId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['connectorName'] = isset($data['connectorName']) ? $data['connectorName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['connectorId']) && (mb_strlen($this->container['connectorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['connectorId']) && (mb_strlen($this->container['connectorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['connectorId']) && !preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['connectorId'])) {
                $invalidProperties[] = "invalid value for 'connectorId', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceType']) && !preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['sourceType'])) {
                $invalidProperties[] = "invalid value for 'sourceType', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
            if (!is_null($this->container['connectorName']) && !preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['connectorName'])) {
                $invalidProperties[] = "invalid value for 'connectorName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets connectorId
    *  连接id
    *
    * @return string|null
    */
    public function getConnectorId()
    {
        return $this->container['connectorId'];
    }

    /**
    * Sets connectorId
    *
    * @param string|null $connectorId 连接id
    *
    * @return $this
    */
    public function setConnectorId($connectorId)
    {
        $this->container['connectorId'] = $connectorId;
        return $this;
    }

    /**
    * Gets sourceType
    *  数据源类别
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 数据源类别
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets connectorName
    *  数据连接名称
    *
    * @return string|null
    */
    public function getConnectorName()
    {
        return $this->container['connectorName'];
    }

    /**
    * Sets connectorName
    *
    * @param string|null $connectorName 数据连接名称
    *
    * @return $this
    */
    public function setConnectorName($connectorName)
    {
        $this->container['connectorName'] = $connectorName;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的资源个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的资源个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页查询起始偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets available
    *  数据连接是否有效
    *
    * @return bool|null
    */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
    * Sets available
    *
    * @param bool|null $available 数据连接是否有效
    *
    * @return $this
    */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;
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

