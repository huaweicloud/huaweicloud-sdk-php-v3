<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    * alarmId  **参数解释**： 告警ID。 **取值范围**： 不涉及。
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * isUserVisible  **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    * isConverge  **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    * convergeTime  **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    * isMaintainVisible  **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'alarmId' => 'string',
            'alarmName' => 'string',
            'nameSpace' => 'string',
            'alarmLevel' => 'string',
            'isUserVisible' => 'string',
            'isConverge' => 'string',
            'convergeTime' => 'int',
            'isMaintainVisible' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    * alarmId  **参数解释**： 告警ID。 **取值范围**： 不涉及。
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * isUserVisible  **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    * isConverge  **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    * convergeTime  **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    * isMaintainVisible  **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'alarmId' => null,
        'alarmName' => null,
        'nameSpace' => null,
        'alarmLevel' => null,
        'isUserVisible' => null,
        'isConverge' => null,
        'convergeTime' => 'int32',
        'isMaintainVisible' => null
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
    * id  **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    * alarmId  **参数解释**： 告警ID。 **取值范围**： 不涉及。
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * isUserVisible  **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    * isConverge  **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    * convergeTime  **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    * isMaintainVisible  **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'alarmId' => 'alarm_id',
            'alarmName' => 'alarm_name',
            'nameSpace' => 'name_space',
            'alarmLevel' => 'alarm_level',
            'isUserVisible' => 'is_user_visible',
            'isConverge' => 'is_converge',
            'convergeTime' => 'converge_time',
            'isMaintainVisible' => 'is_maintain_visible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    * alarmId  **参数解释**： 告警ID。 **取值范围**： 不涉及。
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * isUserVisible  **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    * isConverge  **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    * convergeTime  **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    * isMaintainVisible  **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'alarmId' => 'setAlarmId',
            'alarmName' => 'setAlarmName',
            'nameSpace' => 'setNameSpace',
            'alarmLevel' => 'setAlarmLevel',
            'isUserVisible' => 'setIsUserVisible',
            'isConverge' => 'setIsConverge',
            'convergeTime' => 'setConvergeTime',
            'isMaintainVisible' => 'setIsMaintainVisible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    * alarmId  **参数解释**： 告警ID。 **取值范围**： 不涉及。
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 不涉及。
    * nameSpace  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    * isUserVisible  **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    * isConverge  **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    * convergeTime  **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    * isMaintainVisible  **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'alarmId' => 'getAlarmId',
            'alarmName' => 'getAlarmName',
            'nameSpace' => 'getNameSpace',
            'alarmLevel' => 'getAlarmLevel',
            'isUserVisible' => 'getIsUserVisible',
            'isConverge' => 'getIsConverge',
            'convergeTime' => 'getConvergeTime',
            'isMaintainVisible' => 'getIsMaintainVisible'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['nameSpace'] = isset($data['nameSpace']) ? $data['nameSpace'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['isUserVisible'] = isset($data['isUserVisible']) ? $data['isUserVisible'] : null;
        $this->container['isConverge'] = isset($data['isConverge']) ? $data['isConverge'] : null;
        $this->container['convergeTime'] = isset($data['convergeTime']) ? $data['convergeTime'] : null;
        $this->container['isMaintainVisible'] = isset($data['isMaintainVisible']) ? $data['isMaintainVisible'] : null;
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
    * Gets id
    *  **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 告警配置ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets alarmId
    *  **参数解释**： 告警ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId **参数解释**： 告警ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmName
    *  **参数解释**： 告警名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string|null $alarmName **参数解释**： 告警名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets nameSpace
    *  **参数解释**： 所属服务。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNameSpace()
    {
        return $this->container['nameSpace'];
    }

    /**
    * Sets nameSpace
    *
    * @param string|null $nameSpace **参数解释**： 所属服务。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNameSpace($nameSpace)
    {
        $this->container['nameSpace'] = $nameSpace;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  **参数解释**： 告警级别。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel **参数解释**： 告警级别。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets isUserVisible
    *  **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIsUserVisible()
    {
        return $this->container['isUserVisible'];
    }

    /**
    * Sets isUserVisible
    *
    * @param string|null $isUserVisible **参数解释**： 用户是否可见。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsUserVisible($isUserVisible)
    {
        $this->container['isUserVisible'] = $isUserVisible;
        return $this;
    }

    /**
    * Gets isConverge
    *  **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIsConverge()
    {
        return $this->container['isConverge'];
    }

    /**
    * Sets isConverge
    *
    * @param string|null $isConverge **参数解释**： 是否覆盖。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsConverge($isConverge)
    {
        $this->container['isConverge'] = $isConverge;
        return $this;
    }

    /**
    * Gets convergeTime
    *  **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getConvergeTime()
    {
        return $this->container['convergeTime'];
    }

    /**
    * Sets convergeTime
    *
    * @param int|null $convergeTime **参数解释**： 覆盖时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConvergeTime($convergeTime)
    {
        $this->container['convergeTime'] = $convergeTime;
        return $this;
    }

    /**
    * Gets isMaintainVisible
    *  **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIsMaintainVisible()
    {
        return $this->container['isMaintainVisible'];
    }

    /**
    * Sets isMaintainVisible
    *
    * @param string|null $isMaintainVisible **参数解释**： 运维是否可见。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIsMaintainVisible($isMaintainVisible)
    {
        $this->container['isMaintainVisible'] = $isMaintainVisible;
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

