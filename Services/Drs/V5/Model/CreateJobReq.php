<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * publicIpList  指定公网IP的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'periodOrder' => '\HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo',
            'nodeInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo',
            'publicIpList' => '\HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * publicIpList  指定公网IP的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseInfo' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'periodOrder' => null,
        'nodeInfo' => null,
        'publicIpList' => null
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
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * publicIpList  指定公网IP的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseInfo' => 'base_info',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'periodOrder' => 'period_order',
            'nodeInfo' => 'node_info',
            'publicIpList' => 'public_ip_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * publicIpList  指定公网IP的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'baseInfo' => 'setBaseInfo',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'periodOrder' => 'setPeriodOrder',
            'nodeInfo' => 'setNodeInfo',
            'publicIpList' => 'setPublicIpList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseInfo  baseInfo
    * sourceEndpoint  创建任务数据库信息体。
    * targetEndpoint  创建任务数据库信息体。
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * publicIpList  指定公网IP的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'baseInfo' => 'getBaseInfo',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'periodOrder' => 'getPeriodOrder',
            'nodeInfo' => 'getNodeInfo',
            'publicIpList' => 'getPublicIpList'
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
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['periodOrder'] = isset($data['periodOrder']) ? $data['periodOrder'] : null;
        $this->container['nodeInfo'] = isset($data['nodeInfo']) ? $data['nodeInfo'] : null;
        $this->container['publicIpList'] = isset($data['publicIpList']) ? $data['publicIpList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['baseInfo'] === null) {
            $invalidProperties[] = "'baseInfo' can't be null";
        }
        if ($this->container['sourceEndpoint'] === null) {
            $invalidProperties[] = "'sourceEndpoint' can't be null";
        }
        if ($this->container['targetEndpoint'] === null) {
            $invalidProperties[] = "'targetEndpoint' can't be null";
        }
        if ($this->container['nodeInfo'] === null) {
            $invalidProperties[] = "'nodeInfo' can't be null";
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
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  创建任务数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[] $sourceEndpoint 创建任务数据库信息体。
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  创建任务数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[] $targetEndpoint 创建任务数据库信息体。
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets periodOrder
    *  periodOrder
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null
    */
    public function getPeriodOrder()
    {
        return $this->container['periodOrder'];
    }

    /**
    * Sets periodOrder
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null $periodOrder periodOrder
    *
    * @return $this
    */
    public function setPeriodOrder($periodOrder)
    {
        $this->container['periodOrder'] = $periodOrder;
        return $this;
    }

    /**
    * Gets nodeInfo
    *  nodeInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo
    */
    public function getNodeInfo()
    {
        return $this->container['nodeInfo'];
    }

    /**
    * Sets nodeInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo $nodeInfo nodeInfo
    *
    * @return $this
    */
    public function setNodeInfo($nodeInfo)
    {
        $this->container['nodeInfo'] = $nodeInfo;
        return $this;
    }

    /**
    * Gets publicIpList
    *  指定公网IP的信息
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig[]|null
    */
    public function getPublicIpList()
    {
        return $this->container['publicIpList'];
    }

    /**
    * Sets publicIpList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig[]|null $publicIpList 指定公网IP的信息
    *
    * @return $this
    */
    public function setPublicIpList($publicIpList)
    {
        $this->container['publicIpList'] = $publicIpList;
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

