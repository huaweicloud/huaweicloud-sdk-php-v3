<?php

namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccountAgenciesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccountAgenciesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessToken  创建令牌接口调用签发的访问令牌
    * limit  页面中最大结果数量。
    * marker  分页标记。非分页的接口，不使用该值。
    * accountId  帐户的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessToken' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'accountId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessToken  创建令牌接口调用签发的访问令牌
    * limit  页面中最大结果数量。
    * marker  分页标记。非分页的接口，不使用该值。
    * accountId  帐户的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'limit' => 'int32',
        'marker' => null,
        'accountId' => null
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
    * accessToken  创建令牌接口调用签发的访问令牌
    * limit  页面中最大结果数量。
    * marker  分页标记。非分页的接口，不使用该值。
    * accountId  帐户的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessToken' => 'access-token',
            'limit' => 'limit',
            'marker' => 'marker',
            'accountId' => 'account_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessToken  创建令牌接口调用签发的访问令牌
    * limit  页面中最大结果数量。
    * marker  分页标记。非分页的接口，不使用该值。
    * accountId  帐户的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $setters = [
            'accessToken' => 'setAccessToken',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'accountId' => 'setAccountId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessToken  创建令牌接口调用签发的访问令牌
    * limit  页面中最大结果数量。
    * marker  分页标记。非分页的接口，不使用该值。
    * accountId  帐户的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $getters = [
            'accessToken' => 'getAccessToken',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'accountId' => 'getAccountId'
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
        }
            if ((mb_strlen($this->container['accessToken']) > 4096)) {
                $invalidProperties[] = "invalid value for 'accessToken', the character length must be smaller than or equal to 4096.";
            }
            if (!preg_match("/^[a-zA-Z0-9-_\\.]{1,4096}$/", $this->container['accessToken'])) {
                $invalidProperties[] = "invalid value for 'accessToken', must be conform to the pattern /^[a-zA-Z0-9-_\\.]{1,4096}$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 400)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 4)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^[A-Za-z0-9+\/=\\-_]+$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^[A-Za-z0-9+\/=\\-_]+$/.";
            }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
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
    * Gets accessToken
    *  创建令牌接口调用签发的访问令牌
    *
    * @return string
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string $accessToken 创建令牌接口调用签发的访问令牌
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets limit
    *  页面中最大结果数量。
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
    * @param int|null $limit 页面中最大结果数量。
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
    *  分页标记。非分页的接口，不使用该值。
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
    * @param string|null $marker 分页标记。非分页的接口，不使用该值。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets accountId
    *  帐户的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string $accountId 帐户的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
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

