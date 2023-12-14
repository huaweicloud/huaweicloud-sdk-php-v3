<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopoInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopoInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * manageIp  实例管理IP
    * trafficIp  业务IP
    * internalIp  内部通信IP
    * internalMgntIp  内部管理IP
    * eip  EIP
    * elb  elb地址
    * status  实例状态
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'manageIp' => 'string',
            'trafficIp' => 'string',
            'internalIp' => 'string',
            'internalMgntIp' => 'string',
            'eip' => 'string',
            'elb' => 'string',
            'status' => 'string',
            'azCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * manageIp  实例管理IP
    * trafficIp  业务IP
    * internalIp  内部通信IP
    * internalMgntIp  内部管理IP
    * eip  EIP
    * elb  elb地址
    * status  实例状态
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'manageIp' => null,
        'trafficIp' => null,
        'internalIp' => null,
        'internalMgntIp' => null,
        'eip' => null,
        'elb' => null,
        'status' => null,
        'azCode' => null
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
    * id  实例ID
    * name  实例名称
    * manageIp  实例管理IP
    * trafficIp  业务IP
    * internalIp  内部通信IP
    * internalMgntIp  内部管理IP
    * eip  EIP
    * elb  elb地址
    * status  实例状态
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'manageIp' => 'manage_ip',
            'trafficIp' => 'traffic_ip',
            'internalIp' => 'internal_ip',
            'internalMgntIp' => 'internal_mgnt_ip',
            'eip' => 'eip',
            'elb' => 'elb',
            'status' => 'status',
            'azCode' => 'az_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID
    * name  实例名称
    * manageIp  实例管理IP
    * trafficIp  业务IP
    * internalIp  内部通信IP
    * internalMgntIp  内部管理IP
    * eip  EIP
    * elb  elb地址
    * status  实例状态
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'manageIp' => 'setManageIp',
            'trafficIp' => 'setTrafficIp',
            'internalIp' => 'setInternalIp',
            'internalMgntIp' => 'setInternalMgntIp',
            'eip' => 'setEip',
            'elb' => 'setElb',
            'status' => 'setStatus',
            'azCode' => 'setAzCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID
    * name  实例名称
    * manageIp  实例管理IP
    * trafficIp  业务IP
    * internalIp  内部通信IP
    * internalMgntIp  内部管理IP
    * eip  EIP
    * elb  elb地址
    * status  实例状态
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'manageIp' => 'getManageIp',
            'trafficIp' => 'getTrafficIp',
            'internalIp' => 'getInternalIp',
            'internalMgntIp' => 'getInternalMgntIp',
            'eip' => 'getEip',
            'elb' => 'getElb',
            'status' => 'getStatus',
            'azCode' => 'getAzCode'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['manageIp'] = isset($data['manageIp']) ? $data['manageIp'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
        $this->container['internalIp'] = isset($data['internalIp']) ? $data['internalIp'] : null;
        $this->container['internalMgntIp'] = isset($data['internalMgntIp']) ? $data['internalMgntIp'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['elb'] = isset($data['elb']) ? $data['elb'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
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
    * Gets id
    *  实例ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
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
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets manageIp
    *  实例管理IP
    *
    * @return string|null
    */
    public function getManageIp()
    {
        return $this->container['manageIp'];
    }

    /**
    * Sets manageIp
    *
    * @param string|null $manageIp 实例管理IP
    *
    * @return $this
    */
    public function setManageIp($manageIp)
    {
        $this->container['manageIp'] = $manageIp;
        return $this;
    }

    /**
    * Gets trafficIp
    *  业务IP
    *
    * @return string|null
    */
    public function getTrafficIp()
    {
        return $this->container['trafficIp'];
    }

    /**
    * Sets trafficIp
    *
    * @param string|null $trafficIp 业务IP
    *
    * @return $this
    */
    public function setTrafficIp($trafficIp)
    {
        $this->container['trafficIp'] = $trafficIp;
        return $this;
    }

    /**
    * Gets internalIp
    *  内部通信IP
    *
    * @return string|null
    */
    public function getInternalIp()
    {
        return $this->container['internalIp'];
    }

    /**
    * Sets internalIp
    *
    * @param string|null $internalIp 内部通信IP
    *
    * @return $this
    */
    public function setInternalIp($internalIp)
    {
        $this->container['internalIp'] = $internalIp;
        return $this;
    }

    /**
    * Gets internalMgntIp
    *  内部管理IP
    *
    * @return string|null
    */
    public function getInternalMgntIp()
    {
        return $this->container['internalMgntIp'];
    }

    /**
    * Sets internalMgntIp
    *
    * @param string|null $internalMgntIp 内部管理IP
    *
    * @return $this
    */
    public function setInternalMgntIp($internalMgntIp)
    {
        $this->container['internalMgntIp'] = $internalMgntIp;
        return $this;
    }

    /**
    * Gets eip
    *  EIP
    *
    * @return string|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param string|null $eip EIP
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets elb
    *  elb地址
    *
    * @return string|null
    */
    public function getElb()
    {
        return $this->container['elb'];
    }

    /**
    * Sets elb
    *
    * @param string|null $elb elb地址
    *
    * @return $this
    */
    public function setElb($elb)
    {
        $this->container['elb'] = $elb;
        return $this;
    }

    /**
    * Gets status
    *  实例状态
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
    * @param string|null $status 实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区编码
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区编码
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
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

