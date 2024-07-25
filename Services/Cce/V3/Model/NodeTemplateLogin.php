<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeTemplateLogin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeTemplate_login';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sshKey  sshKey
    * userPassword  userPassword
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sshKey' => 'string',
            'userPassword' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLoginUserPassword'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sshKey  sshKey
    * userPassword  userPassword
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sshKey' => null,
        'userPassword' => null
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
    * sshKey  sshKey
    * userPassword  userPassword
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sshKey' => 'sshKey',
            'userPassword' => 'userPassword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sshKey  sshKey
    * userPassword  userPassword
    *
    * @var string[]
    */
    protected static $setters = [
            'sshKey' => 'setSshKey',
            'userPassword' => 'setUserPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sshKey  sshKey
    * userPassword  userPassword
    *
    * @var string[]
    */
    protected static $getters = [
            'sshKey' => 'getSshKey',
            'userPassword' => 'getUserPassword'
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
        $this->container['sshKey'] = isset($data['sshKey']) ? $data['sshKey'] : null;
        $this->container['userPassword'] = isset($data['userPassword']) ? $data['userPassword'] : null;
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
    * Gets sshKey
    *  sshKey
    *
    * @return string|null
    */
    public function getSshKey()
    {
        return $this->container['sshKey'];
    }

    /**
    * Sets sshKey
    *
    * @param string|null $sshKey sshKey
    *
    * @return $this
    */
    public function setSshKey($sshKey)
    {
        $this->container['sshKey'] = $sshKey;
        return $this;
    }

    /**
    * Gets userPassword
    *  userPassword
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLoginUserPassword|null
    */
    public function getUserPassword()
    {
        return $this->container['userPassword'];
    }

    /**
    * Sets userPassword
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeTemplateLoginUserPassword|null $userPassword userPassword
    *
    * @return $this
    */
    public function setUserPassword($userPassword)
    {
        $this->container['userPassword'] = $userPassword;
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

