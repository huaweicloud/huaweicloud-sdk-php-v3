<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    * sortKey  按照属性排序。
    * sortDir  排序顺序，支持 `ASC` 或 `DESC`。
    * outputTableId  输出表 ID
    * alertRuleName  告警规则名称
    * alertRuleId  告警规则 ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'outputTableId' => 'string',
            'alertRuleName' => 'string',
            'alertRuleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    * sortKey  按照属性排序。
    * sortDir  排序顺序，支持 `ASC` 或 `DESC`。
    * outputTableId  输出表 ID
    * alertRuleName  告警规则名称
    * alertRuleId  告警规则 ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null,
        'outputTableId' => null,
        'alertRuleName' => null,
        'alertRuleId' => null
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
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    * sortKey  按照属性排序。
    * sortDir  排序顺序，支持 `ASC` 或 `DESC`。
    * outputTableId  输出表 ID
    * alertRuleName  告警规则名称
    * alertRuleId  告警规则 ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'outputTableId' => 'output_table_id',
            'alertRuleName' => 'alert_rule_name',
            'alertRuleId' => 'alert_rule_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    * sortKey  按照属性排序。
    * sortDir  排序顺序，支持 `ASC` 或 `DESC`。
    * outputTableId  输出表 ID
    * alertRuleName  告警规则名称
    * alertRuleId  告警规则 ID
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'outputTableId' => 'setOutputTableId',
            'alertRuleName' => 'setAlertRuleName',
            'alertRuleId' => 'setAlertRuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    * sortKey  按照属性排序。
    * sortDir  排序顺序，支持 `ASC` 或 `DESC`。
    * outputTableId  输出表 ID
    * alertRuleName  告警规则名称
    * alertRuleId  告警规则 ID
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'outputTableId' => 'getOutputTableId',
            'alertRuleName' => 'getAlertRuleName',
            'alertRuleId' => 'getAlertRuleId'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['outputTableId'] = isset($data['outputTableId']) ? $data['outputTableId'] : null;
        $this->container['alertRuleName'] = isset($data['alertRuleName']) ? $data['alertRuleName'] : null;
        $this->container['alertRuleId'] = isset($data['alertRuleId']) ? $data['alertRuleId'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['outputTableId']) && (mb_strlen($this->container['outputTableId']) > 32)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['outputTableId']) && (mb_strlen($this->container['outputTableId']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputTableId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alertRuleName']) && (mb_strlen($this->container['alertRuleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'alertRuleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alertRuleName']) && (mb_strlen($this->container['alertRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alertRuleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alertRuleId']) && (mb_strlen($this->container['alertRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'alertRuleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['alertRuleId']) && (mb_strlen($this->container['alertRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'alertRuleId', the character length must be bigger than or equal to 0.";
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
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 查询数据限制 **取值范围：** 0-1000 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  按照属性排序。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 按照属性排序。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序顺序，支持 `ASC` 或 `DESC`。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序顺序，支持 `ASC` 或 `DESC`。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets outputTableId
    *  输出表 ID
    *
    * @return string|null
    */
    public function getOutputTableId()
    {
        return $this->container['outputTableId'];
    }

    /**
    * Sets outputTableId
    *
    * @param string|null $outputTableId 输出表 ID
    *
    * @return $this
    */
    public function setOutputTableId($outputTableId)
    {
        $this->container['outputTableId'] = $outputTableId;
        return $this;
    }

    /**
    * Gets alertRuleName
    *  告警规则名称
    *
    * @return string|null
    */
    public function getAlertRuleName()
    {
        return $this->container['alertRuleName'];
    }

    /**
    * Sets alertRuleName
    *
    * @param string|null $alertRuleName 告警规则名称
    *
    * @return $this
    */
    public function setAlertRuleName($alertRuleName)
    {
        $this->container['alertRuleName'] = $alertRuleName;
        return $this;
    }

    /**
    * Gets alertRuleId
    *  告警规则 ID
    *
    * @return string|null
    */
    public function getAlertRuleId()
    {
        return $this->container['alertRuleId'];
    }

    /**
    * Sets alertRuleId
    *
    * @param string|null $alertRuleId 告警规则 ID
    *
    * @return $this
    */
    public function setAlertRuleId($alertRuleId)
    {
        $this->container['alertRuleId'] = $alertRuleId;
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

