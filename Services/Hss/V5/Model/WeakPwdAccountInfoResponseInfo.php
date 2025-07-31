<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WeakPwdAccountInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WeakPwdAccountInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'serviceType' => 'string',
            'duration' => 'int',
            'desensitizedWeakPasswords' => 'string',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'serviceType' => null,
        'duration' => 'int32',
        'desensitizedWeakPasswords' => null,
        'suggestion' => null
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
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'serviceType' => 'service_type',
            'duration' => 'duration',
            'desensitizedWeakPasswords' => 'desensitized_weak_passwords',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'serviceType' => 'setServiceType',
            'duration' => 'setDuration',
            'desensitizedWeakPasswords' => 'setDesensitizedWeakPasswords',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
    * serviceType  **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
    * duration  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
    * desensitizedWeakPasswords  **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    * suggestion  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'serviceType' => 'getServiceType',
            'duration' => 'getDuration',
            'desensitizedWeakPasswords' => 'getDesensitizedWeakPasswords',
            'suggestion' => 'getSuggestion'
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
        $this->container['desensitizedWeakPasswords'] = isset($data['desensitizedWeakPasswords']) ? $data['desensitizedWeakPasswords'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 32)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desensitizedWeakPasswords']) && (mb_strlen($this->container['desensitizedWeakPasswords']) > 128)) {
                $invalidProperties[] = "invalid value for 'desensitizedWeakPasswords', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['desensitizedWeakPasswords']) && (mb_strlen($this->container['desensitizedWeakPasswords']) < 0)) {
                $invalidProperties[] = "invalid value for 'desensitizedWeakPasswords', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) > 65534)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) < 0)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be bigger than or equal to 0.";
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
    * Gets userName
    *  **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
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
    * @param string|null $userName **参数解释**: 弱口令账号名称 **取值范围**: 不涉及
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
    *  **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
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
    * @param string|null $serviceType **参数解释**: 账号类型 **取值范围**: - system : 系统账号 - mysql  : mysql账号 - redis  : redis账号
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
    *  **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
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
    * @param int|null $duration **参数解释**: 弱口令使用时长，单位天 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets desensitizedWeakPasswords
    *  **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getDesensitizedWeakPasswords()
    {
        return $this->container['desensitizedWeakPasswords'];
    }

    /**
    * Sets desensitizedWeakPasswords
    *
    * @param string|null $desensitizedWeakPasswords **参数解释**: 脱敏弱口令 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDesensitizedWeakPasswords($desensitizedWeakPasswords)
    {
        $this->container['desensitizedWeakPasswords'] = $desensitizedWeakPasswords;
        return $this;
    }

    /**
    * Gets suggestion
    *  **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion **参数解释**: 修改建议 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

