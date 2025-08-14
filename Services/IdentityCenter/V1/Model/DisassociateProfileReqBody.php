<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisassociateProfileReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisassociateProfileReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户或用户组的唯一标识ID
    * accessorType  解除绑定的实体类型，可为用户或者用户组
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'accessorType' => 'string',
            'identityStoreId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户或用户组的唯一标识ID
    * accessorType  解除绑定的实体类型，可为用户或者用户组
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'accessorType' => null,
        'identityStoreId' => null
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
    * id  用户或用户组的唯一标识ID
    * accessorType  解除绑定的实体类型，可为用户或者用户组
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'accessorType' => 'accessor_type',
            'identityStoreId' => 'identity_store_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户或用户组的唯一标识ID
    * accessorType  解除绑定的实体类型，可为用户或者用户组
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'accessorType' => 'setAccessorType',
            'identityStoreId' => 'setIdentityStoreId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户或用户组的唯一标识ID
    * accessorType  解除绑定的实体类型，可为用户或者用户组
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'accessorType' => 'getAccessorType',
            'identityStoreId' => 'getIdentityStoreId'
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
    const ACCESSOR_TYPE_GROUP = 'GROUP';
    const ACCESSOR_TYPE_USER = 'USER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessorTypeAllowableValues()
    {
        return [
            self::ACCESSOR_TYPE_GROUP,
            self::ACCESSOR_TYPE_USER,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['accessorType'] = isset($data['accessorType']) ? $data['accessorType'] : null;
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['accessorType'] === null) {
            $invalidProperties[] = "'accessorType' can't be null";
        }
            $allowedValues = $this->getAccessorTypeAllowableValues();
                if (!is_null($this->container['accessorType']) && !in_array($this->container['accessorType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessorType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['identityStoreId'] === null) {
            $invalidProperties[] = "'identityStoreId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['identityStoreId'])) {
                $invalidProperties[] = "invalid value for 'identityStoreId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
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
    * Gets id
    *  用户或用户组的唯一标识ID
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
    * @param string $id 用户或用户组的唯一标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets accessorType
    *  解除绑定的实体类型，可为用户或者用户组
    *
    * @return string
    */
    public function getAccessorType()
    {
        return $this->container['accessorType'];
    }

    /**
    * Sets accessorType
    *
    * @param string $accessorType 解除绑定的实体类型，可为用户或者用户组
    *
    * @return $this
    */
    public function setAccessorType($accessorType)
    {
        $this->container['accessorType'] = $accessorType;
        return $this;
    }

    /**
    * Gets identityStoreId
    *  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @return string
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string $identityStoreId 关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
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

