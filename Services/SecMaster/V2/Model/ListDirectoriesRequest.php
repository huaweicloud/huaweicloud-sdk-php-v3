<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDirectoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDirectoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * category  **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * category  **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'category' => null
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
    * workspaceId  工作空间ID
    * category  **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * category  **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * category  **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'category' => 'getCategory'
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
    const CATEGORY_TABLE = 'TABLE';
    const CATEGORY_PIPE = 'PIPE';
    const CATEGORY_RETRIEVE_SCRIPT = 'RETRIEVE_SCRIPT';
    const CATEGORY_ANALYSIS_SCRIPT = 'ANALYSIS_SCRIPT';
    const CATEGORY_DATA_TRANSFORMATION = 'DATA_TRANSFORMATION';
    const CATEGORY_ALERT_RULE = 'ALERT_RULE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_TABLE,
            self::CATEGORY_PIPE,
            self::CATEGORY_RETRIEVE_SCRIPT,
            self::CATEGORY_ANALYSIS_SCRIPT,
            self::CATEGORY_DATA_TRANSFORMATION,
            self::CATEGORY_ALERT_RULE,
        ];
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**: 目录类型 - TABLE 表 - PIPE 管道 - RETRIEVE_SCRIPT 检索脚本 - ANALYSIS_SCRIPT 分析脚本 - DATA_TRANSFORMATION 数据加工 - ALERT_RULE 告警规则  **约束限制** 不涉及 **取值范围**: - TABLE - PIPE - RETRIEVE_SCRIPT - ANALYSIS_SCRIPT - DATA_TRANSFORMATION - ALERT_RULE  **默认值** 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

