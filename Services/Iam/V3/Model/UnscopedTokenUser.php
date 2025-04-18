<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnscopedTokenUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnscopedTokenUser';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  domain
    * id  用户ID。
    * name  用户名称。
    * osFederation  osFederation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenDomainResult',
            'id' => 'string',
            'name' => 'string',
            'osFederation' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenUserOsfederation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  domain
    * id  用户ID。
    * name  用户名称。
    * osFederation  osFederation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'id' => null,
        'name' => null,
        'osFederation' => null
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
    * domain  domain
    * id  用户ID。
    * name  用户名称。
    * osFederation  osFederation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'id' => 'id',
            'name' => 'name',
            'osFederation' => 'OS-FEDERATION'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  domain
    * id  用户ID。
    * name  用户名称。
    * osFederation  osFederation
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'id' => 'setId',
            'name' => 'setName',
            'osFederation' => 'setOsFederation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  domain
    * id  用户ID。
    * name  用户名称。
    * osFederation  osFederation
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'id' => 'getId',
            'name' => 'getName',
            'osFederation' => 'getOsFederation'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['osFederation'] = isset($data['osFederation']) ? $data['osFederation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['osFederation'] === null) {
            $invalidProperties[] = "'osFederation' can't be null";
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
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenDomainResult
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenDomainResult $domain domain
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
    *  用户ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 用户ID。
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
    *  用户名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets osFederation
    *  osFederation
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenUserOsfederation
    */
    public function getOsFederation()
    {
        return $this->container['osFederation'];
    }

    /**
    * Sets osFederation
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenUserOsfederation $osFederation osFederation
    *
    * @return $this
    */
    public function setOsFederation($osFederation)
    {
        $this->container['osFederation'] = $osFederation;
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

