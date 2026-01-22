<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetadataTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetadataTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * startDate  **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
    * type  **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'startDate' => 'string',
            'status' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * startDate  **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
    * type  **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'startDate' => null,
        'status' => null,
        'type' => null
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
    * id  **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * startDate  **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
    * type  **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'startDate' => 'start_date',
            'status' => 'status',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * startDate  **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
    * type  **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'startDate' => 'setStartDate',
            'status' => 'setStatus',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * startDate  **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * status  **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
    * type  **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'startDate' => 'getStartDate',
            'status' => 'getStatus',
            'type' => 'getType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets id
    *  **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $id **参数解释**： 元数据迁移任务ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 元数据迁移任务名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets startDate
    *  **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate **参数解释**： 元数据迁移任务开始时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
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
    * @param string|null $status **参数解释**： 元数据迁移任务状态。 **约束限制**： 不涉及。 **取值范围**： - creating：创建中。 - starting：迁移中。 - failed：迁移失败。 - finished：迁移完成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
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
    * @param string|null $type **参数解释**： 元数据迁移类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：从rocketmq迁移到rocketmq。 - rabbitToRocket：从rabbitmq迁移到rocketmq。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

