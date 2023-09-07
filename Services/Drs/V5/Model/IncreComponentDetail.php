<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IncreComponentDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IncreComponentDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  组件类型 - capture：抓取 - apply：回放
    * status  状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
    * startTime  启动时间
    * startPoint  启动位点
    * currentPoint  当前位点
    * resolutionTime  解析时间
    * delay  时延，单位：秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'startPoint' => 'string',
            'currentPoint' => 'string',
            'resolutionTime' => 'string',
            'delay' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  组件类型 - capture：抓取 - apply：回放
    * status  状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
    * startTime  启动时间
    * startPoint  启动位点
    * currentPoint  当前位点
    * resolutionTime  解析时间
    * delay  时延，单位：秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'status' => null,
        'startTime' => null,
        'startPoint' => null,
        'currentPoint' => null,
        'resolutionTime' => null,
        'delay' => null
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
    * type  组件类型 - capture：抓取 - apply：回放
    * status  状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
    * startTime  启动时间
    * startPoint  启动位点
    * currentPoint  当前位点
    * resolutionTime  解析时间
    * delay  时延，单位：秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'status' => 'status',
            'startTime' => 'start_time',
            'startPoint' => 'start_point',
            'currentPoint' => 'current_point',
            'resolutionTime' => 'resolution_time',
            'delay' => 'delay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  组件类型 - capture：抓取 - apply：回放
    * status  状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
    * startTime  启动时间
    * startPoint  启动位点
    * currentPoint  当前位点
    * resolutionTime  解析时间
    * delay  时延，单位：秒
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'startPoint' => 'setStartPoint',
            'currentPoint' => 'setCurrentPoint',
            'resolutionTime' => 'setResolutionTime',
            'delay' => 'setDelay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  组件类型 - capture：抓取 - apply：回放
    * status  状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
    * startTime  启动时间
    * startPoint  启动位点
    * currentPoint  当前位点
    * resolutionTime  解析时间
    * delay  时延，单位：秒
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'startPoint' => 'getStartPoint',
            'currentPoint' => 'getCurrentPoint',
            'resolutionTime' => 'getResolutionTime',
            'delay' => 'getDelay'
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
    const TYPE_CAPTURE = 'capture';
    const TYPE_APPLY = 'apply';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CAPTURE,
            self::TYPE_APPLY,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['startPoint'] = isset($data['startPoint']) ? $data['startPoint'] : null;
        $this->container['currentPoint'] = isset($data['currentPoint']) ? $data['currentPoint'] : null;
        $this->container['resolutionTime'] = isset($data['resolutionTime']) ? $data['resolutionTime'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  组件类型 - capture：抓取 - apply：回放
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 组件类型 - capture：抓取 - apply：回放
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
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
    * @param string|null $status 状态。 - STOPPED：停止 - STARTED：运行中 - STOPPING：停止中 - STARTING：启动中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  启动时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets startPoint
    *  启动位点
    *
    * @return string|null
    */
    public function getStartPoint()
    {
        return $this->container['startPoint'];
    }

    /**
    * Sets startPoint
    *
    * @param string|null $startPoint 启动位点
    *
    * @return $this
    */
    public function setStartPoint($startPoint)
    {
        $this->container['startPoint'] = $startPoint;
        return $this;
    }

    /**
    * Gets currentPoint
    *  当前位点
    *
    * @return string|null
    */
    public function getCurrentPoint()
    {
        return $this->container['currentPoint'];
    }

    /**
    * Sets currentPoint
    *
    * @param string|null $currentPoint 当前位点
    *
    * @return $this
    */
    public function setCurrentPoint($currentPoint)
    {
        $this->container['currentPoint'] = $currentPoint;
        return $this;
    }

    /**
    * Gets resolutionTime
    *  解析时间
    *
    * @return string|null
    */
    public function getResolutionTime()
    {
        return $this->container['resolutionTime'];
    }

    /**
    * Sets resolutionTime
    *
    * @param string|null $resolutionTime 解析时间
    *
    * @return $this
    */
    public function setResolutionTime($resolutionTime)
    {
        $this->container['resolutionTime'] = $resolutionTime;
        return $this;
    }

    /**
    * Gets delay
    *  时延，单位：秒
    *
    * @return string|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param string|null $delay 时延，单位：秒
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
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

