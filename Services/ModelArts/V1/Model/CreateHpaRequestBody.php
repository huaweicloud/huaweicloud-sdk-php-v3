<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHpaRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHpaRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * hpaRules  **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'targetResourceId' => 'string',
            'targetResourceType' => 'string',
            'hpaRules' => '\HuaweiCloud\SDK\ModelArts\V1\Model\HpaRules[]',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * hpaRules  **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'targetResourceId' => null,
        'targetResourceType' => null,
        'hpaRules' => null,
        'workspaceId' => null
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
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * hpaRules  **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'targetResourceId' => 'target_resource_id',
            'targetResourceType' => 'target_resource_type',
            'hpaRules' => 'hpa_rules',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * hpaRules  **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'targetResourceId' => 'setTargetResourceId',
            'targetResourceType' => 'setTargetResourceType',
            'hpaRules' => 'setHpaRules',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceId  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * targetResourceType  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    * hpaRules  **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    * workspaceId  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'targetResourceId' => 'getTargetResourceId',
            'targetResourceType' => 'getTargetResourceType',
            'hpaRules' => 'getHpaRules',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['targetResourceId'] = isset($data['targetResourceId']) ? $data['targetResourceId'] : null;
        $this->container['targetResourceType'] = isset($data['targetResourceType']) ? $data['targetResourceType'] : null;
        $this->container['hpaRules'] = isset($data['hpaRules']) ? $data['hpaRules'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetResourceId'] === null) {
            $invalidProperties[] = "'targetResourceId' can't be null";
        }
            if ((mb_strlen($this->container['targetResourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetResourceId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['targetResourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetResourceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetResourceType'] === null) {
            $invalidProperties[] = "'targetResourceType' can't be null";
        }
            if ((mb_strlen($this->container['targetResourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetResourceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['targetResourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetResourceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hpaRules'] === null) {
            $invalidProperties[] = "'hpaRules' can't be null";
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
    * Gets type
    *  **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $type **参数解释：** 自动扩缩容类型。 **取值范围：** - CRON_HPA：定时扩缩容策略 - METRIC_HPA：指标扩缩容策略 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets targetResourceId
    *  **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getTargetResourceId()
    {
        return $this->container['targetResourceId'];
    }

    /**
    * Sets targetResourceId
    *
    * @param string $targetResourceId **参数解释：** 自动扩缩容策略绑定的目标ID **取值范围：** 实例组ID **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getTargetResourceType()
    {
        return $this->container['targetResourceType'];
    }

    /**
    * Sets targetResourceType
    *
    * @param string $targetResourceType **参数解释：** 自动扩缩容策略绑定的目标类型。 **取值范围：** - GROUP：实例组 **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTargetResourceType($targetResourceType)
    {
        $this->container['targetResourceType'] = $targetResourceType;
        return $this;
    }

    /**
    * Gets hpaRules
    *  **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\HpaRules[]
    */
    public function getHpaRules()
    {
        return $this->container['hpaRules'];
    }

    /**
    * Sets hpaRules
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\HpaRules[] $hpaRules **参数解释：** 自动扩缩容规则。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setHpaRules($hpaRules)
    {
        $this->container['hpaRules'] = $hpaRules;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $workspaceId **参数解释：** 工作空间ID。 **取值范围：** - 0：默认空间ID - 由数字和小写字母组成的32位字符：其他空间ID，可参考[工作空间创建](CreateWorkspace.xml) **约束限制：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

