<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberCheckJobResultGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberCheckJobResultGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkResult  参数解释：检查结果，true表示检查通过，false为检查不通过。
    * checkItems  参数解释：分组检查项汇总。
    * checkStatus  参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkResult' => 'bool',
            'checkItems' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultItem[]',
            'checkStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkResult  参数解释：检查结果，true表示检查通过，false为检查不通过。
    * checkItems  参数解释：分组检查项汇总。
    * checkStatus  参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkResult' => null,
        'checkItems' => null,
        'checkStatus' => null
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
    * checkResult  参数解释：检查结果，true表示检查通过，false为检查不通过。
    * checkItems  参数解释：分组检查项汇总。
    * checkStatus  参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkResult' => 'check_result',
            'checkItems' => 'check_items',
            'checkStatus' => 'check_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkResult  参数解释：检查结果，true表示检查通过，false为检查不通过。
    * checkItems  参数解释：分组检查项汇总。
    * checkStatus  参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @var string[]
    */
    protected static $setters = [
            'checkResult' => 'setCheckResult',
            'checkItems' => 'setCheckItems',
            'checkStatus' => 'setCheckStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkResult  参数解释：检查结果，true表示检查通过，false为检查不通过。
    * checkItems  参数解释：分组检查项汇总。
    * checkStatus  参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @var string[]
    */
    protected static $getters = [
            'checkResult' => 'getCheckResult',
            'checkItems' => 'getCheckItems',
            'checkStatus' => 'getCheckStatus'
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
        $this->container['checkResult'] = isset($data['checkResult']) ? $data['checkResult'] : null;
        $this->container['checkItems'] = isset($data['checkItems']) ? $data['checkItems'] : null;
        $this->container['checkStatus'] = isset($data['checkStatus']) ? $data['checkStatus'] : null;
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
    * Gets checkResult
    *  参数解释：检查结果，true表示检查通过，false为检查不通过。
    *
    * @return bool|null
    */
    public function getCheckResult()
    {
        return $this->container['checkResult'];
    }

    /**
    * Sets checkResult
    *
    * @param bool|null $checkResult 参数解释：检查结果，true表示检查通过，false为检查不通过。
    *
    * @return $this
    */
    public function setCheckResult($checkResult)
    {
        $this->container['checkResult'] = $checkResult;
        return $this;
    }

    /**
    * Gets checkItems
    *  参数解释：分组检查项汇总。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultItem[]|null
    */
    public function getCheckItems()
    {
        return $this->container['checkItems'];
    }

    /**
    * Sets checkItems
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultItem[]|null $checkItems 参数解释：分组检查项汇总。
    *
    * @return $this
    */
    public function setCheckItems($checkItems)
    {
        $this->container['checkItems'] = $checkItems;
        return $this;
    }

    /**
    * Gets checkStatus
    *  参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @return string|null
    */
    public function getCheckStatus()
    {
        return $this->container['checkStatus'];
    }

    /**
    * Sets checkStatus
    *
    * @param string|null $checkStatus 参数解释：processed检查完成，processing检查中，failed检查失败
    *
    * @return $this
    */
    public function setCheckStatus($checkStatus)
    {
        $this->container['checkStatus'] = $checkStatus;
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

