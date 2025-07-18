<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnvMonitorItemResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnvMonitorItemResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * monitorItemList  监控项列表。
    * totalCount  总数。
    * totalPage  总页数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'monitorItemList' => '\HuaweiCloud\SDK\Apm\V1\Model\MonitorItem[]',
            'totalCount' => 'int',
            'totalPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * monitorItemList  监控项列表。
    * totalCount  总数。
    * totalPage  总页数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'monitorItemList' => null,
        'totalCount' => 'int32',
        'totalPage' => 'int32'
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
    * monitorItemList  监控项列表。
    * totalCount  总数。
    * totalPage  总页数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'monitorItemList' => 'monitor_item_list',
            'totalCount' => 'total_count',
            'totalPage' => 'totalPage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * monitorItemList  监控项列表。
    * totalCount  总数。
    * totalPage  总页数。
    *
    * @var string[]
    */
    protected static $setters = [
            'monitorItemList' => 'setMonitorItemList',
            'totalCount' => 'setTotalCount',
            'totalPage' => 'setTotalPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * monitorItemList  监控项列表。
    * totalCount  总数。
    * totalPage  总页数。
    *
    * @var string[]
    */
    protected static $getters = [
            'monitorItemList' => 'getMonitorItemList',
            'totalCount' => 'getTotalCount',
            'totalPage' => 'getTotalPage'
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
        $this->container['monitorItemList'] = isset($data['monitorItemList']) ? $data['monitorItemList'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
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
    * Gets monitorItemList
    *  监控项列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\MonitorItem[]|null
    */
    public function getMonitorItemList()
    {
        return $this->container['monitorItemList'];
    }

    /**
    * Sets monitorItemList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\MonitorItem[]|null $monitorItemList 监控项列表。
    *
    * @return $this
    */
    public function setMonitorItemList($monitorItemList)
    {
        $this->container['monitorItemList'] = $monitorItemList;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets totalPage
    *  总页数。
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总页数。
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
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

