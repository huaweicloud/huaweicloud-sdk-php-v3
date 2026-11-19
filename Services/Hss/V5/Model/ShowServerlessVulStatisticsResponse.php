<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerlessVulStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerlessVulStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalAppVulNum  **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyAppVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * totalLinuxVulNum  **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyLinuxVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * riskyPodNum  **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    * totalScanNum  **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    * lastUpdateTime  **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    * scanningTaskNum  **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalAppVulNum' => 'int',
            'highRiskyAppVul' => 'int',
            'totalLinuxVulNum' => 'int',
            'highRiskyLinuxVul' => 'int',
            'riskyPodNum' => 'int',
            'totalScanNum' => 'int',
            'lastUpdateTime' => 'int',
            'scanningTaskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalAppVulNum  **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyAppVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * totalLinuxVulNum  **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyLinuxVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * riskyPodNum  **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    * totalScanNum  **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    * lastUpdateTime  **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    * scanningTaskNum  **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalAppVulNum' => 'int32',
        'highRiskyAppVul' => 'int32',
        'totalLinuxVulNum' => 'int32',
        'highRiskyLinuxVul' => 'int32',
        'riskyPodNum' => 'int32',
        'totalScanNum' => 'int32',
        'lastUpdateTime' => 'int64',
        'scanningTaskNum' => 'int64'
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
    * totalAppVulNum  **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyAppVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * totalLinuxVulNum  **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyLinuxVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * riskyPodNum  **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    * totalScanNum  **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    * lastUpdateTime  **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    * scanningTaskNum  **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalAppVulNum' => 'total_app_vul_num',
            'highRiskyAppVul' => 'high_risky_app_vul',
            'totalLinuxVulNum' => 'total_linux_vul_num',
            'highRiskyLinuxVul' => 'high_risky_linux_vul',
            'riskyPodNum' => 'risky_pod_num',
            'totalScanNum' => 'total_scan_num',
            'lastUpdateTime' => 'last_update_time',
            'scanningTaskNum' => 'scanning_task_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalAppVulNum  **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyAppVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * totalLinuxVulNum  **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyLinuxVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * riskyPodNum  **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    * totalScanNum  **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    * lastUpdateTime  **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    * scanningTaskNum  **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @var string[]
    */
    protected static $setters = [
            'totalAppVulNum' => 'setTotalAppVulNum',
            'highRiskyAppVul' => 'setHighRiskyAppVul',
            'totalLinuxVulNum' => 'setTotalLinuxVulNum',
            'highRiskyLinuxVul' => 'setHighRiskyLinuxVul',
            'riskyPodNum' => 'setRiskyPodNum',
            'totalScanNum' => 'setTotalScanNum',
            'lastUpdateTime' => 'setLastUpdateTime',
            'scanningTaskNum' => 'setScanningTaskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalAppVulNum  **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyAppVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * totalLinuxVulNum  **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    * highRiskyLinuxVul  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    * riskyPodNum  **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    * totalScanNum  **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    * lastUpdateTime  **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    * scanningTaskNum  **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @var string[]
    */
    protected static $getters = [
            'totalAppVulNum' => 'getTotalAppVulNum',
            'highRiskyAppVul' => 'getHighRiskyAppVul',
            'totalLinuxVulNum' => 'getTotalLinuxVulNum',
            'highRiskyLinuxVul' => 'getHighRiskyLinuxVul',
            'riskyPodNum' => 'getRiskyPodNum',
            'totalScanNum' => 'getTotalScanNum',
            'lastUpdateTime' => 'getLastUpdateTime',
            'scanningTaskNum' => 'getScanningTaskNum'
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
        $this->container['totalAppVulNum'] = isset($data['totalAppVulNum']) ? $data['totalAppVulNum'] : null;
        $this->container['highRiskyAppVul'] = isset($data['highRiskyAppVul']) ? $data['highRiskyAppVul'] : null;
        $this->container['totalLinuxVulNum'] = isset($data['totalLinuxVulNum']) ? $data['totalLinuxVulNum'] : null;
        $this->container['highRiskyLinuxVul'] = isset($data['highRiskyLinuxVul']) ? $data['highRiskyLinuxVul'] : null;
        $this->container['riskyPodNum'] = isset($data['riskyPodNum']) ? $data['riskyPodNum'] : null;
        $this->container['totalScanNum'] = isset($data['totalScanNum']) ? $data['totalScanNum'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['scanningTaskNum'] = isset($data['scanningTaskNum']) ? $data['scanningTaskNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalAppVulNum']) && ($this->container['totalAppVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalAppVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalAppVulNum']) && ($this->container['totalAppVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalAppVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highRiskyAppVul']) && ($this->container['highRiskyAppVul'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highRiskyAppVul', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highRiskyAppVul']) && ($this->container['highRiskyAppVul'] < 0)) {
                $invalidProperties[] = "invalid value for 'highRiskyAppVul', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalLinuxVulNum']) && ($this->container['totalLinuxVulNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalLinuxVulNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalLinuxVulNum']) && ($this->container['totalLinuxVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalLinuxVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highRiskyLinuxVul']) && ($this->container['highRiskyLinuxVul'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highRiskyLinuxVul', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highRiskyLinuxVul']) && ($this->container['highRiskyLinuxVul'] < 0)) {
                $invalidProperties[] = "invalid value for 'highRiskyLinuxVul', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskyPodNum']) && ($this->container['riskyPodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskyPodNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskyPodNum']) && ($this->container['riskyPodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyPodNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalScanNum']) && ($this->container['totalScanNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalScanNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalScanNum']) && ($this->container['totalScanNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalScanNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanningTaskNum']) && ($this->container['scanningTaskNum'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'scanningTaskNum', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['scanningTaskNum']) && ($this->container['scanningTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanningTaskNum', must be bigger than or equal to 0.";
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
    * Gets totalAppVulNum
    *  **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalAppVulNum()
    {
        return $this->container['totalAppVulNum'];
    }

    /**
    * Sets totalAppVulNum
    *
    * @param int|null $totalAppVulNum **参数解释**: 应用漏洞总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalAppVulNum($totalAppVulNum)
    {
        $this->container['totalAppVulNum'] = $totalAppVulNum;
        return $this;
    }

    /**
    * Gets highRiskyAppVul
    *  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHighRiskyAppVul()
    {
        return $this->container['highRiskyAppVul'];
    }

    /**
    * Sets highRiskyAppVul
    *
    * @param int|null $highRiskyAppVul **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHighRiskyAppVul($highRiskyAppVul)
    {
        $this->container['highRiskyAppVul'] = $highRiskyAppVul;
        return $this;
    }

    /**
    * Gets totalLinuxVulNum
    *  **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalLinuxVulNum()
    {
        return $this->container['totalLinuxVulNum'];
    }

    /**
    * Sets totalLinuxVulNum
    *
    * @param int|null $totalLinuxVulNum **参数解释**: linux漏洞总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalLinuxVulNum($totalLinuxVulNum)
    {
        $this->container['totalLinuxVulNum'] = $totalLinuxVulNum;
        return $this;
    }

    /**
    * Gets highRiskyLinuxVul
    *  **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHighRiskyLinuxVul()
    {
        return $this->container['highRiskyLinuxVul'];
    }

    /**
    * Sets highRiskyLinuxVul
    *
    * @param int|null $highRiskyLinuxVul **参数解释**: 高风险应用漏洞数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHighRiskyLinuxVul($highRiskyLinuxVul)
    {
        $this->container['highRiskyLinuxVul'] = $highRiskyLinuxVul;
        return $this;
    }

    /**
    * Gets riskyPodNum
    *  **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRiskyPodNum()
    {
        return $this->container['riskyPodNum'];
    }

    /**
    * Sets riskyPodNum
    *
    * @param int|null $riskyPodNum **参数解释**: 存在漏洞的实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskyPodNum($riskyPodNum)
    {
        $this->container['riskyPodNum'] = $riskyPodNum;
        return $this;
    }

    /**
    * Gets totalScanNum
    *  **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalScanNum()
    {
        return $this->container['totalScanNum'];
    }

    /**
    * Sets totalScanNum
    *
    * @param int|null $totalScanNum **参数解释**: 累计手动漏洞扫描次数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalScanNum($totalScanNum)
    {
        $this->container['totalScanNum'] = $totalScanNum;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime **参数解释**: 最近检测时间 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets scanningTaskNum
    *  **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return int|null
    */
    public function getScanningTaskNum()
    {
        return $this->container['scanningTaskNum'];
    }

    /**
    * Sets scanningTaskNum
    *
    * @param int|null $scanningTaskNum **参数解释**: 正在扫描数 **取值范围**: 最小值0，最大值4071095999000
    *
    * @return $this
    */
    public function setScanningTaskNum($scanningTaskNum)
    {
        $this->container['scanningTaskNum'] = $scanningTaskNum;
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

