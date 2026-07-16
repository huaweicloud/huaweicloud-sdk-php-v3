<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowAsset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowAsset';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资产名称。
    * type  资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    * contentId  资产ID，可在AI Gallery中获取。
    * subscriptionId  订阅ID，可在AI Gallery中获取。
    * expiredAt  超期时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'contentId' => 'string',
            'subscriptionId' => 'string',
            'expiredAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资产名称。
    * type  资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    * contentId  资产ID，可在AI Gallery中获取。
    * subscriptionId  订阅ID，可在AI Gallery中获取。
    * expiredAt  超期时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'contentId' => null,
        'subscriptionId' => null,
        'expiredAt' => null
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
    * name  资产名称。
    * type  资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    * contentId  资产ID，可在AI Gallery中获取。
    * subscriptionId  订阅ID，可在AI Gallery中获取。
    * expiredAt  超期时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'contentId' => 'content_id',
            'subscriptionId' => 'subscription_id',
            'expiredAt' => 'expired_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资产名称。
    * type  资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    * contentId  资产ID，可在AI Gallery中获取。
    * subscriptionId  订阅ID，可在AI Gallery中获取。
    * expiredAt  超期时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'contentId' => 'setContentId',
            'subscriptionId' => 'setSubscriptionId',
            'expiredAt' => 'setExpiredAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资产名称。
    * type  资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    * contentId  资产ID，可在AI Gallery中获取。
    * subscriptionId  订阅ID，可在AI Gallery中获取。
    * expiredAt  超期时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'contentId' => 'getContentId',
            'subscriptionId' => 'getSubscriptionId',
            'expiredAt' => 'getExpiredAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['contentId'] = isset($data['contentId']) ? $data['contentId'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
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
    * Gets name
    *  资产名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资产名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资产类型，枚举如下: - algorithm：算法 - algorithm2：新算法 - model：模型算法
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets contentId
    *  资产ID，可在AI Gallery中获取。
    *
    * @return string|null
    */
    public function getContentId()
    {
        return $this->container['contentId'];
    }

    /**
    * Sets contentId
    *
    * @param string|null $contentId 资产ID，可在AI Gallery中获取。
    *
    * @return $this
    */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  订阅ID，可在AI Gallery中获取。
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId 订阅ID，可在AI Gallery中获取。
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets expiredAt
    *  超期时间。
    *
    * @return string|null
    */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
    * Sets expiredAt
    *
    * @param string|null $expiredAt 超期时间。
    *
    * @return $this
    */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;
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

