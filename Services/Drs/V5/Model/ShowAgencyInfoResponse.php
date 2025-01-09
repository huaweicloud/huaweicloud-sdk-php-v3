<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgencyInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgencyInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isExisted  委托是否存在。
    * name  委托名称。
    * roles  委托绑定的权限策略信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isExisted' => 'bool',
            'name' => 'string',
            'roles' => '\HuaweiCloud\SDK\Drs\V5\Model\AgencyRole[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isExisted  委托是否存在。
    * name  委托名称。
    * roles  委托绑定的权限策略信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isExisted' => null,
        'name' => null,
        'roles' => null
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
    * isExisted  委托是否存在。
    * name  委托名称。
    * roles  委托绑定的权限策略信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isExisted' => 'is_existed',
            'name' => 'name',
            'roles' => 'roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isExisted  委托是否存在。
    * name  委托名称。
    * roles  委托绑定的权限策略信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'isExisted' => 'setIsExisted',
            'name' => 'setName',
            'roles' => 'setRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isExisted  委托是否存在。
    * name  委托名称。
    * roles  委托绑定的权限策略信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'isExisted' => 'getIsExisted',
            'name' => 'getName',
            'roles' => 'getRoles'
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
        $this->container['isExisted'] = isset($data['isExisted']) ? $data['isExisted'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
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
    * Gets isExisted
    *  委托是否存在。
    *
    * @return bool|null
    */
    public function getIsExisted()
    {
        return $this->container['isExisted'];
    }

    /**
    * Sets isExisted
    *
    * @param bool|null $isExisted 委托是否存在。
    *
    * @return $this
    */
    public function setIsExisted($isExisted)
    {
        $this->container['isExisted'] = $isExisted;
        return $this;
    }

    /**
    * Gets name
    *  委托名称。
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
    * @param string|null $name 委托名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets roles
    *  委托绑定的权限策略信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\AgencyRole[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\AgencyRole[]|null $roles 委托绑定的权限策略信息。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
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

