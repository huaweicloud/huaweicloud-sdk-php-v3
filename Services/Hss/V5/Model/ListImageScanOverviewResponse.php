<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageScanOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageScanOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalImageNum  **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    * riskyImageNum  **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    * vulsNum  **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * riskyConfigNum  **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    * malwaresNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * unscannedNum  **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    * scanningTaskNum  **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * finishedTaskNum  **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    * latestScanTime  **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * localScanningTaskNum  **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * localFinishedTaskNum  **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalImageNum' => 'int',
            'riskyImageNum' => 'int',
            'vulsNum' => 'int',
            'riskyConfigNum' => 'int',
            'malwaresNum' => 'int',
            'unscannedNum' => 'int',
            'scanningTaskNum' => 'int',
            'finishedTaskNum' => 'int',
            'latestScanTime' => 'int',
            'localScanningTaskNum' => 'int',
            'localFinishedTaskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalImageNum  **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    * riskyImageNum  **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    * vulsNum  **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * riskyConfigNum  **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    * malwaresNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * unscannedNum  **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    * scanningTaskNum  **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * finishedTaskNum  **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    * latestScanTime  **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * localScanningTaskNum  **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * localFinishedTaskNum  **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalImageNum' => 'int32',
        'riskyImageNum' => 'int32',
        'vulsNum' => 'int32',
        'riskyConfigNum' => 'int32',
        'malwaresNum' => 'int32',
        'unscannedNum' => 'int32',
        'scanningTaskNum' => 'int32',
        'finishedTaskNum' => 'int32',
        'latestScanTime' => 'int64',
        'localScanningTaskNum' => 'int32',
        'localFinishedTaskNum' => 'int32'
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
    * totalImageNum  **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    * riskyImageNum  **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    * vulsNum  **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * riskyConfigNum  **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    * malwaresNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * unscannedNum  **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    * scanningTaskNum  **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * finishedTaskNum  **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    * latestScanTime  **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * localScanningTaskNum  **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * localFinishedTaskNum  **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalImageNum' => 'total_image_num',
            'riskyImageNum' => 'risky_image_num',
            'vulsNum' => 'vuls_num',
            'riskyConfigNum' => 'risky_config_num',
            'malwaresNum' => 'malwares_num',
            'unscannedNum' => 'unscanned_num',
            'scanningTaskNum' => 'scanning_task_num',
            'finishedTaskNum' => 'finished_task_num',
            'latestScanTime' => 'latest_scan_time',
            'localScanningTaskNum' => 'local_scanning_task_num',
            'localFinishedTaskNum' => 'local_finished_task_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalImageNum  **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    * riskyImageNum  **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    * vulsNum  **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * riskyConfigNum  **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    * malwaresNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * unscannedNum  **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    * scanningTaskNum  **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * finishedTaskNum  **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    * latestScanTime  **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * localScanningTaskNum  **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * localFinishedTaskNum  **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'totalImageNum' => 'setTotalImageNum',
            'riskyImageNum' => 'setRiskyImageNum',
            'vulsNum' => 'setVulsNum',
            'riskyConfigNum' => 'setRiskyConfigNum',
            'malwaresNum' => 'setMalwaresNum',
            'unscannedNum' => 'setUnscannedNum',
            'scanningTaskNum' => 'setScanningTaskNum',
            'finishedTaskNum' => 'setFinishedTaskNum',
            'latestScanTime' => 'setLatestScanTime',
            'localScanningTaskNum' => 'setLocalScanningTaskNum',
            'localFinishedTaskNum' => 'setLocalFinishedTaskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalImageNum  **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    * riskyImageNum  **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    * vulsNum  **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    * riskyConfigNum  **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    * malwaresNum  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    * unscannedNum  **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    * scanningTaskNum  **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * finishedTaskNum  **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    * latestScanTime  **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    * localScanningTaskNum  **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    * localFinishedTaskNum  **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'totalImageNum' => 'getTotalImageNum',
            'riskyImageNum' => 'getRiskyImageNum',
            'vulsNum' => 'getVulsNum',
            'riskyConfigNum' => 'getRiskyConfigNum',
            'malwaresNum' => 'getMalwaresNum',
            'unscannedNum' => 'getUnscannedNum',
            'scanningTaskNum' => 'getScanningTaskNum',
            'finishedTaskNum' => 'getFinishedTaskNum',
            'latestScanTime' => 'getLatestScanTime',
            'localScanningTaskNum' => 'getLocalScanningTaskNum',
            'localFinishedTaskNum' => 'getLocalFinishedTaskNum'
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
        $this->container['totalImageNum'] = isset($data['totalImageNum']) ? $data['totalImageNum'] : null;
        $this->container['riskyImageNum'] = isset($data['riskyImageNum']) ? $data['riskyImageNum'] : null;
        $this->container['vulsNum'] = isset($data['vulsNum']) ? $data['vulsNum'] : null;
        $this->container['riskyConfigNum'] = isset($data['riskyConfigNum']) ? $data['riskyConfigNum'] : null;
        $this->container['malwaresNum'] = isset($data['malwaresNum']) ? $data['malwaresNum'] : null;
        $this->container['unscannedNum'] = isset($data['unscannedNum']) ? $data['unscannedNum'] : null;
        $this->container['scanningTaskNum'] = isset($data['scanningTaskNum']) ? $data['scanningTaskNum'] : null;
        $this->container['finishedTaskNum'] = isset($data['finishedTaskNum']) ? $data['finishedTaskNum'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['localScanningTaskNum'] = isset($data['localScanningTaskNum']) ? $data['localScanningTaskNum'] : null;
        $this->container['localFinishedTaskNum'] = isset($data['localFinishedTaskNum']) ? $data['localFinishedTaskNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalImageNum']) && ($this->container['totalImageNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalImageNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalImageNum']) && ($this->container['totalImageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalImageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskyImageNum']) && ($this->container['riskyImageNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskyImageNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskyImageNum']) && ($this->container['riskyImageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyImageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulsNum']) && ($this->container['vulsNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulsNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulsNum']) && ($this->container['vulsNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulsNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskyConfigNum']) && ($this->container['riskyConfigNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskyConfigNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskyConfigNum']) && ($this->container['riskyConfigNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskyConfigNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['malwaresNum']) && ($this->container['malwaresNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'malwaresNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['malwaresNum']) && ($this->container['malwaresNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'malwaresNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unscannedNum']) && ($this->container['unscannedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unscannedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unscannedNum']) && ($this->container['unscannedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unscannedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanningTaskNum']) && ($this->container['scanningTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scanningTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scanningTaskNum']) && ($this->container['scanningTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanningTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finishedTaskNum']) && ($this->container['finishedTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'finishedTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['finishedTaskNum']) && ($this->container['finishedTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'finishedTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['latestScanTime']) && ($this->container['latestScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localScanningTaskNum']) && ($this->container['localScanningTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'localScanningTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['localScanningTaskNum']) && ($this->container['localScanningTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'localScanningTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['localFinishedTaskNum']) && ($this->container['localFinishedTaskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'localFinishedTaskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['localFinishedTaskNum']) && ($this->container['localFinishedTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'localFinishedTaskNum', must be bigger than or equal to 0.";
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
    * Gets totalImageNum
    *  **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalImageNum()
    {
        return $this->container['totalImageNum'];
    }

    /**
    * Sets totalImageNum
    *
    * @param int|null $totalImageNum **参数解释**: 镜像总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalImageNum($totalImageNum)
    {
        $this->container['totalImageNum'] = $totalImageNum;
        return $this;
    }

    /**
    * Gets riskyImageNum
    *  **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRiskyImageNum()
    {
        return $this->container['riskyImageNum'];
    }

    /**
    * Sets riskyImageNum
    *
    * @param int|null $riskyImageNum **参数解释**: 存在风险的镜像数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskyImageNum($riskyImageNum)
    {
        $this->container['riskyImageNum'] = $riskyImageNum;
        return $this;
    }

    /**
    * Gets vulsNum
    *  **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getVulsNum()
    {
        return $this->container['vulsNum'];
    }

    /**
    * Sets vulsNum
    *
    * @param int|null $vulsNum **参数解释**: 漏洞数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setVulsNum($vulsNum)
    {
        $this->container['vulsNum'] = $vulsNum;
        return $this;
    }

    /**
    * Gets riskyConfigNum
    *  **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRiskyConfigNum()
    {
        return $this->container['riskyConfigNum'];
    }

    /**
    * Sets riskyConfigNum
    *
    * @param int|null $riskyConfigNum **参数解释**: 风险配置数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskyConfigNum($riskyConfigNum)
    {
        $this->container['riskyConfigNum'] = $riskyConfigNum;
        return $this;
    }

    /**
    * Gets malwaresNum
    *  **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getMalwaresNum()
    {
        return $this->container['malwaresNum'];
    }

    /**
    * Sets malwaresNum
    *
    * @param int|null $malwaresNum **参数解释**: 恶意文件数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setMalwaresNum($malwaresNum)
    {
        $this->container['malwaresNum'] = $malwaresNum;
        return $this;
    }

    /**
    * Gets unscannedNum
    *  **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnscannedNum()
    {
        return $this->container['unscannedNum'];
    }

    /**
    * Sets unscannedNum
    *
    * @param int|null $unscannedNum **参数解释**: 未扫描数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnscannedNum($unscannedNum)
    {
        $this->container['unscannedNum'] = $unscannedNum;
        return $this;
    }

    /**
    * Gets scanningTaskNum
    *  **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $scanningTaskNum **参数解释**: 扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setScanningTaskNum($scanningTaskNum)
    {
        $this->container['scanningTaskNum'] = $scanningTaskNum;
        return $this;
    }

    /**
    * Gets finishedTaskNum
    *  **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFinishedTaskNum()
    {
        return $this->container['finishedTaskNum'];
    }

    /**
    * Sets finishedTaskNum
    *
    * @param int|null $finishedTaskNum **参数解释**: 已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFinishedTaskNum($finishedTaskNum)
    {
        $this->container['finishedTaskNum'] = $finishedTaskNum;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $latestScanTime **参数解释**: 最近扫描时间，毫秒级时间戳 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets localScanningTaskNum
    *  **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLocalScanningTaskNum()
    {
        return $this->container['localScanningTaskNum'];
    }

    /**
    * Sets localScanningTaskNum
    *
    * @param int|null $localScanningTaskNum **参数解释**: 本地扫描中任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLocalScanningTaskNum($localScanningTaskNum)
    {
        $this->container['localScanningTaskNum'] = $localScanningTaskNum;
        return $this;
    }

    /**
    * Gets localFinishedTaskNum
    *  **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getLocalFinishedTaskNum()
    {
        return $this->container['localFinishedTaskNum'];
    }

    /**
    * Sets localFinishedTaskNum
    *
    * @param int|null $localFinishedTaskNum **参数解释**: 本地已完成任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLocalFinishedTaskNum($localFinishedTaskNum)
    {
        $this->container['localFinishedTaskNum'] = $localFinishedTaskNum;
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

