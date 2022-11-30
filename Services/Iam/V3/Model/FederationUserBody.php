<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FederationUserBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FederationUserBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osFederation  osFederation
    * domain  domain
    * id  user id。
    * name  user name。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osFederation' => '\HuaweiCloud\SDK\Iam\V3\Model\OsFederationInfo',
            'domain' => '\HuaweiCloud\SDK\Iam\V3\Model\DomainInfo',
            'id' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osFederation  osFederation
    * domain  domain
    * id  user id。
    * name  user name。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osFederation' => null,
        'domain' => null,
        'id' => null,
        'name' => null
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
    * osFederation  osFederation
    * domain  domain
    * id  user id。
    * name  user name。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osFederation' => 'OS-FEDERATION',
            'domain' => 'domain',
            'id' => 'id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osFederation  osFederation
    * domain  domain
    * id  user id。
    * name  user name。
    *
    * @var string[]
    */
    protected static $setters = [
            'osFederation' => 'setOsFederation',
            'domain' => 'setDomain',
            'id' => 'setId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osFederation  osFederation
    * domain  domain
    * id  user id。
    * name  user name。
    *
    * @var string[]
    */
    protected static $getters = [
            'osFederation' => 'getOsFederation',
            'domain' => 'getDomain',
            'id' => 'getId',
            'name' => 'getName'
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
        $this->container['osFederation'] = isset($data['osFederation']) ? $data['osFederation'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['osFederation'] === null) {
            $invalidProperties[] = "'osFederation' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
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
    * Gets osFederation
    *  osFederation
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\OsFederationInfo
    */
    public function getOsFederation()
    {
        return $this->container['osFederation'];
    }

    /**
    * Sets osFederation
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\OsFederationInfo $osFederation osFederation
    *
    * @return $this
    */
    public function setOsFederation($osFederation)
    {
        $this->container['osFederation'] = $osFederation;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\DomainInfo
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\DomainInfo $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets id
    *  user id。
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
    * @param string|null $id user id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  user name。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name user name。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

