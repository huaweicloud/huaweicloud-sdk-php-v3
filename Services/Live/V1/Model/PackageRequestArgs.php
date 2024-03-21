<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageRequestArgs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageRequestArgs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * record  录制播放相关配置
    * timeshift  时移播放相关配置
    * live  直播播放相关配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'record' => '\HuaweiCloud\SDK\Live\V1\Model\RecordRequestArgs[]',
            'timeshift' => '\HuaweiCloud\SDK\Live\V1\Model\TimeshiftRequestArgs[]',
            'live' => '\HuaweiCloud\SDK\Live\V1\Model\LiveRequestArgs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * record  录制播放相关配置
    * timeshift  时移播放相关配置
    * live  直播播放相关配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'record' => null,
        'timeshift' => null,
        'live' => null
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
    * record  录制播放相关配置
    * timeshift  时移播放相关配置
    * live  直播播放相关配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'record' => 'record',
            'timeshift' => 'timeshift',
            'live' => 'live'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * record  录制播放相关配置
    * timeshift  时移播放相关配置
    * live  直播播放相关配置
    *
    * @var string[]
    */
    protected static $setters = [
            'record' => 'setRecord',
            'timeshift' => 'setTimeshift',
            'live' => 'setLive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * record  录制播放相关配置
    * timeshift  时移播放相关配置
    * live  直播播放相关配置
    *
    * @var string[]
    */
    protected static $getters = [
            'record' => 'getRecord',
            'timeshift' => 'getTimeshift',
            'live' => 'getLive'
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
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
        $this->container['timeshift'] = isset($data['timeshift']) ? $data['timeshift'] : null;
        $this->container['live'] = isset($data['live']) ? $data['live'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets record
    *  录制播放相关配置
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\RecordRequestArgs[]|null
    */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
    * Sets record
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\RecordRequestArgs[]|null $record 录制播放相关配置
    *
    * @return $this
    */
    public function setRecord($record)
    {
        $this->container['record'] = $record;
        return $this;
    }

    /**
    * Gets timeshift
    *  时移播放相关配置
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\TimeshiftRequestArgs[]|null
    */
    public function getTimeshift()
    {
        return $this->container['timeshift'];
    }

    /**
    * Sets timeshift
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\TimeshiftRequestArgs[]|null $timeshift 时移播放相关配置
    *
    * @return $this
    */
    public function setTimeshift($timeshift)
    {
        $this->container['timeshift'] = $timeshift;
        return $this;
    }

    /**
    * Gets live
    *  直播播放相关配置
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\LiveRequestArgs[]|null
    */
    public function getLive()
    {
        return $this->container['live'];
    }

    /**
    * Sets live
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\LiveRequestArgs[]|null $live 直播播放相关配置
    *
    * @return $this
    */
    public function setLive($live)
    {
        $this->container['live'] = $live;
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

