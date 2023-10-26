<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeVulScanPolicyRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeVulScanPolicyRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanPeriod  扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    * scanRangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
    * hostIds  主机ID列表；当scan_range_type的值为specific_host时必填
    * status  扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanPeriod' => 'string',
            'scanRangeType' => 'string',
            'hostIds' => 'string[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanPeriod  扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    * scanRangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
    * hostIds  主机ID列表；当scan_range_type的值为specific_host时必填
    * status  扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanPeriod' => null,
        'scanRangeType' => null,
        'hostIds' => null,
        'status' => null
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
    * scanPeriod  扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    * scanRangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
    * hostIds  主机ID列表；当scan_range_type的值为specific_host时必填
    * status  扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanPeriod' => 'scan_period',
            'scanRangeType' => 'scan_range_type',
            'hostIds' => 'host_ids',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanPeriod  扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    * scanRangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
    * hostIds  主机ID列表；当scan_range_type的值为specific_host时必填
    * status  扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'scanPeriod' => 'setScanPeriod',
            'scanRangeType' => 'setScanRangeType',
            'hostIds' => 'setHostIds',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanPeriod  扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    * scanRangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
    * hostIds  主机ID列表；当scan_range_type的值为specific_host时必填
    * status  扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'scanPeriod' => 'getScanPeriod',
            'scanRangeType' => 'getScanRangeType',
            'hostIds' => 'getHostIds',
            'status' => 'getStatus'
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
        $this->container['scanRangeType'] = isset($data['scanRangeType']) ? $data['scanRangeType'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scanPeriod'] === null) {
            $invalidProperties[] = "'scanPeriod' can't be null";
        }
            if ((mb_strlen($this->container['scanPeriod']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanPeriod', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['scanPeriod']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanPeriod', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scanRangeType'] === null) {
            $invalidProperties[] = "'scanRangeType' can't be null";
        }
            if ((mb_strlen($this->container['scanRangeType']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanRangeType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['scanRangeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanRangeType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
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
    *  扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    *
    * @return string
    */
    public function getScanPeriod()
    {
        return $this->container['scanPeriod'];
    }

    /**
    * Sets scanPeriod
    *
    * @param string $scanPeriod 扫描周期 - one_day : 每天 - three_day : 每三天 - one_week : 每周
    *
    * @return $this
    */
    public function setScanPeriod($scanPeriod)
    {
        $this->container['scanPeriod'] = $scanPeriod;
        return $this;
    }

    /**
    * Gets scanRangeType
    *  扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
    *
    * @return string
    */
    public function getScanRangeType()
    {
        return $this->container['scanRangeType'];
    }

    /**
    * Sets scanRangeType
    *
    * @param string $scanRangeType 扫描主机的范围，包含如下：   -all_host : 扫描全部主机   -specific_host : 扫描指定主机
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
    *  主机ID列表；当scan_range_type的值为specific_host时必填
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
    * @param string[]|null $hostIds 主机ID列表；当scan_range_type的值为specific_host时必填
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets status
    *  扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 扫描策略状态，包含如下：   -open : 开启   -close : 关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

