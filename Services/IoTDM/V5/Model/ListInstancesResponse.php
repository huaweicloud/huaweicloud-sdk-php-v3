<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  **参数说明**：设备接入实例的总数。
    * marker  **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * instances  **参数说明**：设备接入实例的详情列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'marker' => 'string',
            'instances' => '\HuaweiCloud\SDK\IoTDM\V5\Model\QueryInstanceSimplify[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  **参数说明**：设备接入实例的总数。
    * marker  **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * instances  **参数说明**：设备接入实例的详情列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'marker' => null,
        'instances' => null
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
    * count  **参数说明**：设备接入实例的总数。
    * marker  **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * instances  **参数说明**：设备接入实例的详情列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'marker' => 'marker',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  **参数说明**：设备接入实例的总数。
    * marker  **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * instances  **参数说明**：设备接入实例的详情列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'marker' => 'setMarker',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  **参数说明**：设备接入实例的总数。
    * marker  **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * instances  **参数说明**：设备接入实例的详情列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'marker' => 'getMarker',
            'instances' => 'getInstances'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 10000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 20)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 20.";
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
    * Gets count
    *  **参数说明**：设备接入实例的总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数说明**：设备接入实例的总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets marker
    *  **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
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
    * @param string|null $marker **参数说明**：本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets instances
    *  **参数说明**：设备接入实例的详情列表。
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\QueryInstanceSimplify[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\QueryInstanceSimplify[]|null $instances **参数说明**：设备接入实例的详情列表。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

