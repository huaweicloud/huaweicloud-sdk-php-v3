<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceType  集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    * instanceNum  节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    * flavor  节点规格，doris集群、clickhouse集群必选
    * volumeType  数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    * volumeSize  数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    * flavorType  节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceType' => 'string',
            'instanceNum' => 'int',
            'flavor' => 'string',
            'volumeType' => 'string',
            'volumeSize' => 'int',
            'flavorType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceType  集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    * instanceNum  节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    * flavor  节点规格，doris集群、clickhouse集群必选
    * volumeType  数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    * volumeSize  数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    * flavorType  节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceType' => null,
        'instanceNum' => 'int32',
        'flavor' => null,
        'volumeType' => null,
        'volumeSize' => 'int32',
        'flavorType' => null
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
    * instanceType  集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    * instanceNum  节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    * flavor  节点规格，doris集群、clickhouse集群必选
    * volumeType  数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    * volumeSize  数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    * flavorType  节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceType' => 'instance_type',
            'instanceNum' => 'instance_num',
            'flavor' => 'flavor',
            'volumeType' => 'volume_type',
            'volumeSize' => 'volume_size',
            'flavorType' => 'flavor_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceType  集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    * instanceNum  节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    * flavor  节点规格，doris集群、clickhouse集群必选
    * volumeType  数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    * volumeSize  数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    * flavorType  节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceType' => 'setInstanceType',
            'instanceNum' => 'setInstanceNum',
            'flavor' => 'setFlavor',
            'volumeType' => 'setVolumeType',
            'volumeSize' => 'setVolumeSize',
            'flavorType' => 'setFlavorType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceType  集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    * instanceNum  节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    * flavor  节点规格，doris集群、clickhouse集群必选
    * volumeType  数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    * volumeSize  数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    * flavorType  节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceType' => 'getInstanceType',
            'instanceNum' => 'getInstanceNum',
            'flavor' => 'getFlavor',
            'volumeType' => 'getVolumeType',
            'volumeSize' => 'getVolumeSize',
            'flavorType' => 'getFlavorType'
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
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
        if ($this->container['instanceNum'] === null) {
            $invalidProperties[] = "'instanceNum' can't be null";
        }
            if (($this->container['instanceNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be bigger than or equal to 1.";
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
    * Gets instanceType
    *  集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 集群节点类型，hbase有regionserver，hmaster，opentsdb等，doris有be，fe节点，clickhouse有server（计算节点），zookeeper
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceNum
    *  节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    *
    * @return int
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int $instanceNum 节点个数，hbase取值：2<=num<=10],偶数 doris取值：be[3,100] fe只能是3或5， clickhouse取值：计算节点[2,10000],取偶数，zookeeper节点固定为3
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets flavor
    *  节点规格，doris集群、clickhouse集群必选
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 节点规格，doris集群、clickhouse集群必选
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets volumeType
    *  数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 数据盘规格：COMMON、HIGH、ULTRAHIGH，NORMALHIGH, EXTREMEHIGH. doris集群、clickhouse集群必选
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets volumeSize
    *  数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 数据盘大小，doris集群、clickhouse集群必选。 fe[200,2000] be[400,10000] server[500,10000] zookeeper[200,1000]
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets flavorType
    *  节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType 节点入参类型 0：flavor模式 ，1：cu模式，doris、hbase、clickhouse都是flavor模式
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
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

