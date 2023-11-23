<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineSchedule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  任务ID
    * type  任务类型
    * name  任务名称
    * enable  是否可用
    * daysOfWeek  一周内具体时间
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'type' => 'string',
            'name' => 'string',
            'enable' => 'string',
            'daysOfWeek' => 'int[]',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  任务ID
    * type  任务类型
    * name  任务名称
    * enable  是否可用
    * daysOfWeek  一周内具体时间
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'type' => null,
        'name' => null,
        'enable' => null,
        'daysOfWeek' => 'int32',
        'timeZone' => null
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
    * uuid  任务ID
    * type  任务类型
    * name  任务名称
    * enable  是否可用
    * daysOfWeek  一周内具体时间
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'type' => 'type',
            'name' => 'name',
            'enable' => 'enable',
            'daysOfWeek' => 'days_of_week',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  任务ID
    * type  任务类型
    * name  任务名称
    * enable  是否可用
    * daysOfWeek  一周内具体时间
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'type' => 'setType',
            'name' => 'setName',
            'enable' => 'setEnable',
            'daysOfWeek' => 'setDaysOfWeek',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  任务ID
    * type  任务类型
    * name  任务名称
    * enable  是否可用
    * daysOfWeek  一周内具体时间
    * timeZone  时区
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'type' => 'getType',
            'name' => 'getName',
            'enable' => 'getEnable',
            'daysOfWeek' => 'getDaysOfWeek',
            'timeZone' => 'getTimeZone'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['daysOfWeek'] = isset($data['daysOfWeek']) ? $data['daysOfWeek'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
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
    * Gets uuid
    *  任务ID
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 任务ID
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets type
    *  任务类型
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
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  任务名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enable
    *  是否可用
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 是否可用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets daysOfWeek
    *  一周内具体时间
    *
    * @return int[]|null
    */
    public function getDaysOfWeek()
    {
        return $this->container['daysOfWeek'];
    }

    /**
    * Sets daysOfWeek
    *
    * @param int[]|null $daysOfWeek 一周内具体时间
    *
    * @return $this
    */
    public function setDaysOfWeek($daysOfWeek)
    {
        $this->container['daysOfWeek'] = $daysOfWeek;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

