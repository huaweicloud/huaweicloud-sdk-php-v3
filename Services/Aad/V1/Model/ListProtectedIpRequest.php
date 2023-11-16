<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProtectedIpRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProtectedIpRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  开始查询的偏移量,默认值:0
    * limit  每页显示的条目数量,默认值:2000
    * packageId  防护包id
    * policyId  策略id
    * ip  防护ip
    * tag  本地标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'packageId' => 'string',
            'policyId' => 'string',
            'ip' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  开始查询的偏移量,默认值:0
    * limit  每页显示的条目数量,默认值:2000
    * packageId  防护包id
    * policyId  策略id
    * ip  防护ip
    * tag  本地标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'packageId' => null,
        'policyId' => null,
        'ip' => null,
        'tag' => null
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
    * offset  开始查询的偏移量,默认值:0
    * limit  每页显示的条目数量,默认值:2000
    * packageId  防护包id
    * policyId  策略id
    * ip  防护ip
    * tag  本地标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'packageId' => 'package_id',
            'policyId' => 'policy_id',
            'ip' => 'ip',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  开始查询的偏移量,默认值:0
    * limit  每页显示的条目数量,默认值:2000
    * packageId  防护包id
    * policyId  策略id
    * ip  防护ip
    * tag  本地标签
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'packageId' => 'setPackageId',
            'policyId' => 'setPolicyId',
            'ip' => 'setIp',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  开始查询的偏移量,默认值:0
    * limit  每页显示的条目数量,默认值:2000
    * packageId  防护包id
    * policyId  策略id
    * ip  防护ip
    * tag  本地标签
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'packageId' => 'getPackageId',
            'policyId' => 'getPolicyId',
            'ip' => 'getIp',
            'tag' => 'getTag'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['packageId']) && (mb_strlen($this->container['packageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['packageId']) && (mb_strlen($this->container['packageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 32)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 128)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 7)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 255)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 1)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 1.";
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
    * Gets offset
    *  开始查询的偏移量,默认值:0
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
    * @param int|null $offset 开始查询的偏移量,默认值:0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量,默认值:2000
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
    * @param int|null $limit 每页显示的条目数量,默认值:2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets packageId
    *  防护包id
    *
    * @return string|null
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string|null $packageId 防护包id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets policyId
    *  策略id
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets ip
    *  防护ip
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 防护ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets tag
    *  本地标签
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 本地标签
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

