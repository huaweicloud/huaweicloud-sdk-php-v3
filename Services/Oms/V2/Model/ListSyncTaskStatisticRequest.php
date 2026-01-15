<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSyncTaskStatisticRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSyncTaskStatisticRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncTaskId  同步任务ID。
    * dataType  统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    * startTime  查询开始时间
    * endTime  查询结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncTaskId' => 'string',
            'dataType' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncTaskId  同步任务ID。
    * dataType  统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    * startTime  查询开始时间
    * endTime  查询结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncTaskId' => null,
        'dataType' => null,
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * syncTaskId  同步任务ID。
    * dataType  统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    * startTime  查询开始时间
    * endTime  查询结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncTaskId' => 'sync_task_id',
            'dataType' => 'data_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncTaskId  同步任务ID。
    * dataType  统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    * startTime  查询开始时间
    * endTime  查询结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'syncTaskId' => 'setSyncTaskId',
            'dataType' => 'setDataType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncTaskId  同步任务ID。
    * dataType  统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    * startTime  查询开始时间
    * endTime  查询结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'syncTaskId' => 'getSyncTaskId',
            'dataType' => 'getDataType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
    const DATA_TYPE_REQUEST = 'REQUEST';
    const DATA_TYPE_SUCCESS = 'SUCCESS';
    const DATA_TYPE_FAILURE = 'FAILURE';
    const DATA_TYPE_SKIP = 'SKIP';
    const DATA_TYPE_SIZE = 'SIZE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_REQUEST,
            self::DATA_TYPE_SUCCESS,
            self::DATA_TYPE_FAILURE,
            self::DATA_TYPE_SKIP,
            self::DATA_TYPE_SIZE,
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
        $this->container['syncTaskId'] = isset($data['syncTaskId']) ? $data['syncTaskId'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['syncTaskId'] === null) {
            $invalidProperties[] = "'syncTaskId' can't be null";
        }
            if ((mb_strlen($this->container['syncTaskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'syncTaskId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['syncTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'syncTaskId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
            $allowedValues = $this->getDataTypeAllowableValues();
                if (!is_null($this->container['dataType']) && !in_array($this->container['dataType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['dataType']) > 255)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['dataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
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
    * Gets syncTaskId
    *  同步任务ID。
    *
    * @return string
    */
    public function getSyncTaskId()
    {
        return $this->container['syncTaskId'];
    }

    /**
    * Sets syncTaskId
    *
    * @param string $syncTaskId 同步任务ID。
    *
    * @return $this
    */
    public function setSyncTaskId($syncTaskId)
    {
        $this->container['syncTaskId'] = $syncTaskId;
        return $this;
    }

    /**
    * Gets dataType
    *  统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    *
    * @return string
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string $dataType 统计数据类型： 多类型查询用‘,’分隔； REQUEST：接收同步请求对象数 SUCCESS：同步成功对象数 FAILURE：同步失败对象数 SKIP：同步跳过对象数 SIZE：同步成功对象容量(Byte)
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 查询开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 查询结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

