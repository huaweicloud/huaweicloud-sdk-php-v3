<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryAccess  repositoryAccess
    * groupAccess  groupAccess
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryAccess' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MemberAccess',
            'groupAccess' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MemberAccess'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryAccess  repositoryAccess
    * groupAccess  groupAccess
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryAccess' => null,
        'groupAccess' => null
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
    * repositoryAccess  repositoryAccess
    * groupAccess  groupAccess
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryAccess' => 'repository_access',
            'groupAccess' => 'group_access'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryAccess  repositoryAccess
    * groupAccess  groupAccess
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryAccess' => 'setRepositoryAccess',
            'groupAccess' => 'setGroupAccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryAccess  repositoryAccess
    * groupAccess  groupAccess
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryAccess' => 'getRepositoryAccess',
            'groupAccess' => 'getGroupAccess'
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
        $this->container['repositoryAccess'] = isset($data['repositoryAccess']) ? $data['repositoryAccess'] : null;
        $this->container['groupAccess'] = isset($data['groupAccess']) ? $data['groupAccess'] : null;
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
    * Gets repositoryAccess
    *  repositoryAccess
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MemberAccess|null
    */
    public function getRepositoryAccess()
    {
        return $this->container['repositoryAccess'];
    }

    /**
    * Sets repositoryAccess
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MemberAccess|null $repositoryAccess repositoryAccess
    *
    * @return $this
    */
    public function setRepositoryAccess($repositoryAccess)
    {
        $this->container['repositoryAccess'] = $repositoryAccess;
        return $this;
    }

    /**
    * Gets groupAccess
    *  groupAccess
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MemberAccess|null
    */
    public function getGroupAccess()
    {
        return $this->container['groupAccess'];
    }

    /**
    * Sets groupAccess
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MemberAccess|null $groupAccess groupAccess
    *
    * @return $this
    */
    public function setGroupAccess($groupAccess)
    {
        $this->container['groupAccess'] = $groupAccess;
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

