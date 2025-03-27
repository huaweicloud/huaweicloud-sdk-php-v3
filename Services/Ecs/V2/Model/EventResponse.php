<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件ID
    * type  事件类型
    * state  事件状态
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  事件计划执行开始时间
    * notAfter  事件计划执行完成时间
    * notBeforeDeadline  事件计划执行开始时间deadline
    * description  事件描述
    * instanceId  实例ID
    * executeOptions  executeOptions
    * source  source
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'state' => 'string',
            'publishTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'notBefore' => 'string',
            'notAfter' => 'string',
            'notBeforeDeadline' => 'string',
            'description' => 'string',
            'instanceId' => 'string',
            'executeOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\EventResponseExecuteOptions',
            'source' => '\HuaweiCloud\SDK\Ecs\V2\Model\EventResponseSource'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件ID
    * type  事件类型
    * state  事件状态
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  事件计划执行开始时间
    * notAfter  事件计划执行完成时间
    * notBeforeDeadline  事件计划执行开始时间deadline
    * description  事件描述
    * instanceId  实例ID
    * executeOptions  executeOptions
    * source  source
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'state' => null,
        'publishTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'notBefore' => null,
        'notAfter' => null,
        'notBeforeDeadline' => null,
        'description' => null,
        'instanceId' => null,
        'executeOptions' => null,
        'source' => null
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
    * id  事件ID
    * type  事件类型
    * state  事件状态
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  事件计划执行开始时间
    * notAfter  事件计划执行完成时间
    * notBeforeDeadline  事件计划执行开始时间deadline
    * description  事件描述
    * instanceId  实例ID
    * executeOptions  executeOptions
    * source  source
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'state' => 'state',
            'publishTime' => 'publish_time',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'notBefore' => 'not_before',
            'notAfter' => 'not_after',
            'notBeforeDeadline' => 'not_before_deadline',
            'description' => 'description',
            'instanceId' => 'instance_id',
            'executeOptions' => 'execute_options',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件ID
    * type  事件类型
    * state  事件状态
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  事件计划执行开始时间
    * notAfter  事件计划执行完成时间
    * notBeforeDeadline  事件计划执行开始时间deadline
    * description  事件描述
    * instanceId  实例ID
    * executeOptions  executeOptions
    * source  source
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'state' => 'setState',
            'publishTime' => 'setPublishTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'notBefore' => 'setNotBefore',
            'notAfter' => 'setNotAfter',
            'notBeforeDeadline' => 'setNotBeforeDeadline',
            'description' => 'setDescription',
            'instanceId' => 'setInstanceId',
            'executeOptions' => 'setExecuteOptions',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件ID
    * type  事件类型
    * state  事件状态
    * publishTime  事件发布时间
    * startTime  事件开始时间
    * finishTime  事件完成时间
    * notBefore  事件计划执行开始时间
    * notAfter  事件计划执行完成时间
    * notBeforeDeadline  事件计划执行开始时间deadline
    * description  事件描述
    * instanceId  实例ID
    * executeOptions  executeOptions
    * source  source
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'state' => 'getState',
            'publishTime' => 'getPublishTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'notBefore' => 'getNotBefore',
            'notAfter' => 'getNotAfter',
            'notBeforeDeadline' => 'getNotBeforeDeadline',
            'description' => 'getDescription',
            'instanceId' => 'getInstanceId',
            'executeOptions' => 'getExecuteOptions',
            'source' => 'getSource'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['notBeforeDeadline'] = isset($data['notBeforeDeadline']) ? $data['notBeforeDeadline'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['executeOptions'] = isset($data['executeOptions']) ? $data['executeOptions'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    *  事件ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 事件ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  事件类型
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
    * @param string|null $type 事件类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets state
    *  事件状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 事件状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets publishTime
    *  事件发布时间
    *
    * @return string|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param string|null $publishTime 事件发布时间
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets startTime
    *  事件开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 事件开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  事件完成时间
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 事件完成时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets notBefore
    *  事件计划执行开始时间
    *
    * @return string|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param string|null $notBefore 事件计划执行开始时间
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets notAfter
    *  事件计划执行完成时间
    *
    * @return string|null
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param string|null $notAfter 事件计划执行完成时间
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets notBeforeDeadline
    *  事件计划执行开始时间deadline
    *
    * @return string|null
    */
    public function getNotBeforeDeadline()
    {
        return $this->container['notBeforeDeadline'];
    }

    /**
    * Sets notBeforeDeadline
    *
    * @param string|null $notBeforeDeadline 事件计划执行开始时间deadline
    *
    * @return $this
    */
    public function setNotBeforeDeadline($notBeforeDeadline)
    {
        $this->container['notBeforeDeadline'] = $notBeforeDeadline;
        return $this;
    }

    /**
    * Gets description
    *  事件描述
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
    * @param string|null $description 事件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets executeOptions
    *  executeOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\EventResponseExecuteOptions|null
    */
    public function getExecuteOptions()
    {
        return $this->container['executeOptions'];
    }

    /**
    * Sets executeOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\EventResponseExecuteOptions|null $executeOptions executeOptions
    *
    * @return $this
    */
    public function setExecuteOptions($executeOptions)
    {
        $this->container['executeOptions'] = $executeOptions;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\EventResponseSource|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\EventResponseSource|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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

