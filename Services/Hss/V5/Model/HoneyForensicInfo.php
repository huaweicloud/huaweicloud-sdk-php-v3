<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HoneyForensicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HoneyForensicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackIp  **参数解释**： 攻击源 IP **取值范围**： 不涉及
    * sandboxName  **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    * serviceName  **参数解释**： 欺骗服务 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    * attackMethodDesc  **参数解释**： 攻击手法 **取值范围**： 不涉及
    * attackDesc  **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackIp' => 'string',
            'sandboxName' => 'string',
            'serviceName' => 'string',
            'attackType' => 'string',
            'attackMethodDesc' => 'string',
            'attackDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackIp  **参数解释**： 攻击源 IP **取值范围**： 不涉及
    * sandboxName  **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    * serviceName  **参数解释**： 欺骗服务 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    * attackMethodDesc  **参数解释**： 攻击手法 **取值范围**： 不涉及
    * attackDesc  **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackIp' => null,
        'sandboxName' => null,
        'serviceName' => null,
        'attackType' => null,
        'attackMethodDesc' => null,
        'attackDesc' => null
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
    * attackIp  **参数解释**： 攻击源 IP **取值范围**： 不涉及
    * sandboxName  **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    * serviceName  **参数解释**： 欺骗服务 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    * attackMethodDesc  **参数解释**： 攻击手法 **取值范围**： 不涉及
    * attackDesc  **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackIp' => 'attack_ip',
            'sandboxName' => 'sandbox_name',
            'serviceName' => 'service_name',
            'attackType' => 'attack_type',
            'attackMethodDesc' => 'attack_method_desc',
            'attackDesc' => 'attack_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackIp  **参数解释**： 攻击源 IP **取值范围**： 不涉及
    * sandboxName  **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    * serviceName  **参数解释**： 欺骗服务 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    * attackMethodDesc  **参数解释**： 攻击手法 **取值范围**： 不涉及
    * attackDesc  **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'attackIp' => 'setAttackIp',
            'sandboxName' => 'setSandboxName',
            'serviceName' => 'setServiceName',
            'attackType' => 'setAttackType',
            'attackMethodDesc' => 'setAttackMethodDesc',
            'attackDesc' => 'setAttackDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackIp  **参数解释**： 攻击源 IP **取值范围**： 不涉及
    * sandboxName  **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    * serviceName  **参数解释**： 欺骗服务 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    * attackMethodDesc  **参数解释**： 攻击手法 **取值范围**： 不涉及
    * attackDesc  **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'attackIp' => 'getAttackIp',
            'sandboxName' => 'getSandboxName',
            'serviceName' => 'getServiceName',
            'attackType' => 'getAttackType',
            'attackMethodDesc' => 'getAttackMethodDesc',
            'attackDesc' => 'getAttackDesc'
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
        $this->container['attackIp'] = isset($data['attackIp']) ? $data['attackIp'] : null;
        $this->container['sandboxName'] = isset($data['sandboxName']) ? $data['sandboxName'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['attackMethodDesc'] = isset($data['attackMethodDesc']) ? $data['attackMethodDesc'] : null;
        $this->container['attackDesc'] = isset($data['attackDesc']) ? $data['attackDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attackIp']) && (mb_strlen($this->container['attackIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'attackIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['attackIp']) && (mb_strlen($this->container['attackIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sandboxName']) && (mb_strlen($this->container['sandboxName']) > 128)) {
                $invalidProperties[] = "invalid value for 'sandboxName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sandboxName']) && (mb_strlen($this->container['sandboxName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sandboxName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sandboxName']) && !preg_match("/^.*$/", $this->container['sandboxName'])) {
                $invalidProperties[] = "invalid value for 'sandboxName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && !preg_match("/^.*$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['attackType']) && (mb_strlen($this->container['attackType']) > 16)) {
                $invalidProperties[] = "invalid value for 'attackType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['attackType']) && (mb_strlen($this->container['attackType']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackMethodDesc']) && (mb_strlen($this->container['attackMethodDesc']) > 128)) {
                $invalidProperties[] = "invalid value for 'attackMethodDesc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['attackMethodDesc']) && (mb_strlen($this->container['attackMethodDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackMethodDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attackMethodDesc']) && !preg_match("/^.*$/", $this->container['attackMethodDesc'])) {
                $invalidProperties[] = "invalid value for 'attackMethodDesc', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['attackDesc']) && (mb_strlen($this->container['attackDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'attackDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['attackDesc']) && (mb_strlen($this->container['attackDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attackDesc']) && !preg_match("/^.*$/", $this->container['attackDesc'])) {
                $invalidProperties[] = "invalid value for 'attackDesc', must be conform to the pattern /^.*$/.";
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
    * Gets attackIp
    *  **参数解释**： 攻击源 IP **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAttackIp()
    {
        return $this->container['attackIp'];
    }

    /**
    * Sets attackIp
    *
    * @param string|null $attackIp **参数解释**： 攻击源 IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackIp($attackIp)
    {
        $this->container['attackIp'] = $attackIp;
        return $this;
    }

    /**
    * Gets sandboxName
    *  **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSandboxName()
    {
        return $this->container['sandboxName'];
    }

    /**
    * Sets sandboxName
    *
    * @param string|null $sandboxName **参数解释**： 隔离沙箱名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSandboxName($sandboxName)
    {
        $this->container['sandboxName'] = $sandboxName;
        return $this;
    }

    /**
    * Gets serviceName
    *  **参数解释**： 欺骗服务 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName **参数解释**： 欺骗服务 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets attackType
    *  **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    *
    * @return string|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param string|null $attackType **参数解释**： 攻击类型 **取值范围**： - probe：探测 - invade：入侵
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets attackMethodDesc
    *  **参数解释**： 攻击手法 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAttackMethodDesc()
    {
        return $this->container['attackMethodDesc'];
    }

    /**
    * Sets attackMethodDesc
    *
    * @param string|null $attackMethodDesc **参数解释**： 攻击手法 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackMethodDesc($attackMethodDesc)
    {
        $this->container['attackMethodDesc'] = $attackMethodDesc;
        return $this;
    }

    /**
    * Gets attackDesc
    *  **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAttackDesc()
    {
        return $this->container['attackDesc'];
    }

    /**
    * Sets attackDesc
    *
    * @param string|null $attackDesc **参数解释**： 攻击行为 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackDesc($attackDesc)
    {
        $this->container['attackDesc'] = $attackDesc;
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

