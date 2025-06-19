<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserExecuteTestCaseInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserExecuteTestCaseInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    * limit  每页显示的条目数量,最大支持100条
    * executeStartTime  用例执行时间段开始
    * executeEndTime  用例执行时间段截止
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'executeStartTime' => 'string',
            'executeEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    * limit  每页显示的条目数量,最大支持100条
    * executeStartTime  用例执行时间段开始
    * executeEndTime  用例执行时间段截止
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'executeStartTime' => null,
        'executeEndTime' => null
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
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    * limit  每页显示的条目数量,最大支持100条
    * executeStartTime  用例执行时间段开始
    * executeEndTime  用例执行时间段截止
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'executeStartTime' => 'execute_start_time',
            'executeEndTime' => 'execute_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    * limit  每页显示的条目数量,最大支持100条
    * executeStartTime  用例执行时间段开始
    * executeEndTime  用例执行时间段截止
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'executeStartTime' => 'setExecuteStartTime',
            'executeEndTime' => 'setExecuteEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    * limit  每页显示的条目数量,最大支持100条
    * executeStartTime  用例执行时间段开始
    * executeEndTime  用例执行时间段截止
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'executeStartTime' => 'getExecuteStartTime',
            'executeEndTime' => 'getExecuteEndTime'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['executeStartTime'] = isset($data['executeStartTime']) ? $data['executeStartTime'] : null;
        $this->container['executeEndTime'] = isset($data['executeEndTime']) ? $data['executeEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 20000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 20000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['executeStartTime'] === null) {
            $invalidProperties[] = "'executeStartTime' can't be null";
        }
            if (!preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/", $this->container['executeStartTime'])) {
                $invalidProperties[] = "invalid value for 'executeStartTime', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/.";
            }
        if ($this->container['executeEndTime'] === null) {
            $invalidProperties[] = "'executeEndTime' can't be null";
        }
            if (!preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/", $this->container['executeEndTime'])) {
                $invalidProperties[] = "invalid value for 'executeEndTime', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/.";
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
    * Gets offset
    *  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于20000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量,最大支持100条
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示的条目数量,最大支持100条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets executeStartTime
    *  用例执行时间段开始
    *
    * @return string
    */
    public function getExecuteStartTime()
    {
        return $this->container['executeStartTime'];
    }

    /**
    * Sets executeStartTime
    *
    * @param string $executeStartTime 用例执行时间段开始
    *
    * @return $this
    */
    public function setExecuteStartTime($executeStartTime)
    {
        $this->container['executeStartTime'] = $executeStartTime;
        return $this;
    }

    /**
    * Gets executeEndTime
    *  用例执行时间段截止
    *
    * @return string
    */
    public function getExecuteEndTime()
    {
        return $this->container['executeEndTime'];
    }

    /**
    * Sets executeEndTime
    *
    * @param string $executeEndTime 用例执行时间段截止
    *
    * @return $this
    */
    public function setExecuteEndTime($executeEndTime)
    {
        $this->container['executeEndTime'] = $executeEndTime;
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

