<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchResourceShareAssociationsReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchResourceShareAssociationsReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * associationStatus  指定绑定的状态。
    * associationType  指定绑定的类型（principal或resource）。
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principal  指定绑定的资源使用者。
    * resourceUrn  指定绑定的共享资源URN。
    * resourceShareIds  指定资源共享实例的ID列表。
    * resourceIds  指定共享资源ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'associationStatus' => 'string',
            'associationType' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'principal' => 'string',
            'resourceUrn' => 'string',
            'resourceShareIds' => 'string[]',
            'resourceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * associationStatus  指定绑定的状态。
    * associationType  指定绑定的类型（principal或resource）。
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principal  指定绑定的资源使用者。
    * resourceUrn  指定绑定的共享资源URN。
    * resourceShareIds  指定资源共享实例的ID列表。
    * resourceIds  指定共享资源ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'associationStatus' => null,
        'associationType' => null,
        'limit' => 'int32',
        'marker' => null,
        'principal' => null,
        'resourceUrn' => null,
        'resourceShareIds' => null,
        'resourceIds' => null
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
    * associationStatus  指定绑定的状态。
    * associationType  指定绑定的类型（principal或resource）。
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principal  指定绑定的资源使用者。
    * resourceUrn  指定绑定的共享资源URN。
    * resourceShareIds  指定资源共享实例的ID列表。
    * resourceIds  指定共享资源ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'associationStatus' => 'association_status',
            'associationType' => 'association_type',
            'limit' => 'limit',
            'marker' => 'marker',
            'principal' => 'principal',
            'resourceUrn' => 'resource_urn',
            'resourceShareIds' => 'resource_share_ids',
            'resourceIds' => 'resource_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * associationStatus  指定绑定的状态。
    * associationType  指定绑定的类型（principal或resource）。
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principal  指定绑定的资源使用者。
    * resourceUrn  指定绑定的共享资源URN。
    * resourceShareIds  指定资源共享实例的ID列表。
    * resourceIds  指定共享资源ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'associationStatus' => 'setAssociationStatus',
            'associationType' => 'setAssociationType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'principal' => 'setPrincipal',
            'resourceUrn' => 'setResourceUrn',
            'resourceShareIds' => 'setResourceShareIds',
            'resourceIds' => 'setResourceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * associationStatus  指定绑定的状态。
    * associationType  指定绑定的类型（principal或resource）。
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principal  指定绑定的资源使用者。
    * resourceUrn  指定绑定的共享资源URN。
    * resourceShareIds  指定资源共享实例的ID列表。
    * resourceIds  指定共享资源ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'associationStatus' => 'getAssociationStatus',
            'associationType' => 'getAssociationType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'principal' => 'getPrincipal',
            'resourceUrn' => 'getResourceUrn',
            'resourceShareIds' => 'getResourceShareIds',
            'resourceIds' => 'getResourceIds'
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
    const ASSOCIATION_TYPE_PRINCIPAL = 'principal';
    const ASSOCIATION_TYPE_RESOURCE = 'resource';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssociationTypeAllowableValues()
    {
        return [
            self::ASSOCIATION_TYPE_PRINCIPAL,
            self::ASSOCIATION_TYPE_RESOURCE,
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
        $this->container['associationStatus'] = isset($data['associationStatus']) ? $data['associationStatus'] : null;
        $this->container['associationType'] = isset($data['associationType']) ? $data['associationType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['resourceUrn'] = isset($data['resourceUrn']) ? $data['resourceUrn'] : null;
        $this->container['resourceShareIds'] = isset($data['resourceShareIds']) ? $data['resourceShareIds'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['associationStatus']) && (mb_strlen($this->container['associationStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'associationStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['associationStatus']) && (mb_strlen($this->container['associationStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'associationStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['associationType'] === null) {
            $invalidProperties[] = "'associationType' can't be null";
        }
            $allowedValues = $this->getAssociationTypeAllowableValues();
                if (!is_null($this->container['associationType']) && !in_array($this->container['associationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'associationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^\\d{1,}$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^\\d{1,}$/.";
            }
            if (!is_null($this->container['principal']) && (mb_strlen($this->container['principal']) > 1500)) {
                $invalidProperties[] = "invalid value for 'principal', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['principal']) && (mb_strlen($this->container['principal']) < 0)) {
                $invalidProperties[] = "invalid value for 'principal', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['principal']) && !preg_match("/^[\\w-\/_*_.+:()#@?=&%]+/", $this->container['principal'])) {
                $invalidProperties[] = "invalid value for 'principal', must be conform to the pattern /^[\\w-\/_*_.+:()#@?=&%]+/.";
            }
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceUrn']) && !preg_match("/^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+/", $this->container['resourceUrn'])) {
                $invalidProperties[] = "invalid value for 'resourceUrn', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+/.";
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
    * Gets associationStatus
    *  指定绑定的状态。
    *
    * @return string|null
    */
    public function getAssociationStatus()
    {
        return $this->container['associationStatus'];
    }

    /**
    * Sets associationStatus
    *
    * @param string|null $associationStatus 指定绑定的状态。
    *
    * @return $this
    */
    public function setAssociationStatus($associationStatus)
    {
        $this->container['associationStatus'] = $associationStatus;
        return $this;
    }

    /**
    * Gets associationType
    *  指定绑定的类型（principal或resource）。
    *
    * @return string
    */
    public function getAssociationType()
    {
        return $this->container['associationType'];
    }

    /**
    * Sets associationType
    *
    * @param string $associationType 指定绑定的类型（principal或resource）。
    *
    * @return $this
    */
    public function setAssociationType($associationType)
    {
        $this->container['associationType'] = $associationType;
        return $this;
    }

    /**
    * Gets limit
    *  分页页面的最大值。
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
    * @param int|null $limit 分页页面的最大值。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  页面标记。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 页面标记。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets principal
    *  指定绑定的资源使用者。
    *
    * @return string|null
    */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
    * Sets principal
    *
    * @param string|null $principal 指定绑定的资源使用者。
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets resourceUrn
    *  指定绑定的共享资源URN。
    *
    * @return string|null
    */
    public function getResourceUrn()
    {
        return $this->container['resourceUrn'];
    }

    /**
    * Sets resourceUrn
    *
    * @param string|null $resourceUrn 指定绑定的共享资源URN。
    *
    * @return $this
    */
    public function setResourceUrn($resourceUrn)
    {
        $this->container['resourceUrn'] = $resourceUrn;
        return $this;
    }

    /**
    * Gets resourceShareIds
    *  指定资源共享实例的ID列表。
    *
    * @return string[]|null
    */
    public function getResourceShareIds()
    {
        return $this->container['resourceShareIds'];
    }

    /**
    * Sets resourceShareIds
    *
    * @param string[]|null $resourceShareIds 指定资源共享实例的ID列表。
    *
    * @return $this
    */
    public function setResourceShareIds($resourceShareIds)
    {
        $this->container['resourceShareIds'] = $resourceShareIds;
        return $this;
    }

    /**
    * Gets resourceIds
    *  指定共享资源ID列表。
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 指定共享资源ID列表。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
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

