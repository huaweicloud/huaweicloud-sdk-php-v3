<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicableInstancesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicableInstancesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * entities  **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'entities' => '\HuaweiCloud\SDK\Dds\V3\Model\EntityInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * entities  **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'entities' => null
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
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * entities  **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'entities' => 'entities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * entities  **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'entities' => 'setEntities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * entities  **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'entities' => 'getEntities'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['entities'] === null) {
            $invalidProperties[] = "'entities' can't be null";
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
    * Gets instanceId
    *  **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    * @param string $instanceId **参数解释：** 实例ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName **参数解释：** 实例名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets entities
    *  **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\EntityInfo[]
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\EntityInfo[] $entities **参数解释：** 节点组信息或节点信息的列表对象。 **取值范围：** 当参数模板是副本集或单节点类型时，不返回该字段，模板直接应用到对应实例。 当参数模板是集群类型时，如果是shard组或者config组的参数模板，则返回的是对应类型的节点组信息；如果是mongos组的参数模板，则返回的是对应类型的的节点信息。 例如：一个mongos参数模板可应用到一个或多个mongos节点。
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
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

