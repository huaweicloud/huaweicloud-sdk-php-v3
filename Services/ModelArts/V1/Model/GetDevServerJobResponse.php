<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetDevServerJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetDevServerJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * id  **参数解释**：任务ID。 **取值范围**：不涉及。
    * name  **参数解释**：任务名称。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
    * status  **参数解释**：状态。 **取值范围**：- ACTIVE。
    * items  **参数解释**：任务实例列表信息。
    * tasks  **参数解释**：task详情列表。
    * templateId  **参数解释**：任务模板ID。 **取值范围**：不涉及。
    * userName  **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    * abnormalCount  **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    * description  **参数解释**：描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'string',
            'updateAt' => 'string',
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'status' => 'string',
            'items' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DevServerJobItem[]',
            'tasks' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DevServerTaskResponse[]',
            'templateId' => 'string',
            'userName' => 'string',
            'abnormalCount' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * id  **参数解释**：任务ID。 **取值范围**：不涉及。
    * name  **参数解释**：任务名称。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
    * status  **参数解释**：状态。 **取值范围**：- ACTIVE。
    * items  **参数解释**：任务实例列表信息。
    * tasks  **参数解释**：task详情列表。
    * templateId  **参数解释**：任务模板ID。 **取值范围**：不涉及。
    * userName  **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    * abnormalCount  **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    * description  **参数解释**：描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => null,
        'updateAt' => null,
        'id' => null,
        'name' => null,
        'type' => null,
        'status' => null,
        'items' => null,
        'tasks' => null,
        'templateId' => null,
        'userName' => null,
        'abnormalCount' => 'int32',
        'description' => null
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
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * id  **参数解释**：任务ID。 **取值范围**：不涉及。
    * name  **参数解释**：任务名称。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
    * status  **参数解释**：状态。 **取值范围**：- ACTIVE。
    * items  **参数解释**：任务实例列表信息。
    * tasks  **参数解释**：task详情列表。
    * templateId  **参数解释**：任务模板ID。 **取值范围**：不涉及。
    * userName  **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    * abnormalCount  **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    * description  **参数解释**：描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'status' => 'status',
            'items' => 'items',
            'tasks' => 'tasks',
            'templateId' => 'template_id',
            'userName' => 'user_name',
            'abnormalCount' => 'abnormal_count',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * id  **参数解释**：任务ID。 **取值范围**：不涉及。
    * name  **参数解释**：任务名称。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
    * status  **参数解释**：状态。 **取值范围**：- ACTIVE。
    * items  **参数解释**：任务实例列表信息。
    * tasks  **参数解释**：task详情列表。
    * templateId  **参数解释**：任务模板ID。 **取值范围**：不涉及。
    * userName  **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    * abnormalCount  **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    * description  **参数解释**：描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'status' => 'setStatus',
            'items' => 'setItems',
            'tasks' => 'setTasks',
            'templateId' => 'setTemplateId',
            'userName' => 'setUserName',
            'abnormalCount' => 'setAbnormalCount',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * id  **参数解释**：任务ID。 **取值范围**：不涉及。
    * name  **参数解释**：任务名称。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
    * status  **参数解释**：状态。 **取值范围**：- ACTIVE。
    * items  **参数解释**：任务实例列表信息。
    * tasks  **参数解释**：task详情列表。
    * templateId  **参数解释**：任务模板ID。 **取值范围**：不涉及。
    * userName  **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    * abnormalCount  **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    * description  **参数解释**：描述。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'status' => 'getStatus',
            'items' => 'getItems',
            'tasks' => 'getTasks',
            'templateId' => 'getTemplateId',
            'userName' => 'getUserName',
            'abnormalCount' => 'getAbnormalCount',
            'description' => 'getDescription'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['abnormalCount'] = isset($data['abnormalCount']) ? $data['abnormalCount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets createAt
    *  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：任务ID。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：任务ID。 **取值范围**：不涉及。
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
    *  **参数解释**：任务名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：任务名称。 **取值范围**：不涉及。
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
    *  **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
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
    * @param string|null $type **参数解释**：任务模板类型。 **取值范围**：- COMMON  -SERVICE_DEPLOY 等。
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
    *  **参数解释**：状态。 **取值范围**：- ACTIVE。
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
    * @param string|null $status **参数解释**：状态。 **取值范围**：- ACTIVE。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释**：任务实例列表信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DevServerJobItem[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DevServerJobItem[]|null $items **参数解释**：任务实例列表信息。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
        return $this;
    }

    /**
    * Gets tasks
    *  **参数解释**：task详情列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DevServerTaskResponse[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DevServerTaskResponse[]|null $tasks **参数解释**：task详情列表。
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
        return $this;
    }

    /**
    * Gets templateId
    *  **参数解释**：任务模板ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId **参数解释**：任务模板ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**：下发任务的用户信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets abnormalCount
    *  **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getAbnormalCount()
    {
        return $this->container['abnormalCount'];
    }

    /**
    * Sets abnormalCount
    *
    * @param int|null $abnormalCount **参数解释**：task失败的节点数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAbnormalCount($abnormalCount)
    {
        $this->container['abnormalCount'] = $abnormalCount;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：描述。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

