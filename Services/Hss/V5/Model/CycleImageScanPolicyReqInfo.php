<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CycleImageScanPolicyReqInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CycleImageScanPolicyReqInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * registryInfo  镜像仓库列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'scanCycle' => 'int',
            'scanScope' => 'int',
            'rateLimit' => 'int',
            'timeScope' => 'int',
            'registryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CycleImageScanPolicyReqInfoRegistryInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * registryInfo  镜像仓库列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'scanCycle' => 'int32',
        'scanScope' => 'int32',
        'rateLimit' => 'int32',
        'timeScope' => 'int32',
        'registryInfo' => null
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
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * registryInfo  镜像仓库列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'scanCycle' => 'scan_cycle',
            'scanScope' => 'scan_scope',
            'rateLimit' => 'rate_limit',
            'timeScope' => 'time_scope',
            'registryInfo' => 'registry_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * registryInfo  镜像仓库列表
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'scanCycle' => 'setScanCycle',
            'scanScope' => 'setScanScope',
            'rateLimit' => 'setRateLimit',
            'timeScope' => 'setTimeScope',
            'registryInfo' => 'setRegistryInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * registryInfo  镜像仓库列表
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'scanCycle' => 'getScanCycle',
            'scanScope' => 'getScanScope',
            'rateLimit' => 'getRateLimit',
            'timeScope' => 'getTimeScope',
            'registryInfo' => 'getRegistryInfo'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['scanCycle'] = isset($data['scanCycle']) ? $data['scanCycle'] : null;
        $this->container['scanScope'] = isset($data['scanScope']) ? $data['scanScope'] : null;
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['timeScope'] = isset($data['timeScope']) ? $data['timeScope'] : null;
        $this->container['registryInfo'] = isset($data['registryInfo']) ? $data['registryInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanCycle']) && ($this->container['scanCycle'] > 31)) {
                $invalidProperties[] = "invalid value for 'scanCycle', must be smaller than or equal to 31.";
            }
            if (!is_null($this->container['scanCycle']) && ($this->container['scanCycle'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanCycle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['scanScope']) && ($this->container['scanScope'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanScope', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] > 1001)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be smaller than or equal to 1001.";
            }
            if (!is_null($this->container['rateLimit']) && ($this->container['rateLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'rateLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeScope']) && ($this->container['timeScope'] > 365)) {
                $invalidProperties[] = "invalid value for 'timeScope', must be smaller than or equal to 365.";
            }
            if (!is_null($this->container['timeScope']) && ($this->container['timeScope'] < 0)) {
                $invalidProperties[] = "invalid value for 'timeScope', must be bigger than or equal to 0.";
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
    * Gets enabled
    *  定时扫描策略开关
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 定时扫描策略开关
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets scanCycle
    *  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    *
    * @return int|null
    */
    public function getScanCycle()
    {
        return $this->container['scanCycle'];
    }

    /**
    * Sets scanCycle
    *
    * @param int|null $scanCycle 定时扫描周期 | 3 每三天 7 每一周 14 每两周
    *
    * @return $this
    */
    public function setScanCycle($scanCycle)
    {
        $this->container['scanCycle'] = $scanCycle;
        return $this;
    }

    /**
    * Gets scanScope
    *  扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    *
    * @return int|null
    */
    public function getScanScope()
    {
        return $this->container['scanScope'];
    }

    /**
    * Sets scanScope
    *
    * @param int|null $scanScope 扫描风险类型 | 0:无 0x7fffffff:全部 0x000f0000:漏洞 0x0000f000:基线检查 0x00000f00:恶意文件 0x000000f0:敏感信息 0x0000000f:软件合规
    *
    * @return $this
    */
    public function setScanScope($scanScope)
    {
        $this->container['scanScope'] = $scanScope;
        return $this;
    }

    /**
    * Gets rateLimit
    *  扫描限速 单位：个/h | 0 不限制
    *
    * @return int|null
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param int|null $rateLimit 扫描限速 单位：个/h | 0 不限制
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets timeScope
    *  时间范围 单位：天 | 0 全部镜像 1 3 7
    *
    * @return int|null
    */
    public function getTimeScope()
    {
        return $this->container['timeScope'];
    }

    /**
    * Sets timeScope
    *
    * @param int|null $timeScope 时间范围 单位：天 | 0 全部镜像 1 3 7
    *
    * @return $this
    */
    public function setTimeScope($timeScope)
    {
        $this->container['timeScope'] = $timeScope;
        return $this;
    }

    /**
    * Gets registryInfo
    *  镜像仓库列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CycleImageScanPolicyReqInfoRegistryInfo[]|null
    */
    public function getRegistryInfo()
    {
        return $this->container['registryInfo'];
    }

    /**
    * Sets registryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CycleImageScanPolicyReqInfoRegistryInfo[]|null $registryInfo 镜像仓库列表
    *
    * @return $this
    */
    public function setRegistryInfo($registryInfo)
    {
        $this->container['registryInfo'] = $registryInfo;
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

