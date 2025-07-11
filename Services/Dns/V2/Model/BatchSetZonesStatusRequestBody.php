<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSetZonesStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSetZonesStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  待设置域名状态，支持DISABLE或ENABLE。
    * zoneIds  待设置域名ID列表。 最多支持50个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'zoneIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  待设置域名状态，支持DISABLE或ENABLE。
    * zoneIds  待设置域名ID列表。 最多支持50个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'zoneIds' => null
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
    * status  待设置域名状态，支持DISABLE或ENABLE。
    * zoneIds  待设置域名ID列表。 最多支持50个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'zoneIds' => 'zone_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  待设置域名状态，支持DISABLE或ENABLE。
    * zoneIds  待设置域名ID列表。 最多支持50个。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'zoneIds' => 'setZoneIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  待设置域名状态，支持DISABLE或ENABLE。
    * zoneIds  待设置域名ID列表。 最多支持50个。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'zoneIds' => 'getZoneIds'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['zoneIds'] = isset($data['zoneIds']) ? $data['zoneIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if (!preg_match("/DISABLE|ENABLE/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /DISABLE|ENABLE/.";
            }
        if ($this->container['zoneIds'] === null) {
            $invalidProperties[] = "'zoneIds' can't be null";
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
    * Gets status
    *  待设置域名状态，支持DISABLE或ENABLE。
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
    * @param string $status 待设置域名状态，支持DISABLE或ENABLE。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets zoneIds
    *  待设置域名ID列表。 最多支持50个。
    *
    * @return string[]
    */
    public function getZoneIds()
    {
        return $this->container['zoneIds'];
    }

    /**
    * Sets zoneIds
    *
    * @param string[] $zoneIds 待设置域名ID列表。 最多支持50个。
    *
    * @return $this
    */
    public function setZoneIds($zoneIds)
    {
        $this->container['zoneIds'] = $zoneIds;
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

