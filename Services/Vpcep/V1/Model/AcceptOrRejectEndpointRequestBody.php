<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AcceptOrRejectEndpointRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AcceptOrRejectEndpointRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
    * endpoints  终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'endpoints' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
    * endpoints  终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'endpoints' => null
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
    * action  允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
    * endpoints  终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'endpoints' => 'endpoints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
    * endpoints  终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'endpoints' => 'setEndpoints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
    * endpoints  终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'endpoints' => 'getEndpoints'
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
    const ACTION_RECEIVE = 'receive';
    const ACTION_REJECT = 'reject';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_RECEIVE,
            self::ACTION_REJECT,
        ];
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
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
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
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['action']) > 32)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endpoints'] === null) {
            $invalidProperties[] = "'endpoints' can't be null";
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
    *  允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
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
    * @param string $action 允许或拒绝连接。 ● receive：允许连接。 ● reject：拒绝连接。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets endpoints
    *  终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @return string[]
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param string[] $endpoints 终端节点ID列表。 每次请求目前支持单条endpoint的接受或拒绝。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
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

