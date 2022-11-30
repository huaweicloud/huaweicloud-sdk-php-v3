<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteStreamForbiddenRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteStreamForbiddenRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  推流域名
    * appName  RTMP应用名称
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'streamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  推流域名
    * appName  RTMP应用名称
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'streamName' => null
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
    * domain  推流域名
    * appName  RTMP应用名称
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'streamName' => 'stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  推流域名
    * appName  RTMP应用名称
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'streamName' => 'setStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  推流域名
    * appName  RTMP应用名称
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'streamName' => 'getStreamName'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['streamName'] === null) {
            $invalidProperties[] = "'streamName' can't be null";
        }
            if ((mb_strlen($this->container['streamName']) > 128)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['streamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 1.";
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
    * Gets domain
    *  推流域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  RTMP应用名称
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName RTMP应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets streamName
    *  流名称
    *
    * @return string
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string $streamName 流名称
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
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

