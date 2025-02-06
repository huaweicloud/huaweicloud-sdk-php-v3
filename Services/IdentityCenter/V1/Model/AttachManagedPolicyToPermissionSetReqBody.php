<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachManagedPolicyToPermissionSetReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachManagedPolicyToPermissionSetReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managedPolicyId  IAM系统身份策略唯一标识
    * managedPolicyName  IAM系统身份策略名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managedPolicyId' => 'string',
            'managedPolicyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managedPolicyId  IAM系统身份策略唯一标识
    * managedPolicyName  IAM系统身份策略名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managedPolicyId' => null,
        'managedPolicyName' => null
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
    * managedPolicyId  IAM系统身份策略唯一标识
    * managedPolicyName  IAM系统身份策略名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managedPolicyId' => 'managed_policy_id',
            'managedPolicyName' => 'managed_policy_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managedPolicyId  IAM系统身份策略唯一标识
    * managedPolicyName  IAM系统身份策略名称
    *
    * @var string[]
    */
    protected static $setters = [
            'managedPolicyId' => 'setManagedPolicyId',
            'managedPolicyName' => 'setManagedPolicyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managedPolicyId  IAM系统身份策略唯一标识
    * managedPolicyName  IAM系统身份策略名称
    *
    * @var string[]
    */
    protected static $getters = [
            'managedPolicyId' => 'getManagedPolicyId',
            'managedPolicyName' => 'getManagedPolicyName'
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
        $this->container['managedPolicyId'] = isset($data['managedPolicyId']) ? $data['managedPolicyId'] : null;
        $this->container['managedPolicyName'] = isset($data['managedPolicyName']) ? $data['managedPolicyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['managedPolicyId'] === null) {
            $invalidProperties[] = "'managedPolicyId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['managedPolicyId'])) {
                $invalidProperties[] = "invalid value for 'managedPolicyId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            if (!is_null($this->container['managedPolicyName']) && (mb_strlen($this->container['managedPolicyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedPolicyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedPolicyName']) && (mb_strlen($this->container['managedPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managedPolicyName']) && !preg_match("/^[\\w+=_.@-]+$/", $this->container['managedPolicyName'])) {
                $invalidProperties[] = "invalid value for 'managedPolicyName', must be conform to the pattern /^[\\w+=_.@-]+$/.";
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
    * Gets managedPolicyId
    *  IAM系统身份策略唯一标识
    *
    * @return string
    */
    public function getManagedPolicyId()
    {
        return $this->container['managedPolicyId'];
    }

    /**
    * Sets managedPolicyId
    *
    * @param string $managedPolicyId IAM系统身份策略唯一标识
    *
    * @return $this
    */
    public function setManagedPolicyId($managedPolicyId)
    {
        $this->container['managedPolicyId'] = $managedPolicyId;
        return $this;
    }

    /**
    * Gets managedPolicyName
    *  IAM系统身份策略名称
    *
    * @return string|null
    */
    public function getManagedPolicyName()
    {
        return $this->container['managedPolicyName'];
    }

    /**
    * Sets managedPolicyName
    *
    * @param string|null $managedPolicyName IAM系统身份策略名称
    *
    * @return $this
    */
    public function setManagedPolicyName($managedPolicyName)
    {
        $this->container['managedPolicyName'] = $managedPolicyName;
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

