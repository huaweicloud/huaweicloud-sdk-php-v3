<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyStatesStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyStatesStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalResourceCount  资源总数
    * nonCompliantResourceCount  不合规资源数量
    * totalPolicyCount  合规规则总数
    * nonCompliantPolicyCount  不合规规则数量
    * statisticDate  统计日期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalResourceCount' => 'int',
            'nonCompliantResourceCount' => 'int',
            'totalPolicyCount' => 'int',
            'nonCompliantPolicyCount' => 'int',
            'statisticDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalResourceCount  资源总数
    * nonCompliantResourceCount  不合规资源数量
    * totalPolicyCount  合规规则总数
    * nonCompliantPolicyCount  不合规规则数量
    * statisticDate  统计日期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalResourceCount' => null,
        'nonCompliantResourceCount' => null,
        'totalPolicyCount' => null,
        'nonCompliantPolicyCount' => null,
        'statisticDate' => null
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
    * totalResourceCount  资源总数
    * nonCompliantResourceCount  不合规资源数量
    * totalPolicyCount  合规规则总数
    * nonCompliantPolicyCount  不合规规则数量
    * statisticDate  统计日期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalResourceCount' => 'total_resource_count',
            'nonCompliantResourceCount' => 'non_compliant_resource_count',
            'totalPolicyCount' => 'total_policy_count',
            'nonCompliantPolicyCount' => 'non_compliant_policy_count',
            'statisticDate' => 'statistic_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalResourceCount  资源总数
    * nonCompliantResourceCount  不合规资源数量
    * totalPolicyCount  合规规则总数
    * nonCompliantPolicyCount  不合规规则数量
    * statisticDate  统计日期
    *
    * @var string[]
    */
    protected static $setters = [
            'totalResourceCount' => 'setTotalResourceCount',
            'nonCompliantResourceCount' => 'setNonCompliantResourceCount',
            'totalPolicyCount' => 'setTotalPolicyCount',
            'nonCompliantPolicyCount' => 'setNonCompliantPolicyCount',
            'statisticDate' => 'setStatisticDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalResourceCount  资源总数
    * nonCompliantResourceCount  不合规资源数量
    * totalPolicyCount  合规规则总数
    * nonCompliantPolicyCount  不合规规则数量
    * statisticDate  统计日期
    *
    * @var string[]
    */
    protected static $getters = [
            'totalResourceCount' => 'getTotalResourceCount',
            'nonCompliantResourceCount' => 'getNonCompliantResourceCount',
            'totalPolicyCount' => 'getTotalPolicyCount',
            'nonCompliantPolicyCount' => 'getNonCompliantPolicyCount',
            'statisticDate' => 'getStatisticDate'
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
        $this->container['totalResourceCount'] = isset($data['totalResourceCount']) ? $data['totalResourceCount'] : null;
        $this->container['nonCompliantResourceCount'] = isset($data['nonCompliantResourceCount']) ? $data['nonCompliantResourceCount'] : null;
        $this->container['totalPolicyCount'] = isset($data['totalPolicyCount']) ? $data['totalPolicyCount'] : null;
        $this->container['nonCompliantPolicyCount'] = isset($data['nonCompliantPolicyCount']) ? $data['nonCompliantPolicyCount'] : null;
        $this->container['statisticDate'] = isset($data['statisticDate']) ? $data['statisticDate'] : null;
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
    * Gets totalResourceCount
    *  资源总数
    *
    * @return int|null
    */
    public function getTotalResourceCount()
    {
        return $this->container['totalResourceCount'];
    }

    /**
    * Sets totalResourceCount
    *
    * @param int|null $totalResourceCount 资源总数
    *
    * @return $this
    */
    public function setTotalResourceCount($totalResourceCount)
    {
        $this->container['totalResourceCount'] = $totalResourceCount;
        return $this;
    }

    /**
    * Gets nonCompliantResourceCount
    *  不合规资源数量
    *
    * @return int|null
    */
    public function getNonCompliantResourceCount()
    {
        return $this->container['nonCompliantResourceCount'];
    }

    /**
    * Sets nonCompliantResourceCount
    *
    * @param int|null $nonCompliantResourceCount 不合规资源数量
    *
    * @return $this
    */
    public function setNonCompliantResourceCount($nonCompliantResourceCount)
    {
        $this->container['nonCompliantResourceCount'] = $nonCompliantResourceCount;
        return $this;
    }

    /**
    * Gets totalPolicyCount
    *  合规规则总数
    *
    * @return int|null
    */
    public function getTotalPolicyCount()
    {
        return $this->container['totalPolicyCount'];
    }

    /**
    * Sets totalPolicyCount
    *
    * @param int|null $totalPolicyCount 合规规则总数
    *
    * @return $this
    */
    public function setTotalPolicyCount($totalPolicyCount)
    {
        $this->container['totalPolicyCount'] = $totalPolicyCount;
        return $this;
    }

    /**
    * Gets nonCompliantPolicyCount
    *  不合规规则数量
    *
    * @return int|null
    */
    public function getNonCompliantPolicyCount()
    {
        return $this->container['nonCompliantPolicyCount'];
    }

    /**
    * Sets nonCompliantPolicyCount
    *
    * @param int|null $nonCompliantPolicyCount 不合规规则数量
    *
    * @return $this
    */
    public function setNonCompliantPolicyCount($nonCompliantPolicyCount)
    {
        $this->container['nonCompliantPolicyCount'] = $nonCompliantPolicyCount;
        return $this;
    }

    /**
    * Gets statisticDate
    *  统计日期
    *
    * @return string|null
    */
    public function getStatisticDate()
    {
        return $this->container['statisticDate'];
    }

    /**
    * Sets statisticDate
    *
    * @param string|null $statisticDate 统计日期
    *
    * @return $this
    */
    public function setStatisticDate($statisticDate)
    {
        $this->container['statisticDate'] = $statisticDate;
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

