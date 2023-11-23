<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSyncTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSyncTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    * offset  起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    * status  同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    * offset  起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    * status  同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'status' => null
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
    * limit  查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    * offset  起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    * status  同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    * offset  起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    * status  同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    * offset  起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    * status  同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'status' => 'getStatus'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(SYNCHRONIZING|STOPPED)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(SYNCHRONIZING|STOPPED)$/.";
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
    * Gets limit
    *  查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询返回同步任务列表当前页面的数量，默认查询10条。 最多返回100条迁移任务信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 起始的任务序号，默认为0。 取值大于等于0，取值为0时从第一条开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets status
    *  同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 同步任务状态（无该参数时代表查询所有状态的任务）： SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

