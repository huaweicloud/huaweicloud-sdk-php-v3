<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GaussDBforOpenGaussUserForList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GaussDBforOpenGaussUserForList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  帐号名。
    * attribute  attribute
    * memberof  用户的默认权限。
    * lockStatus  用户是否被锁，取值为“true”或“false”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'attribute' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\GaussDBforOpenGaussUserForListAttribute',
            'memberof' => 'string',
            'lockStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  帐号名。
    * attribute  attribute
    * memberof  用户的默认权限。
    * lockStatus  用户是否被锁，取值为“true”或“false”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'attribute' => null,
        'memberof' => null,
        'lockStatus' => null
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
    * name  帐号名。
    * attribute  attribute
    * memberof  用户的默认权限。
    * lockStatus  用户是否被锁，取值为“true”或“false”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'attribute' => 'attribute',
            'memberof' => 'memberof',
            'lockStatus' => 'lock_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  帐号名。
    * attribute  attribute
    * memberof  用户的默认权限。
    * lockStatus  用户是否被锁，取值为“true”或“false”。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'attribute' => 'setAttribute',
            'memberof' => 'setMemberof',
            'lockStatus' => 'setLockStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  帐号名。
    * attribute  attribute
    * memberof  用户的默认权限。
    * lockStatus  用户是否被锁，取值为“true”或“false”。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'attribute' => 'getAttribute',
            'memberof' => 'getMemberof',
            'lockStatus' => 'getLockStatus'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['attribute'] = isset($data['attribute']) ? $data['attribute'] : null;
        $this->container['memberof'] = isset($data['memberof']) ? $data['memberof'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets name
    *  帐号名。
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
    * @param string $name 帐号名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets attribute
    *  attribute
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\GaussDBforOpenGaussUserForListAttribute|null
    */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
    * Sets attribute
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\GaussDBforOpenGaussUserForListAttribute|null $attribute attribute
    *
    * @return $this
    */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;
        return $this;
    }

    /**
    * Gets memberof
    *  用户的默认权限。
    *
    * @return string|null
    */
    public function getMemberof()
    {
        return $this->container['memberof'];
    }

    /**
    * Sets memberof
    *
    * @param string|null $memberof 用户的默认权限。
    *
    * @return $this
    */
    public function setMemberof($memberof)
    {
        $this->container['memberof'] = $memberof;
        return $this;
    }

    /**
    * Gets lockStatus
    *  用户是否被锁，取值为“true”或“false”。
    *
    * @return bool|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param bool|null $lockStatus 用户是否被锁，取值为“true”或“false”。
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
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

