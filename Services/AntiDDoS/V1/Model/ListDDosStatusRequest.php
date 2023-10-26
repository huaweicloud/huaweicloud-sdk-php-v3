<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDDosStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDDosStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
    * limit  返回结果个数限制，取值范围：1~100
    * offset  偏移量，取值范围：0~2147483647
    * ip  IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'ip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
    * limit  返回结果个数限制，取值范围：1~100
    * offset  偏移量，取值范围：0~2147483647
    * ip  IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'limit' => null,
        'offset' => null,
        'ip' => null
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
    * status  可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
    * limit  返回结果个数限制，取值范围：1~100
    * offset  偏移量，取值范围：0~2147483647
    * ip  IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'limit' => 'limit',
            'offset' => 'offset',
            'ip' => 'ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
    * limit  返回结果个数限制，取值范围：1~100
    * offset  偏移量，取值范围：0~2147483647
    * ip  IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'ip' => 'setIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
    * limit  返回结果个数限制，取值范围：1~100
    * offset  偏移量，取值范围：0~2147483647
    * ip  IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'ip' => 'getIp'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
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
    * Gets status
    *  可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
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
    * @param string|null $status 可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞  不带此参数默认所有列表，以neutron查询到的顺序为准。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  返回结果个数限制，取值范围：1~100
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 返回结果个数限制，取值范围：1~100
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
    *  偏移量，取值范围：0~2147483647
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 偏移量，取值范围：0~2147483647
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets ip
    *  IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
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
    * @param string|null $ip IP地址，支持IPv4格式和IPv6格式输入，支持部分查询。例如“？ip=192.168”，会返回192.168.111.1和10.192.168.8所对应的EIP防护状态。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
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

