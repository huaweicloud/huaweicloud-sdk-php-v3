<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefectVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefectVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  缺陷数
    * notSolved  未关闭缺陷数
    * severityNumberList  组装缺陷每种重要程度的名称和对应的数目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'notSolved' => 'int',
            'severityNumberList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  缺陷数
    * notSolved  未关闭缺陷数
    * severityNumberList  组装缺陷每种重要程度的名称和对应的数目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'notSolved' => 'int32',
        'severityNumberList' => null
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
    * total  缺陷数
    * notSolved  未关闭缺陷数
    * severityNumberList  组装缺陷每种重要程度的名称和对应的数目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'notSolved' => 'not_solved',
            'severityNumberList' => 'severity_number_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  缺陷数
    * notSolved  未关闭缺陷数
    * severityNumberList  组装缺陷每种重要程度的名称和对应的数目
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'notSolved' => 'setNotSolved',
            'severityNumberList' => 'setSeverityNumberList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  缺陷数
    * notSolved  未关闭缺陷数
    * severityNumberList  组装缺陷每种重要程度的名称和对应的数目
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'notSolved' => 'getNotSolved',
            'severityNumberList' => 'getSeverityNumberList'
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
        $this->container['notSolved'] = isset($data['notSolved']) ? $data['notSolved'] : null;
        $this->container['severityNumberList'] = isset($data['severityNumberList']) ? $data['severityNumberList'] : null;
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
    *  缺陷数
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
    * @param int|null $total 缺陷数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets notSolved
    *  未关闭缺陷数
    *
    * @return int|null
    */
    public function getNotSolved()
    {
        return $this->container['notSolved'];
    }

    /**
    * Sets notSolved
    *
    * @param int|null $notSolved 未关闭缺陷数
    *
    * @return $this
    */
    public function setNotSolved($notSolved)
    {
        $this->container['notSolved'] = $notSolved;
        return $this;
    }

    /**
    * Gets severityNumberList
    *  组装缺陷每种重要程度的名称和对应的数目
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null
    */
    public function getSeverityNumberList()
    {
        return $this->container['severityNumberList'];
    }

    /**
    * Sets severityNumberList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndValueVo[]|null $severityNumberList 组装缺陷每种重要程度的名称和对应的数目
    *
    * @return $this
    */
    public function setSeverityNumberList($severityNumberList)
    {
        $this->container['severityNumberList'] = $severityNumberList;
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

