<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGroupMembershipResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGroupMembershipResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityStoreId  身份源的全局唯一标识符（ID）
    * membershipId  身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityStoreId' => 'string',
            'membershipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityStoreId  身份源的全局唯一标识符（ID）
    * membershipId  身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityStoreId' => null,
        'membershipId' => null
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
    * identityStoreId  身份源的全局唯一标识符（ID）
    * membershipId  身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityStoreId' => 'identity_store_id',
            'membershipId' => 'membership_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityStoreId  身份源的全局唯一标识符（ID）
    * membershipId  身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $setters = [
            'identityStoreId' => 'setIdentityStoreId',
            'membershipId' => 'setMembershipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityStoreId  身份源的全局唯一标识符（ID）
    * membershipId  身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $getters = [
            'identityStoreId' => 'getIdentityStoreId',
            'membershipId' => 'getMembershipId'
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
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['membershipId'] = isset($data['membershipId']) ? $data['membershipId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['identityStoreId']) && (mb_strlen($this->container['identityStoreId']) > 36)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['identityStoreId']) && (mb_strlen($this->container['identityStoreId']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['identityStoreId']) && !preg_match("/d-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['identityStoreId'])) {
                $invalidProperties[] = "invalid value for 'identityStoreId', must be conform to the pattern /d-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['membershipId']) && (mb_strlen($this->container['membershipId']) > 47)) {
                $invalidProperties[] = "invalid value for 'membershipId', the character length must be smaller than or equal to 47.";
            }
            if (!is_null($this->container['membershipId']) && (mb_strlen($this->container['membershipId']) < 1)) {
                $invalidProperties[] = "invalid value for 'membershipId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['membershipId']) && !preg_match("/([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}/", $this->container['membershipId'])) {
                $invalidProperties[] = "invalid value for 'membershipId', must be conform to the pattern /([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}/.";
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
    * Gets identityStoreId
    *  身份源的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string|null $identityStoreId 身份源的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
        return $this;
    }

    /**
    * Gets membershipId
    *  身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getMembershipId()
    {
        return $this->container['membershipId'];
    }

    /**
    * Sets membershipId
    *
    * @param string|null $membershipId 身份源中用户和组关联关系的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setMembershipId($membershipId)
    {
        $this->container['membershipId'] = $membershipId;
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

