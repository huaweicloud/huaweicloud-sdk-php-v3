<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OBSTriggerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OBSTriggerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS桶名（trigger_type为OBS时配置）
    * events  OBS事件列表（trigger_type为OBS时配置）
    * prefix  对象名前缀（trigger_type为OBS时配置）
    * suffix  对象名后缀（trigger_type为OBS时配置）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'events' => 'string[]',
            'prefix' => 'string',
            'suffix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  OBS桶名（trigger_type为OBS时配置）
    * events  OBS事件列表（trigger_type为OBS时配置）
    * prefix  对象名前缀（trigger_type为OBS时配置）
    * suffix  对象名后缀（trigger_type为OBS时配置）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'events' => null,
        'prefix' => null,
        'suffix' => null
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
    * bucket  OBS桶名（trigger_type为OBS时配置）
    * events  OBS事件列表（trigger_type为OBS时配置）
    * prefix  对象名前缀（trigger_type为OBS时配置）
    * suffix  对象名后缀（trigger_type为OBS时配置）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'events' => 'events',
            'prefix' => 'prefix',
            'suffix' => 'suffix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  OBS桶名（trigger_type为OBS时配置）
    * events  OBS事件列表（trigger_type为OBS时配置）
    * prefix  对象名前缀（trigger_type为OBS时配置）
    * suffix  对象名后缀（trigger_type为OBS时配置）
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'events' => 'setEvents',
            'prefix' => 'setPrefix',
            'suffix' => 'setSuffix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  OBS桶名（trigger_type为OBS时配置）
    * events  OBS事件列表（trigger_type为OBS时配置）
    * prefix  对象名前缀（trigger_type为OBS时配置）
    * suffix  对象名后缀（trigger_type为OBS时配置）
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'events' => 'getEvents',
            'prefix' => 'getPrefix',
            'suffix' => 'getSuffix'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
            if ((mb_strlen($this->container['bucket']) > 64)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
        }
        if ($this->container['prefix'] === null) {
            $invalidProperties[] = "'prefix' can't be null";
        }
            if ((mb_strlen($this->container['prefix']) > 64)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['prefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['suffix'] === null) {
            $invalidProperties[] = "'suffix' can't be null";
        }
            if ((mb_strlen($this->container['suffix']) > 64)) {
                $invalidProperties[] = "invalid value for 'suffix', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['suffix']) < 1)) {
                $invalidProperties[] = "invalid value for 'suffix', the character length must be bigger than or equal to 1.";
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
    * Gets bucket
    *  OBS桶名（trigger_type为OBS时配置）
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket OBS桶名（trigger_type为OBS时配置）
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets events
    *  OBS事件列表（trigger_type为OBS时配置）
    *
    * @return string[]
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string[] $events OBS事件列表（trigger_type为OBS时配置）
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets prefix
    *  对象名前缀（trigger_type为OBS时配置）
    *
    * @return string
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string $prefix 对象名前缀（trigger_type为OBS时配置）
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets suffix
    *  对象名后缀（trigger_type为OBS时配置）
    *
    * @return string
    */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
    * Sets suffix
    *
    * @param string $suffix 对象名后缀（trigger_type为OBS时配置）
    *
    * @return $this
    */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;
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

