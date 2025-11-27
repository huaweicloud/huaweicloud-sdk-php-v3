<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CapacityOrderResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CapacityOrderResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    * rankList  rankList
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'rankList' => '\HuaweiCloud\SDK\Coc\V1\Model\CapacityOrderResponseRankList'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    * rankList  rankList
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'rankList' => null
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
    * type  **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    * rankList  rankList
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'rankList' => 'rank_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    * rankList  rankList
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'rankList' => 'setRankList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    * rankList  rankList
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'rankList' => 'getRankList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['rankList'] = isset($data['rankList']) ? $data['rankList'] : null;
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
    * Gets type
    *  **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 容量的种类。 **取值范围：** 根据云服务容量数据显示具体容量类型，一般种类 - cpu：CPU核数。 - mem：内存。 - size：云盘大小。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets rankList
    *  rankList
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CapacityOrderResponseRankList|null
    */
    public function getRankList()
    {
        return $this->container['rankList'];
    }

    /**
    * Sets rankList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CapacityOrderResponseRankList|null $rankList rankList
    *
    * @return $this
    */
    public function setRankList($rankList)
    {
        $this->container['rankList'] = $rankList;
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

