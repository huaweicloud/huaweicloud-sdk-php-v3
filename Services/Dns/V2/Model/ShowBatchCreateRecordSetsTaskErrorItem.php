<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBatchCreateRecordSetsTaskErrorItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBatchCreateRecordSetsTaskErrorItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    * errorCode  **参数解释：** 错误码。 **取值范围：** 不涉及。
    * errorMessage  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'line' => 'string',
            'ttl' => 'int',
            'weight' => 'int',
            'records' => 'string[]',
            'status' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    * errorCode  **参数解释：** 错误码。 **取值范围：** 不涉及。
    * errorMessage  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'line' => null,
        'ttl' => 'int32',
        'weight' => 'int32',
        'records' => null,
        'status' => null,
        'errorCode' => null,
        'errorMessage' => null
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
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    * errorCode  **参数解释：** 错误码。 **取值范围：** 不涉及。
    * errorMessage  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'line' => 'line',
            'ttl' => 'ttl',
            'weight' => 'weight',
            'records' => 'records',
            'status' => 'status',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    * errorCode  **参数解释：** 错误码。 **取值范围：** 不涉及。
    * errorMessage  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'line' => 'setLine',
            'ttl' => 'setTtl',
            'weight' => 'setWeight',
            'records' => 'setRecords',
            'status' => 'setStatus',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 域名。 **取值范围：** 不涉及。
    * type  **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    * line  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    * ttl  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    * weight  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    * records  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    * status  **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    * errorCode  **参数解释：** 错误码。 **取值范围：** 不涉及。
    * errorMessage  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'line' => 'getLine',
            'ttl' => 'getTtl',
            'weight' => 'getWeight',
            'records' => 'getRecords',
            'status' => 'getStatus',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  **参数解释：** 域名。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 域名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 记录集的类型。 **取值范围：** - 公网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、NS、CAA、REDIRECT_URL、FORWARD_URL。 - 内网域名的记录类型: A、CNAME、MX、AAAA、TXT、SRV、PTR。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line **参数解释：** 解析线路ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl **参数解释：** 解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。 **取值范围：** 1~2147483647。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight **参数解释：** 解析记录的权重。 **取值范围：** 0~1000。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[]|null $records **参数解释：** 域名解析后的值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 记录集状态。 **取值范围：** - ERROR：失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释：** 错误码。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode **参数解释：** 错误码。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

