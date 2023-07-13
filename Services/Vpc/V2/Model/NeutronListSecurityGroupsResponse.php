<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListSecurityGroupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListSecurityGroupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityGroups  安全组对象列表
    * securityGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityGroups' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronSecurityGroup[]',
            'securityGroupsLinks' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityGroups  安全组对象列表
    * securityGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityGroups' => null,
        'securityGroupsLinks' => null
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
    * securityGroups  安全组对象列表
    * securityGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityGroups' => 'security_groups',
            'securityGroupsLinks' => 'security_groups_links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityGroups  安全组对象列表
    * securityGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $setters = [
            'securityGroups' => 'setSecurityGroups',
            'securityGroupsLinks' => 'setSecurityGroupsLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityGroups  安全组对象列表
    * securityGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $getters = [
            'securityGroups' => 'getSecurityGroups',
            'securityGroupsLinks' => 'getSecurityGroupsLinks'
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
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['securityGroupsLinks'] = isset($data['securityGroupsLinks']) ? $data['securityGroupsLinks'] : null;
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
    * Gets securityGroups
    *  安全组对象列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronSecurityGroup[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronSecurityGroup[]|null $securityGroups 安全组对象列表
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets securityGroupsLinks
    *  分页信息
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null
    */
    public function getSecurityGroupsLinks()
    {
        return $this->container['securityGroupsLinks'];
    }

    /**
    * Sets securityGroupsLinks
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null $securityGroupsLinks 分页信息
    *
    * @return $this
    */
    public function setSecurityGroupsLinks($securityGroupsLinks)
    {
        $this->container['securityGroupsLinks'] = $securityGroupsLinks;
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

