<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotGroupDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotGroupDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
    * projectId  **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
    * createdAt  **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
    * updatedAt  **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    * name  **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
    * description  **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * serverId  **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'createdAt' => 'string',
            'status' => 'string',
            'updatedAt' => 'string',
            'name' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => 'map[string,string]',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
    * projectId  **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
    * createdAt  **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
    * updatedAt  **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    * name  **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
    * description  **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * serverId  **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'createdAt' => null,
        'status' => null,
        'updatedAt' => null,
        'name' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'serverId' => null
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
    * id  **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
    * projectId  **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
    * createdAt  **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
    * updatedAt  **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    * name  **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
    * description  **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * serverId  **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'status' => 'status',
            'updatedAt' => 'updated_at',
            'name' => 'name',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
    * projectId  **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
    * createdAt  **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
    * updatedAt  **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    * name  **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
    * description  **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * serverId  **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt',
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
    * projectId  **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
    * createdAt  **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
    * updatedAt  **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    * name  **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
    * description  **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    * tags  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * serverId  **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt',
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'serverId' => 'getServerId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
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
    *  **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
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
    * @param string $id **参数解释** 快照一致性组的ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
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
    * @param string $projectId **参数解释** 快照一致性组的项目ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
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
    * @param string $createdAt **参数解释** 快照一致性组的创建时间。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
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
    * @param string $status **参数解释** 快照一致性组的状态。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt **参数解释** 快照一致性组的更新时间。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
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
    * @param string $name **参数解释** 快照一致性组的名称。 **取值范围** 不涉及。
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
    *  **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释** 快照一致性组的描述。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释** 快照一致性组的企业项目id。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    *
    * @return map[string,string]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string] $tags **参数解释** 快照一致性组的标签。 标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets serverId
    *  **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId **参数解释** 云服务器id。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

