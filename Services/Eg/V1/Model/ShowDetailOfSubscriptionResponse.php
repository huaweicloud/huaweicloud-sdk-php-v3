<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailOfSubscriptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailOfSubscriptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅ID
    * name  订阅名称
    * description  订阅描述
    * type  类型
    * status  状态
    * channelId  通道ID
    * channelName  通道名称
    * used  标签信息
    * sources  订阅源列表
    * targets  订阅目标列表
    * createdTime  创建时间
    * updatedTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'status' => 'string',
            'channelId' => 'string',
            'channelName' => 'string',
            'used' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionUsedInfo[]',
            'sources' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSourceInfo[]',
            'targets' => '\HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTargetInfo[]',
            'createdTime' => 'string',
            'updatedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅ID
    * name  订阅名称
    * description  订阅描述
    * type  类型
    * status  状态
    * channelId  通道ID
    * channelName  通道名称
    * used  标签信息
    * sources  订阅源列表
    * targets  订阅目标列表
    * createdTime  创建时间
    * updatedTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'status' => null,
        'channelId' => null,
        'channelName' => null,
        'used' => null,
        'sources' => null,
        'targets' => null,
        'createdTime' => null,
        'updatedTime' => null
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
    * id  订阅ID
    * name  订阅名称
    * description  订阅描述
    * type  类型
    * status  状态
    * channelId  通道ID
    * channelName  通道名称
    * used  标签信息
    * sources  订阅源列表
    * targets  订阅目标列表
    * createdTime  创建时间
    * updatedTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'status' => 'status',
            'channelId' => 'channel_id',
            'channelName' => 'channel_name',
            'used' => 'used',
            'sources' => 'sources',
            'targets' => 'targets',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅ID
    * name  订阅名称
    * description  订阅描述
    * type  类型
    * status  状态
    * channelId  通道ID
    * channelName  通道名称
    * used  标签信息
    * sources  订阅源列表
    * targets  订阅目标列表
    * createdTime  创建时间
    * updatedTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'status' => 'setStatus',
            'channelId' => 'setChannelId',
            'channelName' => 'setChannelName',
            'used' => 'setUsed',
            'sources' => 'setSources',
            'targets' => 'setTargets',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅ID
    * name  订阅名称
    * description  订阅描述
    * type  类型
    * status  状态
    * channelId  通道ID
    * channelName  通道名称
    * used  标签信息
    * sources  订阅源列表
    * targets  订阅目标列表
    * createdTime  创建时间
    * updatedTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'status' => 'getStatus',
            'channelId' => 'getChannelId',
            'channelName' => 'getChannelName',
            'used' => 'getUsed',
            'sources' => 'getSources',
            'targets' => 'getTargets',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime'
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
    const TYPE_EVENT = 'EVENT';
    const TYPE_SCHEDULED = 'SCHEDULED';
    const STATUS_CREATED = 'CREATED';
    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EVENT,
            self::TYPE_SCHEDULED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
            self::STATUS_FROZEN,
            self::STATUS_ERROR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  订阅ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 订阅ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  订阅名称
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
    * @param string|null $name 订阅名称
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
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets channelId
    *  通道ID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId 通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets channelName
    *  通道名称
    *
    * @return string|null
    */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
    * Sets channelName
    *
    * @param string|null $channelName 通道名称
    *
    * @return $this
    */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;
        return $this;
    }

    /**
    * Gets used
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionUsedInfo[]|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionUsedInfo[]|null $used 标签信息
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets sources
    *  订阅源列表
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSourceInfo[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionSourceInfo[]|null $sources 订阅源列表
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
    *  订阅目标列表
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTargetInfo[]|null
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\SubscriptionTargetInfo[]|null $targets 订阅目标列表
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

