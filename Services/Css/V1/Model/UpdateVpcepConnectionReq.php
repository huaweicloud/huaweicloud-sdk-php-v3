<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVpcepConnectionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVpcepConnectionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    * endpointIdList  终端节点ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'endpointIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    * endpointIdList  终端节点ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'endpointIdList' => null
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
    * action  期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    * endpointIdList  终端节点ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'endpointIdList' => 'endpoint_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    * endpointIdList  终端节点ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'endpointIdList' => 'setEndpointIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    * endpointIdList  终端节点ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'endpointIdList' => 'getEndpointIdList'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['endpointIdList'] = isset($data['endpointIdList']) ? $data['endpointIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['endpointIdList'] === null) {
            $invalidProperties[] = "'endpointIdList' can't be null";
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
    * Gets action
    *  期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 期望的操作行为。 - receive: 允许连接 - reject: 拒绝连接
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets endpointIdList
    *  终端节点ID列表。
    *
    * @return string[]
    */
    public function getEndpointIdList()
    {
        return $this->container['endpointIdList'];
    }

    /**
    * Sets endpointIdList
    *
    * @param string[] $endpointIdList 终端节点ID列表。
    *
    * @return $this
    */
    public function setEndpointIdList($endpointIdList)
    {
        $this->container['endpointIdList'] = $endpointIdList;
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

