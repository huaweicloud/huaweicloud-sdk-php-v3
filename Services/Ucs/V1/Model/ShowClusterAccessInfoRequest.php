<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterAccessInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterAccessInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterid  集群ID
    * vpcendpoint  VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    * region  接入region，私网接入的集群必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterid' => 'string',
            'vpcendpoint' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterid  集群ID
    * vpcendpoint  VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    * region  接入region，私网接入的集群必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterid' => null,
        'vpcendpoint' => null,
        'region' => null
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
    * clusterid  集群ID
    * vpcendpoint  VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    * region  接入region，私网接入的集群必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterid' => 'clusterid',
            'vpcendpoint' => 'vpcendpoint',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterid  集群ID
    * vpcendpoint  VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    * region  接入region，私网接入的集群必填
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterid' => 'setClusterid',
            'vpcendpoint' => 'setVpcendpoint',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterid  集群ID
    * vpcendpoint  VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    * region  接入region，私网接入的集群必填
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterid' => 'getClusterid',
            'vpcendpoint' => 'getVpcendpoint',
            'region' => 'getRegion'
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
        $this->container['clusterid'] = isset($data['clusterid']) ? $data['clusterid'] : null;
        $this->container['vpcendpoint'] = isset($data['vpcendpoint']) ? $data['vpcendpoint'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterid'] === null) {
            $invalidProperties[] = "'clusterid' can't be null";
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
    * Gets clusterid
    *  集群ID
    *
    * @return string
    */
    public function getClusterid()
    {
        return $this->container['clusterid'];
    }

    /**
    * Sets clusterid
    *
    * @param string $clusterid 集群ID
    *
    * @return $this
    */
    public function setClusterid($clusterid)
    {
        $this->container['clusterid'] = $clusterid;
        return $this;
    }

    /**
    * Gets vpcendpoint
    *  VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    *
    * @return string|null
    */
    public function getVpcendpoint()
    {
        return $this->container['vpcendpoint'];
    }

    /**
    * Sets vpcendpoint
    *
    * @param string|null $vpcendpoint VPC终端节点的IP地址。私网接入的集群必填，且必须是打通线下集群的VPC终端节点。  创建VPC终端节点及查询IP地址的方法请参见[创建终端节点](https://support.huaweicloud.com/usermanual-ucs/ucs_01_0336.html#section2)。
    *
    * @return $this
    */
    public function setVpcendpoint($vpcendpoint)
    {
        $this->container['vpcendpoint'] = $vpcendpoint;
        return $this;
    }

    /**
    * Gets region
    *  接入region，私网接入的集群必填
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 接入region，私网接入的集群必填
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

