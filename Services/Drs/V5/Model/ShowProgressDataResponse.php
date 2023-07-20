<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProgressDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProgressDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  总数。
    * createTime  数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    * flowCompareData  对比结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'createTime' => 'string',
            'flowCompareData' => '\HuaweiCloud\SDK\Drs\V5\Model\FlowCompareData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  总数。
    * createTime  数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    * flowCompareData  对比结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'createTime' => null,
        'flowCompareData' => null
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
    * count  总数。
    * createTime  数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    * flowCompareData  对比结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'createTime' => 'create_time',
            'flowCompareData' => 'flow_compare_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  总数。
    * createTime  数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    * flowCompareData  对比结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'createTime' => 'setCreateTime',
            'flowCompareData' => 'setFlowCompareData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  总数。
    * createTime  数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    * flowCompareData  对比结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'createTime' => 'getCreateTime',
            'flowCompareData' => 'getFlowCompareData'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['flowCompareData'] = isset($data['flowCompareData']) ? $data['flowCompareData'] : null;
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
    * Gets count
    *  总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets createTime
    *  数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 数据生成时间，UTC时间，例如：2020-09-01T18:50:20.200Z
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets flowCompareData
    *  对比结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\FlowCompareData[]|null
    */
    public function getFlowCompareData()
    {
        return $this->container['flowCompareData'];
    }

    /**
    * Sets flowCompareData
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\FlowCompareData[]|null $flowCompareData 对比结果。
    *
    * @return $this
    */
    public function setFlowCompareData($flowCompareData)
    {
        $this->container['flowCompareData'] = $flowCompareData;
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

