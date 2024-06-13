<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemediationException implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemediationException';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID。
    * message  加入合规规则修正例外的原因。
    * joinedAt  加入合规规则修正例外的时间。
    * createdBy  合规规则修正例外的创建者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'message' => 'string',
            'joinedAt' => 'string',
            'createdBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID。
    * message  加入合规规则修正例外的原因。
    * joinedAt  加入合规规则修正例外的时间。
    * createdBy  合规规则修正例外的创建者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'message' => null,
        'joinedAt' => null,
        'createdBy' => null
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
    * resourceId  资源ID。
    * message  加入合规规则修正例外的原因。
    * joinedAt  加入合规规则修正例外的时间。
    * createdBy  合规规则修正例外的创建者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'message' => 'message',
            'joinedAt' => 'joined_at',
            'createdBy' => 'created_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID。
    * message  加入合规规则修正例外的原因。
    * joinedAt  加入合规规则修正例外的时间。
    * createdBy  合规规则修正例外的创建者。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'message' => 'setMessage',
            'joinedAt' => 'setJoinedAt',
            'createdBy' => 'setCreatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID。
    * message  加入合规规则修正例外的原因。
    * joinedAt  加入合规规则修正例外的时间。
    * createdBy  合规规则修正例外的创建者。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'message' => 'getMessage',
            'joinedAt' => 'getJoinedAt',
            'createdBy' => 'getCreatedBy'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['joinedAt'] = isset($data['joinedAt']) ? $data['joinedAt'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 512)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/[_.:\\w-]+/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[_.:\\w-]+/.";
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
    * Gets resourceId
    *  资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets message
    *  加入合规规则修正例外的原因。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 加入合规规则修正例外的原因。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets joinedAt
    *  加入合规规则修正例外的时间。
    *
    * @return string|null
    */
    public function getJoinedAt()
    {
        return $this->container['joinedAt'];
    }

    /**
    * Sets joinedAt
    *
    * @param string|null $joinedAt 加入合规规则修正例外的时间。
    *
    * @return $this
    */
    public function setJoinedAt($joinedAt)
    {
        $this->container['joinedAt'] = $joinedAt;
        return $this;
    }

    /**
    * Gets createdBy
    *  合规规则修正例外的创建者。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 合规规则修正例外的创建者。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
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

