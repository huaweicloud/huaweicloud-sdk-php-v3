<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailOfEventSourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailOfEventSourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件源ID
    * name  事件源名称
    * label  事件源名称展示
    * description  事件源描述
    * providerType  事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    * eventTypes  事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * channelId  事件源归属的事件通道ID
    * channelName  事件源归属的事件通道名称
    * type  事件源类型
    * detail  json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    * status  自定义事件源状态
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'label' => 'string',
            'description' => 'string',
            'providerType' => 'string',
            'eventTypes' => '\HuaweiCloud\SDK\Eg\V1\Model\CustomizeSourceInfoEventTypes[]',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'channelId' => 'string',
            'channelName' => 'string',
            'type' => 'string',
            'detail' => 'object',
            'status' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件源ID
    * name  事件源名称
    * label  事件源名称展示
    * description  事件源描述
    * providerType  事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    * eventTypes  事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * channelId  事件源归属的事件通道ID
    * channelName  事件源归属的事件通道名称
    * type  事件源类型
    * detail  json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    * status  自定义事件源状态
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'label' => null,
        'description' => null,
        'providerType' => null,
        'eventTypes' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'channelId' => null,
        'channelName' => null,
        'type' => null,
        'detail' => null,
        'status' => null,
        'errorInfo' => null
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
    * id  事件源ID
    * name  事件源名称
    * label  事件源名称展示
    * description  事件源描述
    * providerType  事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    * eventTypes  事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * channelId  事件源归属的事件通道ID
    * channelName  事件源归属的事件通道名称
    * type  事件源类型
    * detail  json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    * status  自定义事件源状态
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'label' => 'label',
            'description' => 'description',
            'providerType' => 'provider_type',
            'eventTypes' => 'event_types',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'channelId' => 'channel_id',
            'channelName' => 'channel_name',
            'type' => 'type',
            'detail' => 'detail',
            'status' => 'status',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件源ID
    * name  事件源名称
    * label  事件源名称展示
    * description  事件源描述
    * providerType  事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    * eventTypes  事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * channelId  事件源归属的事件通道ID
    * channelName  事件源归属的事件通道名称
    * type  事件源类型
    * detail  json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    * status  自定义事件源状态
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'label' => 'setLabel',
            'description' => 'setDescription',
            'providerType' => 'setProviderType',
            'eventTypes' => 'setEventTypes',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'channelId' => 'setChannelId',
            'channelName' => 'setChannelName',
            'type' => 'setType',
            'detail' => 'setDetail',
            'status' => 'setStatus',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件源ID
    * name  事件源名称
    * label  事件源名称展示
    * description  事件源描述
    * providerType  事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    * eventTypes  事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * channelId  事件源归属的事件通道ID
    * channelName  事件源归属的事件通道名称
    * type  事件源类型
    * detail  json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    * status  自定义事件源状态
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'label' => 'getLabel',
            'description' => 'getDescription',
            'providerType' => 'getProviderType',
            'eventTypes' => 'getEventTypes',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'channelId' => 'getChannelId',
            'channelName' => 'getChannelName',
            'type' => 'getType',
            'detail' => 'getDetail',
            'status' => 'getStatus',
            'errorInfo' => 'getErrorInfo'
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
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    const PROVIDER_TYPE_PARTNER = 'PARTNER';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderTypeAllowableValues()
    {
        return [
            self::PROVIDER_TYPE_OFFICIAL,
            self::PROVIDER_TYPE_CUSTOM,
            self::PROVIDER_TYPE_PARTNER,
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
            self::STATUS_CREATE_FAILED,
            self::STATUS_RUNNING,
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProviderTypeAllowableValues();
                if (!is_null($this->container['providerType']) && !in_array($this->container['providerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerType', must be one of '%s'",
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
    *  事件源ID
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
    * @param string|null $id 事件源ID
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
    *  事件源名称
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
    * @param string|null $name 事件源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets label
    *  事件源名称展示
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 事件源名称展示
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets description
    *  事件源描述
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
    * @param string|null $description 事件源描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets providerType
    *  事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    *
    * @return string|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string|null $providerType 事件源提供方类型，OFFICIAL：官方云服务事件源；CUSTOM：用户创建的自定义事件源；PARTNER：伙伴事件源
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets eventTypes
    *  事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\CustomizeSourceInfoEventTypes[]|null
    */
    public function getEventTypes()
    {
        return $this->container['eventTypes'];
    }

    /**
    * Sets eventTypes
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\CustomizeSourceInfoEventTypes[]|null $eventTypes 事件源提供的事件类型列表，只有官方云服务事件源提供事件类型
    *
    * @return $this
    */
    public function setEventTypes($eventTypes)
    {
        $this->container['eventTypes'] = $eventTypes;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建UTC时间
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
    * @param string|null $createdTime 创建UTC时间
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
    *  更新UTC时间
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
    * @param string|null $updatedTime 更新UTC时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets channelId
    *  事件源归属的事件通道ID
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
    * @param string|null $channelId 事件源归属的事件通道ID
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
    *  事件源归属的事件通道名称
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
    * @param string|null $channelName 事件源归属的事件通道名称
    *
    * @return $this
    */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;
        return $this;
    }

    /**
    * Gets type
    *  事件源类型
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
    * @param string|null $type 事件源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets detail
    *  json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    *
    * @return object|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param object|null $detail json格式封装消息实例链接信息：如RabbitMQ实例的instance_id字段、虚拟主机vhost字段、队列queue字段、用户名、密码等
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets status
    *  自定义事件源状态
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
    * @param string|null $status 自定义事件源状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

