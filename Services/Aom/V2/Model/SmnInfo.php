<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * smnNotifiedContent  smn发送消息的内容
    * smnSubscriptionStatus  smn的订阅的状态
    * smnSubscriptionType  smn的订阅类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'smnNotifiedContent' => 'string',
            'smnSubscriptionStatus' => 'int',
            'smnSubscriptionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * smnNotifiedContent  smn发送消息的内容
    * smnSubscriptionStatus  smn的订阅的状态
    * smnSubscriptionType  smn的订阅类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'smnNotifiedContent' => null,
        'smnSubscriptionStatus' => 'int32',
        'smnSubscriptionType' => null
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
    * smnNotifiedContent  smn发送消息的内容
    * smnSubscriptionStatus  smn的订阅的状态
    * smnSubscriptionType  smn的订阅类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'smnNotifiedContent' => 'smn_notified_content',
            'smnSubscriptionStatus' => 'smn_subscription_status',
            'smnSubscriptionType' => 'smn_subscription_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * smnNotifiedContent  smn发送消息的内容
    * smnSubscriptionStatus  smn的订阅的状态
    * smnSubscriptionType  smn的订阅类型
    *
    * @var string[]
    */
    protected static $setters = [
            'smnNotifiedContent' => 'setSmnNotifiedContent',
            'smnSubscriptionStatus' => 'setSmnSubscriptionStatus',
            'smnSubscriptionType' => 'setSmnSubscriptionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * smnNotifiedContent  smn发送消息的内容
    * smnSubscriptionStatus  smn的订阅的状态
    * smnSubscriptionType  smn的订阅类型
    *
    * @var string[]
    */
    protected static $getters = [
            'smnNotifiedContent' => 'getSmnNotifiedContent',
            'smnSubscriptionStatus' => 'getSmnSubscriptionStatus',
            'smnSubscriptionType' => 'getSmnSubscriptionType'
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
        $this->container['smnNotifiedContent'] = isset($data['smnNotifiedContent']) ? $data['smnNotifiedContent'] : null;
        $this->container['smnSubscriptionStatus'] = isset($data['smnSubscriptionStatus']) ? $data['smnSubscriptionStatus'] : null;
        $this->container['smnSubscriptionType'] = isset($data['smnSubscriptionType']) ? $data['smnSubscriptionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['smnNotifiedContent']) && (mb_strlen($this->container['smnNotifiedContent']) > 9999999)) {
                $invalidProperties[] = "invalid value for 'smnNotifiedContent', the character length must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['smnNotifiedContent']) && (mb_strlen($this->container['smnNotifiedContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'smnNotifiedContent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['smnSubscriptionType']) && (mb_strlen($this->container['smnSubscriptionType']) > 100)) {
                $invalidProperties[] = "invalid value for 'smnSubscriptionType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['smnSubscriptionType']) && (mb_strlen($this->container['smnSubscriptionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'smnSubscriptionType', the character length must be bigger than or equal to 1.";
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
    * Gets smnNotifiedContent
    *  smn发送消息的内容
    *
    * @return string|null
    */
    public function getSmnNotifiedContent()
    {
        return $this->container['smnNotifiedContent'];
    }

    /**
    * Sets smnNotifiedContent
    *
    * @param string|null $smnNotifiedContent smn发送消息的内容
    *
    * @return $this
    */
    public function setSmnNotifiedContent($smnNotifiedContent)
    {
        $this->container['smnNotifiedContent'] = $smnNotifiedContent;
        return $this;
    }

    /**
    * Gets smnSubscriptionStatus
    *  smn的订阅的状态
    *
    * @return int|null
    */
    public function getSmnSubscriptionStatus()
    {
        return $this->container['smnSubscriptionStatus'];
    }

    /**
    * Sets smnSubscriptionStatus
    *
    * @param int|null $smnSubscriptionStatus smn的订阅的状态
    *
    * @return $this
    */
    public function setSmnSubscriptionStatus($smnSubscriptionStatus)
    {
        $this->container['smnSubscriptionStatus'] = $smnSubscriptionStatus;
        return $this;
    }

    /**
    * Gets smnSubscriptionType
    *  smn的订阅类型
    *
    * @return string|null
    */
    public function getSmnSubscriptionType()
    {
        return $this->container['smnSubscriptionType'];
    }

    /**
    * Sets smnSubscriptionType
    *
    * @param string|null $smnSubscriptionType smn的订阅类型
    *
    * @return $this
    */
    public function setSmnSubscriptionType($smnSubscriptionType)
    {
        $this->container['smnSubscriptionType'] = $smnSubscriptionType;
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

