<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityResourcePermissionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityResourcePermissionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * policyName  策略名称。
    * resourceName  授权资源名称。
    * memberName  成员名称
    * orderBy  排序参数, NAME,UPDATE_TIME。
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'policyName' => 'string',
            'resourceName' => 'string',
            'memberName' => 'string',
            'orderBy' => 'string',
            'orderByAsc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * policyName  策略名称。
    * resourceName  授权资源名称。
    * memberName  成员名称
    * orderBy  排序参数, NAME,UPDATE_TIME。
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'policyName' => null,
        'resourceName' => null,
        'memberName' => null,
        'orderBy' => null,
        'orderByAsc' => null
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
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * policyName  策略名称。
    * resourceName  授权资源名称。
    * memberName  成员名称
    * orderBy  排序参数, NAME,UPDATE_TIME。
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'policyName' => 'policy_name',
            'resourceName' => 'resource_name',
            'memberName' => 'member_name',
            'orderBy' => 'order_by',
            'orderByAsc' => 'order_by_asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * policyName  策略名称。
    * resourceName  授权资源名称。
    * memberName  成员名称
    * orderBy  排序参数, NAME,UPDATE_TIME。
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'policyName' => 'setPolicyName',
            'resourceName' => 'setResourceName',
            'memberName' => 'setMemberName',
            'orderBy' => 'setOrderBy',
            'orderByAsc' => 'setOrderByAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * policyName  策略名称。
    * resourceName  授权资源名称。
    * memberName  成员名称
    * orderBy  排序参数, NAME,UPDATE_TIME。
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'policyName' => 'getPolicyName',
            'resourceName' => 'getResourceName',
            'memberName' => 'getMemberName',
            'orderBy' => 'getOrderBy',
            'orderByAsc' => 'getOrderByAsc'
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
    const ORDER_BY_NAME = 'NAME';
    const ORDER_BY_UPDATE_TIME = 'UPDATE_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_NAME,
            self::ORDER_BY_UPDATE_TIME,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['orderByAsc'] = isset($data['orderByAsc']) ? $data['orderByAsc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称。
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称。
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets resourceName
    *  授权资源名称。
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
    * @param string|null $resourceName 授权资源名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets memberName
    *  成员名称
    *
    * @return string|null
    */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
    * Sets memberName
    *
    * @param string|null $memberName 成员名称
    *
    * @return $this
    */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序参数, NAME,UPDATE_TIME。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序参数, NAME,UPDATE_TIME。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets orderByAsc
    *  是否升序（仅指定排序参数时有效）
    *
    * @return bool|null
    */
    public function getOrderByAsc()
    {
        return $this->container['orderByAsc'];
    }

    /**
    * Sets orderByAsc
    *
    * @param bool|null $orderByAsc 是否升序（仅指定排序参数时有效）
    *
    * @return $this
    */
    public function setOrderByAsc($orderByAsc)
    {
        $this->container['orderByAsc'] = $orderByAsc;
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

