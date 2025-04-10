<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetTwoFactorLoginConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetTwoFactorLoginConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否开启双因子认证
    * authType  认证类型 - sms ：短信邮件验证 - code ：验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题的唯一资源标识
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'authType' => 'string',
            'topicDisplayName' => 'string',
            'topicUrn' => 'string',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否开启双因子认证
    * authType  认证类型 - sms ：短信邮件验证 - code ：验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题的唯一资源标识
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'authType' => null,
        'topicDisplayName' => null,
        'topicUrn' => null,
        'hostIdList' => null
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
    * enabled  是否开启双因子认证
    * authType  认证类型 - sms ：短信邮件验证 - code ：验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题的唯一资源标识
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'authType' => 'auth_type',
            'topicDisplayName' => 'topic_display_name',
            'topicUrn' => 'topic_urn',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否开启双因子认证
    * authType  认证类型 - sms ：短信邮件验证 - code ：验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题的唯一资源标识
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'authType' => 'setAuthType',
            'topicDisplayName' => 'setTopicDisplayName',
            'topicUrn' => 'setTopicUrn',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否开启双因子认证
    * authType  认证类型 - sms ：短信邮件验证 - code ：验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题的唯一资源标识
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'authType' => 'getAuthType',
            'topicDisplayName' => 'getTopicDisplayName',
            'topicUrn' => 'getTopicUrn',
            'hostIdList' => 'getHostIdList'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['topicDisplayName'] = isset($data['topicDisplayName']) ? $data['topicDisplayName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
        }
            if ((mb_strlen($this->container['authType']) > 16)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['authType']) < 1)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^sms|code$/", $this->container['authType'])) {
                $invalidProperties[] = "invalid value for 'authType', must be conform to the pattern /^sms|code$/.";
            }
        if ($this->container['topicDisplayName'] === null) {
            $invalidProperties[] = "'topicDisplayName' can't be null";
        }
            if ((mb_strlen($this->container['topicDisplayName']) > 128)) {
                $invalidProperties[] = "invalid value for 'topicDisplayName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['topicDisplayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicDisplayName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topicUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['hostIdList'] === null) {
            $invalidProperties[] = "'hostIdList' can't be null";
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
    * Gets enabled
    *  是否开启双因子认证
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否开启双因子认证
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets authType
    *  认证类型 - sms ：短信邮件验证 - code ：验证码验证
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType 认证类型 - sms ：短信邮件验证 - code ：验证码验证
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets topicDisplayName
    *  主题别名
    *
    * @return string
    */
    public function getTopicDisplayName()
    {
        return $this->container['topicDisplayName'];
    }

    /**
    * Sets topicDisplayName
    *
    * @param string $topicDisplayName 主题别名
    *
    * @return $this
    */
    public function setTopicDisplayName($topicDisplayName)
    {
        $this->container['topicDisplayName'] = $topicDisplayName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题的唯一资源标识
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 主题的唯一资源标识
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets hostIdList
    *  服务器列表
    *
    * @return string[]
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[] $hostIdList 服务器列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

