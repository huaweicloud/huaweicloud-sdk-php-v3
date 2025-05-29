<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SeveritySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SeveritySummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * criticalCount  重大合规性报告数量
    * highCount  高合规性报告数量
    * informationalCount  信息性合规性报告数量
    * lowCount  低合规性报告数量
    * mediumCount  中级合规性报告数量
    * unspecifiedCount  未指定合规性报告数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'criticalCount' => 'int',
            'highCount' => 'int',
            'informationalCount' => 'int',
            'lowCount' => 'int',
            'mediumCount' => 'int',
            'unspecifiedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * criticalCount  重大合规性报告数量
    * highCount  高合规性报告数量
    * informationalCount  信息性合规性报告数量
    * lowCount  低合规性报告数量
    * mediumCount  中级合规性报告数量
    * unspecifiedCount  未指定合规性报告数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'criticalCount' => 'int32',
        'highCount' => 'int32',
        'informationalCount' => 'int32',
        'lowCount' => 'int32',
        'mediumCount' => 'int32',
        'unspecifiedCount' => 'int32'
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
    * criticalCount  重大合规性报告数量
    * highCount  高合规性报告数量
    * informationalCount  信息性合规性报告数量
    * lowCount  低合规性报告数量
    * mediumCount  中级合规性报告数量
    * unspecifiedCount  未指定合规性报告数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'criticalCount' => 'critical_count',
            'highCount' => 'high_count',
            'informationalCount' => 'informational_count',
            'lowCount' => 'low_count',
            'mediumCount' => 'medium_count',
            'unspecifiedCount' => 'unspecified_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * criticalCount  重大合规性报告数量
    * highCount  高合规性报告数量
    * informationalCount  信息性合规性报告数量
    * lowCount  低合规性报告数量
    * mediumCount  中级合规性报告数量
    * unspecifiedCount  未指定合规性报告数量
    *
    * @var string[]
    */
    protected static $setters = [
            'criticalCount' => 'setCriticalCount',
            'highCount' => 'setHighCount',
            'informationalCount' => 'setInformationalCount',
            'lowCount' => 'setLowCount',
            'mediumCount' => 'setMediumCount',
            'unspecifiedCount' => 'setUnspecifiedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * criticalCount  重大合规性报告数量
    * highCount  高合规性报告数量
    * informationalCount  信息性合规性报告数量
    * lowCount  低合规性报告数量
    * mediumCount  中级合规性报告数量
    * unspecifiedCount  未指定合规性报告数量
    *
    * @var string[]
    */
    protected static $getters = [
            'criticalCount' => 'getCriticalCount',
            'highCount' => 'getHighCount',
            'informationalCount' => 'getInformationalCount',
            'lowCount' => 'getLowCount',
            'mediumCount' => 'getMediumCount',
            'unspecifiedCount' => 'getUnspecifiedCount'
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
        $this->container['criticalCount'] = isset($data['criticalCount']) ? $data['criticalCount'] : null;
        $this->container['highCount'] = isset($data['highCount']) ? $data['highCount'] : null;
        $this->container['informationalCount'] = isset($data['informationalCount']) ? $data['informationalCount'] : null;
        $this->container['lowCount'] = isset($data['lowCount']) ? $data['lowCount'] : null;
        $this->container['mediumCount'] = isset($data['mediumCount']) ? $data['mediumCount'] : null;
        $this->container['unspecifiedCount'] = isset($data['unspecifiedCount']) ? $data['unspecifiedCount'] : null;
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
    * Gets criticalCount
    *  重大合规性报告数量
    *
    * @return int|null
    */
    public function getCriticalCount()
    {
        return $this->container['criticalCount'];
    }

    /**
    * Sets criticalCount
    *
    * @param int|null $criticalCount 重大合规性报告数量
    *
    * @return $this
    */
    public function setCriticalCount($criticalCount)
    {
        $this->container['criticalCount'] = $criticalCount;
        return $this;
    }

    /**
    * Gets highCount
    *  高合规性报告数量
    *
    * @return int|null
    */
    public function getHighCount()
    {
        return $this->container['highCount'];
    }

    /**
    * Sets highCount
    *
    * @param int|null $highCount 高合规性报告数量
    *
    * @return $this
    */
    public function setHighCount($highCount)
    {
        $this->container['highCount'] = $highCount;
        return $this;
    }

    /**
    * Gets informationalCount
    *  信息性合规性报告数量
    *
    * @return int|null
    */
    public function getInformationalCount()
    {
        return $this->container['informationalCount'];
    }

    /**
    * Sets informationalCount
    *
    * @param int|null $informationalCount 信息性合规性报告数量
    *
    * @return $this
    */
    public function setInformationalCount($informationalCount)
    {
        $this->container['informationalCount'] = $informationalCount;
        return $this;
    }

    /**
    * Gets lowCount
    *  低合规性报告数量
    *
    * @return int|null
    */
    public function getLowCount()
    {
        return $this->container['lowCount'];
    }

    /**
    * Sets lowCount
    *
    * @param int|null $lowCount 低合规性报告数量
    *
    * @return $this
    */
    public function setLowCount($lowCount)
    {
        $this->container['lowCount'] = $lowCount;
        return $this;
    }

    /**
    * Gets mediumCount
    *  中级合规性报告数量
    *
    * @return int|null
    */
    public function getMediumCount()
    {
        return $this->container['mediumCount'];
    }

    /**
    * Sets mediumCount
    *
    * @param int|null $mediumCount 中级合规性报告数量
    *
    * @return $this
    */
    public function setMediumCount($mediumCount)
    {
        $this->container['mediumCount'] = $mediumCount;
        return $this;
    }

    /**
    * Gets unspecifiedCount
    *  未指定合规性报告数量
    *
    * @return int|null
    */
    public function getUnspecifiedCount()
    {
        return $this->container['unspecifiedCount'];
    }

    /**
    * Sets unspecifiedCount
    *
    * @param int|null $unspecifiedCount 未指定合规性报告数量
    *
    * @return $this
    */
    public function setUnspecifiedCount($unspecifiedCount)
    {
        $this->container['unspecifiedCount'] = $unspecifiedCount;
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

