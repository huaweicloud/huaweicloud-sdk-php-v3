<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'User';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKey  用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
    * secretKey  密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * defaultTopicPerm  默认的主题权限。
    * defaultGroupPerm  默认的消费组权限。
    * topicPerms  特殊的主题权限。
    * groupPerms  特殊的消费组权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKey' => 'string',
            'secretKey' => 'string',
            'whiteRemoteAddress' => 'string',
            'admin' => 'bool',
            'defaultTopicPerm' => 'string',
            'defaultGroupPerm' => 'string',
            'topicPerms' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\UserTopicPerms[]',
            'groupPerms' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\UserGroupPerms[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKey  用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
    * secretKey  密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * defaultTopicPerm  默认的主题权限。
    * defaultGroupPerm  默认的消费组权限。
    * topicPerms  特殊的主题权限。
    * groupPerms  特殊的消费组权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKey' => null,
        'secretKey' => null,
        'whiteRemoteAddress' => null,
        'admin' => null,
        'defaultTopicPerm' => null,
        'defaultGroupPerm' => null,
        'topicPerms' => null,
        'groupPerms' => null
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
    * accessKey  用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
    * secretKey  密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * defaultTopicPerm  默认的主题权限。
    * defaultGroupPerm  默认的消费组权限。
    * topicPerms  特殊的主题权限。
    * groupPerms  特殊的消费组权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKey' => 'access_key',
            'secretKey' => 'secret_key',
            'whiteRemoteAddress' => 'white_remote_address',
            'admin' => 'admin',
            'defaultTopicPerm' => 'default_topic_perm',
            'defaultGroupPerm' => 'default_group_perm',
            'topicPerms' => 'topic_perms',
            'groupPerms' => 'group_perms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKey  用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
    * secretKey  密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * defaultTopicPerm  默认的主题权限。
    * defaultGroupPerm  默认的消费组权限。
    * topicPerms  特殊的主题权限。
    * groupPerms  特殊的消费组权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKey' => 'setAccessKey',
            'secretKey' => 'setSecretKey',
            'whiteRemoteAddress' => 'setWhiteRemoteAddress',
            'admin' => 'setAdmin',
            'defaultTopicPerm' => 'setDefaultTopicPerm',
            'defaultGroupPerm' => 'setDefaultGroupPerm',
            'topicPerms' => 'setTopicPerms',
            'groupPerms' => 'setGroupPerms'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKey  用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
    * secretKey  密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
    * whiteRemoteAddress  IP白名单。
    * admin  是否为管理员。
    * defaultTopicPerm  默认的主题权限。
    * defaultGroupPerm  默认的消费组权限。
    * topicPerms  特殊的主题权限。
    * groupPerms  特殊的消费组权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKey' => 'getAccessKey',
            'secretKey' => 'getSecretKey',
            'whiteRemoteAddress' => 'getWhiteRemoteAddress',
            'admin' => 'getAdmin',
            'defaultTopicPerm' => 'getDefaultTopicPerm',
            'defaultGroupPerm' => 'getDefaultGroupPerm',
            'topicPerms' => 'getTopicPerms',
            'groupPerms' => 'getGroupPerms'
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
    const DEFAULT_TOPIC_PERM_PUB = 'PUB';
    const DEFAULT_TOPIC_PERM_SUB = 'SUB';
    const DEFAULT_TOPIC_PERM_PUB_SUB = 'PUB|SUB';
    const DEFAULT_TOPIC_PERM_DENY = 'DENY';
    const DEFAULT_GROUP_PERM_SUB = 'SUB';
    const DEFAULT_GROUP_PERM_DENY = 'DENY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefaultTopicPermAllowableValues()
    {
        return [
            self::DEFAULT_TOPIC_PERM_PUB,
            self::DEFAULT_TOPIC_PERM_SUB,
            self::DEFAULT_TOPIC_PERM_PUB_SUB,
            self::DEFAULT_TOPIC_PERM_DENY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefaultGroupPermAllowableValues()
    {
        return [
            self::DEFAULT_GROUP_PERM_SUB,
            self::DEFAULT_GROUP_PERM_DENY,
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
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['whiteRemoteAddress'] = isset($data['whiteRemoteAddress']) ? $data['whiteRemoteAddress'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['defaultTopicPerm'] = isset($data['defaultTopicPerm']) ? $data['defaultTopicPerm'] : null;
        $this->container['defaultGroupPerm'] = isset($data['defaultGroupPerm']) ? $data['defaultGroupPerm'] : null;
        $this->container['topicPerms'] = isset($data['topicPerms']) ? $data['topicPerms'] : null;
        $this->container['groupPerms'] = isset($data['groupPerms']) ? $data['groupPerms'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDefaultTopicPermAllowableValues();
                if (!is_null($this->container['defaultTopicPerm']) && !in_array($this->container['defaultTopicPerm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultTopicPerm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDefaultGroupPermAllowableValues();
                if (!is_null($this->container['defaultGroupPerm']) && !in_array($this->container['defaultGroupPerm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultGroupPerm', must be one of '%s'",
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
    * Gets accessKey
    *  用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
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
    * @param string|null $accessKey 用户名，只能英文字母开头，且由英文字母、数字、中划线、下划线组成，长度为7~64个字符。
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
    *  密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
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
    * @param string|null $secretKey 密钥。 8-32个字符。 至少包含以下字符中的3种：   - 大写字母   - 小写字母   - 数字   - 特殊字符`~!@#$%^&*()-_=+\\\\|[{}];:\\'\\\",<.>/?密钥。 不能与名称或倒序的名称相同。
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets whiteRemoteAddress
    *  IP白名单。
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
    * @param string|null $whiteRemoteAddress IP白名单。
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
    *  是否为管理员。
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
    * @param bool|null $admin 是否为管理员。
    *
    * @return $this
    */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;
        return $this;
    }

    /**
    * Gets defaultTopicPerm
    *  默认的主题权限。
    *
    * @return string|null
    */
    public function getDefaultTopicPerm()
    {
        return $this->container['defaultTopicPerm'];
    }

    /**
    * Sets defaultTopicPerm
    *
    * @param string|null $defaultTopicPerm 默认的主题权限。
    *
    * @return $this
    */
    public function setDefaultTopicPerm($defaultTopicPerm)
    {
        $this->container['defaultTopicPerm'] = $defaultTopicPerm;
        return $this;
    }

    /**
    * Gets defaultGroupPerm
    *  默认的消费组权限。
    *
    * @return string|null
    */
    public function getDefaultGroupPerm()
    {
        return $this->container['defaultGroupPerm'];
    }

    /**
    * Sets defaultGroupPerm
    *
    * @param string|null $defaultGroupPerm 默认的消费组权限。
    *
    * @return $this
    */
    public function setDefaultGroupPerm($defaultGroupPerm)
    {
        $this->container['defaultGroupPerm'] = $defaultGroupPerm;
        return $this;
    }

    /**
    * Gets topicPerms
    *  特殊的主题权限。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\UserTopicPerms[]|null
    */
    public function getTopicPerms()
    {
        return $this->container['topicPerms'];
    }

    /**
    * Sets topicPerms
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\UserTopicPerms[]|null $topicPerms 特殊的主题权限。
    *
    * @return $this
    */
    public function setTopicPerms($topicPerms)
    {
        $this->container['topicPerms'] = $topicPerms;
        return $this;
    }

    /**
    * Gets groupPerms
    *  特殊的消费组权限。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\UserGroupPerms[]|null
    */
    public function getGroupPerms()
    {
        return $this->container['groupPerms'];
    }

    /**
    * Sets groupPerms
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\UserGroupPerms[]|null $groupPerms 特殊的消费组权限。
    *
    * @return $this
    */
    public function setGroupPerms($groupPerms)
    {
        $this->container['groupPerms'] = $groupPerms;
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

