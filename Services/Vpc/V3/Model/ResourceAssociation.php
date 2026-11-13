<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceAssociation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceAssociation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 不涉及。
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    * resourceProjectId  **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    * instanceProjectId  **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'resourceProjectId' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'instanceProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 不涉及。
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    * resourceProjectId  **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    * instanceProjectId  **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceId' => null,
        'resourceType' => null,
        'resourceProjectId' => null,
        'instanceId' => null,
        'instanceType' => null,
        'instanceProjectId' => null
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
    * id  **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 不涉及。
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    * resourceProjectId  **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    * instanceProjectId  **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'resourceProjectId' => 'resource_project_id',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'instanceProjectId' => 'instance_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 不涉及。
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    * resourceProjectId  **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    * instanceProjectId  **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'resourceProjectId' => 'setResourceProjectId',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'instanceProjectId' => 'setInstanceProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
    * resourceId  **参数解释**： 资源ID。 **取值范围**： 不涉及。
    * resourceType  **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    * resourceProjectId  **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    * instanceProjectId  **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'resourceProjectId' => 'getResourceProjectId',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'instanceProjectId' => 'getInstanceProjectId'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceProjectId'] = isset($data['resourceProjectId']) ? $data['resourceProjectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceProjectId'] = isset($data['instanceProjectId']) ? $data['instanceProjectId'] : null;
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
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['resourceProjectId'] === null) {
            $invalidProperties[] = "'resourceProjectId' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
        if ($this->container['instanceProjectId'] === null) {
            $invalidProperties[] = "'instanceProjectId' can't be null";
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
    *  **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
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
    * @param string $id **参数解释**： 资源和实例关联关系的ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**： 资源ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId **参数解释**： 资源ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType **参数解释**： 资源类型。 **取值范围**： - port：弹性网卡。 - subeni：辅助弹性网卡。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceProjectId
    *  **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getResourceProjectId()
    {
        return $this->container['resourceProjectId'];
    }

    /**
    * Sets resourceProjectId
    *
    * @param string $resourceProjectId **参数解释**： 资源所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setResourceProjectId($resourceProjectId)
    {
        $this->container['resourceProjectId'] = $resourceProjectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType **参数解释**： 实例类型。 **取值范围**： - ELB：ELB实例。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceProjectId
    *  **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getInstanceProjectId()
    {
        return $this->container['instanceProjectId'];
    }

    /**
    * Sets instanceProjectId
    *
    * @param string $instanceProjectId **参数解释**： 实例所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceProjectId($instanceProjectId)
    {
        $this->container['instanceProjectId'] = $instanceProjectId;
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

