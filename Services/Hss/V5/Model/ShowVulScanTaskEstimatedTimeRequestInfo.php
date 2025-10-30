<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulScanTaskEstimatedTimeRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulScanTaskEstimatedTimeRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualScanType  **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
    * rangeType  **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
    * agentIds  **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualScanType' => 'string[]',
            'rangeType' => 'string',
            'agentIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualScanType  **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
    * rangeType  **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
    * agentIds  **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualScanType' => null,
        'rangeType' => null,
        'agentIds' => null
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
    * manualScanType  **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
    * rangeType  **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
    * agentIds  **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualScanType' => 'manual_scan_type',
            'rangeType' => 'range_type',
            'agentIds' => 'agent_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualScanType  **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
    * rangeType  **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
    * agentIds  **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'manualScanType' => 'setManualScanType',
            'rangeType' => 'setRangeType',
            'agentIds' => 'setAgentIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualScanType  **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
    * rangeType  **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
    * agentIds  **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'manualScanType' => 'getManualScanType',
            'rangeType' => 'getRangeType',
            'agentIds' => 'getAgentIds'
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
        $this->container['manualScanType'] = isset($data['manualScanType']) ? $data['manualScanType'] : null;
        $this->container['rangeType'] = isset($data['rangeType']) ? $data['rangeType'] : null;
        $this->container['agentIds'] = isset($data['agentIds']) ? $data['agentIds'] : null;
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
            if (!is_null($this->container['rangeType']) && !preg_match("/^all_host|specific_host$/", $this->container['rangeType'])) {
                $invalidProperties[] = "invalid value for 'rangeType', must be conform to the pattern /^all_host|specific_host$/.";
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
    *  **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
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
    * @param string[]|null $manualScanType **参数解释**: 漏洞手动检测类型 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms - app_vul - urgent_vul  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setManualScanType($manualScanType)
    {
        $this->container['manualScanType'] = $manualScanType;
        return $this;
    }

    /**
    * Gets rangeType
    *  **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
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
    * @param string|null $rangeType **参数解释**: 检测的主机范围 **约束限制**: 不涉及 **取值范围**: - all_host：全部主机 - specific_host：部分主机  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRangeType($rangeType)
    {
        $this->container['rangeType'] = $rangeType;
        return $this;
    }

    /**
    * Gets agentIds
    *  **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getAgentIds()
    {
        return $this->container['agentIds'];
    }

    /**
    * Sets agentIds
    *
    * @param string[]|null $agentIds **参数解释**: 待检测的agent列表 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentIds($agentIds)
    {
        $this->container['agentIds'] = $agentIds;
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

