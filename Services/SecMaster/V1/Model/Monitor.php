<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Monitor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Monitor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuIdle  CPU 空闲时间的百分比
    * cpuUsage  CPU 当前的使用率
    * diskCount  系统中磁盘设备的数量
    * diskUsage  当前磁盘空间使用量
    * downPps  下载数据包每秒数量
    * healthStatus  healthStatus
    * heartBeat  **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    * heartBeatTime  最后一次接收到心跳信号的时间
    * memoryCache  缓存数据的内存大小
    * memoryCount  物理内存条数量
    * memoryFree  当前空闲的物理内存量
    * memoryShared  多个进程共享使用的内存总量
    * memoryUsage  已使用的物理内存量
    * miniOnOnline  是否在线
    * readRate  磁盘读取速率
    * upPps  上传数据包每秒数量
    * writeRate  磁盘写入速率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuIdle' => 'string',
            'cpuUsage' => 'string',
            'diskCount' => 'string',
            'diskUsage' => 'string',
            'downPps' => 'string',
            'healthStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NodeHealthStatus',
            'heartBeat' => 'string',
            'heartBeatTime' => 'int',
            'memoryCache' => 'string',
            'memoryCount' => 'string',
            'memoryFree' => 'string',
            'memoryShared' => 'string',
            'memoryUsage' => 'string',
            'miniOnOnline' => 'string',
            'readRate' => 'string',
            'upPps' => 'string',
            'writeRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuIdle  CPU 空闲时间的百分比
    * cpuUsage  CPU 当前的使用率
    * diskCount  系统中磁盘设备的数量
    * diskUsage  当前磁盘空间使用量
    * downPps  下载数据包每秒数量
    * healthStatus  healthStatus
    * heartBeat  **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    * heartBeatTime  最后一次接收到心跳信号的时间
    * memoryCache  缓存数据的内存大小
    * memoryCount  物理内存条数量
    * memoryFree  当前空闲的物理内存量
    * memoryShared  多个进程共享使用的内存总量
    * memoryUsage  已使用的物理内存量
    * miniOnOnline  是否在线
    * readRate  磁盘读取速率
    * upPps  上传数据包每秒数量
    * writeRate  磁盘写入速率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuIdle' => null,
        'cpuUsage' => null,
        'diskCount' => null,
        'diskUsage' => null,
        'downPps' => null,
        'healthStatus' => null,
        'heartBeat' => null,
        'heartBeatTime' => 'int64',
        'memoryCache' => null,
        'memoryCount' => null,
        'memoryFree' => null,
        'memoryShared' => null,
        'memoryUsage' => null,
        'miniOnOnline' => null,
        'readRate' => null,
        'upPps' => null,
        'writeRate' => null
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
    * cpuIdle  CPU 空闲时间的百分比
    * cpuUsage  CPU 当前的使用率
    * diskCount  系统中磁盘设备的数量
    * diskUsage  当前磁盘空间使用量
    * downPps  下载数据包每秒数量
    * healthStatus  healthStatus
    * heartBeat  **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    * heartBeatTime  最后一次接收到心跳信号的时间
    * memoryCache  缓存数据的内存大小
    * memoryCount  物理内存条数量
    * memoryFree  当前空闲的物理内存量
    * memoryShared  多个进程共享使用的内存总量
    * memoryUsage  已使用的物理内存量
    * miniOnOnline  是否在线
    * readRate  磁盘读取速率
    * upPps  上传数据包每秒数量
    * writeRate  磁盘写入速率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuIdle' => 'cpu_idle',
            'cpuUsage' => 'cpu_usage',
            'diskCount' => 'disk_count',
            'diskUsage' => 'disk_usage',
            'downPps' => 'down_pps',
            'healthStatus' => 'health_status',
            'heartBeat' => 'heart_beat',
            'heartBeatTime' => 'heart_beat_time',
            'memoryCache' => 'memory_cache',
            'memoryCount' => 'memory_count',
            'memoryFree' => 'memory_free',
            'memoryShared' => 'memory_shared',
            'memoryUsage' => 'memory_usage',
            'miniOnOnline' => 'mini_on_online',
            'readRate' => 'read_rate',
            'upPps' => 'up_pps',
            'writeRate' => 'write_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuIdle  CPU 空闲时间的百分比
    * cpuUsage  CPU 当前的使用率
    * diskCount  系统中磁盘设备的数量
    * diskUsage  当前磁盘空间使用量
    * downPps  下载数据包每秒数量
    * healthStatus  healthStatus
    * heartBeat  **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    * heartBeatTime  最后一次接收到心跳信号的时间
    * memoryCache  缓存数据的内存大小
    * memoryCount  物理内存条数量
    * memoryFree  当前空闲的物理内存量
    * memoryShared  多个进程共享使用的内存总量
    * memoryUsage  已使用的物理内存量
    * miniOnOnline  是否在线
    * readRate  磁盘读取速率
    * upPps  上传数据包每秒数量
    * writeRate  磁盘写入速率
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuIdle' => 'setCpuIdle',
            'cpuUsage' => 'setCpuUsage',
            'diskCount' => 'setDiskCount',
            'diskUsage' => 'setDiskUsage',
            'downPps' => 'setDownPps',
            'healthStatus' => 'setHealthStatus',
            'heartBeat' => 'setHeartBeat',
            'heartBeatTime' => 'setHeartBeatTime',
            'memoryCache' => 'setMemoryCache',
            'memoryCount' => 'setMemoryCount',
            'memoryFree' => 'setMemoryFree',
            'memoryShared' => 'setMemoryShared',
            'memoryUsage' => 'setMemoryUsage',
            'miniOnOnline' => 'setMiniOnOnline',
            'readRate' => 'setReadRate',
            'upPps' => 'setUpPps',
            'writeRate' => 'setWriteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuIdle  CPU 空闲时间的百分比
    * cpuUsage  CPU 当前的使用率
    * diskCount  系统中磁盘设备的数量
    * diskUsage  当前磁盘空间使用量
    * downPps  下载数据包每秒数量
    * healthStatus  healthStatus
    * heartBeat  **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    * heartBeatTime  最后一次接收到心跳信号的时间
    * memoryCache  缓存数据的内存大小
    * memoryCount  物理内存条数量
    * memoryFree  当前空闲的物理内存量
    * memoryShared  多个进程共享使用的内存总量
    * memoryUsage  已使用的物理内存量
    * miniOnOnline  是否在线
    * readRate  磁盘读取速率
    * upPps  上传数据包每秒数量
    * writeRate  磁盘写入速率
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuIdle' => 'getCpuIdle',
            'cpuUsage' => 'getCpuUsage',
            'diskCount' => 'getDiskCount',
            'diskUsage' => 'getDiskUsage',
            'downPps' => 'getDownPps',
            'healthStatus' => 'getHealthStatus',
            'heartBeat' => 'getHeartBeat',
            'heartBeatTime' => 'getHeartBeatTime',
            'memoryCache' => 'getMemoryCache',
            'memoryCount' => 'getMemoryCount',
            'memoryFree' => 'getMemoryFree',
            'memoryShared' => 'getMemoryShared',
            'memoryUsage' => 'getMemoryUsage',
            'miniOnOnline' => 'getMiniOnOnline',
            'readRate' => 'getReadRate',
            'upPps' => 'getUpPps',
            'writeRate' => 'getWriteRate'
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
    const HEART_BEAT_ONLINE = 'ONLINE';
    const HEART_BEAT_OFFLINE = 'OFFLINE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHeartBeatAllowableValues()
    {
        return [
            self::HEART_BEAT_ONLINE,
            self::HEART_BEAT_OFFLINE,
        ];
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
        $this->container['cpuIdle'] = isset($data['cpuIdle']) ? $data['cpuIdle'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['diskCount'] = isset($data['diskCount']) ? $data['diskCount'] : null;
        $this->container['diskUsage'] = isset($data['diskUsage']) ? $data['diskUsage'] : null;
        $this->container['downPps'] = isset($data['downPps']) ? $data['downPps'] : null;
        $this->container['healthStatus'] = isset($data['healthStatus']) ? $data['healthStatus'] : null;
        $this->container['heartBeat'] = isset($data['heartBeat']) ? $data['heartBeat'] : null;
        $this->container['heartBeatTime'] = isset($data['heartBeatTime']) ? $data['heartBeatTime'] : null;
        $this->container['memoryCache'] = isset($data['memoryCache']) ? $data['memoryCache'] : null;
        $this->container['memoryCount'] = isset($data['memoryCount']) ? $data['memoryCount'] : null;
        $this->container['memoryFree'] = isset($data['memoryFree']) ? $data['memoryFree'] : null;
        $this->container['memoryShared'] = isset($data['memoryShared']) ? $data['memoryShared'] : null;
        $this->container['memoryUsage'] = isset($data['memoryUsage']) ? $data['memoryUsage'] : null;
        $this->container['miniOnOnline'] = isset($data['miniOnOnline']) ? $data['miniOnOnline'] : null;
        $this->container['readRate'] = isset($data['readRate']) ? $data['readRate'] : null;
        $this->container['upPps'] = isset($data['upPps']) ? $data['upPps'] : null;
        $this->container['writeRate'] = isset($data['writeRate']) ? $data['writeRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cpuIdle']) && (mb_strlen($this->container['cpuIdle']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cpuIdle', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cpuIdle']) && (mb_strlen($this->container['cpuIdle']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuIdle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuUsage']) && (mb_strlen($this->container['cpuUsage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cpuUsage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cpuUsage']) && (mb_strlen($this->container['cpuUsage']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuUsage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diskCount']) && (mb_strlen($this->container['diskCount']) > 1024)) {
                $invalidProperties[] = "invalid value for 'diskCount', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['diskCount']) && (mb_strlen($this->container['diskCount']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskCount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diskUsage']) && (mb_strlen($this->container['diskUsage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'diskUsage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['diskUsage']) && (mb_strlen($this->container['diskUsage']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskUsage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['downPps']) && (mb_strlen($this->container['downPps']) > 1024)) {
                $invalidProperties[] = "invalid value for 'downPps', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['downPps']) && (mb_strlen($this->container['downPps']) < 0)) {
                $invalidProperties[] = "invalid value for 'downPps', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getHeartBeatAllowableValues();
                if (!is_null($this->container['heartBeat']) && !in_array($this->container['heartBeat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'heartBeat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['heartBeatTime']) && ($this->container['heartBeatTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'heartBeatTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['heartBeatTime']) && ($this->container['heartBeatTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'heartBeatTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryCache']) && (mb_strlen($this->container['memoryCache']) > 1024)) {
                $invalidProperties[] = "invalid value for 'memoryCache', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['memoryCache']) && (mb_strlen($this->container['memoryCache']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryCache', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryCount']) && (mb_strlen($this->container['memoryCount']) > 1024)) {
                $invalidProperties[] = "invalid value for 'memoryCount', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['memoryCount']) && (mb_strlen($this->container['memoryCount']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryCount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryFree']) && (mb_strlen($this->container['memoryFree']) > 1024)) {
                $invalidProperties[] = "invalid value for 'memoryFree', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['memoryFree']) && (mb_strlen($this->container['memoryFree']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryFree', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryShared']) && (mb_strlen($this->container['memoryShared']) > 1024)) {
                $invalidProperties[] = "invalid value for 'memoryShared', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['memoryShared']) && (mb_strlen($this->container['memoryShared']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryShared', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryUsage']) && (mb_strlen($this->container['memoryUsage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'memoryUsage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['memoryUsage']) && (mb_strlen($this->container['memoryUsage']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryUsage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['miniOnOnline']) && (mb_strlen($this->container['miniOnOnline']) > 32)) {
                $invalidProperties[] = "invalid value for 'miniOnOnline', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['miniOnOnline']) && (mb_strlen($this->container['miniOnOnline']) < 1)) {
                $invalidProperties[] = "invalid value for 'miniOnOnline', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['readRate']) && (mb_strlen($this->container['readRate']) > 1024)) {
                $invalidProperties[] = "invalid value for 'readRate', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['readRate']) && (mb_strlen($this->container['readRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'readRate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upPps']) && (mb_strlen($this->container['upPps']) > 1024)) {
                $invalidProperties[] = "invalid value for 'upPps', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['upPps']) && (mb_strlen($this->container['upPps']) < 0)) {
                $invalidProperties[] = "invalid value for 'upPps', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['writeRate']) && (mb_strlen($this->container['writeRate']) > 1024)) {
                $invalidProperties[] = "invalid value for 'writeRate', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['writeRate']) && (mb_strlen($this->container['writeRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'writeRate', the character length must be bigger than or equal to 0.";
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
    * Gets cpuIdle
    *  CPU 空闲时间的百分比
    *
    * @return string|null
    */
    public function getCpuIdle()
    {
        return $this->container['cpuIdle'];
    }

    /**
    * Sets cpuIdle
    *
    * @param string|null $cpuIdle CPU 空闲时间的百分比
    *
    * @return $this
    */
    public function setCpuIdle($cpuIdle)
    {
        $this->container['cpuIdle'] = $cpuIdle;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  CPU 当前的使用率
    *
    * @return string|null
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param string|null $cpuUsage CPU 当前的使用率
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets diskCount
    *  系统中磁盘设备的数量
    *
    * @return string|null
    */
    public function getDiskCount()
    {
        return $this->container['diskCount'];
    }

    /**
    * Sets diskCount
    *
    * @param string|null $diskCount 系统中磁盘设备的数量
    *
    * @return $this
    */
    public function setDiskCount($diskCount)
    {
        $this->container['diskCount'] = $diskCount;
        return $this;
    }

    /**
    * Gets diskUsage
    *  当前磁盘空间使用量
    *
    * @return string|null
    */
    public function getDiskUsage()
    {
        return $this->container['diskUsage'];
    }

    /**
    * Sets diskUsage
    *
    * @param string|null $diskUsage 当前磁盘空间使用量
    *
    * @return $this
    */
    public function setDiskUsage($diskUsage)
    {
        $this->container['diskUsage'] = $diskUsage;
        return $this;
    }

    /**
    * Gets downPps
    *  下载数据包每秒数量
    *
    * @return string|null
    */
    public function getDownPps()
    {
        return $this->container['downPps'];
    }

    /**
    * Sets downPps
    *
    * @param string|null $downPps 下载数据包每秒数量
    *
    * @return $this
    */
    public function setDownPps($downPps)
    {
        $this->container['downPps'] = $downPps;
        return $this;
    }

    /**
    * Gets healthStatus
    *  healthStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NodeHealthStatus|null
    */
    public function getHealthStatus()
    {
        return $this->container['healthStatus'];
    }

    /**
    * Sets healthStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NodeHealthStatus|null $healthStatus healthStatus
    *
    * @return $this
    */
    public function setHealthStatus($healthStatus)
    {
        $this->container['healthStatus'] = $healthStatus;
        return $this;
    }

    /**
    * Gets heartBeat
    *  **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getHeartBeat()
    {
        return $this->container['heartBeat'];
    }

    /**
    * Sets heartBeat
    *
    * @param string|null $heartBeat **参数解释**: 节点是否成功收到心跳信号 - ONLINE 在线 - OFFLINE 离线  **约束限制** 不涉及 **取值范围**: - ONLINE - OFFLINE  **默认值** 不涉及
    *
    * @return $this
    */
    public function setHeartBeat($heartBeat)
    {
        $this->container['heartBeat'] = $heartBeat;
        return $this;
    }

    /**
    * Gets heartBeatTime
    *  最后一次接收到心跳信号的时间
    *
    * @return int|null
    */
    public function getHeartBeatTime()
    {
        return $this->container['heartBeatTime'];
    }

    /**
    * Sets heartBeatTime
    *
    * @param int|null $heartBeatTime 最后一次接收到心跳信号的时间
    *
    * @return $this
    */
    public function setHeartBeatTime($heartBeatTime)
    {
        $this->container['heartBeatTime'] = $heartBeatTime;
        return $this;
    }

    /**
    * Gets memoryCache
    *  缓存数据的内存大小
    *
    * @return string|null
    */
    public function getMemoryCache()
    {
        return $this->container['memoryCache'];
    }

    /**
    * Sets memoryCache
    *
    * @param string|null $memoryCache 缓存数据的内存大小
    *
    * @return $this
    */
    public function setMemoryCache($memoryCache)
    {
        $this->container['memoryCache'] = $memoryCache;
        return $this;
    }

    /**
    * Gets memoryCount
    *  物理内存条数量
    *
    * @return string|null
    */
    public function getMemoryCount()
    {
        return $this->container['memoryCount'];
    }

    /**
    * Sets memoryCount
    *
    * @param string|null $memoryCount 物理内存条数量
    *
    * @return $this
    */
    public function setMemoryCount($memoryCount)
    {
        $this->container['memoryCount'] = $memoryCount;
        return $this;
    }

    /**
    * Gets memoryFree
    *  当前空闲的物理内存量
    *
    * @return string|null
    */
    public function getMemoryFree()
    {
        return $this->container['memoryFree'];
    }

    /**
    * Sets memoryFree
    *
    * @param string|null $memoryFree 当前空闲的物理内存量
    *
    * @return $this
    */
    public function setMemoryFree($memoryFree)
    {
        $this->container['memoryFree'] = $memoryFree;
        return $this;
    }

    /**
    * Gets memoryShared
    *  多个进程共享使用的内存总量
    *
    * @return string|null
    */
    public function getMemoryShared()
    {
        return $this->container['memoryShared'];
    }

    /**
    * Sets memoryShared
    *
    * @param string|null $memoryShared 多个进程共享使用的内存总量
    *
    * @return $this
    */
    public function setMemoryShared($memoryShared)
    {
        $this->container['memoryShared'] = $memoryShared;
        return $this;
    }

    /**
    * Gets memoryUsage
    *  已使用的物理内存量
    *
    * @return string|null
    */
    public function getMemoryUsage()
    {
        return $this->container['memoryUsage'];
    }

    /**
    * Sets memoryUsage
    *
    * @param string|null $memoryUsage 已使用的物理内存量
    *
    * @return $this
    */
    public function setMemoryUsage($memoryUsage)
    {
        $this->container['memoryUsage'] = $memoryUsage;
        return $this;
    }

    /**
    * Gets miniOnOnline
    *  是否在线
    *
    * @return string|null
    */
    public function getMiniOnOnline()
    {
        return $this->container['miniOnOnline'];
    }

    /**
    * Sets miniOnOnline
    *
    * @param string|null $miniOnOnline 是否在线
    *
    * @return $this
    */
    public function setMiniOnOnline($miniOnOnline)
    {
        $this->container['miniOnOnline'] = $miniOnOnline;
        return $this;
    }

    /**
    * Gets readRate
    *  磁盘读取速率
    *
    * @return string|null
    */
    public function getReadRate()
    {
        return $this->container['readRate'];
    }

    /**
    * Sets readRate
    *
    * @param string|null $readRate 磁盘读取速率
    *
    * @return $this
    */
    public function setReadRate($readRate)
    {
        $this->container['readRate'] = $readRate;
        return $this;
    }

    /**
    * Gets upPps
    *  上传数据包每秒数量
    *
    * @return string|null
    */
    public function getUpPps()
    {
        return $this->container['upPps'];
    }

    /**
    * Sets upPps
    *
    * @param string|null $upPps 上传数据包每秒数量
    *
    * @return $this
    */
    public function setUpPps($upPps)
    {
        $this->container['upPps'] = $upPps;
        return $this;
    }

    /**
    * Gets writeRate
    *  磁盘写入速率
    *
    * @return string|null
    */
    public function getWriteRate()
    {
        return $this->container['writeRate'];
    }

    /**
    * Sets writeRate
    *
    * @param string|null $writeRate 磁盘写入速率
    *
    * @return $this
    */
    public function setWriteRate($writeRate)
    {
        $this->container['writeRate'] = $writeRate;
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

