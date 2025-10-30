<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageBaselineStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageBaselineStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageWeakPwd  **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    * pwdPolicy  **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    * securityCheck  **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageWeakPwd' => 'int',
            'pwdPolicy' => 'int',
            'securityCheck' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageWeakPwd  **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    * pwdPolicy  **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    * securityCheck  **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageWeakPwd' => 'int32',
        'pwdPolicy' => 'int32',
        'securityCheck' => 'int32'
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
    * imageWeakPwd  **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    * pwdPolicy  **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    * securityCheck  **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageWeakPwd' => 'image_weak_pwd',
            'pwdPolicy' => 'pwd_policy',
            'securityCheck' => 'security_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageWeakPwd  **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    * pwdPolicy  **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    * securityCheck  **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'imageWeakPwd' => 'setImageWeakPwd',
            'pwdPolicy' => 'setPwdPolicy',
            'securityCheck' => 'setSecurityCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageWeakPwd  **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    * pwdPolicy  **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    * securityCheck  **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'imageWeakPwd' => 'getImageWeakPwd',
            'pwdPolicy' => 'getPwdPolicy',
            'securityCheck' => 'getSecurityCheck'
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
        $this->container['imageWeakPwd'] = isset($data['imageWeakPwd']) ? $data['imageWeakPwd'] : null;
        $this->container['pwdPolicy'] = isset($data['pwdPolicy']) ? $data['pwdPolicy'] : null;
        $this->container['securityCheck'] = isset($data['securityCheck']) ? $data['securityCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageWeakPwd']) && ($this->container['imageWeakPwd'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'imageWeakPwd', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['imageWeakPwd']) && ($this->container['imageWeakPwd'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageWeakPwd', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pwdPolicy']) && ($this->container['pwdPolicy'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pwdPolicy', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pwdPolicy']) && ($this->container['pwdPolicy'] < 0)) {
                $invalidProperties[] = "invalid value for 'pwdPolicy', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityCheck']) && ($this->container['securityCheck'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'securityCheck', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['securityCheck']) && ($this->container['securityCheck'] < 0)) {
                $invalidProperties[] = "invalid value for 'securityCheck', must be bigger than or equal to 0.";
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
    * Gets imageWeakPwd
    *  **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    *
    * @return int|null
    */
    public function getImageWeakPwd()
    {
        return $this->container['imageWeakPwd'];
    }

    /**
    * Sets imageWeakPwd
    *
    * @param int|null $imageWeakPwd **参数解释**: 弱口令检测 **取值范围**: 最小值0，2147483647
    *
    * @return $this
    */
    public function setImageWeakPwd($imageWeakPwd)
    {
        $this->container['imageWeakPwd'] = $imageWeakPwd;
        return $this;
    }

    /**
    * Gets pwdPolicy
    *  **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    *
    * @return int|null
    */
    public function getPwdPolicy()
    {
        return $this->container['pwdPolicy'];
    }

    /**
    * Sets pwdPolicy
    *
    * @param int|null $pwdPolicy **参数解释**: 口令复杂度策略检测 **取值范围**: 最小值0，2147483647
    *
    * @return $this
    */
    public function setPwdPolicy($pwdPolicy)
    {
        $this->container['pwdPolicy'] = $pwdPolicy;
        return $this;
    }

    /**
    * Gets securityCheck
    *  **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @return int|null
    */
    public function getSecurityCheck()
    {
        return $this->container['securityCheck'];
    }

    /**
    * Sets securityCheck
    *
    * @param int|null $securityCheck **参数解释**: 服务器配置检测 **取值范围**: 最小值0，2147483647
    *
    * @return $this
    */
    public function setSecurityCheck($securityCheck)
    {
        $this->container['securityCheck'] = $securityCheck;
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

