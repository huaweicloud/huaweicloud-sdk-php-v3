<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListDcDevicesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListDcDevicesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  总记录数
    * pageInfo  pageInfo
    * devices  每页记录数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'pageInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\PageInfoDTO',
            'devices' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\QueryDcDeviceRespDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  总记录数
    * pageInfo  pageInfo
    * devices  每页记录数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'pageInfo' => null,
        'devices' => null
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
    * count  总记录数
    * pageInfo  pageInfo
    * devices  每页记录数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'pageInfo' => 'page_info',
            'devices' => 'devices'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  总记录数
    * pageInfo  pageInfo
    * devices  每页记录数
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'pageInfo' => 'setPageInfo',
            'devices' => 'setDevices'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  总记录数
    * pageInfo  pageInfo
    * devices  每页记录数
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'pageInfo' => 'getPageInfo',
            'devices' => 'getDevices'
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
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['devices'] = isset($data['devices']) ? $data['devices'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    *  总记录数
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
    * @param int|null $count 总记录数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\PageInfoDTO|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\PageInfoDTO|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
        return $this;
    }

    /**
    * Gets devices
    *  每页记录数
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\QueryDcDeviceRespDTO[]|null
    */
    public function getDevices()
    {
        return $this->container['devices'];
    }

    /**
    * Sets devices
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\QueryDcDeviceRespDTO[]|null $devices 每页记录数
    *
    * @return $this
    */
    public function setDevices($devices)
    {
        $this->container['devices'] = $devices;
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

