<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateQueueCidrRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateQueueCidrRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cidrInVpc  队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cidrInVpc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cidrInVpc  队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cidrInVpc' => null
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
    * cidrInVpc  队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cidrInVpc' => 'cidr_in_vpc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cidrInVpc  队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @var string[]
    */
    protected static $setters = [
            'cidrInVpc' => 'setCidrInVpc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cidrInVpc  队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @var string[]
    */
    protected static $getters = [
            'cidrInVpc' => 'getCidrInVpc'
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
        $this->container['cidrInVpc'] = isset($data['cidrInVpc']) ? $data['cidrInVpc'] : null;
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
    * Gets cidrInVpc
    *  队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @return string|null
    */
    public function getCidrInVpc()
    {
        return $this->container['cidrInVpc'];
    }

    /**
    * Sets cidrInVpc
    *
    * @param string|null $cidrInVpc 队列虚拟私有云网段。  不同CU规格队列支持的网段范围：  - 4cu:  10.0.0.0/8 ~ 10.255.255.192/26  172.16.0.0/12 ~ 172.31.255.192/26  192.168.0.0/16 ~ 192.168.255.192/26  - 16cu:  10.0.0.0/8 ~ 10.255.255.0/24  172.16.0.0/12 ~ 172.31.255.0/24  192.168.0.0/16 ~ 192.168.255.0/24  - 64cu:  10.0.0.0/8 ~ 10.255.252.0/22  172.16.0.0/12 ~ 172.31.252.0/22  192.168.0.0/16 ~ 192.168.252.0/22  - 128cu:  10.0.0.0/8 ~ 10.255.252.0/21  172.16.0.0/12 ~ 172.31.252.0/21  192.168.0.0/16 ~ 192.168.252.0/21
    *
    * @return $this
    */
    public function setCidrInVpc($cidrInVpc)
    {
        $this->container['cidrInVpc'] = $cidrInVpc;
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

