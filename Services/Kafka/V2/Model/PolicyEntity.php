<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  是否为创建Topic时所选择的用户。
    * userName  用户名。
    * accessPolicy  权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'bool',
            'userName' => 'string',
            'accessPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  是否为创建Topic时所选择的用户。
    * userName  用户名。
    * accessPolicy  权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'userName' => null,
        'accessPolicy' => null
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
    * owner  是否为创建Topic时所选择的用户。
    * userName  用户名。
    * accessPolicy  权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'userName' => 'user_name',
            'accessPolicy' => 'access_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  是否为创建Topic时所选择的用户。
    * userName  用户名。
    * accessPolicy  权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'userName' => 'setUserName',
            'accessPolicy' => 'setAccessPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  是否为创建Topic时所选择的用户。
    * userName  用户名。
    * accessPolicy  权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'userName' => 'getUserName',
            'accessPolicy' => 'getAccessPolicy'
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
    const ACCESS_POLICY_ALL = 'all';
    const ACCESS_POLICY_PUB = 'pub';
    const ACCESS_POLICY_SUB = 'sub';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessPolicyAllowableValues()
    {
        return [
            self::ACCESS_POLICY_ALL,
            self::ACCESS_POLICY_PUB,
            self::ACCESS_POLICY_SUB,
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['accessPolicy'] = isset($data['accessPolicy']) ? $data['accessPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAccessPolicyAllowableValues();
                if (!is_null($this->container['accessPolicy']) && !in_array($this->container['accessPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessPolicy', must be one of '%s'",
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
    * Gets owner
    *  是否为创建Topic时所选择的用户。
    *
    * @return bool|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param bool|null $owner 是否为创建Topic时所选择的用户。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets userName
    *  用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets accessPolicy
    *  权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @return string|null
    */
    public function getAccessPolicy()
    {
        return $this->container['accessPolicy'];
    }

    /**
    * Sets accessPolicy
    *
    * @param string|null $accessPolicy 权限类型。 - all：拥有发布、订阅权限; - pub：拥有发布权限; - sub：拥有订阅权限。
    *
    * @return $this
    */
    public function setAccessPolicy($accessPolicy)
    {
        $this->container['accessPolicy'] = $accessPolicy;
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

