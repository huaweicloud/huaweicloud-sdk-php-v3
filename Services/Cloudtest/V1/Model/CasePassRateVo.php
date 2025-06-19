<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CasePassRateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CasePassRateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * passRate  用例通过率
    * resultNumberList  用户自定义结果对应的用例数目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'passRate' => 'string',
            'resultNumberList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * passRate  用例通过率
    * resultNumberList  用户自定义结果对应的用例数目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'passRate' => null,
        'resultNumberList' => null
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
    * passRate  用例通过率
    * resultNumberList  用户自定义结果对应的用例数目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'passRate' => 'pass_rate',
            'resultNumberList' => 'result_number_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * passRate  用例通过率
    * resultNumberList  用户自定义结果对应的用例数目
    *
    * @var string[]
    */
    protected static $setters = [
            'passRate' => 'setPassRate',
            'resultNumberList' => 'setResultNumberList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * passRate  用例通过率
    * resultNumberList  用户自定义结果对应的用例数目
    *
    * @var string[]
    */
    protected static $getters = [
            'passRate' => 'getPassRate',
            'resultNumberList' => 'getResultNumberList'
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
        $this->container['passRate'] = isset($data['passRate']) ? $data['passRate'] : null;
        $this->container['resultNumberList'] = isset($data['resultNumberList']) ? $data['resultNumberList'] : null;
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
    * Gets passRate
    *  用例通过率
    *
    * @return string|null
    */
    public function getPassRate()
    {
        return $this->container['passRate'];
    }

    /**
    * Sets passRate
    *
    * @param string|null $passRate 用例通过率
    *
    * @return $this
    */
    public function setPassRate($passRate)
    {
        $this->container['passRate'] = $passRate;
        return $this;
    }

    /**
    * Gets resultNumberList
    *  用户自定义结果对应的用例数目
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null
    */
    public function getResultNumberList()
    {
        return $this->container['resultNumberList'];
    }

    /**
    * Sets resultNumberList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null $resultNumberList 用户自定义结果对应的用例数目
    *
    * @return $this
    */
    public function setResultNumberList($resultNumberList)
    {
        $this->container['resultNumberList'] = $resultNumberList;
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

