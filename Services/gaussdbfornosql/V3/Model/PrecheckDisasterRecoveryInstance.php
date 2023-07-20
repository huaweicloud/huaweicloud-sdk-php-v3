<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrecheckDisasterRecoveryInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrecheckDisasterRecoveryInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcCidr  与当前实例建立容灾关系实例的vpc网段。
    * specCode  与当前实例建立容灾关系实例的规格码。
    * nodeIps  与当前实例建立容灾关系实例的节点IP列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcCidr' => 'string',
            'specCode' => 'string',
            'nodeIps' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcCidr  与当前实例建立容灾关系实例的vpc网段。
    * specCode  与当前实例建立容灾关系实例的规格码。
    * nodeIps  与当前实例建立容灾关系实例的节点IP列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcCidr' => null,
        'specCode' => null,
        'nodeIps' => null
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
    * vpcCidr  与当前实例建立容灾关系实例的vpc网段。
    * specCode  与当前实例建立容灾关系实例的规格码。
    * nodeIps  与当前实例建立容灾关系实例的节点IP列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcCidr' => 'vpc_cidr',
            'specCode' => 'spec_code',
            'nodeIps' => 'node_ips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcCidr  与当前实例建立容灾关系实例的vpc网段。
    * specCode  与当前实例建立容灾关系实例的规格码。
    * nodeIps  与当前实例建立容灾关系实例的节点IP列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcCidr' => 'setVpcCidr',
            'specCode' => 'setSpecCode',
            'nodeIps' => 'setNodeIps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcCidr  与当前实例建立容灾关系实例的vpc网段。
    * specCode  与当前实例建立容灾关系实例的规格码。
    * nodeIps  与当前实例建立容灾关系实例的节点IP列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcCidr' => 'getVpcCidr',
            'specCode' => 'getSpecCode',
            'nodeIps' => 'getNodeIps'
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
        $this->container['vpcCidr'] = isset($data['vpcCidr']) ? $data['vpcCidr'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['nodeIps'] = isset($data['nodeIps']) ? $data['nodeIps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcCidr'] === null) {
            $invalidProperties[] = "'vpcCidr' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['nodeIps'] === null) {
            $invalidProperties[] = "'nodeIps' can't be null";
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
    * Gets vpcCidr
    *  与当前实例建立容灾关系实例的vpc网段。
    *
    * @return string
    */
    public function getVpcCidr()
    {
        return $this->container['vpcCidr'];
    }

    /**
    * Sets vpcCidr
    *
    * @param string $vpcCidr 与当前实例建立容灾关系实例的vpc网段。
    *
    * @return $this
    */
    public function setVpcCidr($vpcCidr)
    {
        $this->container['vpcCidr'] = $vpcCidr;
        return $this;
    }

    /**
    * Gets specCode
    *  与当前实例建立容灾关系实例的规格码。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 与当前实例建立容灾关系实例的规格码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets nodeIps
    *  与当前实例建立容灾关系实例的节点IP列表。
    *
    * @return string[]
    */
    public function getNodeIps()
    {
        return $this->container['nodeIps'];
    }

    /**
    * Sets nodeIps
    *
    * @param string[] $nodeIps 与当前实例建立容灾关系实例的节点IP列表。
    *
    * @return $this
    */
    public function setNodeIps($nodeIps)
    {
        $this->container['nodeIps'] = $nodeIps;
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

