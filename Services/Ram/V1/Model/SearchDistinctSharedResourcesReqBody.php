<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchDistinctSharedResourcesReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchDistinctSharedResourcesReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页页面的最大值。
    * marker  页面标记。
    * resourceIds  指定资源ID。
    * principal  指定资源使用者。
    * resourceRegion  资源所在的区域。
    * resourceUrns  指定资源URN的列表。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'resourceIds' => 'string[]',
            'principal' => 'string',
            'resourceRegion' => 'string',
            'resourceUrns' => 'string[]',
            'resourceOwner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页页面的最大值。
    * marker  页面标记。
    * resourceIds  指定资源ID。
    * principal  指定资源使用者。
    * resourceRegion  资源所在的区域。
    * resourceUrns  指定资源URN的列表。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'resourceIds' => null,
        'principal' => null,
        'resourceRegion' => null,
        'resourceUrns' => null,
        'resourceOwner' => null
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
    * limit  分页页面的最大值。
    * marker  页面标记。
    * resourceIds  指定资源ID。
    * principal  指定资源使用者。
    * resourceRegion  资源所在的区域。
    * resourceUrns  指定资源URN的列表。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'resourceIds' => 'resource_ids',
            'principal' => 'principal',
            'resourceRegion' => 'resource_region',
            'resourceUrns' => 'resource_urns',
            'resourceOwner' => 'resource_owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页页面的最大值。
    * marker  页面标记。
    * resourceIds  指定资源ID。
    * principal  指定资源使用者。
    * resourceRegion  资源所在的区域。
    * resourceUrns  指定资源URN的列表。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'resourceIds' => 'setResourceIds',
            'principal' => 'setPrincipal',
            'resourceRegion' => 'setResourceRegion',
            'resourceUrns' => 'setResourceUrns',
            'resourceOwner' => 'setResourceOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页页面的最大值。
    * marker  页面标记。
    * resourceIds  指定资源ID。
    * principal  指定资源使用者。
    * resourceRegion  资源所在的区域。
    * resourceUrns  指定资源URN的列表。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'resourceIds' => 'getResourceIds',
            'principal' => 'getPrincipal',
            'resourceRegion' => 'getResourceRegion',
            'resourceUrns' => 'getResourceUrns',
            'resourceOwner' => 'getResourceOwner'
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
    const RESOURCE_OWNER_SELF = 'self';
    const RESOURCE_OWNER_OTHER_ACCOUNTS = 'other-accounts';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceOwnerAllowableValues()
    {
        return [
            self::RESOURCE_OWNER_SELF,
            self::RESOURCE_OWNER_OTHER_ACCOUNTS,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['resourceRegion'] = isset($data['resourceRegion']) ? $data['resourceRegion'] : null;
        $this->container['resourceUrns'] = isset($data['resourceUrns']) ? $data['resourceUrns'] : null;
        $this->container['resourceOwner'] = isset($data['resourceOwner']) ? $data['resourceOwner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['resourceRegion']) && (mb_strlen($this->container['resourceRegion']) > 255)) {
                $invalidProperties[] = "invalid value for 'resourceRegion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['resourceRegion']) && (mb_strlen($this->container['resourceRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceRegion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceOwner'] === null) {
            $invalidProperties[] = "'resourceOwner' can't be null";
        }
            $allowedValues = $this->getResourceOwnerAllowableValues();
                if (!is_null($this->container['resourceOwner']) && !in_array($this->container['resourceOwner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceOwner', must be one of '%s'",
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
    * Gets resourceIds
    *  指定资源ID。
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
    * @param string[]|null $resourceIds 指定资源ID。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets principal
    *  指定资源使用者。
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
    * @param string|null $principal 指定资源使用者。
    *
    * @return $this
    */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;
        return $this;
    }

    /**
    * Gets resourceRegion
    *  资源所在的区域。
    *
    * @return string|null
    */
    public function getResourceRegion()
    {
        return $this->container['resourceRegion'];
    }

    /**
    * Sets resourceRegion
    *
    * @param string|null $resourceRegion 资源所在的区域。
    *
    * @return $this
    */
    public function setResourceRegion($resourceRegion)
    {
        $this->container['resourceRegion'] = $resourceRegion;
        return $this;
    }

    /**
    * Gets resourceUrns
    *  指定资源URN的列表。
    *
    * @return string[]|null
    */
    public function getResourceUrns()
    {
        return $this->container['resourceUrns'];
    }

    /**
    * Sets resourceUrns
    *
    * @param string[]|null $resourceUrns 指定资源URN的列表。
    *
    * @return $this
    */
    public function setResourceUrns($resourceUrns)
    {
        $this->container['resourceUrns'] = $resourceUrns;
        return $this;
    }

    /**
    * Gets resourceOwner
    *  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @return string
    */
    public function getResourceOwner()
    {
        return $this->container['resourceOwner'];
    }

    /**
    * Sets resourceOwner
    *
    * @param string $resourceOwner 指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @return $this
    */
    public function setResourceOwner($resourceOwner)
    {
        $this->container['resourceOwner'] = $resourceOwner;
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

