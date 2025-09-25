<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * vulId  **参数解释**： 漏洞ID **取值范围**： 不涉及
    * repairNecessity  **参数解释**： 修复紧急度 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    * type  **参数解释**： 漏洞类型 **取值范围**： 不涉及
    * repairCmd  **参数解释**： 修复命令行 **取值范围**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'repairNecessity' => 'string',
            'scanTime' => 'int',
            'type' => 'string',
            'repairCmd' => 'string',
            'severityLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * vulId  **参数解释**： 漏洞ID **取值范围**： 不涉及
    * repairNecessity  **参数解释**： 修复紧急度 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    * type  **参数解释**： 漏洞类型 **取值范围**： 不涉及
    * repairCmd  **参数解释**： 修复命令行 **取值范围**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'repairNecessity' => null,
        'scanTime' => 'int64',
        'type' => null,
        'repairCmd' => null,
        'severityLevel' => null
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
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * vulId  **参数解释**： 漏洞ID **取值范围**： 不涉及
    * repairNecessity  **参数解释**： 修复紧急度 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    * type  **参数解释**： 漏洞类型 **取值范围**： 不涉及
    * repairCmd  **参数解释**： 修复命令行 **取值范围**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'repairNecessity' => 'repair_necessity',
            'scanTime' => 'scan_time',
            'type' => 'type',
            'repairCmd' => 'repair_cmd',
            'severityLevel' => 'severity_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * vulId  **参数解释**： 漏洞ID **取值范围**： 不涉及
    * repairNecessity  **参数解释**： 修复紧急度 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    * type  **参数解释**： 漏洞类型 **取值范围**： 不涉及
    * repairCmd  **参数解释**： 修复命令行 **取值范围**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'repairNecessity' => 'setRepairNecessity',
            'scanTime' => 'setScanTime',
            'type' => 'setType',
            'repairCmd' => 'setRepairCmd',
            'severityLevel' => 'setSeverityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * vulId  **参数解释**： 漏洞ID **取值范围**： 不涉及
    * repairNecessity  **参数解释**： 修复紧急度 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    * type  **参数解释**： 漏洞类型 **取值范围**： 不涉及
    * repairCmd  **参数解释**： 修复命令行 **取值范围**： 不涉及
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'repairNecessity' => 'getRepairNecessity',
            'scanTime' => 'getScanTime',
            'type' => 'getType',
            'repairCmd' => 'getRepairCmd',
            'severityLevel' => 'getSeverityLevel'
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
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['repairCmd'] = isset($data['repairCmd']) ? $data['repairCmd'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets vulName
    *  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**： 漏洞名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**： 漏洞ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**： 漏洞ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**： 修复紧急度 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity **参数解释**： 修复紧急度 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**： 最近扫描时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 漏洞类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 漏洞类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets repairCmd
    *  **参数解释**： 修复命令行 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRepairCmd()
    {
        return $this->container['repairCmd'];
    }

    /**
    * Sets repairCmd
    *
    * @param string|null $repairCmd **参数解释**： 修复命令行 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRepairCmd($repairCmd)
    {
        $this->container['repairCmd'] = $repairCmd;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
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

