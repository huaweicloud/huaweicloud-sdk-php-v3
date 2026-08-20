<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  状态ID。
    * belonging  工作项的状态属性。
    * displayValue  状态名。
    * code  状态唯一标识。
    * createdBy  状态创建人。
    * createdTime  状态创建时间。
    * modifiedBy  状态修改人。
    * modifiedTime  状态最近修改时间。
    * categoryCode  状态被哪些工作项使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'belonging' => 'string',
            'displayValue' => 'string',
            'code' => 'string',
            'createdBy' => 'string',
            'createdTime' => 'string',
            'modifiedBy' => 'string',
            'modifiedTime' => 'string',
            'categoryCode' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  状态ID。
    * belonging  工作项的状态属性。
    * displayValue  状态名。
    * code  状态唯一标识。
    * createdBy  状态创建人。
    * createdTime  状态创建时间。
    * modifiedBy  状态修改人。
    * modifiedTime  状态最近修改时间。
    * categoryCode  状态被哪些工作项使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'belonging' => null,
        'displayValue' => null,
        'code' => null,
        'createdBy' => null,
        'createdTime' => null,
        'modifiedBy' => null,
        'modifiedTime' => null,
        'categoryCode' => null
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
    * id  状态ID。
    * belonging  工作项的状态属性。
    * displayValue  状态名。
    * code  状态唯一标识。
    * createdBy  状态创建人。
    * createdTime  状态创建时间。
    * modifiedBy  状态修改人。
    * modifiedTime  状态最近修改时间。
    * categoryCode  状态被哪些工作项使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'belonging' => 'belonging',
            'displayValue' => 'display_value',
            'code' => 'code',
            'createdBy' => 'created_by',
            'createdTime' => 'created_time',
            'modifiedBy' => 'modified_by',
            'modifiedTime' => 'modified_time',
            'categoryCode' => 'category_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  状态ID。
    * belonging  工作项的状态属性。
    * displayValue  状态名。
    * code  状态唯一标识。
    * createdBy  状态创建人。
    * createdTime  状态创建时间。
    * modifiedBy  状态修改人。
    * modifiedTime  状态最近修改时间。
    * categoryCode  状态被哪些工作项使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'belonging' => 'setBelonging',
            'displayValue' => 'setDisplayValue',
            'code' => 'setCode',
            'createdBy' => 'setCreatedBy',
            'createdTime' => 'setCreatedTime',
            'modifiedBy' => 'setModifiedBy',
            'modifiedTime' => 'setModifiedTime',
            'categoryCode' => 'setCategoryCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  状态ID。
    * belonging  工作项的状态属性。
    * displayValue  状态名。
    * code  状态唯一标识。
    * createdBy  状态创建人。
    * createdTime  状态创建时间。
    * modifiedBy  状态修改人。
    * modifiedTime  状态最近修改时间。
    * categoryCode  状态被哪些工作项使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'belonging' => 'getBelonging',
            'displayValue' => 'getDisplayValue',
            'code' => 'getCode',
            'createdBy' => 'getCreatedBy',
            'createdTime' => 'getCreatedTime',
            'modifiedBy' => 'getModifiedBy',
            'modifiedTime' => 'getModifiedTime',
            'categoryCode' => 'getCategoryCode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['belonging'] = isset($data['belonging']) ? $data['belonging'] : null;
        $this->container['displayValue'] = isset($data['displayValue']) ? $data['displayValue'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['belonging']) && (mb_strlen($this->container['belonging']) > 32)) {
                $invalidProperties[] = "invalid value for 'belonging', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['belonging']) && (mb_strlen($this->container['belonging']) < 0)) {
                $invalidProperties[] = "invalid value for 'belonging', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['displayValue']) && (mb_strlen($this->container['displayValue']) > 30)) {
                $invalidProperties[] = "invalid value for 'displayValue', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['displayValue']) && (mb_strlen($this->container['displayValue']) < 2)) {
                $invalidProperties[] = "invalid value for 'displayValue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 32)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 2)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) > 19)) {
                $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be bigger than or equal to 13.";
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
    * Gets id
    *  状态ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 状态ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets belonging
    *  工作项的状态属性。
    *
    * @return string|null
    */
    public function getBelonging()
    {
        return $this->container['belonging'];
    }

    /**
    * Sets belonging
    *
    * @param string|null $belonging 工作项的状态属性。
    *
    * @return $this
    */
    public function setBelonging($belonging)
    {
        $this->container['belonging'] = $belonging;
        return $this;
    }

    /**
    * Gets displayValue
    *  状态名。
    *
    * @return string|null
    */
    public function getDisplayValue()
    {
        return $this->container['displayValue'];
    }

    /**
    * Sets displayValue
    *
    * @param string|null $displayValue 状态名。
    *
    * @return $this
    */
    public function setDisplayValue($displayValue)
    {
        $this->container['displayValue'] = $displayValue;
        return $this;
    }

    /**
    * Gets code
    *  状态唯一标识。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 状态唯一标识。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets createdBy
    *  状态创建人。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 状态创建人。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdTime
    *  状态创建时间。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 状态创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  状态修改人。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 状态修改人。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  状态最近修改时间。
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime 状态最近修改时间。
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets categoryCode
    *  状态被哪些工作项使用。
    *
    * @return string[]|null
    */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
    * Sets categoryCode
    *
    * @param string[]|null $categoryCode 状态被哪些工作项使用。
    *
    * @return $this
    */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;
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

