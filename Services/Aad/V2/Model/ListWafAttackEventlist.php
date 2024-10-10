<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWafAttackEventlist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWafAttackEventlist';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * domain  攻击目标域名
    * time  攻击时间
    * sip  攻击源IP
    * action  防御动作
    * url  攻击url
    * type  攻击类型
    * backend  backend
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domain' => 'string',
            'time' => 'int',
            'sip' => 'string',
            'action' => 'string',
            'url' => 'string',
            'type' => 'string',
            'backend' => '\HuaweiCloud\SDK\Aad\V2\Model\Backend'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * domain  攻击目标域名
    * time  攻击时间
    * sip  攻击源IP
    * action  防御动作
    * url  攻击url
    * type  攻击类型
    * backend  backend
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domain' => null,
        'time' => 'int32',
        'sip' => null,
        'action' => null,
        'url' => null,
        'type' => null,
        'backend' => null
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
    * id  id
    * domain  攻击目标域名
    * time  攻击时间
    * sip  攻击源IP
    * action  防御动作
    * url  攻击url
    * type  攻击类型
    * backend  backend
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domain' => 'domain',
            'time' => 'time',
            'sip' => 'sip',
            'action' => 'action',
            'url' => 'url',
            'type' => 'type',
            'backend' => 'backend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * domain  攻击目标域名
    * time  攻击时间
    * sip  攻击源IP
    * action  防御动作
    * url  攻击url
    * type  攻击类型
    * backend  backend
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domain' => 'setDomain',
            'time' => 'setTime',
            'sip' => 'setSip',
            'action' => 'setAction',
            'url' => 'setUrl',
            'type' => 'setType',
            'backend' => 'setBackend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * domain  攻击目标域名
    * time  攻击时间
    * sip  攻击源IP
    * action  防御动作
    * url  攻击url
    * type  攻击类型
    * backend  backend
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domain' => 'getDomain',
            'time' => 'getTime',
            'sip' => 'getSip',
            'action' => 'getAction',
            'url' => 'getUrl',
            'type' => 'getType',
            'backend' => 'getBackend'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['sip'] = isset($data['sip']) ? $data['sip'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['backend'] = isset($data['backend']) ? $data['backend'] : null;
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
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domain
    *  攻击目标域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 攻击目标域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets time
    *  攻击时间
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 攻击时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets sip
    *  攻击源IP
    *
    * @return string|null
    */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
    * Sets sip
    *
    * @param string|null $sip 攻击源IP
    *
    * @return $this
    */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;
        return $this;
    }

    /**
    * Gets action
    *  防御动作
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
    * @param string|null $action 防御动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets url
    *  攻击url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 攻击url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets type
    *  攻击类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 攻击类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets backend
    *  backend
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\Backend|null
    */
    public function getBackend()
    {
        return $this->container['backend'];
    }

    /**
    * Sets backend
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\Backend|null $backend backend
    *
    * @return $this
    */
    public function setBackend($backend)
    {
        $this->container['backend'] = $backend;
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

