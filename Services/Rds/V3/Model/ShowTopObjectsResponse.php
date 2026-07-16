<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopObjectsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopObjectsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * curTime  更新时间
    * topObjectList  明细
    * topObjectOverviewList  总览
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'curTime' => 'int',
            'topObjectList' => '\HuaweiCloud\SDK\Rds\V3\Model\TopObject[]',
            'topObjectOverviewList' => '\HuaweiCloud\SDK\Rds\V3\Model\TopObjectOverview[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * curTime  更新时间
    * topObjectList  明细
    * topObjectOverviewList  总览
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'curTime' => 'int64',
        'topObjectList' => null,
        'topObjectOverviewList' => null
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
    * curTime  更新时间
    * topObjectList  明细
    * topObjectOverviewList  总览
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'curTime' => 'cur_time',
            'topObjectList' => 'top_object_list',
            'topObjectOverviewList' => 'top_object_overview_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * curTime  更新时间
    * topObjectList  明细
    * topObjectOverviewList  总览
    *
    * @var string[]
    */
    protected static $setters = [
            'curTime' => 'setCurTime',
            'topObjectList' => 'setTopObjectList',
            'topObjectOverviewList' => 'setTopObjectOverviewList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * curTime  更新时间
    * topObjectList  明细
    * topObjectOverviewList  总览
    *
    * @var string[]
    */
    protected static $getters = [
            'curTime' => 'getCurTime',
            'topObjectList' => 'getTopObjectList',
            'topObjectOverviewList' => 'getTopObjectOverviewList'
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
        $this->container['curTime'] = isset($data['curTime']) ? $data['curTime'] : null;
        $this->container['topObjectList'] = isset($data['topObjectList']) ? $data['topObjectList'] : null;
        $this->container['topObjectOverviewList'] = isset($data['topObjectOverviewList']) ? $data['topObjectOverviewList'] : null;
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
    * Gets curTime
    *  更新时间
    *
    * @return int|null
    */
    public function getCurTime()
    {
        return $this->container['curTime'];
    }

    /**
    * Sets curTime
    *
    * @param int|null $curTime 更新时间
    *
    * @return $this
    */
    public function setCurTime($curTime)
    {
        $this->container['curTime'] = $curTime;
        return $this;
    }

    /**
    * Gets topObjectList
    *  明细
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopObject[]|null
    */
    public function getTopObjectList()
    {
        return $this->container['topObjectList'];
    }

    /**
    * Sets topObjectList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopObject[]|null $topObjectList 明细
    *
    * @return $this
    */
    public function setTopObjectList($topObjectList)
    {
        $this->container['topObjectList'] = $topObjectList;
        return $this;
    }

    /**
    * Gets topObjectOverviewList
    *  总览
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TopObjectOverview[]|null
    */
    public function getTopObjectOverviewList()
    {
        return $this->container['topObjectOverviewList'];
    }

    /**
    * Sets topObjectOverviewList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TopObjectOverview[]|null $topObjectOverviewList 总览
    *
    * @return $this
    */
    public function setTopObjectOverviewList($topObjectOverviewList)
    {
        $this->container['topObjectOverviewList'] = $topObjectOverviewList;
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

