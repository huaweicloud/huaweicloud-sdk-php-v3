<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityAdminResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityAdminResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managerType  管理员类型, USER:用户, USER_GROUP:用户组
    * managerId  管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    * managerName  管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managerType' => 'string',
            'managerId' => 'string',
            'managerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managerType  管理员类型, USER:用户, USER_GROUP:用户组
    * managerId  管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    * managerName  管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managerType' => null,
        'managerId' => null,
        'managerName' => null
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
    * managerType  管理员类型, USER:用户, USER_GROUP:用户组
    * managerId  管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    * managerName  管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managerType' => 'manager_type',
            'managerId' => 'manager_id',
            'managerName' => 'manager_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managerType  管理员类型, USER:用户, USER_GROUP:用户组
    * managerId  管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    * managerName  管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @var string[]
    */
    protected static $setters = [
            'managerType' => 'setManagerType',
            'managerId' => 'setManagerId',
            'managerName' => 'setManagerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managerType  管理员类型, USER:用户, USER_GROUP:用户组
    * managerId  管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    * managerName  管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @var string[]
    */
    protected static $getters = [
            'managerType' => 'getManagerType',
            'managerId' => 'getManagerId',
            'managerName' => 'getManagerName'
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
    const MANAGER_TYPE_USER = 'USER';
    const MANAGER_TYPE_USER_GROUP = 'USER_GROUP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getManagerTypeAllowableValues()
    {
        return [
            self::MANAGER_TYPE_USER,
            self::MANAGER_TYPE_USER_GROUP,
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
        $this->container['managerType'] = isset($data['managerType']) ? $data['managerType'] : null;
        $this->container['managerId'] = isset($data['managerId']) ? $data['managerId'] : null;
        $this->container['managerName'] = isset($data['managerName']) ? $data['managerName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getManagerTypeAllowableValues();
                if (!is_null($this->container['managerType']) && !in_array($this->container['managerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'managerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be bigger than or equal to 1.";
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
    * Gets managerType
    *  管理员类型, USER:用户, USER_GROUP:用户组
    *
    * @return string|null
    */
    public function getManagerType()
    {
        return $this->container['managerType'];
    }

    /**
    * Sets managerType
    *
    * @param string|null $managerType 管理员类型, USER:用户, USER_GROUP:用户组
    *
    * @return $this
    */
    public function setManagerType($managerType)
    {
        $this->container['managerType'] = $managerType;
        return $this;
    }

    /**
    * Gets managerId
    *  管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    *
    * @return string|null
    */
    public function getManagerId()
    {
        return $this->container['managerId'];
    }

    /**
    * Sets managerId
    *
    * @param string|null $managerId 管理员id, 管理员类型为用户时, 请传入iam用户id; 管理员类型为用户组时, 请传入iam用户组id
    *
    * @return $this
    */
    public function setManagerId($managerId)
    {
        $this->container['managerId'] = $managerId;
        return $this;
    }

    /**
    * Gets managerName
    *  管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @return string|null
    */
    public function getManagerName()
    {
        return $this->container['managerName'];
    }

    /**
    * Sets managerName
    *
    * @param string|null $managerName 管理员名称, 管理员类型为用户时, 请传入iam用户名称; 管理员类型为用户组时, 请传入iam用户组名称
    *
    * @return $this
    */
    public function setManagerName($managerName)
    {
        $this->container['managerName'] = $managerName;
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

