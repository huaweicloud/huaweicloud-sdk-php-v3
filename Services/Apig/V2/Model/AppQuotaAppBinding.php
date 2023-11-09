<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppQuotaAppBinding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppQuotaAppBinding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appQuotaId  凭据配额编号
    * appId  凭据编号
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appQuotaId' => 'string',
            'appId' => 'string',
            'boundTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appQuotaId  凭据配额编号
    * appId  凭据编号
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appQuotaId' => null,
        'appId' => null,
        'boundTime' => 'date-time'
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
    * appQuotaId  凭据配额编号
    * appId  凭据编号
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appQuotaId' => 'app_quota_id',
            'appId' => 'app_id',
            'boundTime' => 'bound_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appQuotaId  凭据配额编号
    * appId  凭据编号
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $setters = [
            'appQuotaId' => 'setAppQuotaId',
            'appId' => 'setAppId',
            'boundTime' => 'setBoundTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appQuotaId  凭据配额编号
    * appId  凭据编号
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $getters = [
            'appQuotaId' => 'getAppQuotaId',
            'appId' => 'getAppId',
            'boundTime' => 'getBoundTime'
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
        $this->container['appQuotaId'] = isset($data['appQuotaId']) ? $data['appQuotaId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['boundTime'] = isset($data['boundTime']) ? $data['boundTime'] : null;
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
    * Gets appQuotaId
    *  凭据配额编号
    *
    * @return string|null
    */
    public function getAppQuotaId()
    {
        return $this->container['appQuotaId'];
    }

    /**
    * Sets appQuotaId
    *
    * @param string|null $appQuotaId 凭据配额编号
    *
    * @return $this
    */
    public function setAppQuotaId($appQuotaId)
    {
        $this->container['appQuotaId'] = $appQuotaId;
        return $this;
    }

    /**
    * Gets appId
    *  凭据编号
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 凭据编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets boundTime
    *  绑定时间
    *
    * @return \DateTime|null
    */
    public function getBoundTime()
    {
        return $this->container['boundTime'];
    }

    /**
    * Sets boundTime
    *
    * @param \DateTime|null $boundTime 绑定时间
    *
    * @return $this
    */
    public function setBoundTime($boundTime)
    {
        $this->container['boundTime'] = $boundTime;
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

