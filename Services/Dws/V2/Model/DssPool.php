<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DssPool implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DssPool';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    * status  **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    * createdAt  **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'projectId' => 'string',
            'availabilityZone' => 'string',
            'capacity' => 'int',
            'status' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    * status  **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    * createdAt  **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'projectId' => null,
        'availabilityZone' => null,
        'capacity' => null,
        'status' => null,
        'createdAt' => null
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
    * id  **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    * status  **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    * createdAt  **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'projectId' => 'project_id',
            'availabilityZone' => 'availability_zone',
            'capacity' => 'capacity',
            'status' => 'status',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    * status  **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    * createdAt  **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'projectId' => 'setProjectId',
            'availabilityZone' => 'setAvailabilityZone',
            'capacity' => 'setCapacity',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availabilityZone  **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    * status  **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    * createdAt  **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'projectId' => 'getProjectId',
            'availabilityZone' => 'getAvailabilityZone',
            'capacity' => 'getCapacity',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['capacity'] === null) {
            $invalidProperties[] = "'capacity' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    *  **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
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
    * @param string $id **参数解释**： 专属分布式存储池名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
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
    * @param string $name **参数解释**： 专属分布式存储池ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 专属分布式存储池的存储类型。 - SSD：超高IO专属分布式存储池。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID。获取方式方法请参见[获取项目ID](dws_02_0011.xml)。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone **参数解释**： 专属分布式存储池所属可用区。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets capacity
    *  **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int $capacity **参数解释**： 申请的专属分布式存储容量，单位TB。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**： 专属分布式存储池的状态。 **取值范围**： available：专属分布式存储池处于可用状态。 deploying：专属分布式存储池处于正在部署的过程中，不可使用。 extending：专属分布式存储池处于正在扩容的过程中，可使用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt **参数解释**： 专属分布式存储池的创建时间。 **取值范围**： 时间格式：UTC YYYY-MM-DDTHH:MM:SS
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

