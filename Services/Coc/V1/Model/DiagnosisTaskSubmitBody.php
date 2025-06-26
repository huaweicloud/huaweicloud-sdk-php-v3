<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisTaskSubmitBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisTaskSubmitBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIds  待诊断的实例ID
    * type  被诊断实例的类型
    * extraProperties  适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIds' => 'string[]',
            'type' => 'string',
            'extraProperties' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIds  待诊断的实例ID
    * type  被诊断实例的类型
    * extraProperties  适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIds' => null,
        'type' => null,
        'extraProperties' => null
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
    * resourceIds  待诊断的实例ID
    * type  被诊断实例的类型
    * extraProperties  适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIds' => 'resource_ids',
            'type' => 'type',
            'extraProperties' => 'extra_properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIds  待诊断的实例ID
    * type  被诊断实例的类型
    * extraProperties  适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIds' => 'setResourceIds',
            'type' => 'setType',
            'extraProperties' => 'setExtraProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIds  待诊断的实例ID
    * type  被诊断实例的类型
    * extraProperties  适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIds' => 'getResourceIds',
            'type' => 'getType',
            'extraProperties' => 'getExtraProperties'
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
    const TYPE_ECS = 'ECS';
    const TYPE_RDS = 'RDS';
    const TYPE_DCS = 'DCS';
    const TYPE_DMS = 'DMS';
    const TYPE_ELB = 'ELB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ECS,
            self::TYPE_RDS,
            self::TYPE_DCS,
            self::TYPE_DMS,
            self::TYPE_ELB,
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
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['extraProperties'] = isset($data['extraProperties']) ? $data['extraProperties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    * Gets resourceIds
    *  待诊断的实例ID
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 待诊断的实例ID
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets type
    *  被诊断实例的类型
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
    * @param string|null $type 被诊断实例的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets extraProperties
    *  适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @return string[]|null
    */
    public function getExtraProperties()
    {
        return $this->container['extraProperties'];
    }

    /**
    * Sets extraProperties
    *
    * @param string[]|null $extraProperties 适用于RDS、DMS、DCS、ELB等的额外参数（JSON字符串），该数组长度应与提交的实例数组长度对应
    *
    * @return $this
    */
    public function setExtraProperties($extraProperties)
    {
        $this->container['extraProperties'] = $extraProperties;
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

