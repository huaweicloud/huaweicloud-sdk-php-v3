<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    * level  应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    * rotateNum  应用日志rotate个数，默认5，取值范围1-10
    * rotatePeriod  应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    * type  LTS:将日志发送到LTS, local 本地日志
    * component  app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'level' => 'string',
            'rotateNum' => 'int',
            'rotatePeriod' => 'string',
            'type' => 'string',
            'component' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    * level  应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    * rotateNum  应用日志rotate个数，默认5，取值范围1-10
    * rotatePeriod  应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    * type  LTS:将日志发送到LTS, local 本地日志
    * component  app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => 'int32',
        'level' => null,
        'rotateNum' => 'int32',
        'rotatePeriod' => null,
        'type' => null,
        'component' => null
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
    * size  应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    * level  应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    * rotateNum  应用日志rotate个数，默认5，取值范围1-10
    * rotatePeriod  应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    * type  LTS:将日志发送到LTS, local 本地日志
    * component  app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'level' => 'level',
            'rotateNum' => 'rotate_num',
            'rotatePeriod' => 'rotate_period',
            'type' => 'type',
            'component' => 'component'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    * level  应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    * rotateNum  应用日志rotate个数，默认5，取值范围1-10
    * rotatePeriod  应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    * type  LTS:将日志发送到LTS, local 本地日志
    * component  app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'level' => 'setLevel',
            'rotateNum' => 'setRotateNum',
            'rotatePeriod' => 'setRotatePeriod',
            'type' => 'setType',
            'component' => 'setComponent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    * level  应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    * rotateNum  应用日志rotate个数，默认5，取值范围1-10
    * rotatePeriod  应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    * type  LTS:将日志发送到LTS, local 本地日志
    * component  app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'level' => 'getLevel',
            'rotateNum' => 'getRotateNum',
            'rotatePeriod' => 'getRotatePeriod',
            'type' => 'getType',
            'component' => 'getComponent'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['rotateNum'] = isset($data['rotateNum']) ? $data['rotateNum'] : null;
        $this->container['rotatePeriod'] = isset($data['rotatePeriod']) ? $data['rotatePeriod'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['size']) && ($this->container['size'] > 1000)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 10)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['level']) && !preg_match("/(on|off|trace|debug|info|warn|error|fatal)/", $this->container['level'])) {
                $invalidProperties[] = "invalid value for 'level', must be conform to the pattern /(on|off|trace|debug|info|warn|error|fatal)/.";
            }
            if (!is_null($this->container['rotateNum']) && ($this->container['rotateNum'] > 10)) {
                $invalidProperties[] = "invalid value for 'rotateNum', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['rotateNum']) && ($this->container['rotateNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'rotateNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rotatePeriod']) && !preg_match("/(daily|monthly|weekly|yearly)/", $this->container['rotatePeriod'])) {
                $invalidProperties[] = "invalid value for 'rotatePeriod', must be conform to the pattern /(daily|monthly|weekly|yearly)/.";
            }
            if (!is_null($this->container['type']) && !preg_match("/(LTS|local)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(LTS|local)/.";
            }
            if (!is_null($this->container['component']) && !preg_match("/(app|system)/", $this->container['component'])) {
                $invalidProperties[] = "invalid value for 'component', must be conform to the pattern /(app|system)/.";
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
    * Gets size
    *  应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 应用日志文件大小限制，单位MB，默认50，取值范围10-1000
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets level
    *  应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 应用日志级别，可选项：on/off/trace/debug/info/warn/error/fatal，当type为LTS时有效。当选择非on/off的选项时，将只采集大于等于指定级别的日志。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets rotateNum
    *  应用日志rotate个数，默认5，取值范围1-10
    *
    * @return int|null
    */
    public function getRotateNum()
    {
        return $this->container['rotateNum'];
    }

    /**
    * Sets rotateNum
    *
    * @param int|null $rotateNum 应用日志rotate个数，默认5，取值范围1-10
    *
    * @return $this
    */
    public function setRotateNum($rotateNum)
    {
        $this->container['rotateNum'] = $rotateNum;
        return $this;
    }

    /**
    * Gets rotatePeriod
    *  应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    *
    * @return string|null
    */
    public function getRotatePeriod()
    {
        return $this->container['rotatePeriod'];
    }

    /**
    * Sets rotatePeriod
    *
    * @param string|null $rotatePeriod 应用日志rotate周期，可选项： daily/monthly/weekly/yearly
    *
    * @return $this
    */
    public function setRotatePeriod($rotatePeriod)
    {
        $this->container['rotatePeriod'] = $rotatePeriod;
        return $this;
    }

    /**
    * Gets type
    *  LTS:将日志发送到LTS, local 本地日志
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
    * @param string|null $type LTS:将日志发送到LTS, local 本地日志
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets component
    *  app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @return string|null
    */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
    * Sets component
    *
    * @param string|null $component app:部署到边缘设备上的应用的日志, system 边缘设备上系统的日志
    *
    * @return $this
    */
    public function setComponent($component)
    {
        $this->container['component'] = $component;
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

