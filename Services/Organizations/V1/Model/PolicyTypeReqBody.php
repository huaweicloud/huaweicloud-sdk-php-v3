<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyTypeReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyTypeReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyType  策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    * rootId  根的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyType' => 'string',
            'rootId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyType  策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    * rootId  根的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyType' => null,
        'rootId' => null
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
    * policyType  策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    * rootId  根的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyType' => 'policy_type',
            'rootId' => 'root_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyType  策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    * rootId  根的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'policyType' => 'setPolicyType',
            'rootId' => 'setRootId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyType  策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    * rootId  根的唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'policyType' => 'getPolicyType',
            'rootId' => 'getRootId'
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
    const POLICY_TYPE_SERVICE_CONTROL_POLICY = 'service_control_policy';
    const POLICY_TYPE_TAG_POLICY = 'tag_policy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyTypeAllowableValues()
    {
        return [
            self::POLICY_TYPE_SERVICE_CONTROL_POLICY,
            self::POLICY_TYPE_TAG_POLICY,
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
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyType'] === null) {
            $invalidProperties[] = "'policyType' can't be null";
        }
            $allowedValues = $this->getPolicyTypeAllowableValues();
                if (!is_null($this->container['policyType']) && !in_array($this->container['policyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['rootId'] === null) {
            $invalidProperties[] = "'rootId' can't be null";
        }
            if ((mb_strlen($this->container['rootId']) > 34)) {
                $invalidProperties[] = "invalid value for 'rootId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^r-[0-9a-z]{4,32}$/", $this->container['rootId'])) {
                $invalidProperties[] = "invalid value for 'rootId', must be conform to the pattern /^r-[0-9a-z]{4,32}$/.";
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
    * Gets policyType
    *  策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    *
    * @return string
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string $policyType 策略类型的名称，service_control_policy服务控制策略；tag_policy：标签策略。
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets rootId
    *  根的唯一标识符（ID）。
    *
    * @return string
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string $rootId 根的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
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

