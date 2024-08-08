<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationPrimitiveTypeHolderConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationPrimitiveTypeHolder_configuration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetStacks  指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    * failureMode  指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetStacks' => 'string',
            'failureMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetStacks  指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    * failureMode  指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetStacks' => null,
        'failureMode' => null
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
    * targetStacks  指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    * failureMode  指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetStacks' => 'target_stacks',
            'failureMode' => 'failure_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetStacks  指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    * failureMode  指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetStacks' => 'setTargetStacks',
            'failureMode' => 'setFailureMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetStacks  指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    * failureMode  指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetStacks' => 'getTargetStacks',
            'failureMode' => 'getFailureMode'
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
    const TARGET_STACKS_NONE = 'NONE';
    const TARGET_STACKS_ALL = 'ALL';
    const FAILURE_MODE_WARN = 'WARN';
    const FAILURE_MODE_FAIL = 'FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetStacksAllowableValues()
    {
        return [
            self::TARGET_STACKS_NONE,
            self::TARGET_STACKS_ALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailureModeAllowableValues()
    {
        return [
            self::FAILURE_MODE_WARN,
            self::FAILURE_MODE_FAIL,
        ];
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
        $this->container['targetStacks'] = isset($data['targetStacks']) ? $data['targetStacks'] : null;
        $this->container['failureMode'] = isset($data['failureMode']) ? $data['failureMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTargetStacksAllowableValues();
                if (!is_null($this->container['targetStacks']) && !in_array($this->container['targetStacks'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetStacks', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFailureModeAllowableValues();
                if (!is_null($this->container['failureMode']) && !in_array($this->container['failureMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failureMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets targetStacks
    *  指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    *
    * @return string|null
    */
    public function getTargetStacks()
    {
        return $this->container['targetStacks'];
    }

    /**
    * Sets targetStacks
    *
    * @param string|null $targetStacks 指定私有hook生效的目标资源栈，有效值为NONE或ALL。  NONE：指定此私有hook不会作用于任何资源栈 ALL：指定此私有hook将会应用于账号下的所有资源栈
    *
    * @return $this
    */
    public function setTargetStacks($targetStacks)
    {
        $this->container['targetStacks'] = $targetStacks;
        return $this;
    }

    /**
    * Gets failureMode
    *  指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @return string|null
    */
    public function getFailureMode()
    {
        return $this->container['failureMode'];
    }

    /**
    * Sets failureMode
    *
    * @param string|null $failureMode 指定私有hook校验失败后的行为，有效值为FAIL或WARN。  FAIL：指定此私有hook校验失败后资源栈将停止部署，资源栈状态将更新为DEPLOYMENT_FAILED。 WARN：指定此私有hook校验失败后仅通过资源栈事件展示警告消息，但不影响资源栈部署。
    *
    * @return $this
    */
    public function setFailureMode($failureMode)
    {
        $this->container['failureMode'] = $failureMode;
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

