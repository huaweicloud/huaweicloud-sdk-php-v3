<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordControlInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordControlInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * app  应用名
    * stream  待启动或停止录制的流名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * app  应用名
    * stream  待启动或停止录制的流名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'app' => null,
        'stream' => null
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
    * publishDomain  直播推流域名
    * app  应用名
    * stream  待启动或停止录制的流名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  直播推流域名
    * app  应用名
    * stream  待启动或停止录制的流名
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  直播推流域名
    * app  应用名
    * stream  待启动或停止录制的流名
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream'
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publishDomain'] === null) {
            $invalidProperties[] = "'publishDomain' can't be null";
        }
            if ((mb_strlen($this->container['publishDomain']) > 256)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['stream'] === null) {
            $invalidProperties[] = "'stream' can't be null";
        }
            if ((mb_strlen($this->container['stream']) > 128)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
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
    * Gets publishDomain
    *  直播推流域名
    *
    * @return string
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string $publishDomain 直播推流域名
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets app
    *  应用名
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app 应用名
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets stream
    *  待启动或停止录制的流名
    *
    * @return string
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string $stream 待启动或停止录制的流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
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

