<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unhealth  该资源分组中当前处在告警状态的资源个数。
    * total  该资源分组中资源的总个数。
    * typeStatistics  该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unhealth' => 'int',
            'total' => 'int',
            'typeStatistics' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unhealth  该资源分组中当前处在告警状态的资源个数。
    * total  该资源分组中资源的总个数。
    * typeStatistics  该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unhealth' => 'int32',
        'total' => 'int32',
        'typeStatistics' => 'int32'
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
    * unhealth  该资源分组中当前处在告警状态的资源个数。
    * total  该资源分组中资源的总个数。
    * typeStatistics  该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unhealth' => 'unhealth',
            'total' => 'total',
            'typeStatistics' => 'type_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unhealth  该资源分组中当前处在告警状态的资源个数。
    * total  该资源分组中资源的总个数。
    * typeStatistics  该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @var string[]
    */
    protected static $setters = [
            'unhealth' => 'setUnhealth',
            'total' => 'setTotal',
            'typeStatistics' => 'setTypeStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unhealth  该资源分组中当前处在告警状态的资源个数。
    * total  该资源分组中资源的总个数。
    * typeStatistics  该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @var string[]
    */
    protected static $getters = [
            'unhealth' => 'getUnhealth',
            'total' => 'getTotal',
            'typeStatistics' => 'getTypeStatistics'
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
        $this->container['unhealth'] = isset($data['unhealth']) ? $data['unhealth'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['typeStatistics'] = isset($data['typeStatistics']) ? $data['typeStatistics'] : null;
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
    * Gets unhealth
    *  该资源分组中当前处在告警状态的资源个数。
    *
    * @return int|null
    */
    public function getUnhealth()
    {
        return $this->container['unhealth'];
    }

    /**
    * Sets unhealth
    *
    * @param int|null $unhealth 该资源分组中当前处在告警状态的资源个数。
    *
    * @return $this
    */
    public function setUnhealth($unhealth)
    {
        $this->container['unhealth'] = $unhealth;
        return $this;
    }

    /**
    * Gets total
    *  该资源分组中资源的总个数。
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
    * @param int|null $total 该资源分组中资源的总个数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets typeStatistics
    *  该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @return int|null
    */
    public function getTypeStatistics()
    {
        return $this->container['typeStatistics'];
    }

    /**
    * Sets typeStatistics
    *
    * @param int|null $typeStatistics 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。
    *
    * @return $this
    */
    public function setTypeStatistics($typeStatistics)
    {
        $this->container['typeStatistics'] = $typeStatistics;
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

