<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareCount  共享用户数
    * acceptCount  接受用户数
    * processStatus  处理状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareCount' => 'int',
            'acceptCount' => 'int',
            'processStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareCount  共享用户数
    * acceptCount  接受用户数
    * processStatus  处理状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareCount' => 'int32',
        'acceptCount' => 'int32',
        'processStatus' => 'int32'
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
    * shareCount  共享用户数
    * acceptCount  接受用户数
    * processStatus  处理状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareCount' => 'share_count',
            'acceptCount' => 'accept_count',
            'processStatus' => 'process_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareCount  共享用户数
    * acceptCount  接受用户数
    * processStatus  处理状态
    *
    * @var string[]
    */
    protected static $setters = [
            'shareCount' => 'setShareCount',
            'acceptCount' => 'setAcceptCount',
            'processStatus' => 'setProcessStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareCount  共享用户数
    * acceptCount  接受用户数
    * processStatus  处理状态
    *
    * @var string[]
    */
    protected static $getters = [
            'shareCount' => 'getShareCount',
            'acceptCount' => 'getAcceptCount',
            'processStatus' => 'getProcessStatus'
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
        $this->container['shareCount'] = isset($data['shareCount']) ? $data['shareCount'] : null;
        $this->container['acceptCount'] = isset($data['acceptCount']) ? $data['acceptCount'] : null;
        $this->container['processStatus'] = isset($data['processStatus']) ? $data['processStatus'] : null;
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
    * Gets shareCount
    *  共享用户数
    *
    * @return int|null
    */
    public function getShareCount()
    {
        return $this->container['shareCount'];
    }

    /**
    * Sets shareCount
    *
    * @param int|null $shareCount 共享用户数
    *
    * @return $this
    */
    public function setShareCount($shareCount)
    {
        $this->container['shareCount'] = $shareCount;
        return $this;
    }

    /**
    * Gets acceptCount
    *  接受用户数
    *
    * @return int|null
    */
    public function getAcceptCount()
    {
        return $this->container['acceptCount'];
    }

    /**
    * Sets acceptCount
    *
    * @param int|null $acceptCount 接受用户数
    *
    * @return $this
    */
    public function setAcceptCount($acceptCount)
    {
        $this->container['acceptCount'] = $acceptCount;
        return $this;
    }

    /**
    * Gets processStatus
    *  处理状态
    *
    * @return int|null
    */
    public function getProcessStatus()
    {
        return $this->container['processStatus'];
    }

    /**
    * Sets processStatus
    *
    * @param int|null $processStatus 处理状态
    *
    * @return $this
    */
    public function setProcessStatus($processStatus)
    {
        $this->container['processStatus'] = $processStatus;
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

