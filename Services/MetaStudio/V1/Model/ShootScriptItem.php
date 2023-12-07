<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShootScriptItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShootScriptItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sequenceNo  剧本序号。
    * startTime  开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
    * endTime  结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sequenceNo' => 'int',
            'startTime' => 'float',
            'endTime' => 'float',
            'shootScript' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScript'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sequenceNo  剧本序号。
    * startTime  开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
    * endTime  结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sequenceNo' => 'int32',
        'startTime' => 'float',
        'endTime' => 'float',
        'shootScript' => null
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
    * sequenceNo  剧本序号。
    * startTime  开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
    * endTime  结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sequenceNo' => 'sequence_no',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'shootScript' => 'shoot_script'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sequenceNo  剧本序号。
    * startTime  开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
    * endTime  结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $setters = [
            'sequenceNo' => 'setSequenceNo',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'shootScript' => 'setShootScript'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sequenceNo  剧本序号。
    * startTime  开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
    * endTime  结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    * shootScript  shootScript
    *
    * @var string[]
    */
    protected static $getters = [
            'sequenceNo' => 'getSequenceNo',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'shootScript' => 'getShootScript'
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
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['shootScript'] = isset($data['shootScript']) ? $data['shootScript'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 2.592E+6)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 2.592E+6.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 2.592E+6)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 2.592E+6.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['shootScript'] === null) {
            $invalidProperties[] = "'shootScript' can't be null";
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
    * Gets sequenceNo
    *  剧本序号。
    *
    * @return int|null
    */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
    * Sets sequenceNo
    *
    * @param int|null $sequenceNo 剧本序号。
    *
    * @return $this
    */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
    *
    * @return float|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param float|null $startTime 开始时间。  单位秒。  相对于内容的开始时间。 > 预留字段。当前只需要填sequence_no即可。
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
    *  结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    *
    * @return float|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param float|null $endTime 结束时间。  单位秒。  相对于内容的结束时间。 > 预留字段。当前只需要填sequence_no即可。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets shootScript
    *  shootScript
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScript
    */
    public function getShootScript()
    {
        return $this->container['shootScript'];
    }

    /**
    * Sets shootScript
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShootScript $shootScript shootScript
    *
    * @return $this
    */
    public function setShootScript($shootScript)
    {
        $this->container['shootScript'] = $shootScript;
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

