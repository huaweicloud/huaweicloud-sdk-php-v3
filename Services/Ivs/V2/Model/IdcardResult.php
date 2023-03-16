<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdcardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdcardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  身份证上识别的名称。
    * number  身份证号。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'number' => 'string',
            'sex' => 'string',
            'birth' => 'string',
            'ethnicity' => 'string',
            'address' => 'string',
            'issue' => 'string',
            'validFrom' => 'string',
            'validTo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  身份证上识别的名称。
    * number  身份证号。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'number' => null,
        'sex' => null,
        'birth' => null,
        'ethnicity' => null,
        'address' => null,
        'issue' => null,
        'validFrom' => null,
        'validTo' => null
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
    * name  身份证上识别的名称。
    * number  身份证号。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'number' => 'number',
            'sex' => 'sex',
            'birth' => 'birth',
            'ethnicity' => 'ethnicity',
            'address' => 'address',
            'issue' => 'issue',
            'validFrom' => 'valid_from',
            'validTo' => 'valid_to'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  身份证上识别的名称。
    * number  身份证号。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'number' => 'setNumber',
            'sex' => 'setSex',
            'birth' => 'setBirth',
            'ethnicity' => 'setEthnicity',
            'address' => 'setAddress',
            'issue' => 'setIssue',
            'validFrom' => 'setValidFrom',
            'validTo' => 'setValidTo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  身份证上识别的名称。
    * number  身份证号。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'number' => 'getNumber',
            'sex' => 'getSex',
            'birth' => 'getBirth',
            'ethnicity' => 'getEthnicity',
            'address' => 'getAddress',
            'issue' => 'getIssue',
            'validFrom' => 'getValidFrom',
            'validTo' => 'getValidTo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['ethnicity'] = isset($data['ethnicity']) ? $data['ethnicity'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['sex'] === null) {
            $invalidProperties[] = "'sex' can't be null";
        }
        if ($this->container['birth'] === null) {
            $invalidProperties[] = "'birth' can't be null";
        }
        if ($this->container['ethnicity'] === null) {
            $invalidProperties[] = "'ethnicity' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
    * Gets name
    *  身份证上识别的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 身份证上识别的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets number
    *  身份证号。
    *
    * @return string
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string $number 身份证号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets sex
    *  性别。
    *
    * @return string
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string $sex 性别。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets birth
    *  出生日期。
    *
    * @return string
    */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
    * Sets birth
    *
    * @param string $birth 出生日期。
    *
    * @return $this
    */
    public function setBirth($birth)
    {
        $this->container['birth'] = $birth;
        return $this;
    }

    /**
    * Gets ethnicity
    *  民族。
    *
    * @return string
    */
    public function getEthnicity()
    {
        return $this->container['ethnicity'];
    }

    /**
    * Sets ethnicity
    *
    * @param string $ethnicity 民族。
    *
    * @return $this
    */
    public function setEthnicity($ethnicity)
    {
        $this->container['ethnicity'] = $ethnicity;
        return $this;
    }

    /**
    * Gets address
    *  地址。
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets issue
    *  发证机关。
    *
    * @return string|null
    */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
    * Sets issue
    *
    * @param string|null $issue 发证机关。
    *
    * @return $this
    */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;
        return $this;
    }

    /**
    * Gets validFrom
    *  有效起始日期。
    *
    * @return string|null
    */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
    * Sets validFrom
    *
    * @param string|null $validFrom 有效起始日期。
    *
    * @return $this
    */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;
        return $this;
    }

    /**
    * Gets validTo
    *  有效结束日期。
    *
    * @return string|null
    */
    public function getValidTo()
    {
        return $this->container['validTo'];
    }

    /**
    * Sets validTo
    *
    * @param string|null $validTo 有效结束日期。
    *
    * @return $this
    */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;
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

