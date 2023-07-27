<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTopicOrBatchDeleteTopicReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTopicOrBatchDeleteTopicReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理。
    * queueNum  队列数，范围1~50。
    * permission  权限。
    * topics  主题列表，当批量删除主题时使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'brokers' => 'string[]',
            'queueNum' => 'float',
            'permission' => 'string',
            'topics' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理。
    * queueNum  队列数，范围1~50。
    * permission  权限。
    * topics  主题列表，当批量删除主题时使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'brokers' => null,
        'queueNum' => null,
        'permission' => null,
        'topics' => null
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
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理。
    * queueNum  队列数，范围1~50。
    * permission  权限。
    * topics  主题列表，当批量删除主题时使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'brokers' => 'brokers',
            'queueNum' => 'queue_num',
            'permission' => 'permission',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理。
    * queueNum  队列数，范围1~50。
    * permission  权限。
    * topics  主题列表，当批量删除主题时使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'brokers' => 'setBrokers',
            'queueNum' => 'setQueueNum',
            'permission' => 'setPermission',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    * brokers  关联的代理。
    * queueNum  队列数，范围1~50。
    * permission  权限。
    * topics  主题列表，当批量删除主题时使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'brokers' => 'getBrokers',
            'queueNum' => 'getQueueNum',
            'permission' => 'getPermission',
            'topics' => 'getTopics'
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
    const PERMISSION_SUB = 'sub';
    const PERMISSION_PUB = 'pub';
    const PERMISSION_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionAllowableValues()
    {
        return [
            self::PERMISSION_SUB,
            self::PERMISSION_PUB,
            self::PERMISSION_ALL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['queueNum'] = isset($data['queueNum']) ? $data['queueNum'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : 'all';
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPermissionAllowableValues();
                if (!is_null($this->container['permission']) && !in_array($this->container['permission'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permission', must be one of '%s'",
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
    * Gets name
    *  主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
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
    * @param string|null $name 主题名称，只能由英文字母、数字、百分号、竖线、中划线、下划线组成，长度3~64个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets brokers
    *  关联的代理。
    *
    * @return string[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param string[]|null $brokers 关联的代理。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets queueNum
    *  队列数，范围1~50。
    *
    * @return float|null
    */
    public function getQueueNum()
    {
        return $this->container['queueNum'];
    }

    /**
    * Sets queueNum
    *
    * @param float|null $queueNum 队列数，范围1~50。
    *
    * @return $this
    */
    public function setQueueNum($queueNum)
    {
        $this->container['queueNum'] = $queueNum;
        return $this;
    }

    /**
    * Gets permission
    *  权限。
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission 权限。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets topics
    *  主题列表，当批量删除主题时使用。
    *
    * @return string[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param string[]|null $topics 主题列表，当批量删除主题时使用。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
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

