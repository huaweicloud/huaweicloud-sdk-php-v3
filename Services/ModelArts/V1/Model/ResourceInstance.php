<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceDetail  **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。 **取值范围**：不涉及。
    * resourceId  **参数解释**：训练作业ID。 **取值范围**：不涉及。
    * resourceName  **参数解释**：训练作业名称。 **取值范围**：不涉及。
    * tags  **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceDetail' => 'object',
            'workspaceId' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceDetail  **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。 **取值范围**：不涉及。
    * resourceId  **参数解释**：训练作业ID。 **取值范围**：不涉及。
    * resourceName  **参数解释**：训练作业名称。 **取值范围**：不涉及。
    * tags  **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceDetail' => null,
        'workspaceId' => null,
        'resourceId' => null,
        'resourceName' => null,
        'tags' => null
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
    * resourceDetail  **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。 **取值范围**：不涉及。
    * resourceId  **参数解释**：训练作业ID。 **取值范围**：不涉及。
    * resourceName  **参数解释**：训练作业名称。 **取值范围**：不涉及。
    * tags  **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceDetail' => 'resource_detail',
            'workspaceId' => 'workspace_id',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceDetail  **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。 **取值范围**：不涉及。
    * resourceId  **参数解释**：训练作业ID。 **取值范围**：不涉及。
    * resourceName  **参数解释**：训练作业名称。 **取值范围**：不涉及。
    * tags  **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceDetail' => 'setResourceDetail',
            'workspaceId' => 'setWorkspaceId',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceDetail  **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。 **取值范围**：不涉及。
    * resourceId  **参数解释**：训练作业ID。 **取值范围**：不涉及。
    * resourceName  **参数解释**：训练作业名称。 **取值范围**：不涉及。
    * tags  **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceDetail' => 'getResourceDetail',
            'workspaceId' => 'getWorkspaceId',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'tags' => 'getTags'
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
        $this->container['resourceDetail'] = isset($data['resourceDetail']) ? $data['resourceDetail'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets resourceDetail
    *  **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    *
    * @return object|null
    */
    public function getResourceDetail()
    {
        return $this->container['resourceDetail'];
    }

    /**
    * Sets resourceDetail
    *
    * @param object|null $resourceDetail **参数解释**：资源详情，当前为空对象。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResourceDetail($resourceDetail)
    {
        $this->container['resourceDetail'] = $resourceDetail;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**：训练作业ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**：训练作业ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释**：训练作业名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释**：训练作业名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResp[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResp[]|null $tags **参数解释**：该训练作业上的标签列表。无标签的作业返回空数组。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

