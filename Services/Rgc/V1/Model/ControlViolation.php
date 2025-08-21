<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ControlViolation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ControlViolation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * displayName  控制策略显示名称。
    * name  控制策略名称。
    * controlId  控制策略ID。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * region  区域名称。
    * resource  控制策略不合规资源。
    * resourceName  控制策略不合规资源的名称。
    * resourceType  控制策略不合规资源类型。
    * service  云服务名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountName' => 'string',
            'displayName' => 'string',
            'name' => 'string',
            'controlId' => 'string',
            'parentOrganizationalUnitId' => 'string',
            'parentOrganizationalUnitName' => 'string',
            'region' => 'string',
            'resource' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'service' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * displayName  控制策略显示名称。
    * name  控制策略名称。
    * controlId  控制策略ID。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * region  区域名称。
    * resource  控制策略不合规资源。
    * resourceName  控制策略不合规资源的名称。
    * resourceType  控制策略不合规资源类型。
    * service  云服务名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountName' => null,
        'displayName' => null,
        'name' => null,
        'controlId' => null,
        'parentOrganizationalUnitId' => null,
        'parentOrganizationalUnitName' => null,
        'region' => null,
        'resource' => null,
        'resourceName' => null,
        'resourceType' => null,
        'service' => null
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
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * displayName  控制策略显示名称。
    * name  控制策略名称。
    * controlId  控制策略ID。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * region  区域名称。
    * resource  控制策略不合规资源。
    * resourceName  控制策略不合规资源的名称。
    * resourceType  控制策略不合规资源类型。
    * service  云服务名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'displayName' => 'display_name',
            'name' => 'name',
            'controlId' => 'control_id',
            'parentOrganizationalUnitId' => 'parent_organizational_unit_id',
            'parentOrganizationalUnitName' => 'parent_organizational_unit_name',
            'region' => 'region',
            'resource' => 'resource',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'service' => 'service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * displayName  控制策略显示名称。
    * name  控制策略名称。
    * controlId  控制策略ID。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * region  区域名称。
    * resource  控制策略不合规资源。
    * resourceName  控制策略不合规资源的名称。
    * resourceType  控制策略不合规资源类型。
    * service  云服务名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'displayName' => 'setDisplayName',
            'name' => 'setName',
            'controlId' => 'setControlId',
            'parentOrganizationalUnitId' => 'setParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'setParentOrganizationalUnitName',
            'region' => 'setRegion',
            'resource' => 'setResource',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'service' => 'setService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  纳管账号ID。
    * accountName  纳管账号名称。
    * displayName  控制策略显示名称。
    * name  控制策略名称。
    * controlId  控制策略ID。
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * region  区域名称。
    * resource  控制策略不合规资源。
    * resourceName  控制策略不合规资源的名称。
    * resourceType  控制策略不合规资源类型。
    * service  云服务名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'displayName' => 'getDisplayName',
            'name' => 'getName',
            'controlId' => 'getControlId',
            'parentOrganizationalUnitId' => 'getParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'getParentOrganizationalUnitName',
            'region' => 'getRegion',
            'resource' => 'getResource',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'service' => 'getService'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['controlId'] = isset($data['controlId']) ? $data['controlId'] : null;
        $this->container['parentOrganizationalUnitId'] = isset($data['parentOrganizationalUnitId']) ? $data['parentOrganizationalUnitId'] : null;
        $this->container['parentOrganizationalUnitName'] = isset($data['parentOrganizationalUnitName']) ? $data['parentOrganizationalUnitName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 32)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 6)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 512)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['controlId']) && (mb_strlen($this->container['controlId']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['controlId']) && (mb_strlen($this->container['controlId']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resource']) && (mb_strlen($this->container['resource']) > 64)) {
                $invalidProperties[] = "invalid value for 'resource', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resource']) && (mb_strlen($this->container['resource']) < 1)) {
                $invalidProperties[] = "invalid value for 'resource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['service']) && (mb_strlen($this->container['service']) > 64)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['service']) && (mb_strlen($this->container['service']) < 1)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be bigger than or equal to 1.";
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
    * Gets accountId
    *  纳管账号ID。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 纳管账号ID。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountName
    *  纳管账号名称。
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 纳管账号名称。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets displayName
    *  控制策略显示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 控制策略显示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets name
    *  控制策略名称。
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
    * @param string|null $name 控制策略名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets controlId
    *  控制策略ID。
    *
    * @return string|null
    */
    public function getControlId()
    {
        return $this->container['controlId'];
    }

    /**
    * Sets controlId
    *
    * @param string|null $controlId 控制策略ID。
    *
    * @return $this
    */
    public function setControlId($controlId)
    {
        $this->container['controlId'] = $controlId;
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
    * Gets region
    *  区域名称。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets resource
    *  控制策略不合规资源。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 控制策略不合规资源。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets resourceName
    *  控制策略不合规资源的名称。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 控制策略不合规资源的名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  控制策略不合规资源类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 控制策略不合规资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets service
    *  云服务名称。
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 云服务名称。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
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

