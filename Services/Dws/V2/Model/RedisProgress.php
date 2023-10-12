<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedisProgress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedisProgress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bytesDone  已完成字节数
    * byteLeft  剩余字节数
    * tablesDone  完成表数量
    * tablesLeft  剩余表数量
    * tableProgress  表重分布进度
    * totalProgress  总进度
    * redisRate  重分布比例
    * estimatedTime  预计时间
    * completed  是否已完成
    * initialed  是否完成初始化
    * failCount  失败总数
    * redistributing  cm_ctl 结果
    * status  状态
    * pauseByUser  是否用户暂停
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bytesDone' => 'int',
            'byteLeft' => 'int',
            'tablesDone' => 'int',
            'tablesLeft' => 'int',
            'tableProgress' => 'int',
            'totalProgress' => 'int',
            'redisRate' => 'string',
            'estimatedTime' => 'string',
            'completed' => 'bool',
            'initialed' => 'bool',
            'failCount' => 'int',
            'redistributing' => 'bool',
            'status' => 'string',
            'pauseByUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bytesDone  已完成字节数
    * byteLeft  剩余字节数
    * tablesDone  完成表数量
    * tablesLeft  剩余表数量
    * tableProgress  表重分布进度
    * totalProgress  总进度
    * redisRate  重分布比例
    * estimatedTime  预计时间
    * completed  是否已完成
    * initialed  是否完成初始化
    * failCount  失败总数
    * redistributing  cm_ctl 结果
    * status  状态
    * pauseByUser  是否用户暂停
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bytesDone' => 'int64',
        'byteLeft' => 'int64',
        'tablesDone' => 'int32',
        'tablesLeft' => 'int32',
        'tableProgress' => 'int32',
        'totalProgress' => 'int32',
        'redisRate' => null,
        'estimatedTime' => null,
        'completed' => null,
        'initialed' => null,
        'failCount' => 'int32',
        'redistributing' => null,
        'status' => null,
        'pauseByUser' => null
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
    * bytesDone  已完成字节数
    * byteLeft  剩余字节数
    * tablesDone  完成表数量
    * tablesLeft  剩余表数量
    * tableProgress  表重分布进度
    * totalProgress  总进度
    * redisRate  重分布比例
    * estimatedTime  预计时间
    * completed  是否已完成
    * initialed  是否完成初始化
    * failCount  失败总数
    * redistributing  cm_ctl 结果
    * status  状态
    * pauseByUser  是否用户暂停
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bytesDone' => 'bytes_done',
            'byteLeft' => 'byte_left',
            'tablesDone' => 'tables_done',
            'tablesLeft' => 'tables_left',
            'tableProgress' => 'table_progress',
            'totalProgress' => 'total_progress',
            'redisRate' => 'redis_rate',
            'estimatedTime' => 'estimated_time',
            'completed' => 'completed',
            'initialed' => 'initialed',
            'failCount' => 'fail_count',
            'redistributing' => 'redistributing',
            'status' => 'status',
            'pauseByUser' => 'pause_by_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bytesDone  已完成字节数
    * byteLeft  剩余字节数
    * tablesDone  完成表数量
    * tablesLeft  剩余表数量
    * tableProgress  表重分布进度
    * totalProgress  总进度
    * redisRate  重分布比例
    * estimatedTime  预计时间
    * completed  是否已完成
    * initialed  是否完成初始化
    * failCount  失败总数
    * redistributing  cm_ctl 结果
    * status  状态
    * pauseByUser  是否用户暂停
    *
    * @var string[]
    */
    protected static $setters = [
            'bytesDone' => 'setBytesDone',
            'byteLeft' => 'setByteLeft',
            'tablesDone' => 'setTablesDone',
            'tablesLeft' => 'setTablesLeft',
            'tableProgress' => 'setTableProgress',
            'totalProgress' => 'setTotalProgress',
            'redisRate' => 'setRedisRate',
            'estimatedTime' => 'setEstimatedTime',
            'completed' => 'setCompleted',
            'initialed' => 'setInitialed',
            'failCount' => 'setFailCount',
            'redistributing' => 'setRedistributing',
            'status' => 'setStatus',
            'pauseByUser' => 'setPauseByUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bytesDone  已完成字节数
    * byteLeft  剩余字节数
    * tablesDone  完成表数量
    * tablesLeft  剩余表数量
    * tableProgress  表重分布进度
    * totalProgress  总进度
    * redisRate  重分布比例
    * estimatedTime  预计时间
    * completed  是否已完成
    * initialed  是否完成初始化
    * failCount  失败总数
    * redistributing  cm_ctl 结果
    * status  状态
    * pauseByUser  是否用户暂停
    *
    * @var string[]
    */
    protected static $getters = [
            'bytesDone' => 'getBytesDone',
            'byteLeft' => 'getByteLeft',
            'tablesDone' => 'getTablesDone',
            'tablesLeft' => 'getTablesLeft',
            'tableProgress' => 'getTableProgress',
            'totalProgress' => 'getTotalProgress',
            'redisRate' => 'getRedisRate',
            'estimatedTime' => 'getEstimatedTime',
            'completed' => 'getCompleted',
            'initialed' => 'getInitialed',
            'failCount' => 'getFailCount',
            'redistributing' => 'getRedistributing',
            'status' => 'getStatus',
            'pauseByUser' => 'getPauseByUser'
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
        $this->container['bytesDone'] = isset($data['bytesDone']) ? $data['bytesDone'] : null;
        $this->container['byteLeft'] = isset($data['byteLeft']) ? $data['byteLeft'] : null;
        $this->container['tablesDone'] = isset($data['tablesDone']) ? $data['tablesDone'] : null;
        $this->container['tablesLeft'] = isset($data['tablesLeft']) ? $data['tablesLeft'] : null;
        $this->container['tableProgress'] = isset($data['tableProgress']) ? $data['tableProgress'] : null;
        $this->container['totalProgress'] = isset($data['totalProgress']) ? $data['totalProgress'] : null;
        $this->container['redisRate'] = isset($data['redisRate']) ? $data['redisRate'] : null;
        $this->container['estimatedTime'] = isset($data['estimatedTime']) ? $data['estimatedTime'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['initialed'] = isset($data['initialed']) ? $data['initialed'] : null;
        $this->container['failCount'] = isset($data['failCount']) ? $data['failCount'] : null;
        $this->container['redistributing'] = isset($data['redistributing']) ? $data['redistributing'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['pauseByUser'] = isset($data['pauseByUser']) ? $data['pauseByUser'] : null;
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
    * Gets bytesDone
    *  已完成字节数
    *
    * @return int|null
    */
    public function getBytesDone()
    {
        return $this->container['bytesDone'];
    }

    /**
    * Sets bytesDone
    *
    * @param int|null $bytesDone 已完成字节数
    *
    * @return $this
    */
    public function setBytesDone($bytesDone)
    {
        $this->container['bytesDone'] = $bytesDone;
        return $this;
    }

    /**
    * Gets byteLeft
    *  剩余字节数
    *
    * @return int|null
    */
    public function getByteLeft()
    {
        return $this->container['byteLeft'];
    }

    /**
    * Sets byteLeft
    *
    * @param int|null $byteLeft 剩余字节数
    *
    * @return $this
    */
    public function setByteLeft($byteLeft)
    {
        $this->container['byteLeft'] = $byteLeft;
        return $this;
    }

    /**
    * Gets tablesDone
    *  完成表数量
    *
    * @return int|null
    */
    public function getTablesDone()
    {
        return $this->container['tablesDone'];
    }

    /**
    * Sets tablesDone
    *
    * @param int|null $tablesDone 完成表数量
    *
    * @return $this
    */
    public function setTablesDone($tablesDone)
    {
        $this->container['tablesDone'] = $tablesDone;
        return $this;
    }

    /**
    * Gets tablesLeft
    *  剩余表数量
    *
    * @return int|null
    */
    public function getTablesLeft()
    {
        return $this->container['tablesLeft'];
    }

    /**
    * Sets tablesLeft
    *
    * @param int|null $tablesLeft 剩余表数量
    *
    * @return $this
    */
    public function setTablesLeft($tablesLeft)
    {
        $this->container['tablesLeft'] = $tablesLeft;
        return $this;
    }

    /**
    * Gets tableProgress
    *  表重分布进度
    *
    * @return int|null
    */
    public function getTableProgress()
    {
        return $this->container['tableProgress'];
    }

    /**
    * Sets tableProgress
    *
    * @param int|null $tableProgress 表重分布进度
    *
    * @return $this
    */
    public function setTableProgress($tableProgress)
    {
        $this->container['tableProgress'] = $tableProgress;
        return $this;
    }

    /**
    * Gets totalProgress
    *  总进度
    *
    * @return int|null
    */
    public function getTotalProgress()
    {
        return $this->container['totalProgress'];
    }

    /**
    * Sets totalProgress
    *
    * @param int|null $totalProgress 总进度
    *
    * @return $this
    */
    public function setTotalProgress($totalProgress)
    {
        $this->container['totalProgress'] = $totalProgress;
        return $this;
    }

    /**
    * Gets redisRate
    *  重分布比例
    *
    * @return string|null
    */
    public function getRedisRate()
    {
        return $this->container['redisRate'];
    }

    /**
    * Sets redisRate
    *
    * @param string|null $redisRate 重分布比例
    *
    * @return $this
    */
    public function setRedisRate($redisRate)
    {
        $this->container['redisRate'] = $redisRate;
        return $this;
    }

    /**
    * Gets estimatedTime
    *  预计时间
    *
    * @return string|null
    */
    public function getEstimatedTime()
    {
        return $this->container['estimatedTime'];
    }

    /**
    * Sets estimatedTime
    *
    * @param string|null $estimatedTime 预计时间
    *
    * @return $this
    */
    public function setEstimatedTime($estimatedTime)
    {
        $this->container['estimatedTime'] = $estimatedTime;
        return $this;
    }

    /**
    * Gets completed
    *  是否已完成
    *
    * @return bool|null
    */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
    * Sets completed
    *
    * @param bool|null $completed 是否已完成
    *
    * @return $this
    */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;
        return $this;
    }

    /**
    * Gets initialed
    *  是否完成初始化
    *
    * @return bool|null
    */
    public function getInitialed()
    {
        return $this->container['initialed'];
    }

    /**
    * Sets initialed
    *
    * @param bool|null $initialed 是否完成初始化
    *
    * @return $this
    */
    public function setInitialed($initialed)
    {
        $this->container['initialed'] = $initialed;
        return $this;
    }

    /**
    * Gets failCount
    *  失败总数
    *
    * @return int|null
    */
    public function getFailCount()
    {
        return $this->container['failCount'];
    }

    /**
    * Sets failCount
    *
    * @param int|null $failCount 失败总数
    *
    * @return $this
    */
    public function setFailCount($failCount)
    {
        $this->container['failCount'] = $failCount;
        return $this;
    }

    /**
    * Gets redistributing
    *  cm_ctl 结果
    *
    * @return bool|null
    */
    public function getRedistributing()
    {
        return $this->container['redistributing'];
    }

    /**
    * Sets redistributing
    *
    * @param bool|null $redistributing cm_ctl 结果
    *
    * @return $this
    */
    public function setRedistributing($redistributing)
    {
        $this->container['redistributing'] = $redistributing;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets pauseByUser
    *  是否用户暂停
    *
    * @return bool|null
    */
    public function getPauseByUser()
    {
        return $this->container['pauseByUser'];
    }

    /**
    * Sets pauseByUser
    *
    * @param bool|null $pauseByUser 是否用户暂停
    *
    * @return $this
    */
    public function setPauseByUser($pauseByUser)
    {
        $this->container['pauseByUser'] = $pauseByUser;
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

