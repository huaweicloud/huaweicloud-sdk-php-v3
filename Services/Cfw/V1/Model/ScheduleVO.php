<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduleVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduleVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleId  **参数解释**： 时间表ID **取值范围**： 不涉及
    * name  **参数解释**： 时间表名称 **取值范围**： 不涉及
    * description  **参数解释**： 时间表描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 引用次数 **取值范围**： 不涉及
    * periodic  **参数解释**： 周期计划 **取值范围**： 不涉及
    * absolute  absolute
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'refCount' => 'int',
            'periodic' => '\HuaweiCloud\SDK\Cfw\V1\Model\ScheduleVOPeriodic[]',
            'absolute' => '\HuaweiCloud\SDK\Cfw\V1\Model\ScheduleVOAbsolute'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleId  **参数解释**： 时间表ID **取值范围**： 不涉及
    * name  **参数解释**： 时间表名称 **取值范围**： 不涉及
    * description  **参数解释**： 时间表描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 引用次数 **取值范围**： 不涉及
    * periodic  **参数解释**： 周期计划 **取值范围**： 不涉及
    * absolute  absolute
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleId' => null,
        'name' => null,
        'description' => null,
        'refCount' => null,
        'periodic' => null,
        'absolute' => null
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
    * scheduleId  **参数解释**： 时间表ID **取值范围**： 不涉及
    * name  **参数解释**： 时间表名称 **取值范围**： 不涉及
    * description  **参数解释**： 时间表描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 引用次数 **取值范围**： 不涉及
    * periodic  **参数解释**： 周期计划 **取值范围**： 不涉及
    * absolute  absolute
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleId' => 'schedule_id',
            'name' => 'name',
            'description' => 'description',
            'refCount' => 'ref_count',
            'periodic' => 'periodic',
            'absolute' => 'absolute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleId  **参数解释**： 时间表ID **取值范围**： 不涉及
    * name  **参数解释**： 时间表名称 **取值范围**： 不涉及
    * description  **参数解释**： 时间表描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 引用次数 **取值范围**： 不涉及
    * periodic  **参数解释**： 周期计划 **取值范围**： 不涉及
    * absolute  absolute
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleId' => 'setScheduleId',
            'name' => 'setName',
            'description' => 'setDescription',
            'refCount' => 'setRefCount',
            'periodic' => 'setPeriodic',
            'absolute' => 'setAbsolute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleId  **参数解释**： 时间表ID **取值范围**： 不涉及
    * name  **参数解释**： 时间表名称 **取值范围**： 不涉及
    * description  **参数解释**： 时间表描述 **取值范围**： 不涉及
    * refCount  **参数解释**： 引用次数 **取值范围**： 不涉及
    * periodic  **参数解释**： 周期计划 **取值范围**： 不涉及
    * absolute  absolute
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleId' => 'getScheduleId',
            'name' => 'getName',
            'description' => 'getDescription',
            'refCount' => 'getRefCount',
            'periodic' => 'getPeriodic',
            'absolute' => 'getAbsolute'
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
        $this->container['scheduleId'] = isset($data['scheduleId']) ? $data['scheduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['refCount'] = isset($data['refCount']) ? $data['refCount'] : null;
        $this->container['periodic'] = isset($data['periodic']) ? $data['periodic'] : null;
        $this->container['absolute'] = isset($data['absolute']) ? $data['absolute'] : null;
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
    * Gets scheduleId
    *  **参数解释**： 时间表ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getScheduleId()
    {
        return $this->container['scheduleId'];
    }

    /**
    * Sets scheduleId
    *
    * @param string|null $scheduleId **参数解释**： 时间表ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScheduleId($scheduleId)
    {
        $this->container['scheduleId'] = $scheduleId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 时间表名称 **取值范围**： 不涉及
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
    * @param string|null $name **参数解释**： 时间表名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 时间表描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 时间表描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets refCount
    *  **参数解释**： 引用次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRefCount()
    {
        return $this->container['refCount'];
    }

    /**
    * Sets refCount
    *
    * @param int|null $refCount **参数解释**： 引用次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRefCount($refCount)
    {
        $this->container['refCount'] = $refCount;
        return $this;
    }

    /**
    * Gets periodic
    *  **参数解释**： 周期计划 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ScheduleVOPeriodic[]|null
    */
    public function getPeriodic()
    {
        return $this->container['periodic'];
    }

    /**
    * Sets periodic
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ScheduleVOPeriodic[]|null $periodic **参数解释**： 周期计划 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPeriodic($periodic)
    {
        $this->container['periodic'] = $periodic;
        return $this;
    }

    /**
    * Gets absolute
    *  absolute
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ScheduleVOAbsolute|null
    */
    public function getAbsolute()
    {
        return $this->container['absolute'];
    }

    /**
    * Sets absolute
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ScheduleVOAbsolute|null $absolute absolute
    *
    * @return $this
    */
    public function setAbsolute($absolute)
    {
        $this->container['absolute'] = $absolute;
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

