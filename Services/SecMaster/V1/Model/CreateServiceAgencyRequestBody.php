<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServiceAgencyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServiceAgencyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organizations  OU列表
    * roleDescriptions  角色列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organizations' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Organization[]',
            'roleDescriptions' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Role[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organizations  OU列表
    * roleDescriptions  角色列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organizations' => null,
        'roleDescriptions' => null
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
    * organizations  OU列表
    * roleDescriptions  角色列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organizations' => 'organizations',
            'roleDescriptions' => 'role_descriptions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organizations  OU列表
    * roleDescriptions  角色列表
    *
    * @var string[]
    */
    protected static $setters = [
            'organizations' => 'setOrganizations',
            'roleDescriptions' => 'setRoleDescriptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organizations  OU列表
    * roleDescriptions  角色列表
    *
    * @var string[]
    */
    protected static $getters = [
            'organizations' => 'getOrganizations',
            'roleDescriptions' => 'getRoleDescriptions'
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
        $this->container['organizations'] = isset($data['organizations']) ? $data['organizations'] : null;
        $this->container['roleDescriptions'] = isset($data['roleDescriptions']) ? $data['roleDescriptions'] : null;
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
    * Gets organizations
    *  OU列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Organization[]|null
    */
    public function getOrganizations()
    {
        return $this->container['organizations'];
    }

    /**
    * Sets organizations
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Organization[]|null $organizations OU列表
    *
    * @return $this
    */
    public function setOrganizations($organizations)
    {
        $this->container['organizations'] = $organizations;
        return $this;
    }

    /**
    * Gets roleDescriptions
    *  角色列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Role[]|null
    */
    public function getRoleDescriptions()
    {
        return $this->container['roleDescriptions'];
    }

    /**
    * Sets roleDescriptions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Role[]|null $roleDescriptions 角色列表
    *
    * @return $this
    */
    public function setRoleDescriptions($roleDescriptions)
    {
        $this->container['roleDescriptions'] = $roleDescriptions;
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

