<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChannelCreateReqPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChannelCreateReq_policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sid  固定值：allow_account_to_put_events
    * effect  固定值：Allow
    * principal  domain白名单
    * action  固定值：eg:channels:putEvents
    * resource  固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sid' => 'string',
            'effect' => 'string',
            'principal' => 'map[string,\HuaweiCloud\SDK\Eg\V1\Model\ChannelCreateReqPrincipal]',
            'action' => 'string',
            'resource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sid  固定值：allow_account_to_put_events
    * effect  固定值：Allow
    * principal  domain白名单
    * action  固定值：eg:channels:putEvents
    * resource  固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sid' => null,
        'effect' => null,
        'principal' => null,
        'action' => null,
        'resource' => null
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
    * sid  固定值：allow_account_to_put_events
    * effect  固定值：Allow
    * principal  domain白名单
    * action  固定值：eg:channels:putEvents
    * resource  固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sid' => 'Sid',
            'effect' => 'Effect',
            'principal' => 'Principal',
            'action' => 'Action',
            'resource' => 'Resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sid  固定值：allow_account_to_put_events
    * effect  固定值：Allow
    * principal  domain白名单
    * action  固定值：eg:channels:putEvents
    * resource  固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @var string[]
    */
    protected static $setters = [
            'sid' => 'setSid',
            'effect' => 'setEffect',
            'principal' => 'setPrincipal',
            'action' => 'setAction',
            'resource' => 'setResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sid  固定值：allow_account_to_put_events
    * effect  固定值：Allow
    * principal  domain白名单
    * action  固定值：eg:channels:putEvents
    * resource  固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @var string[]
    */
    protected static $getters = [
            'sid' => 'getSid',
            'effect' => 'getEffect',
            'principal' => 'getPrincipal',
            'action' => 'getAction',
            'resource' => 'getResource'
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
        $this->container['sid'] = isset($data['sid']) ? $data['sid'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
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
    * Gets sid
    *  固定值：allow_account_to_put_events
    *
    * @return string|null
    */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
    * Sets sid
    *
    * @param string|null $sid 固定值：allow_account_to_put_events
    *
    * @return $this
    */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;
        return $this;
    }

    /**
    * Gets effect
    *  固定值：Allow
    *
    * @return string|null
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string|null $effect 固定值：Allow
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets principal
    *  domain白名单
    *
    * @return map[string,\HuaweiCloud\SDK\Eg\V1\Model\ChannelCreateReqPrincipal]|null
    */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
    * Sets principal
    *
    * @param map[string,\HuaweiCloud\SDK\Eg\V1\Model\ChannelCreateReqPrincipal]|null $principal domain白名单
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets action
    *  固定值：eg:channels:putEvents
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 固定值：eg:channels:putEvents
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets resource
    *  固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 固定格式：urn:eg:cn-east-2:{project_id}:channel:{channel_name}
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
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

