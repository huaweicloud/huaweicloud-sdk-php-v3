<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrganizationalUnit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrganizationalUnit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manageAccountId  管理员账号ID。
    * organizationalUnitId  注册OU ID。
    * organizationalUnitName  注册OU名称。
    * organizationalUnitStatus  注册OU状态。
    * organizationalUnitType  organizationalUnitType
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * createdAt  注册OU的创建时间。
    * landingZoneVersion  注册OU的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manageAccountId' => 'string',
            'organizationalUnitId' => 'string',
            'organizationalUnitName' => 'string',
            'organizationalUnitStatus' => 'string',
            'organizationalUnitType' => '\HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalUnitType',
            'parentOrganizationalUnitId' => 'string',
            'parentOrganizationalUnitName' => 'string',
            'createdAt' => '\DateTime',
            'landingZoneVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manageAccountId  管理员账号ID。
    * organizationalUnitId  注册OU ID。
    * organizationalUnitName  注册OU名称。
    * organizationalUnitStatus  注册OU状态。
    * organizationalUnitType  organizationalUnitType
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * createdAt  注册OU的创建时间。
    * landingZoneVersion  注册OU的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manageAccountId' => null,
        'organizationalUnitId' => null,
        'organizationalUnitName' => null,
        'organizationalUnitStatus' => null,
        'organizationalUnitType' => null,
        'parentOrganizationalUnitId' => null,
        'parentOrganizationalUnitName' => null,
        'createdAt' => 'date-time',
        'landingZoneVersion' => null
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
    * manageAccountId  管理员账号ID。
    * organizationalUnitId  注册OU ID。
    * organizationalUnitName  注册OU名称。
    * organizationalUnitStatus  注册OU状态。
    * organizationalUnitType  organizationalUnitType
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * createdAt  注册OU的创建时间。
    * landingZoneVersion  注册OU的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manageAccountId' => 'manage_account_id',
            'organizationalUnitId' => 'organizational_unit_id',
            'organizationalUnitName' => 'organizational_unit_name',
            'organizationalUnitStatus' => 'organizational_unit_status',
            'organizationalUnitType' => 'organizational_unit_type',
            'parentOrganizationalUnitId' => 'parent_organizational_unit_id',
            'parentOrganizationalUnitName' => 'parent_organizational_unit_name',
            'createdAt' => 'created_at',
            'landingZoneVersion' => 'landing_zone_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manageAccountId  管理员账号ID。
    * organizationalUnitId  注册OU ID。
    * organizationalUnitName  注册OU名称。
    * organizationalUnitStatus  注册OU状态。
    * organizationalUnitType  organizationalUnitType
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * createdAt  注册OU的创建时间。
    * landingZoneVersion  注册OU的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'manageAccountId' => 'setManageAccountId',
            'organizationalUnitId' => 'setOrganizationalUnitId',
            'organizationalUnitName' => 'setOrganizationalUnitName',
            'organizationalUnitStatus' => 'setOrganizationalUnitStatus',
            'organizationalUnitType' => 'setOrganizationalUnitType',
            'parentOrganizationalUnitId' => 'setParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'setParentOrganizationalUnitName',
            'createdAt' => 'setCreatedAt',
            'landingZoneVersion' => 'setLandingZoneVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manageAccountId  管理员账号ID。
    * organizationalUnitId  注册OU ID。
    * organizationalUnitName  注册OU名称。
    * organizationalUnitStatus  注册OU状态。
    * organizationalUnitType  organizationalUnitType
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * createdAt  注册OU的创建时间。
    * landingZoneVersion  注册OU的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'manageAccountId' => 'getManageAccountId',
            'organizationalUnitId' => 'getOrganizationalUnitId',
            'organizationalUnitName' => 'getOrganizationalUnitName',
            'organizationalUnitStatus' => 'getOrganizationalUnitStatus',
            'organizationalUnitType' => 'getOrganizationalUnitType',
            'parentOrganizationalUnitId' => 'getParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'getParentOrganizationalUnitName',
            'createdAt' => 'getCreatedAt',
            'landingZoneVersion' => 'getLandingZoneVersion'
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
        $this->container['manageAccountId'] = isset($data['manageAccountId']) ? $data['manageAccountId'] : null;
        $this->container['organizationalUnitId'] = isset($data['organizationalUnitId']) ? $data['organizationalUnitId'] : null;
        $this->container['organizationalUnitName'] = isset($data['organizationalUnitName']) ? $data['organizationalUnitName'] : null;
        $this->container['organizationalUnitStatus'] = isset($data['organizationalUnitStatus']) ? $data['organizationalUnitStatus'] : null;
        $this->container['organizationalUnitType'] = isset($data['organizationalUnitType']) ? $data['organizationalUnitType'] : null;
        $this->container['parentOrganizationalUnitId'] = isset($data['parentOrganizationalUnitId']) ? $data['parentOrganizationalUnitId'] : null;
        $this->container['parentOrganizationalUnitName'] = isset($data['parentOrganizationalUnitName']) ? $data['parentOrganizationalUnitName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['landingZoneVersion'] = isset($data['landingZoneVersion']) ? $data['landingZoneVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['manageAccountId']) && (mb_strlen($this->container['manageAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'manageAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['manageAccountId']) && (mb_strlen($this->container['manageAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'manageAccountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationalUnitId']) && (mb_strlen($this->container['organizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organizationalUnitId']) && (mb_strlen($this->container['organizationalUnitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationalUnitName']) && (mb_strlen($this->container['organizationalUnitName']) > 64)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organizationalUnitName']) && (mb_strlen($this->container['organizationalUnitName']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationalUnitName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['organizationalUnitName'])) {
                $invalidProperties[] = "invalid value for 'organizationalUnitName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
            }
            if (!is_null($this->container['organizationalUnitStatus']) && (mb_strlen($this->container['organizationalUnitStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organizationalUnitStatus']) && (mb_strlen($this->container['organizationalUnitStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationalUnitStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentOrganizationalUnitId']) && (mb_strlen($this->container['parentOrganizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentOrganizationalUnitId']) && (mb_strlen($this->container['parentOrganizationalUnitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentOrganizationalUnitName']) && (mb_strlen($this->container['parentOrganizationalUnitName']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentOrganizationalUnitName']) && (mb_strlen($this->container['parentOrganizationalUnitName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentOrganizationalUnitName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['parentOrganizationalUnitName'])) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
            }
            if (!is_null($this->container['landingZoneVersion']) && (mb_strlen($this->container['landingZoneVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'landingZoneVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['landingZoneVersion']) && (mb_strlen($this->container['landingZoneVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'landingZoneVersion', the character length must be bigger than or equal to 1.";
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
    * Gets manageAccountId
    *  管理员账号ID。
    *
    * @return string|null
    */
    public function getManageAccountId()
    {
        return $this->container['manageAccountId'];
    }

    /**
    * Sets manageAccountId
    *
    * @param string|null $manageAccountId 管理员账号ID。
    *
    * @return $this
    */
    public function setManageAccountId($manageAccountId)
    {
        $this->container['manageAccountId'] = $manageAccountId;
        return $this;
    }

    /**
    * Gets organizationalUnitId
    *  注册OU ID。
    *
    * @return string|null
    */
    public function getOrganizationalUnitId()
    {
        return $this->container['organizationalUnitId'];
    }

    /**
    * Sets organizationalUnitId
    *
    * @param string|null $organizationalUnitId 注册OU ID。
    *
    * @return $this
    */
    public function setOrganizationalUnitId($organizationalUnitId)
    {
        $this->container['organizationalUnitId'] = $organizationalUnitId;
        return $this;
    }

    /**
    * Gets organizationalUnitName
    *  注册OU名称。
    *
    * @return string|null
    */
    public function getOrganizationalUnitName()
    {
        return $this->container['organizationalUnitName'];
    }

    /**
    * Sets organizationalUnitName
    *
    * @param string|null $organizationalUnitName 注册OU名称。
    *
    * @return $this
    */
    public function setOrganizationalUnitName($organizationalUnitName)
    {
        $this->container['organizationalUnitName'] = $organizationalUnitName;
        return $this;
    }

    /**
    * Gets organizationalUnitStatus
    *  注册OU状态。
    *
    * @return string|null
    */
    public function getOrganizationalUnitStatus()
    {
        return $this->container['organizationalUnitStatus'];
    }

    /**
    * Sets organizationalUnitStatus
    *
    * @param string|null $organizationalUnitStatus 注册OU状态。
    *
    * @return $this
    */
    public function setOrganizationalUnitStatus($organizationalUnitStatus)
    {
        $this->container['organizationalUnitStatus'] = $organizationalUnitStatus;
        return $this;
    }

    /**
    * Gets organizationalUnitType
    *  organizationalUnitType
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalUnitType|null
    */
    public function getOrganizationalUnitType()
    {
        return $this->container['organizationalUnitType'];
    }

    /**
    * Sets organizationalUnitType
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\OrganizationalUnitType|null $organizationalUnitType organizationalUnitType
    *
    * @return $this
    */
    public function setOrganizationalUnitType($organizationalUnitType)
    {
        $this->container['organizationalUnitType'] = $organizationalUnitType;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitId
    *  父注册OU ID。
    *
    * @return string|null
    */
    public function getParentOrganizationalUnitId()
    {
        return $this->container['parentOrganizationalUnitId'];
    }

    /**
    * Sets parentOrganizationalUnitId
    *
    * @param string|null $parentOrganizationalUnitId 父注册OU ID。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitId($parentOrganizationalUnitId)
    {
        $this->container['parentOrganizationalUnitId'] = $parentOrganizationalUnitId;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitName
    *  父注册OU名称。
    *
    * @return string|null
    */
    public function getParentOrganizationalUnitName()
    {
        return $this->container['parentOrganizationalUnitName'];
    }

    /**
    * Sets parentOrganizationalUnitName
    *
    * @param string|null $parentOrganizationalUnitName 父注册OU名称。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitName($parentOrganizationalUnitName)
    {
        $this->container['parentOrganizationalUnitName'] = $parentOrganizationalUnitName;
        return $this;
    }

    /**
    * Gets createdAt
    *  注册OU的创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 注册OU的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets landingZoneVersion
    *  注册OU的Landing Zone版本。
    *
    * @return string|null
    */
    public function getLandingZoneVersion()
    {
        return $this->container['landingZoneVersion'];
    }

    /**
    * Sets landingZoneVersion
    *
    * @param string|null $landingZoneVersion 注册OU的Landing Zone版本。
    *
    * @return $this
    */
    public function setLandingZoneVersion($landingZoneVersion)
    {
        $this->container['landingZoneVersion'] = $landingZoneVersion;
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

