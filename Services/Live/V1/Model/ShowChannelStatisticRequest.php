<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowChannelStatisticRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowChannelStatisticRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * limit  每页记录数，取值范围[1,100]，默认值10。
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessControlAllowInternal' => 'string',
            'accessControlAllowExternal' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'body' => '\HuaweiCloud\SDK\Live\V1\Model\ShowChannelStatisticReq'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * limit  每页记录数，取值范围[1,100]，默认值10。
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessControlAllowInternal' => null,
        'accessControlAllowExternal' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'body' => null
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
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * limit  每页记录数，取值范围[1,100]，默认值10。
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessControlAllowInternal' => 'Access-Control-Allow-Internal',
            'accessControlAllowExternal' => 'Access-Control-Allow-External',
            'limit' => 'limit',
            'offset' => 'offset',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * limit  每页记录数，取值范围[1,100]，默认值10。
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'accessControlAllowInternal' => 'setAccessControlAllowInternal',
            'accessControlAllowExternal' => 'setAccessControlAllowExternal',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessControlAllowInternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    * accessControlAllowExternal  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    * limit  每页记录数，取值范围[1,100]，默认值10。
    * offset  偏移量。表示从此偏移量开始查询，offset大于等于0。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'accessControlAllowInternal' => 'getAccessControlAllowInternal',
            'accessControlAllowExternal' => 'getAccessControlAllowExternal',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'body' => 'getBody'
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
        $this->container['accessControlAllowInternal'] = isset($data['accessControlAllowInternal']) ? $data['accessControlAllowInternal'] : null;
        $this->container['accessControlAllowExternal'] = isset($data['accessControlAllowExternal']) ? $data['accessControlAllowExternal'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessControlAllowInternal']) && (mb_strlen($this->container['accessControlAllowInternal']) > 2048)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowInternal', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['accessControlAllowInternal']) && (mb_strlen($this->container['accessControlAllowInternal']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowInternal', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessControlAllowExternal']) && (mb_strlen($this->container['accessControlAllowExternal']) > 2048)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowExternal', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['accessControlAllowExternal']) && (mb_strlen($this->container['accessControlAllowExternal']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessControlAllowExternal', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets accessControlAllowInternal
    *  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    *
    * @return string|null
    */
    public function getAccessControlAllowInternal()
    {
        return $this->container['accessControlAllowInternal'];
    }

    /**
    * Sets accessControlAllowInternal
    *
    * @param string|null $accessControlAllowInternal 服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-Internal访问服务。
    *
    * @return $this
    */
    public function setAccessControlAllowInternal($accessControlAllowInternal)
    {
        $this->container['accessControlAllowInternal'] = $accessControlAllowInternal;
        return $this;
    }

    /**
    * Gets accessControlAllowExternal
    *  服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    *
    * @return string|null
    */
    public function getAccessControlAllowExternal()
    {
        return $this->container['accessControlAllowExternal'];
    }

    /**
    * Sets accessControlAllowExternal
    *
    * @param string|null $accessControlAllowExternal 服务鉴权Token，服务开启鉴权，必须携带Access-Control-Allow-External访问服务。
    *
    * @return $this
    */
    public function setAccessControlAllowExternal($accessControlAllowExternal)
    {
        $this->container['accessControlAllowExternal'] = $accessControlAllowExternal;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数，取值范围[1,100]，默认值10。
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
    * @param int|null $limit 每页记录数，取值范围[1,100]，默认值10。
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
    *  偏移量。表示从此偏移量开始查询，offset大于等于0。
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
    * @param int|null $offset 偏移量。表示从此偏移量开始查询，offset大于等于0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\ShowChannelStatisticReq|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\ShowChannelStatisticReq|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

