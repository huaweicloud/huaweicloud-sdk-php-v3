<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulScanPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulScanPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanPeriod  **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    * scanVulTypes  **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    * scanRangeType  **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    * hostIds  **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    * totalHostNum  **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    * status  **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
    * time  time
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanPeriod' => 'string',
            'scanVulTypes' => 'string[]',
            'scanRangeType' => 'string',
            'hostIds' => 'string[]',
            'totalHostNum' => 'int',
            'status' => 'string',
            'time' => '\HuaweiCloud\SDK\Hss\V5\Model\VulScanPolicyResponseInfoTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanPeriod  **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    * scanVulTypes  **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    * scanRangeType  **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    * hostIds  **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    * totalHostNum  **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    * status  **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
    * time  time
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanPeriod' => null,
        'scanVulTypes' => null,
        'scanRangeType' => null,
        'hostIds' => null,
        'totalHostNum' => 'int64',
        'status' => null,
        'time' => null
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
    * scanPeriod  **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    * scanVulTypes  **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    * scanRangeType  **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    * hostIds  **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    * totalHostNum  **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    * status  **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
    * time  time
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanPeriod' => 'scan_period',
            'scanVulTypes' => 'scan_vul_types',
            'scanRangeType' => 'scan_range_type',
            'hostIds' => 'host_ids',
            'totalHostNum' => 'total_host_num',
            'status' => 'status',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanPeriod  **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    * scanVulTypes  **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    * scanRangeType  **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    * hostIds  **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    * totalHostNum  **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    * status  **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
    * time  time
    *
    * @var string[]
    */
    protected static $setters = [
            'scanPeriod' => 'setScanPeriod',
            'scanVulTypes' => 'setScanVulTypes',
            'scanRangeType' => 'setScanRangeType',
            'hostIds' => 'setHostIds',
            'totalHostNum' => 'setTotalHostNum',
            'status' => 'setStatus',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanPeriod  **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    * scanVulTypes  **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    * scanRangeType  **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    * hostIds  **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    * totalHostNum  **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    * status  **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
    * time  time
    *
    * @var string[]
    */
    protected static $getters = [
            'scanPeriod' => 'getScanPeriod',
            'scanVulTypes' => 'getScanVulTypes',
            'scanRangeType' => 'getScanRangeType',
            'hostIds' => 'getHostIds',
            'totalHostNum' => 'getTotalHostNum',
            'status' => 'getStatus',
            'time' => 'getTime'
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
        $this->container['scanPeriod'] = isset($data['scanPeriod']) ? $data['scanPeriod'] : null;
        $this->container['scanVulTypes'] = isset($data['scanVulTypes']) ? $data['scanVulTypes'] : null;
        $this->container['scanRangeType'] = isset($data['scanRangeType']) ? $data['scanRangeType'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['totalHostNum'] = isset($data['totalHostNum']) ? $data['totalHostNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanPeriod']) && (mb_strlen($this->container['scanPeriod']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanPeriod', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanPeriod']) && (mb_strlen($this->container['scanPeriod']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanPeriod', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanRangeType']) && (mb_strlen($this->container['scanRangeType']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanRangeType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanRangeType']) && (mb_strlen($this->container['scanRangeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanRangeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalHostNum']) && ($this->container['totalHostNum'] > 20000)) {
                $invalidProperties[] = "invalid value for 'totalHostNum', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['totalHostNum']) && ($this->container['totalHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets scanPeriod
    *  **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    *
    * @return string|null
    */
    public function getScanPeriod()
    {
        return $this->container['scanPeriod'];
    }

    /**
    * Sets scanPeriod
    *
    * @param string|null $scanPeriod **参数解释**: 扫描周期 **取值范围**: - one_day：每天 - three_day：每三天 - one_week：每周 - one_month：每月
    *
    * @return $this
    */
    public function setScanPeriod($scanPeriod)
    {
        $this->container['scanPeriod'] = $scanPeriod;
        return $this;
    }

    /**
    * Gets scanVulTypes
    *  **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    *
    * @return string[]|null
    */
    public function getScanVulTypes()
    {
        return $this->container['scanVulTypes'];
    }

    /**
    * Sets scanVulTypes
    *
    * @param string[]|null $scanVulTypes **参数解释**: \"扫描的漏洞类型列表\" **取值范围**: 最小值0，最大值5
    *
    * @return $this
    */
    public function setScanVulTypes($scanVulTypes)
    {
        $this->container['scanVulTypes'] = $scanVulTypes;
        return $this;
    }

    /**
    * Gets scanRangeType
    *  **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    *
    * @return string|null
    */
    public function getScanRangeType()
    {
        return $this->container['scanRangeType'];
    }

    /**
    * Sets scanRangeType
    *
    * @param string|null $scanRangeType **参数解释**: 扫描主机的范围 **取值范围**: - all_host：扫描全部主机 - specific_host：扫描指定主机
    *
    * @return $this
    */
    public function setScanRangeType($scanRangeType)
    {
        $this->container['scanRangeType'] = $scanRangeType;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**: 主机ID列表；当scan_range_type的值为specific_host时表示扫描的主机列表 **取值范围**: 最小值0，最大值20000
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets totalHostNum
    *  **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    *
    * @return int|null
    */
    public function getTotalHostNum()
    {
        return $this->container['totalHostNum'];
    }

    /**
    * Sets totalHostNum
    *
    * @param int|null $totalHostNum **参数解释**: 可进行漏洞扫描的主机总数 **取值范围**: 最小值0，最大值20000
    *
    * @return $this
    */
    public function setTotalHostNum($totalHostNum)
    {
        $this->container['totalHostNum'] = $totalHostNum;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
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
    * @param string|null $status **参数解释**: 扫描策略状态 **取值范围**: - open : 开启 - close : 关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets time
    *  time
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulScanPolicyResponseInfoTime|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulScanPolicyResponseInfoTime|null $time time
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

