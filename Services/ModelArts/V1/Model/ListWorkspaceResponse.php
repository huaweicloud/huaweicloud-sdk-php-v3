<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkspaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkspaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  工作空间的总数。
    * count  此次请求返回的工作空间个数。
    * workspaces  workspace属性列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'count' => 'int',
            'workspaces' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkspaceResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  工作空间的总数。
    * count  此次请求返回的工作空间个数。
    * workspaces  workspace属性列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'count' => null,
        'workspaces' => null
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
    * totalCount  工作空间的总数。
    * count  此次请求返回的工作空间个数。
    * workspaces  workspace属性列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'count' => 'count',
            'workspaces' => 'workspaces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  工作空间的总数。
    * count  此次请求返回的工作空间个数。
    * workspaces  workspace属性列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'count' => 'setCount',
            'workspaces' => 'setWorkspaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  工作空间的总数。
    * count  此次请求返回的工作空间个数。
    * workspaces  workspace属性列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'count' => 'getCount',
            'workspaces' => 'getWorkspaces'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['workspaces'] = isset($data['workspaces']) ? $data['workspaces'] : null;
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
    * Gets totalCount
    *  工作空间的总数。
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
    * @param int|null $totalCount 工作空间的总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets count
    *  此次请求返回的工作空间个数。
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
    * @param int|null $count 此次请求返回的工作空间个数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets workspaces
    *  workspace属性列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkspaceResponse[]|null
    */
    public function getWorkspaces()
    {
        return $this->container['workspaces'];
    }

    /**
    * Sets workspaces
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkspaceResponse[]|null $workspaces workspace属性列表。
    *
    * @return $this
    */
    public function setWorkspaces($workspaces)
    {
        $this->container['workspaces'] = $workspaces;
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

