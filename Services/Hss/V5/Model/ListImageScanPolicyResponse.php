<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageScanPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageScanPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAll  扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * totalRegistryNum  镜像仓库列表总数
    * registryList  镜像列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAll' => 'bool',
            'enabled' => 'bool',
            'scanCycle' => 'int',
            'scanScope' => 'int',
            'rateLimit' => 'int',
            'timeScope' => 'int',
            'totalRegistryNum' => 'int',
            'registryList' => '\HuaweiCloud\SDK\Hss\V5\Model\ImageScanPolicyRespInfoRegistryList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAll  扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * totalRegistryNum  镜像仓库列表总数
    * registryList  镜像列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAll' => null,
        'enabled' => null,
        'scanCycle' => null,
        'scanScope' => null,
        'rateLimit' => null,
        'timeScope' => null,
        'totalRegistryNum' => null,
        'registryList' => null
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
    * isAll  扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * totalRegistryNum  镜像仓库列表总数
    * registryList  镜像列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAll' => 'is_all',
            'enabled' => 'enabled',
            'scanCycle' => 'scan_cycle',
            'scanScope' => 'scan_scope',
            'rateLimit' => 'rate_limit',
            'timeScope' => 'time_scope',
            'totalRegistryNum' => 'total_registry_num',
            'registryList' => 'registry_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAll  扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * totalRegistryNum  镜像仓库列表总数
    * registryList  镜像列表
    *
    * @var string[]
    */
    protected static $setters = [
            'isAll' => 'setIsAll',
            'enabled' => 'setEnabled',
            'scanCycle' => 'setScanCycle',
            'scanScope' => 'setScanScope',
            'rateLimit' => 'setRateLimit',
            'timeScope' => 'setTimeScope',
            'totalRegistryNum' => 'setTotalRegistryNum',
            'registryList' => 'setRegistryList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAll  扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    * enabled  定时扫描策略开关
    * scanCycle  定时扫描周期 | 3 每三天 7 每一周 14 每两周
    * scanScope  扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
    * rateLimit  扫描限速 单位：个/h | 0 不限制
    * timeScope  时间范围 单位：天 | 0 全部镜像 1 3 7
    * totalRegistryNum  镜像仓库列表总数
    * registryList  镜像列表
    *
    * @var string[]
    */
    protected static $getters = [
            'isAll' => 'getIsAll',
            'enabled' => 'getEnabled',
            'scanCycle' => 'getScanCycle',
            'scanScope' => 'getScanScope',
            'rateLimit' => 'getRateLimit',
            'timeScope' => 'getTimeScope',
            'totalRegistryNum' => 'getTotalRegistryNum',
            'registryList' => 'getRegistryList'
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
        $this->container['isAll'] = isset($data['isAll']) ? $data['isAll'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['scanCycle'] = isset($data['scanCycle']) ? $data['scanCycle'] : null;
        $this->container['scanScope'] = isset($data['scanScope']) ? $data['scanScope'] : null;
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['timeScope'] = isset($data['timeScope']) ? $data['timeScope'] : null;
        $this->container['totalRegistryNum'] = isset($data['totalRegistryNum']) ? $data['totalRegistryNum'] : null;
        $this->container['registryList'] = isset($data['registryList']) ? $data['registryList'] : null;
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
    * Gets isAll
    *  扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    *
    * @return bool|null
    */
    public function getIsAll()
    {
        return $this->container['isAll'];
    }

    /**
    * Sets isAll
    *
    * @param bool|null $isAll 扫描全部镜像 | true:扫描全部镜像 false:指定镜像扫描
    *
    * @return $this
    */
    public function setIsAll($isAll)
    {
        $this->container['isAll'] = $isAll;
        return $this;
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
    *  扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
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
    * @param int|null $scanScope 扫描风险类型 | 0:无 0x0fffff:全部 0x0f0000:漏洞 0x00f000:基线检查 0x000f00:恶意文件 0x0000f0:敏感信息 0x00000f:软件合规
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
    * Gets totalRegistryNum
    *  镜像仓库列表总数
    *
    * @return int|null
    */
    public function getTotalRegistryNum()
    {
        return $this->container['totalRegistryNum'];
    }

    /**
    * Sets totalRegistryNum
    *
    * @param int|null $totalRegistryNum 镜像仓库列表总数
    *
    * @return $this
    */
    public function setTotalRegistryNum($totalRegistryNum)
    {
        $this->container['totalRegistryNum'] = $totalRegistryNum;
        return $this;
    }

    /**
    * Gets registryList
    *  镜像列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ImageScanPolicyRespInfoRegistryList[]|null
    */
    public function getRegistryList()
    {
        return $this->container['registryList'];
    }

    /**
    * Sets registryList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ImageScanPolicyRespInfoRegistryList[]|null $registryList 镜像列表
    *
    * @return $this
    */
    public function setRegistryList($registryList)
    {
        $this->container['registryList'] = $registryList;
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

