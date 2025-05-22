<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberCheckJobResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberCheckJobResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * config  config
    * acl  acl
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'config' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup',
            'acl' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup',
            'securityGroup' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * config  config
    * acl  acl
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'config' => null,
        'acl' => null,
        'securityGroup' => null
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
    * config  config
    * acl  acl
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'config' => 'config',
            'acl' => 'acl',
            'securityGroup' => 'security_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * config  config
    * acl  acl
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $setters = [
            'config' => 'setConfig',
            'acl' => 'setAcl',
            'securityGroup' => 'setSecurityGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * config  config
    * acl  acl
    * securityGroup  securityGroup
    *
    * @var string[]
    */
    protected static $getters = [
            'config' => 'getConfig',
            'acl' => 'getAcl',
            'securityGroup' => 'getSecurityGroup'
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
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['acl'] = isset($data['acl']) ? $data['acl'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
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
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup|null $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets acl
    *  acl
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup|null
    */
    public function getAcl()
    {
        return $this->container['acl'];
    }

    /**
    * Sets acl
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup|null $acl acl
    *
    * @return $this
    */
    public function setAcl($acl)
    {
        $this->container['acl'] = $acl;
        return $this;
    }

    /**
    * Gets securityGroup
    *  securityGroup
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup|null
    */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
    * Sets securityGroup
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberCheckJobResultGroup|null $securityGroup securityGroup
    *
    * @return $this
    */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;
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

