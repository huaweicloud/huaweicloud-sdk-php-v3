<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecretTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecretTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  任务数量
    * tasks  凭据任务列表。
    * nextMarker  下一页查询地址（本页的末尾任务ID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'tasks' => '\HuaweiCloud\SDK\Csms\V1\Model\SecretTask[]',
            'nextMarker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  任务数量
    * tasks  凭据任务列表。
    * nextMarker  下一页查询地址（本页的末尾任务ID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'tasks' => null,
        'nextMarker' => null
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
    * total  任务数量
    * tasks  凭据任务列表。
    * nextMarker  下一页查询地址（本页的末尾任务ID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'tasks' => 'tasks',
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  任务数量
    * tasks  凭据任务列表。
    * nextMarker  下一页查询地址（本页的末尾任务ID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'tasks' => 'setTasks',
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  任务数量
    * tasks  凭据任务列表。
    * nextMarker  下一页查询地址（本页的末尾任务ID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'tasks' => 'getTasks',
            'nextMarker' => 'getNextMarker'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
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
    * Gets total
    *  任务数量
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
    * @param int|null $total 任务数量
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets tasks
    *  凭据任务列表。
    *
    * @return \HuaweiCloud\SDK\Csms\V1\Model\SecretTask[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\Csms\V1\Model\SecretTask[]|null $tasks 凭据任务列表。
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
        return $this;
    }

    /**
    * Gets nextMarker
    *  下一页查询地址（本页的末尾任务ID）。
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 下一页查询地址（本页的末尾任务ID）。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
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

