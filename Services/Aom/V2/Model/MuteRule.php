<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MuteRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MuteRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * desc  规则描述
    * match  规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    * muteConfig  muteConfig
    * name  规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    * timezone  时区
    * updateTime  修改时间
    * userId  用户ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'desc' => 'string',
            'match' => '\HuaweiCloud\SDK\Aom\V2\Model\Match[][]',
            'muteConfig' => '\HuaweiCloud\SDK\Aom\V2\Model\MuteConfig',
            'name' => 'string',
            'timezone' => 'string',
            'updateTime' => 'int',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * desc  规则描述
    * match  规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    * muteConfig  muteConfig
    * name  规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    * timezone  时区
    * updateTime  修改时间
    * userId  用户ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'desc' => null,
        'match' => null,
        'muteConfig' => null,
        'name' => null,
        'timezone' => null,
        'updateTime' => 'int64',
        'userId' => null
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
    * createTime  创建时间
    * desc  规则描述
    * match  规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    * muteConfig  muteConfig
    * name  规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    * timezone  时区
    * updateTime  修改时间
    * userId  用户ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'desc' => 'desc',
            'match' => 'match',
            'muteConfig' => 'mute_config',
            'name' => 'name',
            'timezone' => 'timezone',
            'updateTime' => 'update_time',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * desc  规则描述
    * match  规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    * muteConfig  muteConfig
    * name  规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    * timezone  时区
    * updateTime  修改时间
    * userId  用户ID
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'desc' => 'setDesc',
            'match' => 'setMatch',
            'muteConfig' => 'setMuteConfig',
            'name' => 'setName',
            'timezone' => 'setTimezone',
            'updateTime' => 'setUpdateTime',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * desc  规则描述
    * match  规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    * muteConfig  muteConfig
    * name  规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    * timezone  时区
    * updateTime  修改时间
    * userId  用户ID
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'desc' => 'getDesc',
            'match' => 'getMatch',
            'muteConfig' => 'getMuteConfig',
            'name' => 'getName',
            'timezone' => 'getTimezone',
            'updateTime' => 'getUpdateTime',
            'userId' => 'getUserId'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['muteConfig'] = isset($data['muteConfig']) ? $data['muteConfig'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 1024)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['match'] === null) {
            $invalidProperties[] = "'match' can't be null";
        }
        if ($this->container['muteConfig'] === null) {
            $invalidProperties[] = "'muteConfig' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 100)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
            if ((mb_strlen($this->container['timezone']) > 32)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['timezone']) < 1)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 32.";
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
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets desc
    *  规则描述
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 规则描述
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets match
    *  规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\Match[][]
    */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
    * Sets match
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\Match[][] $match 规则的匹配条件。串行条件和并行条件的最大数量限制为10。
    *
    * @return $this
    */
    public function setMatch($match)
    {
        $this->container['match'] = $match;
        return $this;
    }

    /**
    * Gets muteConfig
    *  muteConfig
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MuteConfig
    */
    public function getMuteConfig()
    {
        return $this->container['muteConfig'];
    }

    /**
    * Sets muteConfig
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MuteConfig $muteConfig muteConfig
    *
    * @return $this
    */
    public function setMuteConfig($muteConfig)
    {
        $this->container['muteConfig'] = $muteConfig;
        return $this;
    }

    /**
    * Gets name
    *  规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 规则名称。名称包含大小写字母、数字、特殊字符（_）、不能以下划线开头或结尾，最大长度为100。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets timezone
    *  时区
    *
    * @return string
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string $timezone 时区
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

