<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaseCompletionRateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaseCompletionRateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  总用例数
    * completionRate  用例完成率
    * statusNumberList  用户自定义状态对应的用例数目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'completionRate' => 'string',
            'statusNumberList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  总用例数
    * completionRate  用例完成率
    * statusNumberList  用户自定义状态对应的用例数目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'completionRate' => null,
        'statusNumberList' => null
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
    * total  总用例数
    * completionRate  用例完成率
    * statusNumberList  用户自定义状态对应的用例数目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'completionRate' => 'completion_rate',
            'statusNumberList' => 'status_number_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  总用例数
    * completionRate  用例完成率
    * statusNumberList  用户自定义状态对应的用例数目
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'completionRate' => 'setCompletionRate',
            'statusNumberList' => 'setStatusNumberList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  总用例数
    * completionRate  用例完成率
    * statusNumberList  用户自定义状态对应的用例数目
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'completionRate' => 'getCompletionRate',
            'statusNumberList' => 'getStatusNumberList'
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
        $this->container['completionRate'] = isset($data['completionRate']) ? $data['completionRate'] : null;
        $this->container['statusNumberList'] = isset($data['statusNumberList']) ? $data['statusNumberList'] : null;
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
    *  总用例数
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
    * @param int|null $total 总用例数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets completionRate
    *  用例完成率
    *
    * @return string|null
    */
    public function getCompletionRate()
    {
        return $this->container['completionRate'];
    }

    /**
    * Sets completionRate
    *
    * @param string|null $completionRate 用例完成率
    *
    * @return $this
    */
    public function setCompletionRate($completionRate)
    {
        $this->container['completionRate'] = $completionRate;
        return $this;
    }

    /**
    * Gets statusNumberList
    *  用户自定义状态对应的用例数目
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null
    */
    public function getStatusNumberList()
    {
        return $this->container['statusNumberList'];
    }

    /**
    * Sets statusNumberList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null $statusNumberList 用户自定义状态对应的用例数目
    *
    * @return $this
    */
    public function setStatusNumberList($statusNumberList)
    {
        $this->container['statusNumberList'] = $statusNumberList;
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

