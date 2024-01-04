<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryTaskOverviewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryTaskOverviewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID
    * isOwn  是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    * queryDays  查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'isOwn' => 'string',
            'queryDays' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID
    * isOwn  是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    * queryDays  查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'isOwn' => null,
        'queryDays' => null
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
    * workspace  工作空间ID
    * isOwn  是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    * queryDays  查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'isOwn' => 'is_own',
            'queryDays' => 'query_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID
    * isOwn  是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    * queryDays  查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'isOwn' => 'setIsOwn',
            'queryDays' => 'setQueryDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID
    * isOwn  是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    * queryDays  查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'isOwn' => 'getIsOwn',
            'queryDays' => 'getQueryDays'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['isOwn'] = isset($data['isOwn']) ? $data['isOwn'] : null;
        $this->container['queryDays'] = isset($data['queryDays']) ? $data['queryDays'] : null;
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
    * Gets workspace
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets isOwn
    *  是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    *
    * @return string|null
    */
    public function getIsOwn()
    {
        return $this->container['isOwn'];
    }

    /**
    * Sets isOwn
    *
    * @param string|null $isOwn 是否查询当前用户的实例，默认为false，表示查询全部用户实例，为true时，表示查询当前用户的实例。
    *
    * @return $this
    */
    public function setIsOwn($isOwn)
    {
        $this->container['isOwn'] = $isOwn;
        return $this;
    }

    /**
    * Gets queryDays
    *  查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @return string|null
    */
    public function getQueryDays()
    {
        return $this->container['queryDays'];
    }

    /**
    * Sets queryDays
    *
    * @param string|null $queryDays 查询的天数，取值范围为：today、yesterday、before_yesterday、all，默认为today，表示查询今天的数据，支持查询近7天的数据。 today：查询当天的实例状态数量， yesterday：查询昨天的实例状态数量， before_yesterday：查询前天的实例状态数量， all：查询7天前到当天的实例状态总量。
    *
    * @return $this
    */
    public function setQueryDays($queryDays)
    {
        $this->container['queryDays'] = $queryDays;
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

