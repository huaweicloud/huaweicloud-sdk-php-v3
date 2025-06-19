<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestCaseAndDefectInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestCaseAndDefectInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  起始记录数大于实际总条数时，值为0。
    * values  查询用户用例关联缺陷的统计信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'values' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalUserCaseAndDefect[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  起始记录数大于实际总条数时，值为0。
    * values  查询用户用例关联缺陷的统计信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'values' => null
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
    * total  起始记录数大于实际总条数时，值为0。
    * values  查询用户用例关联缺陷的统计信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  起始记录数大于实际总条数时，值为0。
    * values  查询用户用例关联缺陷的统计信息
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  起始记录数大于实际总条数时，值为0。
    * values  查询用户用例关联缺陷的统计信息
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'values' => 'getValues'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets total
    *  起始记录数大于实际总条数时，值为0。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 起始记录数大于实际总条数时，值为0。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets values
    *  查询用户用例关联缺陷的统计信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalUserCaseAndDefect[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExternalUserCaseAndDefect[]|null $values 查询用户用例关联缺陷的统计信息
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

