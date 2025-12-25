<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ManualVulScanRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ManualVulScanRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualScanType  **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * batchFlag  **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    * rangeType  **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    * agentIdList  **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * urgentVulIdList  **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualScanType' => 'string[]',
            'batchFlag' => 'bool',
            'rangeType' => 'string',
            'agentIdList' => 'string[]',
            'urgentVulIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualScanType  **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * batchFlag  **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    * rangeType  **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    * agentIdList  **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * urgentVulIdList  **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualScanType' => null,
        'batchFlag' => null,
        'rangeType' => null,
        'agentIdList' => null,
        'urgentVulIdList' => null
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
    * manualScanType  **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * batchFlag  **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    * rangeType  **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    * agentIdList  **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * urgentVulIdList  **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualScanType' => 'manual_scan_type',
            'batchFlag' => 'batch_flag',
            'rangeType' => 'range_type',
            'agentIdList' => 'agent_id_list',
            'urgentVulIdList' => 'urgent_vul_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualScanType  **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * batchFlag  **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    * rangeType  **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    * agentIdList  **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * urgentVulIdList  **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'manualScanType' => 'setManualScanType',
            'batchFlag' => 'setBatchFlag',
            'rangeType' => 'setRangeType',
            'agentIdList' => 'setAgentIdList',
            'urgentVulIdList' => 'setUrgentVulIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualScanType  **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * batchFlag  **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    * rangeType  **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    * agentIdList  **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    * urgentVulIdList  **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'manualScanType' => 'getManualScanType',
            'batchFlag' => 'getBatchFlag',
            'rangeType' => 'getRangeType',
            'agentIdList' => 'getAgentIdList',
            'urgentVulIdList' => 'getUrgentVulIdList'
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
    const MANUAL_SCAN_TYPE_LINUX_VUL = 'linux_vul';
    const MANUAL_SCAN_TYPE_WINDOWS_VUL = 'windows_vul';
    const MANUAL_SCAN_TYPE_WEB_CMS = 'web_cms';
    const MANUAL_SCAN_TYPE_APP_VUL = 'app_vul';
    const MANUAL_SCAN_TYPE_URGENT_VUL = 'urgent_vul';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getManualScanTypeAllowableValues()
    {
        return [
            self::MANUAL_SCAN_TYPE_LINUX_VUL,
            self::MANUAL_SCAN_TYPE_WINDOWS_VUL,
            self::MANUAL_SCAN_TYPE_WEB_CMS,
            self::MANUAL_SCAN_TYPE_APP_VUL,
            self::MANUAL_SCAN_TYPE_URGENT_VUL,
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
        $this->container['manualScanType'] = isset($data['manualScanType']) ? $data['manualScanType'] : null;
        $this->container['batchFlag'] = isset($data['batchFlag']) ? $data['batchFlag'] : null;
        $this->container['rangeType'] = isset($data['rangeType']) ? $data['rangeType'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['urgentVulIdList'] = isset($data['urgentVulIdList']) ? $data['urgentVulIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rangeType']) && (mb_strlen($this->container['rangeType']) > 32)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['rangeType']) && (mb_strlen($this->container['rangeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be bigger than or equal to 0.";
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
    * Gets manualScanType
    *  **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getManualScanType()
    {
        return $this->container['manualScanType'];
    }

    /**
    * Sets manualScanType
    *
    * @param string[]|null $manualScanType **参数解释**: 扫描的漏洞类型列表 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setManualScanType($manualScanType)
    {
        $this->container['manualScanType'] = $manualScanType;
        return $this;
    }

    /**
    * Gets batchFlag
    *  **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getBatchFlag()
    {
        return $this->container['batchFlag'];
    }

    /**
    * Sets batchFlag
    *
    * @param bool|null $batchFlag **参数解释**: 是否为批量扫描操作 **约束限制**: 不涉及 **取值范围**:   - true：是批量扫描操作   - false：不是批量扫描操作  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setBatchFlag($batchFlag)
    {
        $this->container['batchFlag'] = $batchFlag;
        return $this;
    }

    /**
    * Gets rangeType
    *  **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRangeType()
    {
        return $this->container['rangeType'];
    }

    /**
    * Sets rangeType
    *
    * @param string|null $rangeType **参数解释**: 扫描主机的范围 **约束限制**: 不涉及 **取值范围**:   - all_host：扫描全部主机，此类型不需要填写agent_id_list   - specific_host：扫描指定主机  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRangeType($rangeType)
    {
        $this->container['rangeType'] = $rangeType;
        return $this;
    }

    /**
    * Gets agentIdList
    *  **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[]|null $agentIdList **参数解释**: 需要扫描主机的agent id列表 **约束限制**: range_type值为specific_host时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets urgentVulIdList
    *  **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getUrgentVulIdList()
    {
        return $this->container['urgentVulIdList'];
    }

    /**
    * Sets urgentVulIdList
    *
    * @param string[]|null $urgentVulIdList **参数解释**: 扫描的应急漏洞id列表，该字段不传值则扫描所有应急漏洞 **约束限制**: manual_scan_type字段的值中包含“urgent_vul”时有效 **取值范围**: 最小值1，最大值200 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setUrgentVulIdList($urgentVulIdList)
    {
        $this->container['urgentVulIdList'] = $urgentVulIdList;
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

