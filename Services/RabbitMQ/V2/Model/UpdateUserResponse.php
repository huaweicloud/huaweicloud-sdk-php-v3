<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateUserResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateUserResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKey  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * secretKey  **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    * vhosts  **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKey' => 'string',
            'secretKey' => 'string',
            'vhosts' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\AMQPUserPerm[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKey  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * secretKey  **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    * vhosts  **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKey' => null,
        'secretKey' => null,
        'vhosts' => null
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
    * accessKey  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * secretKey  **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    * vhosts  **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'vhosts' => 'vhosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKey  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * secretKey  **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    * vhosts  **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'vhosts' => 'setVhosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKey  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * secretKey  **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    * vhosts  **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'vhosts' => 'getVhosts'
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
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['vhosts'] = isset($data['vhosts']) ? $data['vhosts'] : null;
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
    *  **参数解释**： 用户名。 **取值范围**： 不涉及。
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
    * @param string|null $accessKey **参数解释**： 用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets secretKey
    *  **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    *
    * @return string|null
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string|null $secretKey **参数解释**： 密钥。 **取值范围**： - 8-32个字符。 - 至少包含以下字符中的3种：    - 大写字母    - 小写字母    - 数字    - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?。 - 不能与名称或倒序的名称相同。
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets vhosts
    *  **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\AMQPUserPerm[]|null
    */
    public function getVhosts()
    {
        return $this->container['vhosts'];
    }

    /**
    * Sets vhosts
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\AMQPUserPerm[]|null $vhosts **参数解释**： 需要配置权限的Vhost，一个用户可以配置多个Vhost下的资源权限。
    *
    * @return $this
    */
    public function setVhosts($vhosts)
    {
        $this->container['vhosts'] = $vhosts;
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

