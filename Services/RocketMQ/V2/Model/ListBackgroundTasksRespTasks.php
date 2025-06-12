<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackgroundTasksRespTasks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackgroundTasksResp_tasks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * params  **参数解释**： 任务参数。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 启动时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'userName' => 'string',
            'userId' => 'string',
            'params' => 'string',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * params  **参数解释**： 任务参数。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 启动时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'userName' => null,
        'userId' => null,
        'params' => null,
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * params  **参数解释**： 任务参数。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 启动时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'userName' => 'user_name',
            'userId' => 'user_id',
            'params' => 'params',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * params  **参数解释**： 任务参数。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 启动时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'userName' => 'setUserName',
            'userId' => 'setUserId',
            'params' => 'setParams',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * params  **参数解释**： 任务参数。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 启动时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'userName' => 'getUserName',
            'userId' => 'getUserId',
            'params' => 'getParams',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    *  **参数解释**： 任务ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 任务ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 任务名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 任务名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 用户名。 **取值范围**： 不涉及。
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
    * @param string|null $userName **参数解释**： 用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**： 用户ID。 **取值范围**： 不涉及。
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
    * @param string|null $userId **参数解释**： 用户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets params
    *  **参数解释**： 任务参数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param string|null $params **参数解释**： 任务参数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 任务状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 任务状态。 **取值范围**： 不涉及。
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
    *  **参数解释**： 启动时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释**： 启动时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

