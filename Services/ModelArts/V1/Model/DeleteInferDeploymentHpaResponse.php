<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteInferDeploymentHpaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteInferDeploymentHpaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    * minReplicas  **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    * maxReplicas  **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    * status  参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
    * hpaRules  **参数解释：** 自动扩缩容规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'targetResourceId' => 'string',
            'targetResourceType' => 'string',
            'minReplicas' => 'int',
            'maxReplicas' => 'int',
            'status' => 'string',
            'workspaceId' => 'string',
            'hpaRules' => '\HuaweiCloud\SDK\ModelArts\V1\Model\HpaRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    * minReplicas  **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    * maxReplicas  **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    * status  参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
    * hpaRules  **参数解释：** 自动扩缩容规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'targetResourceId' => null,
        'targetResourceType' => null,
        'minReplicas' => null,
        'maxReplicas' => null,
        'status' => null,
        'workspaceId' => null,
        'hpaRules' => null
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
    * id  **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    * minReplicas  **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    * maxReplicas  **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    * status  参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
    * hpaRules  **参数解释：** 自动扩缩容规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'targetResourceId' => 'target_resource_id',
            'targetResourceType' => 'target_resource_type',
            'minReplicas' => 'min_replicas',
            'maxReplicas' => 'max_replicas',
            'status' => 'status',
            'workspaceId' => 'workspace_id',
            'hpaRules' => 'hpa_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    * minReplicas  **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    * maxReplicas  **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    * status  参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
    * hpaRules  **参数解释：** 自动扩缩容规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'targetResourceId' => 'setTargetResourceId',
            'targetResourceType' => 'setTargetResourceType',
            'minReplicas' => 'setMinReplicas',
            'maxReplicas' => 'setMaxReplicas',
            'status' => 'setStatus',
            'workspaceId' => 'setWorkspaceId',
            'hpaRules' => 'setHpaRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
    * name  **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    * minReplicas  **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    * maxReplicas  **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    * status  参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
    * hpaRules  **参数解释：** 自动扩缩容规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'targetResourceId' => 'getTargetResourceId',
            'targetResourceType' => 'getTargetResourceType',
            'minReplicas' => 'getMinReplicas',
            'maxReplicas' => 'getMaxReplicas',
            'status' => 'getStatus',
            'workspaceId' => 'getWorkspaceId',
            'hpaRules' => 'getHpaRules'
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
        $this->container['targetResourceId'] = isset($data['targetResourceId']) ? $data['targetResourceId'] : null;
        $this->container['targetResourceType'] = isset($data['targetResourceType']) ? $data['targetResourceType'] : null;
        $this->container['minReplicas'] = isset($data['minReplicas']) ? $data['minReplicas'] : null;
        $this->container['maxReplicas'] = isset($data['maxReplicas']) ? $data['maxReplicas'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['hpaRules'] = isset($data['hpaRules']) ? $data['hpaRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetResourceId']) && (mb_strlen($this->container['targetResourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'targetResourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['targetResourceId']) && (mb_strlen($this->container['targetResourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetResourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetResourceType']) && (mb_strlen($this->container['targetResourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetResourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetResourceType']) && (mb_strlen($this->container['targetResourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetResourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['minReplicas']) && ($this->container['minReplicas'] > 128)) {
                $invalidProperties[] = "invalid value for 'minReplicas', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['minReplicas']) && ($this->container['minReplicas'] < 1)) {
                $invalidProperties[] = "invalid value for 'minReplicas', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxReplicas']) && ($this->container['maxReplicas'] > 128)) {
                $invalidProperties[] = "invalid value for 'maxReplicas', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['maxReplicas']) && ($this->container['maxReplicas'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxReplicas', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 自动扩缩容策略ID **取值范围：** 不涉及。
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
    *  **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 自动扩缩容策略名称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets targetResourceId
    *  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    *
    * @return string|null
    */
    public function getTargetResourceId()
    {
        return $this->container['targetResourceId'];
    }

    /**
    * Sets targetResourceId
    *
    * @param string|null $targetResourceId **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID
    *
    * @return $this
    */
    public function setTargetResourceId($targetResourceId)
    {
        $this->container['targetResourceId'] = $targetResourceId;
        return $this;
    }

    /**
    * Gets targetResourceType
    *  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    *
    * @return string|null
    */
    public function getTargetResourceType()
    {
        return $this->container['targetResourceType'];
    }

    /**
    * Sets targetResourceType
    *
    * @param string|null $targetResourceType **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组
    *
    * @return $this
    */
    public function setTargetResourceType($targetResourceType)
    {
        $this->container['targetResourceType'] = $targetResourceType;
        return $this;
    }

    /**
    * Gets minReplicas
    *  **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    *
    * @return int|null
    */
    public function getMinReplicas()
    {
        return $this->container['minReplicas'];
    }

    /**
    * Sets minReplicas
    *
    * @param int|null $minReplicas **参数解释：** 自动扩缩容最小实例数。 **取值范围：** 1-128
    *
    * @return $this
    */
    public function setMinReplicas($minReplicas)
    {
        $this->container['minReplicas'] = $minReplicas;
        return $this;
    }

    /**
    * Gets maxReplicas
    *  **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    *
    * @return int|null
    */
    public function getMaxReplicas()
    {
        return $this->container['maxReplicas'];
    }

    /**
    * Sets maxReplicas
    *
    * @param int|null $maxReplicas **参数解释：** 自动扩缩容最大实例数。 **取值范围：** 1-128
    *
    * @return $this
    */
    public function setMaxReplicas($maxReplicas)
    {
        $this->container['maxReplicas'] = $maxReplicas;
        return $this;
    }

    /**
    * Gets status
    *  参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
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
    * @param string|null $status 参数解释：** 自动扩缩容策略状态。 **取值范围：** - INACTIVE：不启用 - ACTIVE：配置成功 - DELETED：已删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
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
    * @param string|null $workspaceId **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml)
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets hpaRules
    *  **参数解释：** 自动扩缩容规则列表
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\HpaRule[]|null
    */
    public function getHpaRules()
    {
        return $this->container['hpaRules'];
    }

    /**
    * Sets hpaRules
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\HpaRule[]|null $hpaRules **参数解释：** 自动扩缩容规则列表
    *
    * @return $this
    */
    public function setHpaRules($hpaRules)
    {
        $this->container['hpaRules'] = $hpaRules;
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

