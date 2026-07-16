<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckTrainingExperimentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckTrainingExperimentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * experimentName  **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'experimentName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * experimentName  **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'experimentName' => null
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
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * experimentName  **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'experimentName' => 'experiment_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * experimentName  **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'experimentName' => 'setExperimentName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    * experimentName  **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'experimentName' => 'getExperimentName'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['experimentName'] = isset($data['experimentName']) ? $data['experimentName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['experimentName'] === null) {
            $invalidProperties[] = "'experimentName' can't be null";
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
    * Gets workspaceId
    *  **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID。获取方法请参见[查询工作空间列表](ListWorkspace.xml)。 **约束限制**：存在并使用的工作空间。 **取值范围**：不涉及。 **默认取值**：“0”。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets experimentName
    *  **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getExperimentName()
    {
        return $this->container['experimentName'];
    }

    /**
    * Sets experimentName
    *
    * @param string $experimentName **参数解释**：实验名称。 **约束限制**：最大长度64，不支持特殊字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setExperimentName($experimentName)
    {
        $this->container['experimentName'] = $experimentName;
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

