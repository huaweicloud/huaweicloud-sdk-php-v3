<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveJobLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveJobLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * interactionRecordsUrl  直播互动记录文件地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'interactionRecordsUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * interactionRecordsUrl  直播互动记录文件地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'interactionRecordsUrl' => null
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
    * interactionRecordsUrl  直播互动记录文件地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'interactionRecordsUrl' => 'interaction_records_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * interactionRecordsUrl  直播互动记录文件地址
    *
    * @var string[]
    */
    protected static $setters = [
            'interactionRecordsUrl' => 'setInteractionRecordsUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * interactionRecordsUrl  直播互动记录文件地址
    *
    * @var string[]
    */
    protected static $getters = [
            'interactionRecordsUrl' => 'getInteractionRecordsUrl'
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
        $this->container['interactionRecordsUrl'] = isset($data['interactionRecordsUrl']) ? $data['interactionRecordsUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['interactionRecordsUrl']) && (mb_strlen($this->container['interactionRecordsUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'interactionRecordsUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['interactionRecordsUrl']) && (mb_strlen($this->container['interactionRecordsUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'interactionRecordsUrl', the character length must be bigger than or equal to 0.";
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
    * Gets interactionRecordsUrl
    *  直播互动记录文件地址
    *
    * @return string|null
    */
    public function getInteractionRecordsUrl()
    {
        return $this->container['interactionRecordsUrl'];
    }

    /**
    * Sets interactionRecordsUrl
    *
    * @param string|null $interactionRecordsUrl 直播互动记录文件地址
    *
    * @return $this
    */
    public function setInteractionRecordsUrl($interactionRecordsUrl)
    {
        $this->container['interactionRecordsUrl'] = $interactionRecordsUrl;
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

