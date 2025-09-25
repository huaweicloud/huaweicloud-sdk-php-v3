<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigWeakPwdInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigWeakPwdInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    * serviceType  **参数解释**： 账号类型 **取值范围**： 不涉及
    * duration  **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'serviceType' => 'string',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    * serviceType  **参数解释**： 账号类型 **取值范围**： 不涉及
    * duration  **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'serviceType' => null,
        'duration' => 'int32'
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
    * userName  **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    * serviceType  **参数解释**： 账号类型 **取值范围**： 不涉及
    * duration  **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'serviceType' => 'service_type',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    * serviceType  **参数解释**： 账号类型 **取值范围**： 不涉及
    * duration  **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'serviceType' => 'setServiceType',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    * serviceType  **参数解释**： 账号类型 **取值范围**： 不涉及
    * duration  **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'serviceType' => 'getServiceType',
            'duration' => 'getDuration'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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
    * Gets userName
    *  **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**： 弱口令账号名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**： 账号类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释**： 账号类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**： 弱口令使用时长，单位天 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

