<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptExecuteParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptExecuteParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceful  该参数已废弃，传入该参数不会生效。
    * timeout  超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    * successRate  成功率，支持小数点后一位
    * executeUser  脚本执行用户，如：root
    * scriptParams  脚本入参列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceful' => 'bool',
            'timeout' => 'int',
            'successRate' => 'double',
            'executeUser' => 'string',
            'scriptParams' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteInputParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceful  该参数已废弃，传入该参数不会生效。
    * timeout  超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    * successRate  成功率，支持小数点后一位
    * executeUser  脚本执行用户，如：root
    * scriptParams  脚本入参列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceful' => null,
        'timeout' => 'int32',
        'successRate' => 'double',
        'executeUser' => null,
        'scriptParams' => null
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
    * resourceful  该参数已废弃，传入该参数不会生效。
    * timeout  超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    * successRate  成功率，支持小数点后一位
    * executeUser  脚本执行用户，如：root
    * scriptParams  脚本入参列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceful' => 'resourceful',
            'timeout' => 'timeout',
            'successRate' => 'success_rate',
            'executeUser' => 'execute_user',
            'scriptParams' => 'script_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceful  该参数已废弃，传入该参数不会生效。
    * timeout  超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    * successRate  成功率，支持小数点后一位
    * executeUser  脚本执行用户，如：root
    * scriptParams  脚本入参列表
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceful' => 'setResourceful',
            'timeout' => 'setTimeout',
            'successRate' => 'setSuccessRate',
            'executeUser' => 'setExecuteUser',
            'scriptParams' => 'setScriptParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceful  该参数已废弃，传入该参数不会生效。
    * timeout  超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    * successRate  成功率，支持小数点后一位
    * executeUser  脚本执行用户，如：root
    * scriptParams  脚本入参列表
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceful' => 'getResourceful',
            'timeout' => 'getTimeout',
            'successRate' => 'getSuccessRate',
            'executeUser' => 'getExecuteUser',
            'scriptParams' => 'getScriptParams'
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
        $this->container['resourceful'] = isset($data['resourceful']) ? $data['resourceful'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['successRate'] = isset($data['successRate']) ? $data['successRate'] : null;
        $this->container['executeUser'] = isset($data['executeUser']) ? $data['executeUser'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
            if (($this->container['timeout'] >= 1800)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than 1800.";
            }
            if (($this->container['timeout'] <= 5)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than 5.";
            }
        if ($this->container['successRate'] === null) {
            $invalidProperties[] = "'successRate' can't be null";
        }
            if (($this->container['successRate'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'successRate', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['successRate'] < 1)) {
                $invalidProperties[] = "invalid value for 'successRate', must be bigger than or equal to 1.";
            }
        if ($this->container['executeUser'] === null) {
            $invalidProperties[] = "'executeUser' can't be null";
        }
            if ((mb_strlen($this->container['executeUser']) > 32)) {
                $invalidProperties[] = "invalid value for 'executeUser', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['executeUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'executeUser', the character length must be bigger than or equal to 1.";
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
    * Gets resourceful
    *  该参数已废弃，传入该参数不会生效。
    *
    * @return bool|null
    */
    public function getResourceful()
    {
        return $this->container['resourceful'];
    }

    /**
    * Sets resourceful
    *
    * @param bool|null $resourceful 该参数已废弃，传入该参数不会生效。
    *
    * @return $this
    */
    public function setResourceful($resourceful)
    {
        $this->container['resourceful'] = $resourceful;
        return $this;
    }

    /**
    * Gets timeout
    *  超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 超时时间，单位：秒，取值范围待定，5 < timeout < 1800
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets successRate
    *  成功率，支持小数点后一位
    *
    * @return double
    */
    public function getSuccessRate()
    {
        return $this->container['successRate'];
    }

    /**
    * Sets successRate
    *
    * @param double $successRate 成功率，支持小数点后一位
    *
    * @return $this
    */
    public function setSuccessRate($successRate)
    {
        $this->container['successRate'] = $successRate;
        return $this;
    }

    /**
    * Gets executeUser
    *  脚本执行用户，如：root
    *
    * @return string
    */
    public function getExecuteUser()
    {
        return $this->container['executeUser'];
    }

    /**
    * Sets executeUser
    *
    * @param string $executeUser 脚本执行用户，如：root
    *
    * @return $this
    */
    public function setExecuteUser($executeUser)
    {
        $this->container['executeUser'] = $executeUser;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本入参列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteInputParam[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptExecuteInputParam[]|null $scriptParams 脚本入参列表
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
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

