<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyTargetParamsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyTargetParamsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * group  参数分组
    * params  修改的参数信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'group' => 'string',
            'params' => '\HuaweiCloud\SDK\Drs\V3\Model\ParamsReqBean[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * group  参数分组
    * params  修改的参数信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'group' => null,
        'params' => null
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
    * group  参数分组
    * params  修改的参数信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'group' => 'group',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * group  参数分组
    * params  修改的参数信息
    *
    * @var string[]
    */
    protected static $setters = [
            'group' => 'setGroup',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * group  参数分组
    * params  修改的参数信息
    *
    * @var string[]
    */
    protected static $getters = [
            'group' => 'getGroup',
            'params' => 'getParams'
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
    const GROUP_COMMON = 'common';
    const GROUP_PERFORMANCE = 'performance';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGroupAllowableValues()
    {
        return [
            self::GROUP_COMMON,
            self::GROUP_PERFORMANCE,
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
            $allowedValues = $this->getGroupAllowableValues();
                if (!is_null($this->container['group']) && !in_array($this->container['group'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'group', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
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
    * Gets group
    *  参数分组
    *
    * @return string
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string $group 参数分组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets params
    *  修改的参数信息
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ParamsReqBean[]
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ParamsReqBean[] $params 修改的参数信息
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

