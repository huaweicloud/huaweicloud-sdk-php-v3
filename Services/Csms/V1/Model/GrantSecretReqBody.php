<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrantSecretReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrantSecretReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源id
    * type  资源类型（SECRET、GROUP）
    * granteeType  被授权类型，（0：USER；2：GROUP）个人，群组
    * granteeTargetId  被授权id
    * validityTime  有效期截止时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'type' => 'string',
            'granteeType' => 'string',
            'granteeTargetId' => 'string',
            'validityTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源id
    * type  资源类型（SECRET、GROUP）
    * granteeType  被授权类型，（0：USER；2：GROUP）个人，群组
    * granteeTargetId  被授权id
    * validityTime  有效期截止时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'type' => null,
        'granteeType' => null,
        'granteeTargetId' => null,
        'validityTime' => 'date'
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
    * resourceId  资源id
    * type  资源类型（SECRET、GROUP）
    * granteeType  被授权类型，（0：USER；2：GROUP）个人，群组
    * granteeTargetId  被授权id
    * validityTime  有效期截止时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'type' => 'type',
            'granteeType' => 'grantee_type',
            'granteeTargetId' => 'grantee_target_id',
            'validityTime' => 'validity_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源id
    * type  资源类型（SECRET、GROUP）
    * granteeType  被授权类型，（0：USER；2：GROUP）个人，群组
    * granteeTargetId  被授权id
    * validityTime  有效期截止时间
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'type' => 'setType',
            'granteeType' => 'setGranteeType',
            'granteeTargetId' => 'setGranteeTargetId',
            'validityTime' => 'setValidityTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源id
    * type  资源类型（SECRET、GROUP）
    * granteeType  被授权类型，（0：USER；2：GROUP）个人，群组
    * granteeTargetId  被授权id
    * validityTime  有效期截止时间
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'type' => 'getType',
            'granteeType' => 'getGranteeType',
            'granteeTargetId' => 'getGranteeTargetId',
            'validityTime' => 'getValidityTime'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['granteeType'] = isset($data['granteeType']) ? $data['granteeType'] : null;
        $this->container['granteeTargetId'] = isset($data['granteeTargetId']) ? $data['granteeTargetId'] : null;
        $this->container['validityTime'] = isset($data['validityTime']) ? $data['validityTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 10)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['type']) < 5)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 5.";
            }
        if ($this->container['granteeType'] === null) {
            $invalidProperties[] = "'granteeType' can't be null";
        }
            if ((mb_strlen($this->container['granteeType']) > 16)) {
                $invalidProperties[] = "invalid value for 'granteeType', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['granteeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'granteeType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['granteeTargetId'] === null) {
            $invalidProperties[] = "'granteeTargetId' can't be null";
        }
            if ((mb_strlen($this->container['granteeTargetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'granteeTargetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['granteeTargetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'granteeTargetId', the character length must be bigger than or equal to 1.";
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
    * Gets resourceId
    *  资源id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets type
    *  资源类型（SECRET、GROUP）
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 资源类型（SECRET、GROUP）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets granteeType
    *  被授权类型，（0：USER；2：GROUP）个人，群组
    *
    * @return string
    */
    public function getGranteeType()
    {
        return $this->container['granteeType'];
    }

    /**
    * Sets granteeType
    *
    * @param string $granteeType 被授权类型，（0：USER；2：GROUP）个人，群组
    *
    * @return $this
    */
    public function setGranteeType($granteeType)
    {
        $this->container['granteeType'] = $granteeType;
        return $this;
    }

    /**
    * Gets granteeTargetId
    *  被授权id
    *
    * @return string
    */
    public function getGranteeTargetId()
    {
        return $this->container['granteeTargetId'];
    }

    /**
    * Sets granteeTargetId
    *
    * @param string $granteeTargetId 被授权id
    *
    * @return $this
    */
    public function setGranteeTargetId($granteeTargetId)
    {
        $this->container['granteeTargetId'] = $granteeTargetId;
        return $this;
    }

    /**
    * Gets validityTime
    *  有效期截止时间
    *
    * @return \DateTime|null
    */
    public function getValidityTime()
    {
        return $this->container['validityTime'];
    }

    /**
    * Sets validityTime
    *
    * @param \DateTime|null $validityTime 有效期截止时间
    *
    * @return $this
    */
    public function setValidityTime($validityTime)
    {
        $this->container['validityTime'] = $validityTime;
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

