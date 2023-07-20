<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Topics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Topics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主题名称
    * topicUrn  Topic的唯一的资源标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'topicUrn' => 'string',
            'displayName' => 'string',
            'pushPolicy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主题名称
    * topicUrn  Topic的唯一的资源标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'topicUrn' => null,
        'displayName' => null,
        'pushPolicy' => 'int32'
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
    * name  主题名称
    * topicUrn  Topic的唯一的资源标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'topicUrn' => 'topic_urn',
            'displayName' => 'display_name',
            'pushPolicy' => 'push_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主题名称
    * topicUrn  Topic的唯一的资源标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'topicUrn' => 'setTopicUrn',
            'displayName' => 'setDisplayName',
            'pushPolicy' => 'setPushPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主题名称
    * topicUrn  Topic的唯一的资源标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'topicUrn' => 'getTopicUrn',
            'displayName' => 'getDisplayName',
            'pushPolicy' => 'getPushPolicy'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['pushPolicy'] = isset($data['pushPolicy']) ? $data['pushPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
            if ((mb_strlen($this->container['topicUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['topicUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pushPolicy']) && ($this->container['pushPolicy'] > 13)) {
                $invalidProperties[] = "invalid value for 'pushPolicy', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['pushPolicy']) && ($this->container['pushPolicy'] < 0)) {
                $invalidProperties[] = "invalid value for 'pushPolicy', must be bigger than or equal to 0.";
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
    *  主题名称
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
    * @param string $name 主题名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets topicUrn
    *  Topic的唯一的资源标识。
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
    * @param string $topicUrn Topic的唯一的资源标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets displayName
    *  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName Topic的显示名，推送邮件消息时，作为邮件发件人显示
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets pushPolicy
    *  消息推送的策略
    *
    * @return int|null
    */
    public function getPushPolicy()
    {
        return $this->container['pushPolicy'];
    }

    /**
    * Sets pushPolicy
    *
    * @param int|null $pushPolicy 消息推送的策略
    *
    * @return $this
    */
    public function setPushPolicy($pushPolicy)
    {
        $this->container['pushPolicy'] = $pushPolicy;
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

