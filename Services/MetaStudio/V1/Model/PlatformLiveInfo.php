<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlatformLiveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlatformLiveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * platformId  直播平台ID。
    * liveId  直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'platformId' => 'string',
            'liveId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * platformId  直播平台ID。
    * liveId  直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'platformId' => null,
        'liveId' => null
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
    * platformId  直播平台ID。
    * liveId  直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'platformId' => 'platform_id',
            'liveId' => 'live_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * platformId  直播平台ID。
    * liveId  直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @var string[]
    */
    protected static $setters = [
            'platformId' => 'setPlatformId',
            'liveId' => 'setLiveId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * platformId  直播平台ID。
    * liveId  直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @var string[]
    */
    protected static $getters = [
            'platformId' => 'getPlatformId',
            'liveId' => 'getLiveId'
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
        $this->container['platformId'] = isset($data['platformId']) ? $data['platformId'] : null;
        $this->container['liveId'] = isset($data['liveId']) ? $data['liveId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['platformId'] === null) {
            $invalidProperties[] = "'platformId' can't be null";
        }
            if ((mb_strlen($this->container['platformId']) > 64)) {
                $invalidProperties[] = "invalid value for 'platformId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['platformId']) < 0)) {
                $invalidProperties[] = "invalid value for 'platformId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['liveId'] === null) {
            $invalidProperties[] = "'liveId' can't be null";
        }
            if ((mb_strlen($this->container['liveId']) > 64)) {
                $invalidProperties[] = "invalid value for 'liveId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['liveId']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^([a-zA-Z0-9_-]+)?$/", $this->container['liveId'])) {
                $invalidProperties[] = "invalid value for 'liveId', must be conform to the pattern /^([a-zA-Z0-9_-]+)?$/.";
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
    * Gets platformId
    *  直播平台ID。
    *
    * @return string
    */
    public function getPlatformId()
    {
        return $this->container['platformId'];
    }

    /**
    * Sets platformId
    *
    * @param string $platformId 直播平台ID。
    *
    * @return $this
    */
    public function setPlatformId($platformId)
    {
        $this->container['platformId'] = $platformId;
        return $this;
    }

    /**
    * Gets liveId
    *  直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @return string
    */
    public function getLiveId()
    {
        return $this->container['liveId'];
    }

    /**
    * Sets liveId
    *
    * @param string $liveId 直播ID。如果配置，则段落切换回调中会携带该信息。只能包含英文、数字、-、_。 美团对应liveId
    *
    * @return $this
    */
    public function setLiveId($liveId)
    {
        $this->container['liveId'] = $liveId;
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

