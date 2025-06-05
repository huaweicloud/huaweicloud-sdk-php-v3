<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  订阅描述
    * channelId  所属事件通道ID
    * sources  订阅的事件源列表， 当前仅支持订阅一个事件源
    * targets  事件目标列表，至少订阅一个事件目标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'channelId' => 'string',
            'sources' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSource[]',
            'targets' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTarget[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  订阅描述
    * channelId  所属事件通道ID
    * sources  订阅的事件源列表， 当前仅支持订阅一个事件源
    * targets  事件目标列表，至少订阅一个事件目标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'channelId' => null,
        'sources' => null,
        'targets' => null
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
    * name  订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  订阅描述
    * channelId  所属事件通道ID
    * sources  订阅的事件源列表， 当前仅支持订阅一个事件源
    * targets  事件目标列表，至少订阅一个事件目标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'channelId' => 'channel_id',
            'sources' => 'sources',
            'targets' => 'targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  订阅描述
    * channelId  所属事件通道ID
    * sources  订阅的事件源列表， 当前仅支持订阅一个事件源
    * targets  事件目标列表，至少订阅一个事件目标
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'channelId' => 'setChannelId',
            'sources' => 'setSources',
            'targets' => 'setTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    * description  订阅描述
    * channelId  所属事件通道ID
    * sources  订阅的事件源列表， 当前仅支持订阅一个事件源
    * targets  事件目标列表，至少订阅一个事件目标
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'channelId' => 'getChannelId',
            'sources' => 'getSources',
            'targets' => 'getTargets'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
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
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['channelId'] === null) {
            $invalidProperties[] = "'channelId' can't be null";
        }
        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
        }
        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
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
    *  订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
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
    * @param string $name 订阅名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须字母或数字开头
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  订阅描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 订阅描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets channelId
    *  所属事件通道ID
    *
    * @return string
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string $channelId 所属事件通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets sources
    *  订阅的事件源列表， 当前仅支持订阅一个事件源
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSource[]
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSource[] $sources 订阅的事件源列表， 当前仅支持订阅一个事件源
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets targets
    *  事件目标列表，至少订阅一个事件目标
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTarget[]
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTarget[] $targets 事件目标列表，至少订阅一个事件目标
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
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

