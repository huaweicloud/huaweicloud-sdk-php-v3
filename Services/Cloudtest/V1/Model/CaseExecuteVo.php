<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaseExecuteVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaseExecuteVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeRate  需求关联用例执行率
    * executedNumber  需求关联已执行用例总数
    * notExecutedNumber  需求关联未执行用例总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeRate' => 'string',
            'executedNumber' => 'int',
            'notExecutedNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeRate  需求关联用例执行率
    * executedNumber  需求关联已执行用例总数
    * notExecutedNumber  需求关联未执行用例总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeRate' => null,
        'executedNumber' => 'int32',
        'notExecutedNumber' => 'int32'
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
    * executeRate  需求关联用例执行率
    * executedNumber  需求关联已执行用例总数
    * notExecutedNumber  需求关联未执行用例总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeRate' => 'execute_rate',
            'executedNumber' => 'executed_number',
            'notExecutedNumber' => 'not_executed_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeRate  需求关联用例执行率
    * executedNumber  需求关联已执行用例总数
    * notExecutedNumber  需求关联未执行用例总数
    *
    * @var string[]
    */
    protected static $setters = [
            'executeRate' => 'setExecuteRate',
            'executedNumber' => 'setExecutedNumber',
            'notExecutedNumber' => 'setNotExecutedNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeRate  需求关联用例执行率
    * executedNumber  需求关联已执行用例总数
    * notExecutedNumber  需求关联未执行用例总数
    *
    * @var string[]
    */
    protected static $getters = [
            'executeRate' => 'getExecuteRate',
            'executedNumber' => 'getExecutedNumber',
            'notExecutedNumber' => 'getNotExecutedNumber'
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
        $this->container['executeRate'] = isset($data['executeRate']) ? $data['executeRate'] : null;
        $this->container['executedNumber'] = isset($data['executedNumber']) ? $data['executedNumber'] : null;
        $this->container['notExecutedNumber'] = isset($data['notExecutedNumber']) ? $data['notExecutedNumber'] : null;
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
    * Gets executeRate
    *  需求关联用例执行率
    *
    * @return string|null
    */
    public function getExecuteRate()
    {
        return $this->container['executeRate'];
    }

    /**
    * Sets executeRate
    *
    * @param string|null $executeRate 需求关联用例执行率
    *
    * @return $this
    */
    public function setExecuteRate($executeRate)
    {
        $this->container['executeRate'] = $executeRate;
        return $this;
    }

    /**
    * Gets executedNumber
    *  需求关联已执行用例总数
    *
    * @return int|null
    */
    public function getExecutedNumber()
    {
        return $this->container['executedNumber'];
    }

    /**
    * Sets executedNumber
    *
    * @param int|null $executedNumber 需求关联已执行用例总数
    *
    * @return $this
    */
    public function setExecutedNumber($executedNumber)
    {
        $this->container['executedNumber'] = $executedNumber;
        return $this;
    }

    /**
    * Gets notExecutedNumber
    *  需求关联未执行用例总数
    *
    * @return int|null
    */
    public function getNotExecutedNumber()
    {
        return $this->container['notExecutedNumber'];
    }

    /**
    * Sets notExecutedNumber
    *
    * @param int|null $notExecutedNumber 需求关联未执行用例总数
    *
    * @return $this
    */
    public function setNotExecutedNumber($notExecutedNumber)
    {
        $this->container['notExecutedNumber'] = $notExecutedNumber;
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

