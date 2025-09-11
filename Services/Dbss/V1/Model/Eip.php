<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Eip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EIP';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidth  bandwidth
    * ipproductid  IP产品ID
    * iptype  EIP类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidth' => '\HuaweiCloud\SDK\Dbss\V1\Model\BandWidth',
            'ipproductid' => 'string',
            'iptype' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidth  bandwidth
    * ipproductid  IP产品ID
    * iptype  EIP类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidth' => null,
        'ipproductid' => null,
        'iptype' => null
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
    * bandwidth  bandwidth
    * ipproductid  IP产品ID
    * iptype  EIP类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidth' => 'bandwidth',
            'ipproductid' => 'ipproductid',
            'iptype' => 'iptype'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidth  bandwidth
    * ipproductid  IP产品ID
    * iptype  EIP类型
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidth' => 'setBandwidth',
            'ipproductid' => 'setIpproductid',
            'iptype' => 'setIptype'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidth  bandwidth
    * ipproductid  IP产品ID
    * iptype  EIP类型
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidth' => 'getBandwidth',
            'ipproductid' => 'getIpproductid',
            'iptype' => 'getIptype'
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
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['ipproductid'] = isset($data['ipproductid']) ? $data['ipproductid'] : null;
        $this->container['iptype'] = isset($data['iptype']) ? $data['iptype'] : null;
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
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\BandWidth|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\BandWidth|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets ipproductid
    *  IP产品ID
    *
    * @return string|null
    */
    public function getIpproductid()
    {
        return $this->container['ipproductid'];
    }

    /**
    * Sets ipproductid
    *
    * @param string|null $ipproductid IP产品ID
    *
    * @return $this
    */
    public function setIpproductid($ipproductid)
    {
        $this->container['ipproductid'] = $ipproductid;
        return $this;
    }

    /**
    * Gets iptype
    *  EIP类型
    *
    * @return string|null
    */
    public function getIptype()
    {
        return $this->container['iptype'];
    }

    /**
    * Sets iptype
    *
    * @param string|null $iptype EIP类型
    *
    * @return $this
    */
    public function setIptype($iptype)
    {
        $this->container['iptype'] = $iptype;
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

