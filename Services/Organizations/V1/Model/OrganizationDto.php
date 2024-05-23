<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrganizationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrganizationDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组织的唯一标识符（ID）。
    * urn  组织的统一资源名称。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织的管理账号的名称。
    * createdAt  组织的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'urn' => 'string',
            'managementAccountId' => 'string',
            'managementAccountName' => 'string',
            'createdAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组织的唯一标识符（ID）。
    * urn  组织的统一资源名称。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织的管理账号的名称。
    * createdAt  组织的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'urn' => null,
        'managementAccountId' => null,
        'managementAccountName' => null,
        'createdAt' => 'date-time'
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
    * id  组织的唯一标识符（ID）。
    * urn  组织的统一资源名称。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织的管理账号的名称。
    * createdAt  组织的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'urn' => 'urn',
            'managementAccountId' => 'management_account_id',
            'managementAccountName' => 'management_account_name',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组织的唯一标识符（ID）。
    * urn  组织的统一资源名称。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织的管理账号的名称。
    * createdAt  组织的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'urn' => 'setUrn',
            'managementAccountId' => 'setManagementAccountId',
            'managementAccountName' => 'setManagementAccountName',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组织的唯一标识符（ID）。
    * urn  组织的统一资源名称。
    * managementAccountId  组织管理账号的唯一标识符（ID）。
    * managementAccountName  组织的管理账号的名称。
    * createdAt  组织的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'urn' => 'getUrn',
            'managementAccountId' => 'getManagementAccountId',
            'managementAccountName' => 'getManagementAccountName',
            'createdAt' => 'getCreatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['managementAccountId'] = isset($data['managementAccountId']) ? $data['managementAccountId'] : null;
        $this->container['managementAccountName'] = isset($data['managementAccountName']) ? $data['managementAccountName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
            if ((mb_strlen($this->container['id']) > 34)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^o-[0-9a-z]{10,32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^o-[0-9a-z]{10,32}$/.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['managementAccountId'] === null) {
            $invalidProperties[] = "'managementAccountId' can't be null";
        }
            if ((mb_strlen($this->container['managementAccountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'managementAccountId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['managementAccountId'])) {
                $invalidProperties[] = "invalid value for 'managementAccountId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['managementAccountName'] === null) {
            $invalidProperties[] = "'managementAccountName' can't be null";
        }
            if ((mb_strlen($this->container['managementAccountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'managementAccountName', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['managementAccountName'])) {
                $invalidProperties[] = "invalid value for 'managementAccountName', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    *  组织的唯一标识符（ID）。
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
    * @param string $id 组织的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  组织的统一资源名称。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 组织的统一资源名称。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets managementAccountId
    *  组织管理账号的唯一标识符（ID）。
    *
    * @return string
    */
    public function getManagementAccountId()
    {
        return $this->container['managementAccountId'];
    }

    /**
    * Sets managementAccountId
    *
    * @param string $managementAccountId 组织管理账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setManagementAccountId($managementAccountId)
    {
        $this->container['managementAccountId'] = $managementAccountId;
        return $this;
    }

    /**
    * Gets managementAccountName
    *  组织的管理账号的名称。
    *
    * @return string
    */
    public function getManagementAccountName()
    {
        return $this->container['managementAccountName'];
    }

    /**
    * Sets managementAccountName
    *
    * @param string $managementAccountName 组织的管理账号的名称。
    *
    * @return $this
    */
    public function setManagementAccountName($managementAccountName)
    {
        $this->container['managementAccountName'] = $managementAccountName;
        return $this;
    }

    /**
    * Gets createdAt
    *  组织的创建时间。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 组织的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

