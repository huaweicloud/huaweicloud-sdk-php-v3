<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulReportDataResponseInfoVulnerabilities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulReportDataResponseInfo_vulnerabilities';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * type  **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
    * cveList  CVE列表
    * repairPriority  **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * hostNum  **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    * hostIdList  **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'scanTime' => 'int',
            'type' => 'string',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoCveList[]',
            'repairPriority' => 'string',
            'hostNum' => 'int',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * type  **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
    * cveList  CVE列表
    * repairPriority  **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * hostNum  **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    * hostIdList  **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'scanTime' => 'int64',
        'type' => null,
        'cveList' => null,
        'repairPriority' => null,
        'hostNum' => 'int32',
        'hostIdList' => null
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
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * type  **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
    * cveList  CVE列表
    * repairPriority  **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * hostNum  **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    * hostIdList  **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'scanTime' => 'scan_time',
            'type' => 'type',
            'cveList' => 'cve_list',
            'repairPriority' => 'repair_priority',
            'hostNum' => 'host_num',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * type  **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
    * cveList  CVE列表
    * repairPriority  **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * hostNum  **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    * hostIdList  **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'scanTime' => 'setScanTime',
            'type' => 'setType',
            'cveList' => 'setCveList',
            'repairPriority' => 'setRepairPriority',
            'hostNum' => 'setHostNum',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * type  **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
    * cveList  CVE列表
    * repairPriority  **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    * hostNum  **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    * hostIdList  **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'scanTime' => 'getScanTime',
            'type' => 'getType',
            'cveList' => 'getCveList',
            'repairPriority' => 'getRepairPriority',
            'hostNum' => 'getHostNum',
            'hostIdList' => 'getHostIdList'
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
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 32)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 20000)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
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
    * Gets vulName
    *  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
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
    * @param string|null $vulName **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
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
    * @param int|null $scanTime **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
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
    *  **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
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
    * @param string|null $type **参数解释**： 漏洞类型 **取值范围**： - linux_vul：linux漏洞。 - windows_vul：windows漏洞。 - web_cms：Web-CMS漏洞。 - app_vul：应用漏洞。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cveList
    *  CVE列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoCveList[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoCveList[]|null $cveList CVE列表
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets repairPriority
    *  **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    *
    * @return string|null
    */
    public function getRepairPriority()
    {
        return $this->container['repairPriority'];
    }

    /**
    * Sets repairPriority
    *
    * @param string|null $repairPriority **参数解释**： 修复优先级 **取值范围**： - Critical：紧急。 - High：高。 - Medium：中。 - Low：低。
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**： 影响主机数量 **取值范围**： 最小值0，最大值20000
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**: 主机ID列表(数组长度跟host_num对不上时，主机数量以host_num为准) **取值范围**: 最小值0，最大值20000
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

