<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccessPolicyRespPolicies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccessPolicyResp_policies';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKey  **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * whiteRemoteAddress  **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * admin  **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    * perm  **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKey' => 'string',
            'whiteRemoteAddress' => 'string',
            'admin' => 'bool',
            'perm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKey  **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * whiteRemoteAddress  **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * admin  **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    * perm  **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKey' => null,
        'whiteRemoteAddress' => null,
        'admin' => null,
        'perm' => null
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
    * accessKey  **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * whiteRemoteAddress  **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * admin  **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    * perm  **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKey' => 'access_key',
            'whiteRemoteAddress' => 'white_remote_address',
            'admin' => 'admin',
            'perm' => 'perm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKey  **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * whiteRemoteAddress  **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * admin  **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    * perm  **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKey' => 'setAccessKey',
            'whiteRemoteAddress' => 'setWhiteRemoteAddress',
            'admin' => 'setAdmin',
            'perm' => 'setPerm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKey  **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * whiteRemoteAddress  **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * admin  **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    * perm  **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKey' => 'getAccessKey',
            'whiteRemoteAddress' => 'getWhiteRemoteAddress',
            'admin' => 'getAdmin',
            'perm' => 'getPerm'
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
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['whiteRemoteAddress'] = isset($data['whiteRemoteAddress']) ? $data['whiteRemoteAddress'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['perm'] = isset($data['perm']) ? $data['perm'] : null;
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
    * Gets accessKey
    *  **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string|null $accessKey **参数解释**： 用户名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets whiteRemoteAddress
    *  **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getWhiteRemoteAddress()
    {
        return $this->container['whiteRemoteAddress'];
    }

    /**
    * Sets whiteRemoteAddress
    *
    * @param string|null $whiteRemoteAddress **参数解释**： IP白名单。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setWhiteRemoteAddress($whiteRemoteAddress)
    {
        $this->container['whiteRemoteAddress'] = $whiteRemoteAddress;
        return $this;
    }

    /**
    * Gets admin
    *  **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
    * Sets admin
    *
    * @param bool|null $admin **参数解释**： 是否为管理员。 **约束限制**： 不涉及。 **取值范围**： - true：是管理员。 - false：不是管理员。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;
        return $this;
    }

    /**
    * Gets perm
    *  **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPerm()
    {
        return $this->container['perm'];
    }

    /**
    * Sets perm
    *
    * @param string|null $perm **参数解释**： 用户权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPerm($perm)
    {
        $this->container['perm'] = $perm;
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

