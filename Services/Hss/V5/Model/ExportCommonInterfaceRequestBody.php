<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportCommonInterfaceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportCommonInterfaceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exportType  **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    * condition  **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    * idList  导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exportType' => 'string',
            'condition' => 'string',
            'idList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exportType  **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    * condition  **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    * idList  导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exportType' => null,
        'condition' => null,
        'idList' => null
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
    * exportType  **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    * condition  **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    * idList  导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exportType' => 'export_type',
            'condition' => 'condition',
            'idList' => 'id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exportType  **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    * condition  **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    * idList  导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @var string[]
    */
    protected static $setters = [
            'exportType' => 'setExportType',
            'condition' => 'setCondition',
            'idList' => 'setIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exportType  **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    * condition  **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    * idList  导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @var string[]
    */
    protected static $getters = [
            'exportType' => 'getExportType',
            'condition' => 'getCondition',
            'idList' => 'getIdList'
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
        $this->container['exportType'] = isset($data['exportType']) ? $data['exportType'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['idList'] = isset($data['idList']) ? $data['idList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['exportType'] === null) {
            $invalidProperties[] = "'exportType' can't be null";
        }
            if ((mb_strlen($this->container['exportType']) > 60)) {
                $invalidProperties[] = "invalid value for 'exportType', the character length must be smaller than or equal to 60.";
            }
            if ((mb_strlen($this->container['exportType']) < 1)) {
                $invalidProperties[] = "invalid value for 'exportType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^ListAntiVirusResult|ListAntivirusHandleHistory|ListAiInstances|ListAiSessions|ListAiTraceRiskDetail|ListDefenderPlugins|ListEventHandleHistory$/", $this->container['exportType'])) {
                $invalidProperties[] = "invalid value for 'exportType', must be conform to the pattern /^ListAntiVirusResult|ListAntivirusHandleHistory|ListAiInstances|ListAiSessions|ListAiTraceRiskDetail|ListDefenderPlugins|ListEventHandleHistory$/.";
            }
            if (!is_null($this->container['condition']) && (mb_strlen($this->container['condition']) > 5000)) {
                $invalidProperties[] = "invalid value for 'condition', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['condition']) && (mb_strlen($this->container['condition']) < 1)) {
                $invalidProperties[] = "invalid value for 'condition', the character length must be bigger than or equal to 1.";
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
    * Gets exportType
    *  **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getExportType()
    {
        return $this->container['exportType'];
    }

    /**
    * Sets exportType
    *
    * @param string $exportType **参数解释**： 导出类型 **约束限制**: 不涉及 **取值范围**： 导出类型，取值为对应的查询接口的接口名。 - ListAntiVirusResult：病毒扫描结果列表导出。 - ListAntivirusHandleHistory：病毒扫描历史处置记录列表。 - ListAiInstances：AI实例记录列表。 - ListAiSessions：AI会话记录列表。 - ListAiTraceRiskDetail：AI行为轨迹风险详情列表。 - ListDefenderPlugins：智能体卫士插件列表。 - ListEventHandleHistory：告警事件历史处置记录列表。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExportType($exportType)
    {
        $this->container['exportType'] = $exportType;
        return $this;
    }

    /**
    * Gets condition
    *  **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition **参数解释**: 查询条件信息，把对应的json转化成字符串，举例如下：当export_type=ListAntiVirusResult，传递查询条件为：{\"severities\":\"Critical\",\"handle_status\":\"unhandled\",\"asset_value\":\"important\"}，查询条件信息可以通过对应的查询接口获取。 **约束限制**: 不涉及 **取值范围**: 字符长度1-5000位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets idList
    *  导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @return string[]|null
    */
    public function getIdList()
    {
        return $this->container['idList'];
    }

    /**
    * Sets idList
    *
    * @param string[]|null $idList 导出的数据的Id列表, 当id_list有值时，会忽略condition的信息: - export_type = ListAiInstances时对应的是agent_id - export_type = ListAiSessions时对应的是session_id - export_type = ListAiTraceRiskDetail时对应的是规则详情记录id - export_type = ListDefenderPlugins时对应的是instance_id
    *
    * @return $this
    */
    public function setIdList($idList)
    {
        $this->container['idList'] = $idList;
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

