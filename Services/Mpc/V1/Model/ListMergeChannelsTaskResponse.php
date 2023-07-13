<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMergeChannelsTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMergeChannelsTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskArray  任务列表
    * isTruncated  查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    * total  查询结果的数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskArray' => '\HuaweiCloud\SDK\Mpc\V1\Model\MergeChannelsTaskInfo[]',
            'isTruncated' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskArray  任务列表
    * isTruncated  查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    * total  查询结果的数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskArray' => null,
        'isTruncated' => null,
        'total' => null
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
    * taskArray  任务列表
    * isTruncated  查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    * total  查询结果的数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskArray' => 'task_array',
            'isTruncated' => 'is_truncated',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskArray  任务列表
    * isTruncated  查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    * total  查询结果的数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskArray' => 'setTaskArray',
            'isTruncated' => 'setIsTruncated',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskArray  任务列表
    * isTruncated  查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    * total  查询结果的数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskArray' => 'getTaskArray',
            'isTruncated' => 'getIsTruncated',
            'total' => 'getTotal'
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
        $this->container['taskArray'] = isset($data['taskArray']) ? $data['taskArray'] : null;
        $this->container['isTruncated'] = isset($data['isTruncated']) ? $data['isTruncated'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['isTruncated']) && ($this->container['isTruncated'] > 2)) {
                $invalidProperties[] = "invalid value for 'isTruncated', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['isTruncated']) && ($this->container['isTruncated'] < 0)) {
                $invalidProperties[] = "invalid value for 'isTruncated', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
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
    * Gets taskArray
    *  任务列表
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MergeChannelsTaskInfo[]|null
    */
    public function getTaskArray()
    {
        return $this->container['taskArray'];
    }

    /**
    * Sets taskArray
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MergeChannelsTaskInfo[]|null $taskArray 任务列表
    *
    * @return $this
    */
    public function setTaskArray($taskArray)
    {
        $this->container['taskArray'] = $taskArray;
        return $this;
    }

    /**
    * Gets isTruncated
    *  查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    *
    * @return int|null
    */
    public function getIsTruncated()
    {
        return $this->container['isTruncated'];
    }

    /**
    * Sets isTruncated
    *
    * @param int|null $isTruncated 查询结果是否被截取。 - 1：表示被截取，即还有结果未被返回，可以通过设置page和size参数继续查询。 - 0：表示未被截取，即所有结果已被返回。
    *
    * @return $this
    */
    public function setIsTruncated($isTruncated)
    {
        $this->container['isTruncated'] = $isTruncated;
        return $this;
    }

    /**
    * Gets total
    *  查询结果的数量。
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
    * @param int|null $total 查询结果的数量。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

