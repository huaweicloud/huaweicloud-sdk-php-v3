<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeInstanceData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeInstanceData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basicBandwidth  保底带宽(G)
    * elasticBandwidth  弹性带宽(G)
    * serviceBandwidth  业务带宽
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidthType  弹性业务带宽,0-关闭，3-月95
    * elasticServiceBandwidth  弹性业务带宽增加值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basicBandwidth' => 'string',
            'elasticBandwidth' => 'string',
            'serviceBandwidth' => 'int',
            'portNum' => 'int',
            'bindDomainNum' => 'int',
            'elasticServiceBandwidthType' => 'int',
            'elasticServiceBandwidth' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basicBandwidth  保底带宽(G)
    * elasticBandwidth  弹性带宽(G)
    * serviceBandwidth  业务带宽
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidthType  弹性业务带宽,0-关闭，3-月95
    * elasticServiceBandwidth  弹性业务带宽增加值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basicBandwidth' => null,
        'elasticBandwidth' => null,
        'serviceBandwidth' => 'int32',
        'portNum' => 'int32',
        'bindDomainNum' => 'int32',
        'elasticServiceBandwidthType' => 'int32',
        'elasticServiceBandwidth' => 'int32'
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
    * basicBandwidth  保底带宽(G)
    * elasticBandwidth  弹性带宽(G)
    * serviceBandwidth  业务带宽
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidthType  弹性业务带宽,0-关闭，3-月95
    * elasticServiceBandwidth  弹性业务带宽增加值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basicBandwidth' => 'basic_bandwidth',
            'elasticBandwidth' => 'elastic_bandwidth',
            'serviceBandwidth' => 'service_bandwidth',
            'portNum' => 'port_num',
            'bindDomainNum' => 'bind_domain_num',
            'elasticServiceBandwidthType' => 'elastic_service_bandwidth_type',
            'elasticServiceBandwidth' => 'elastic_service_bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basicBandwidth  保底带宽(G)
    * elasticBandwidth  弹性带宽(G)
    * serviceBandwidth  业务带宽
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidthType  弹性业务带宽,0-关闭，3-月95
    * elasticServiceBandwidth  弹性业务带宽增加值
    *
    * @var string[]
    */
    protected static $setters = [
            'basicBandwidth' => 'setBasicBandwidth',
            'elasticBandwidth' => 'setElasticBandwidth',
            'serviceBandwidth' => 'setServiceBandwidth',
            'portNum' => 'setPortNum',
            'bindDomainNum' => 'setBindDomainNum',
            'elasticServiceBandwidthType' => 'setElasticServiceBandwidthType',
            'elasticServiceBandwidth' => 'setElasticServiceBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basicBandwidth  保底带宽(G)
    * elasticBandwidth  弹性带宽(G)
    * serviceBandwidth  业务带宽
    * portNum  端口数
    * bindDomainNum  域名数
    * elasticServiceBandwidthType  弹性业务带宽,0-关闭，3-月95
    * elasticServiceBandwidth  弹性业务带宽增加值
    *
    * @var string[]
    */
    protected static $getters = [
            'basicBandwidth' => 'getBasicBandwidth',
            'elasticBandwidth' => 'getElasticBandwidth',
            'serviceBandwidth' => 'getServiceBandwidth',
            'portNum' => 'getPortNum',
            'bindDomainNum' => 'getBindDomainNum',
            'elasticServiceBandwidthType' => 'getElasticServiceBandwidthType',
            'elasticServiceBandwidth' => 'getElasticServiceBandwidth'
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
        $this->container['basicBandwidth'] = isset($data['basicBandwidth']) ? $data['basicBandwidth'] : null;
        $this->container['elasticBandwidth'] = isset($data['elasticBandwidth']) ? $data['elasticBandwidth'] : null;
        $this->container['serviceBandwidth'] = isset($data['serviceBandwidth']) ? $data['serviceBandwidth'] : null;
        $this->container['portNum'] = isset($data['portNum']) ? $data['portNum'] : null;
        $this->container['bindDomainNum'] = isset($data['bindDomainNum']) ? $data['bindDomainNum'] : null;
        $this->container['elasticServiceBandwidthType'] = isset($data['elasticServiceBandwidthType']) ? $data['elasticServiceBandwidthType'] : null;
        $this->container['elasticServiceBandwidth'] = isset($data['elasticServiceBandwidth']) ? $data['elasticServiceBandwidth'] : null;
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
    * Gets basicBandwidth
    *  保底带宽(G)
    *
    * @return string|null
    */
    public function getBasicBandwidth()
    {
        return $this->container['basicBandwidth'];
    }

    /**
    * Sets basicBandwidth
    *
    * @param string|null $basicBandwidth 保底带宽(G)
    *
    * @return $this
    */
    public function setBasicBandwidth($basicBandwidth)
    {
        $this->container['basicBandwidth'] = $basicBandwidth;
        return $this;
    }

    /**
    * Gets elasticBandwidth
    *  弹性带宽(G)
    *
    * @return string|null
    */
    public function getElasticBandwidth()
    {
        return $this->container['elasticBandwidth'];
    }

    /**
    * Sets elasticBandwidth
    *
    * @param string|null $elasticBandwidth 弹性带宽(G)
    *
    * @return $this
    */
    public function setElasticBandwidth($elasticBandwidth)
    {
        $this->container['elasticBandwidth'] = $elasticBandwidth;
        return $this;
    }

    /**
    * Gets serviceBandwidth
    *  业务带宽
    *
    * @return int|null
    */
    public function getServiceBandwidth()
    {
        return $this->container['serviceBandwidth'];
    }

    /**
    * Sets serviceBandwidth
    *
    * @param int|null $serviceBandwidth 业务带宽
    *
    * @return $this
    */
    public function setServiceBandwidth($serviceBandwidth)
    {
        $this->container['serviceBandwidth'] = $serviceBandwidth;
        return $this;
    }

    /**
    * Gets portNum
    *  端口数
    *
    * @return int|null
    */
    public function getPortNum()
    {
        return $this->container['portNum'];
    }

    /**
    * Sets portNum
    *
    * @param int|null $portNum 端口数
    *
    * @return $this
    */
    public function setPortNum($portNum)
    {
        $this->container['portNum'] = $portNum;
        return $this;
    }

    /**
    * Gets bindDomainNum
    *  域名数
    *
    * @return int|null
    */
    public function getBindDomainNum()
    {
        return $this->container['bindDomainNum'];
    }

    /**
    * Sets bindDomainNum
    *
    * @param int|null $bindDomainNum 域名数
    *
    * @return $this
    */
    public function setBindDomainNum($bindDomainNum)
    {
        $this->container['bindDomainNum'] = $bindDomainNum;
        return $this;
    }

    /**
    * Gets elasticServiceBandwidthType
    *  弹性业务带宽,0-关闭，3-月95
    *
    * @return int|null
    */
    public function getElasticServiceBandwidthType()
    {
        return $this->container['elasticServiceBandwidthType'];
    }

    /**
    * Sets elasticServiceBandwidthType
    *
    * @param int|null $elasticServiceBandwidthType 弹性业务带宽,0-关闭，3-月95
    *
    * @return $this
    */
    public function setElasticServiceBandwidthType($elasticServiceBandwidthType)
    {
        $this->container['elasticServiceBandwidthType'] = $elasticServiceBandwidthType;
        return $this;
    }

    /**
    * Gets elasticServiceBandwidth
    *  弹性业务带宽增加值
    *
    * @return int|null
    */
    public function getElasticServiceBandwidth()
    {
        return $this->container['elasticServiceBandwidth'];
    }

    /**
    * Sets elasticServiceBandwidth
    *
    * @param int|null $elasticServiceBandwidth 弹性业务带宽增加值
    *
    * @return $this
    */
    public function setElasticServiceBandwidth($elasticServiceBandwidth)
    {
        $this->container['elasticServiceBandwidth'] = $elasticServiceBandwidth;
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

