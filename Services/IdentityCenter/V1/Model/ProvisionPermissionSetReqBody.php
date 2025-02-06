<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProvisionPermissionSetReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProvisionPermissionSetReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetId  账号ID
    * targetType  创建绑定的实体类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetId' => 'string',
            'targetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetId  账号ID
    * targetType  创建绑定的实体类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetId' => null,
        'targetType' => null
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
    * targetId  账号ID
    * targetType  创建绑定的实体类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetId' => 'target_id',
            'targetType' => 'target_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetId  账号ID
    * targetType  创建绑定的实体类型
    *
    * @var string[]
    */
    protected static $setters = [
            'targetId' => 'setTargetId',
            'targetType' => 'setTargetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetId  账号ID
    * targetType  创建绑定的实体类型
    *
    * @var string[]
    */
    protected static $getters = [
            'targetId' => 'getTargetId',
            'targetType' => 'getTargetType'
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
    const TARGET_TYPE_ACCOUNT = 'ACCOUNT';
    const TARGET_TYPE_ALL_PROVISIONED_ACCOUNTS = 'ALL_PROVISIONED_ACCOUNTS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_ACCOUNT,
            self::TARGET_TYPE_ALL_PROVISIONED_ACCOUNTS,
        ];
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
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['targetId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['targetId'])) {
                $invalidProperties[] = "invalid value for 'targetId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['targetType'] === null) {
            $invalidProperties[] = "'targetType' can't be null";
        }
            $allowedValues = $this->getTargetTypeAllowableValues();
                if (!is_null($this->container['targetType']) && !in_array($this->container['targetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets targetId
    *  账号ID
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 账号ID
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets targetType
    *  创建绑定的实体类型
    *
    * @return string
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string $targetType 创建绑定的实体类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
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

