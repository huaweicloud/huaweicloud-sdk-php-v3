<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAntivirusStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAntivirusStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalMalwareNum  病毒总数
    * malwareHostNum  关联服务器数
    * totalTaskNum  累计扫描任务数
    * scanningTaskNum  运行中任务数
    * latestScanTime  启动时间，毫秒
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalMalwareNum' => 'int',
            'malwareHostNum' => 'int',
            'totalTaskNum' => 'int',
            'scanningTaskNum' => 'int',
            'latestScanTime' => 'int',
            'scanType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalMalwareNum  病毒总数
    * malwareHostNum  关联服务器数
    * totalTaskNum  累计扫描任务数
    * scanningTaskNum  运行中任务数
    * latestScanTime  启动时间，毫秒
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalMalwareNum' => 'int32',
        'malwareHostNum' => 'int32',
        'totalTaskNum' => 'int32',
        'scanningTaskNum' => 'int32',
        'latestScanTime' => 'int64',
        'scanType' => null
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
    * totalMalwareNum  病毒总数
    * malwareHostNum  关联服务器数
    * totalTaskNum  累计扫描任务数
    * scanningTaskNum  运行中任务数
    * latestScanTime  启动时间，毫秒
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalMalwareNum' => 'total_malware_num',
            'malwareHostNum' => 'malware_host_num',
            'totalTaskNum' => 'total_task_num',
            'scanningTaskNum' => 'scanning_task_num',
            'latestScanTime' => 'latest_scan_time',
            'scanType' => 'scan_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalMalwareNum  病毒总数
    * malwareHostNum  关联服务器数
    * totalTaskNum  累计扫描任务数
    * scanningTaskNum  运行中任务数
    * latestScanTime  启动时间，毫秒
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @var string[]
    */
    protected static $setters = [
            'totalMalwareNum' => 'setTotalMalwareNum',
            'malwareHostNum' => 'setMalwareHostNum',
            'totalTaskNum' => 'setTotalTaskNum',
            'scanningTaskNum' => 'setScanningTaskNum',
            'latestScanTime' => 'setLatestScanTime',
            'scanType' => 'setScanType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalMalwareNum  病毒总数
    * malwareHostNum  关联服务器数
    * totalTaskNum  累计扫描任务数
    * scanningTaskNum  运行中任务数
    * latestScanTime  启动时间，毫秒
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @var string[]
    */
    protected static $getters = [
            'totalMalwareNum' => 'getTotalMalwareNum',
            'malwareHostNum' => 'getMalwareHostNum',
            'totalTaskNum' => 'getTotalTaskNum',
            'scanningTaskNum' => 'getScanningTaskNum',
            'latestScanTime' => 'getLatestScanTime',
            'scanType' => 'getScanType'
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
        $this->container['totalMalwareNum'] = isset($data['totalMalwareNum']) ? $data['totalMalwareNum'] : null;
        $this->container['malwareHostNum'] = isset($data['malwareHostNum']) ? $data['malwareHostNum'] : null;
        $this->container['totalTaskNum'] = isset($data['totalTaskNum']) ? $data['totalTaskNum'] : null;
        $this->container['scanningTaskNum'] = isset($data['scanningTaskNum']) ? $data['scanningTaskNum'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalMalwareNum']) && ($this->container['totalMalwareNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalMalwareNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalMalwareNum']) && ($this->container['totalMalwareNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalMalwareNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['malwareHostNum']) && ($this->container['malwareHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'malwareHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['malwareHostNum']) && ($this->container['malwareHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'malwareHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTaskNum']) && ($this->container['totalTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalTaskNum']) && ($this->container['totalTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanningTaskNum']) && ($this->container['scanningTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scanningTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scanningTaskNum']) && ($this->container['scanningTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanningTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 10)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
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
    * Gets totalMalwareNum
    *  病毒总数
    *
    * @return int|null
    */
    public function getTotalMalwareNum()
    {
        return $this->container['totalMalwareNum'];
    }

    /**
    * Sets totalMalwareNum
    *
    * @param int|null $totalMalwareNum 病毒总数
    *
    * @return $this
    */
    public function setTotalMalwareNum($totalMalwareNum)
    {
        $this->container['totalMalwareNum'] = $totalMalwareNum;
        return $this;
    }

    /**
    * Gets malwareHostNum
    *  关联服务器数
    *
    * @return int|null
    */
    public function getMalwareHostNum()
    {
        return $this->container['malwareHostNum'];
    }

    /**
    * Sets malwareHostNum
    *
    * @param int|null $malwareHostNum 关联服务器数
    *
    * @return $this
    */
    public function setMalwareHostNum($malwareHostNum)
    {
        $this->container['malwareHostNum'] = $malwareHostNum;
        return $this;
    }

    /**
    * Gets totalTaskNum
    *  累计扫描任务数
    *
    * @return int|null
    */
    public function getTotalTaskNum()
    {
        return $this->container['totalTaskNum'];
    }

    /**
    * Sets totalTaskNum
    *
    * @param int|null $totalTaskNum 累计扫描任务数
    *
    * @return $this
    */
    public function setTotalTaskNum($totalTaskNum)
    {
        $this->container['totalTaskNum'] = $totalTaskNum;
        return $this;
    }

    /**
    * Gets scanningTaskNum
    *  运行中任务数
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
    * @param int|null $scanningTaskNum 运行中任务数
    *
    * @return $this
    */
    public function setScanningTaskNum($scanningTaskNum)
    {
        $this->container['scanningTaskNum'] = $scanningTaskNum;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  启动时间，毫秒
    *
    * @return int|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param int|null $latestScanTime 启动时间，毫秒
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets scanType
    *  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType 任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
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

