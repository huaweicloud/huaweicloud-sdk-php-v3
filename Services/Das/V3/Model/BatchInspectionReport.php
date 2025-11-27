<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchInspectionReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchInspectionReport';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  报告ID
    * instanceId  实例ID
    * instanceName  实例名称
    * cpu  CPU大小
    * mem  内存大小（单位:GB）
    * diskSize  磁盘大小（单位:GB）
    * createAt  诊断报告生成时间（Unix timestamp），单位：毫秒。
    * startAt  诊断起始时间（Unix timestamp），单位：毫秒。
    * endAt  诊断终止时间（Unix timestamp），单位：毫秒。
    * healthRank  健康等级
    * score  评分
    * lostPointsDetailList  扣分详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'cpu' => 'int',
            'mem' => 'int',
            'diskSize' => 'int',
            'createAt' => 'int',
            'startAt' => 'int',
            'endAt' => 'int',
            'healthRank' => 'string',
            'score' => 'double',
            'lostPointsDetailList' => '\HuaweiCloud\SDK\Das\V3\Model\BatchInspectionLostPointsDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  报告ID
    * instanceId  实例ID
    * instanceName  实例名称
    * cpu  CPU大小
    * mem  内存大小（单位:GB）
    * diskSize  磁盘大小（单位:GB）
    * createAt  诊断报告生成时间（Unix timestamp），单位：毫秒。
    * startAt  诊断起始时间（Unix timestamp），单位：毫秒。
    * endAt  诊断终止时间（Unix timestamp），单位：毫秒。
    * healthRank  健康等级
    * score  评分
    * lostPointsDetailList  扣分详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'cpu' => 'int32',
        'mem' => 'int32',
        'diskSize' => 'int32',
        'createAt' => 'int64',
        'startAt' => 'int64',
        'endAt' => 'int64',
        'healthRank' => null,
        'score' => 'double',
        'lostPointsDetailList' => null
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
    * taskId  报告ID
    * instanceId  实例ID
    * instanceName  实例名称
    * cpu  CPU大小
    * mem  内存大小（单位:GB）
    * diskSize  磁盘大小（单位:GB）
    * createAt  诊断报告生成时间（Unix timestamp），单位：毫秒。
    * startAt  诊断起始时间（Unix timestamp），单位：毫秒。
    * endAt  诊断终止时间（Unix timestamp），单位：毫秒。
    * healthRank  健康等级
    * score  评分
    * lostPointsDetailList  扣分详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'diskSize' => 'disk_size',
            'createAt' => 'create_at',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'healthRank' => 'health_rank',
            'score' => 'score',
            'lostPointsDetailList' => 'lost_points_detail_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  报告ID
    * instanceId  实例ID
    * instanceName  实例名称
    * cpu  CPU大小
    * mem  内存大小（单位:GB）
    * diskSize  磁盘大小（单位:GB）
    * createAt  诊断报告生成时间（Unix timestamp），单位：毫秒。
    * startAt  诊断起始时间（Unix timestamp），单位：毫秒。
    * endAt  诊断终止时间（Unix timestamp），单位：毫秒。
    * healthRank  健康等级
    * score  评分
    * lostPointsDetailList  扣分详情
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'diskSize' => 'setDiskSize',
            'createAt' => 'setCreateAt',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'healthRank' => 'setHealthRank',
            'score' => 'setScore',
            'lostPointsDetailList' => 'setLostPointsDetailList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  报告ID
    * instanceId  实例ID
    * instanceName  实例名称
    * cpu  CPU大小
    * mem  内存大小（单位:GB）
    * diskSize  磁盘大小（单位:GB）
    * createAt  诊断报告生成时间（Unix timestamp），单位：毫秒。
    * startAt  诊断起始时间（Unix timestamp），单位：毫秒。
    * endAt  诊断终止时间（Unix timestamp），单位：毫秒。
    * healthRank  健康等级
    * score  评分
    * lostPointsDetailList  扣分详情
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'diskSize' => 'getDiskSize',
            'createAt' => 'getCreateAt',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'healthRank' => 'getHealthRank',
            'score' => 'getScore',
            'lostPointsDetailList' => 'getLostPointsDetailList'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['healthRank'] = isset($data['healthRank']) ? $data['healthRank'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['lostPointsDetailList'] = isset($data['lostPointsDetailList']) ? $data['lostPointsDetailList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
            if ((mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mem']) && ($this->container['mem'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mem', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mem']) && ($this->container['mem'] < 0)) {
                $invalidProperties[] = "invalid value for 'mem', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['diskSize']) && ($this->container['diskSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'diskSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['diskSize']) && ($this->container['diskSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'diskSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'createAt', must be smaller than or equal to 253370736001000.";
            }
            if (!is_null($this->container['createAt']) && ($this->container['createAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createAt', must be bigger than or equal to 0.";
            }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
            if (($this->container['startAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'startAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['startAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'startAt', must be bigger than or equal to 0.";
            }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
            if (($this->container['endAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'endAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['endAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'endAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['healthRank']) && (mb_strlen($this->container['healthRank']) > 32)) {
                $invalidProperties[] = "invalid value for 'healthRank', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['healthRank']) && (mb_strlen($this->container['healthRank']) < 1)) {
                $invalidProperties[] = "invalid value for 'healthRank', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
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
    * Gets taskId
    *  报告ID
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 报告ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU大小
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu CPU大小
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  内存大小（单位:GB）
    *
    * @return int|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param int|null $mem 内存大小（单位:GB）
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets diskSize
    *  磁盘大小（单位:GB）
    *
    * @return int|null
    */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
    * Sets diskSize
    *
    * @param int|null $diskSize 磁盘大小（单位:GB）
    *
    * @return $this
    */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;
        return $this;
    }

    /**
    * Gets createAt
    *  诊断报告生成时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 诊断报告生成时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets startAt
    *  诊断起始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 诊断起始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  诊断终止时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 诊断终止时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets healthRank
    *  健康等级
    *
    * @return string|null
    */
    public function getHealthRank()
    {
        return $this->container['healthRank'];
    }

    /**
    * Sets healthRank
    *
    * @param string|null $healthRank 健康等级
    *
    * @return $this
    */
    public function setHealthRank($healthRank)
    {
        $this->container['healthRank'] = $healthRank;
        return $this;
    }

    /**
    * Gets score
    *  评分
    *
    * @return double|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param double|null $score 评分
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets lostPointsDetailList
    *  扣分详情
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\BatchInspectionLostPointsDetail[]|null
    */
    public function getLostPointsDetailList()
    {
        return $this->container['lostPointsDetailList'];
    }

    /**
    * Sets lostPointsDetailList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\BatchInspectionLostPointsDetail[]|null $lostPointsDetailList 扣分详情
    *
    * @return $this
    */
    public function setLostPointsDetailList($lostPointsDetailList)
    {
        $this->container['lostPointsDetailList'] = $lostPointsDetailList;
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

