<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchDistinctSharedPrincipalsReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchDistinctSharedPrincipalsReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principals  指定资源使用者列表。
    * resourceUrn  指定资源的URN。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'principals' => 'string[]',
            'resourceUrn' => 'string',
            'resourceOwner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principals  指定资源使用者列表。
    * resourceUrn  指定资源的URN。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'principals' => null,
        'resourceUrn' => null,
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
    * principals  指定资源使用者列表。
    * resourceUrn  指定资源的URN。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'principals' => 'principals',
            'resourceUrn' => 'resource_urn',
            'resourceOwner' => 'resource_owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principals  指定资源使用者列表。
    * resourceUrn  指定资源的URN。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'principals' => 'setPrincipals',
            'resourceUrn' => 'setResourceUrn',
            'resourceOwner' => 'setResourceOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页页面的最大值。
    * marker  页面标记。
    * principals  指定资源使用者列表。
    * resourceUrn  指定资源的URN。
    * resourceOwner  指定资源共享实例的所有者（self或者other-accounts）。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'principals' => 'getPrincipals',
            'resourceUrn' => 'getResourceUrn',
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
        $this->container['principals'] = isset($data['principals']) ? $data['principals'] : null;
        $this->container['resourceUrn'] = isset($data['resourceUrn']) ? $data['resourceUrn'] : null;
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
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceUrn']) && !preg_match("/^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+/", $this->container['resourceUrn'])) {
                $invalidProperties[] = "invalid value for 'resourceUrn', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+:[A-Za-z0-9+\/=\\-_*]{0,255}:[A-Za-z0-9+\/=\\-_]{1,64}:[A-Za-z0-9+\/=\\-_]{1,64}:.+/.";
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
    * Gets principals
    *  指定资源使用者列表。
    *
    * @return string[]|null
    */
    public function getPrincipals()
    {
        return $this->container['principals'];
    }

    /**
    * Sets principals
    *
    * @param string[]|null $principals 指定资源使用者列表。
    *
    * @return $this
    */
    public function setPrincipals($principals)
    {
        $this->container['principals'] = $principals;
        return $this;
    }

    /**
    * Gets resourceUrn
    *  指定资源的URN。
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
    * @param string|null $resourceUrn 指定资源的URN。
    *
    * @return $this
    */
    public function setResourceUrn($resourceUrn)
    {
        $this->container['resourceUrn'] = $resourceUrn;
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

