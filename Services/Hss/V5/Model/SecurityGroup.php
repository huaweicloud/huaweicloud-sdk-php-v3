<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityGroupId  安全组ID
    * securityGroupName  安全组名称
    * securityGroupDescription  安全组描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityGroupId' => 'string',
            'securityGroupName' => 'string',
            'securityGroupDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityGroupId  安全组ID
    * securityGroupName  安全组名称
    * securityGroupDescription  安全组描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityGroupId' => null,
        'securityGroupName' => null,
        'securityGroupDescription' => null
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
    * securityGroupId  安全组ID
    * securityGroupName  安全组名称
    * securityGroupDescription  安全组描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityGroupId' => 'security_group_id',
            'securityGroupName' => 'security_group_name',
            'securityGroupDescription' => 'security_group_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityGroupId  安全组ID
    * securityGroupName  安全组名称
    * securityGroupDescription  安全组描述
    *
    * @var string[]
    */
    protected static $setters = [
            'securityGroupId' => 'setSecurityGroupId',
            'securityGroupName' => 'setSecurityGroupName',
            'securityGroupDescription' => 'setSecurityGroupDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityGroupId  安全组ID
    * securityGroupName  安全组名称
    * securityGroupDescription  安全组描述
    *
    * @var string[]
    */
    protected static $getters = [
            'securityGroupId' => 'getSecurityGroupId',
            'securityGroupName' => 'getSecurityGroupName',
            'securityGroupDescription' => 'getSecurityGroupDescription'
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
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['securityGroupDescription'] = isset($data['securityGroupDescription']) ? $data['securityGroupDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityGroupName']) && (mb_strlen($this->container['securityGroupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'securityGroupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['securityGroupName']) && (mb_strlen($this->container['securityGroupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityGroupDescription']) && (mb_strlen($this->container['securityGroupDescription']) > 512)) {
                $invalidProperties[] = "invalid value for 'securityGroupDescription', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['securityGroupDescription']) && (mb_strlen($this->container['securityGroupDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupDescription', the character length must be bigger than or equal to 0.";
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
    * Gets securityGroupId
    *  安全组ID
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets securityGroupName
    *  安全组名称
    *
    * @return string|null
    */
    public function getSecurityGroupName()
    {
        return $this->container['securityGroupName'];
    }

    /**
    * Sets securityGroupName
    *
    * @param string|null $securityGroupName 安全组名称
    *
    * @return $this
    */
    public function setSecurityGroupName($securityGroupName)
    {
        $this->container['securityGroupName'] = $securityGroupName;
        return $this;
    }

    /**
    * Gets securityGroupDescription
    *  安全组描述
    *
    * @return string|null
    */
    public function getSecurityGroupDescription()
    {
        return $this->container['securityGroupDescription'];
    }

    /**
    * Sets securityGroupDescription
    *
    * @param string|null $securityGroupDescription 安全组描述
    *
    * @return $this
    */
    public function setSecurityGroupDescription($securityGroupDescription)
    {
        $this->container['securityGroupDescription'] = $securityGroupDescription;
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

