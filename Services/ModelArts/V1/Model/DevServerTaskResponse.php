<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevServerTaskResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevServerTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：task的ID。 **取值范围**：不涉及。
    * serverId  **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    * serverName  **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    * status  **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
    * cloudServer  **参数解释**：底层ECS/BMS/HPS ID。
    * message  **参数解释**：输出信息。 **取值范围**：不涉及。
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'serverId' => 'string',
            'serverName' => 'string',
            'status' => 'string',
            'cloudServer' => 'map[string,string]',
            'message' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：task的ID。 **取值范围**：不涉及。
    * serverId  **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    * serverName  **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    * status  **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
    * cloudServer  **参数解释**：底层ECS/BMS/HPS ID。
    * message  **参数解释**：输出信息。 **取值范围**：不涉及。
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'serverId' => null,
        'serverName' => null,
        'status' => null,
        'cloudServer' => null,
        'message' => null,
        'createAt' => null,
        'updateAt' => null
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
    * id  **参数解释**：task的ID。 **取值范围**：不涉及。
    * serverId  **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    * serverName  **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    * status  **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
    * cloudServer  **参数解释**：底层ECS/BMS/HPS ID。
    * message  **参数解释**：输出信息。 **取值范围**：不涉及。
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'serverId' => 'server_id',
            'serverName' => 'server_name',
            'status' => 'status',
            'cloudServer' => 'cloud_server',
            'message' => 'message',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：task的ID。 **取值范围**：不涉及。
    * serverId  **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    * serverName  **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    * status  **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
    * cloudServer  **参数解释**：底层ECS/BMS/HPS ID。
    * message  **参数解释**：输出信息。 **取值范围**：不涉及。
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'serverId' => 'setServerId',
            'serverName' => 'setServerName',
            'status' => 'setStatus',
            'cloudServer' => 'setCloudServer',
            'message' => 'setMessage',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：task的ID。 **取值范围**：不涉及。
    * serverId  **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    * serverName  **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    * status  **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
    * cloudServer  **参数解释**：底层ECS/BMS/HPS ID。
    * message  **参数解释**：输出信息。 **取值范围**：不涉及。
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'serverId' => 'getServerId',
            'serverName' => 'getServerName',
            'status' => 'getStatus',
            'cloudServer' => 'getCloudServer',
            'message' => 'getMessage',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cloudServer'] = isset($data['cloudServer']) ? $data['cloudServer'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
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
    *  **参数解释**：task的ID。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：task的ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets serverId
    *  **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId **参数解释**：devserver机器ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverName
    *  **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string|null $serverName **参数解释**：devserver机器名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
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
    * @param string|null $status **参数解释**：task状态。 **取值范围**：- PROCESSING  -SUCCESS  - FAILED  - SKIPPED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cloudServer
    *  **参数解释**：底层ECS/BMS/HPS ID。
    *
    * @return map[string,string]|null
    */
    public function getCloudServer()
    {
        return $this->container['cloudServer'];
    }

    /**
    * Sets cloudServer
    *
    * @param map[string,string]|null $cloudServer **参数解释**：底层ECS/BMS/HPS ID。
    *
    * @return $this
    */
    public function setCloudServer($cloudServer)
    {
        $this->container['cloudServer'] = $cloudServer;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**：输出信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**：输出信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
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

