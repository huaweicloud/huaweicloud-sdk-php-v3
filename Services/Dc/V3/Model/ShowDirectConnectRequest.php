<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDirectConnectRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDirectConnectRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * directConnectId  物理专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'directConnectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'fields' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * directConnectId  物理专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'directConnectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'fields' => null
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
    * directConnectId  物理专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'directConnectId' => 'direct_connect_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * directConnectId  物理专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    *
    * @var string[]
    */
    protected static $setters = [
            'directConnectId' => 'setDirectConnectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * directConnectId  物理专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    *
    * @var string[]
    */
    protected static $getters = [
            'directConnectId' => 'getDirectConnectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'fields' => 'getFields'
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
        $this->container['directConnectId'] = isset($data['directConnectId']) ? $data['directConnectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['directConnectId'] === null) {
            $invalidProperties[] = "'directConnectId' can't be null";
        }
            if ((mb_strlen($this->container['directConnectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'directConnectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['directConnectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'directConnectId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['directConnectId'])) {
                $invalidProperties[] = "invalid value for 'directConnectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
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
    * Gets directConnectId
    *  物理专线连接ID。
    *
    * @return string
    */
    public function getDirectConnectId()
    {
        return $this->container['directConnectId'];
    }

    /**
    * Sets directConnectId
    *
    * @param string $directConnectId 物理专线连接ID。
    *
    * @return $this
    */
    public function setDirectConnectId($directConnectId)
    {
        $this->container['directConnectId'] = $directConnectId;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数。 取值范围：1~2000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~2000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets fields
    *  显示字段列表
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
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

