<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Resources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Resources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quota  函数配额限制。
    * used  已使用的配额。
    * type  “资源类型”
    * unit  资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quota' => 'int',
            'used' => 'int',
            'type' => 'string',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quota  函数配额限制。
    * used  已使用的配额。
    * type  “资源类型”
    * unit  资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quota' => null,
        'used' => null,
        'type' => null,
        'unit' => null
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
    * quota  函数配额限制。
    * used  已使用的配额。
    * type  “资源类型”
    * unit  资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quota' => 'quota',
            'used' => 'used',
            'type' => 'type',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quota  函数配额限制。
    * used  已使用的配额。
    * type  “资源类型”
    * unit  资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @var string[]
    */
    protected static $setters = [
            'quota' => 'setQuota',
            'used' => 'setUsed',
            'type' => 'setType',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quota  函数配额限制。
    * used  已使用的配额。
    * type  “资源类型”
    * unit  资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @var string[]
    */
    protected static $getters = [
            'quota' => 'getQuota',
            'used' => 'getUsed',
            'type' => 'getType',
            'unit' => 'getUnit'
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
    const TYPE_FGS_FUNC_SCALE_DOWN_TIMEOUT = 'fgs_func_scale_down_timeout';
    const TYPE_FGS_FUNC_OCCURS = 'fgs_func_occurs';
    const TYPE_FGS_FUNC_PAT_IDLE_TIME = 'fgs_func_pat_idle_time';
    const TYPE_FGS_FUNC_NUM = 'fgs_func_num';
    const TYPE_FGS_FUNC_CODE_SIZE = 'fgs_func_code_size';
    const TYPE_FGS_WORKFLOW_NUM = 'fgs_workflow_num';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FGS_FUNC_SCALE_DOWN_TIMEOUT,
            self::TYPE_FGS_FUNC_OCCURS,
            self::TYPE_FGS_FUNC_PAT_IDLE_TIME,
            self::TYPE_FGS_FUNC_NUM,
            self::TYPE_FGS_FUNC_CODE_SIZE,
            self::TYPE_FGS_WORKFLOW_NUM,
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
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
    * Gets quota
    *  函数配额限制。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 函数配额限制。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  已使用的配额。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已使用的配额。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets type
    *  “资源类型”
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
    * @param string|null $type “资源类型”
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets unit
    *  资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 资源的计数单位。fgs_func_code_size,单位为MB,其他场景无单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

