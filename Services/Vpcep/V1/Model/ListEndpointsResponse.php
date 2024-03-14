<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEndpointsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEndpointsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoints  终端节点列表。
    * totalCount  满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoints' => '\HuaweiCloud\SDK\Vpcep\V1\Model\EndpointResponseBody[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoints  终端节点列表。
    * totalCount  满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoints' => null,
        'totalCount' => null
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
    * endpoints  终端节点列表。
    * totalCount  满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoints' => 'endpoints',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoints  终端节点列表。
    * totalCount  满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoints' => 'setEndpoints',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoints  终端节点列表。
    * totalCount  满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoints' => 'getEndpoints',
            'totalCount' => 'getTotalCount'
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
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets endpoints
    *  终端节点列表。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\EndpointResponseBody[]|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\EndpointResponseBody[]|null $endpoints 终端节点列表。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets totalCount
    *  满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
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
    * @param int|null $totalCount 满足查询条件的终端节点总条数，不受分页（即limit、offset参数）影响。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

