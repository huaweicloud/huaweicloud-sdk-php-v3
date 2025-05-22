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
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * manageIp  **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
    * trafficIp  **参数解释**： 业务IP。 **取值范围**： 不涉及。
    * internalIp  **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
    * internalMgntIp  **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
    * eip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * elb  **参数解释**： elb地址。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： 不涉及。
    * azCode  **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * manageIp  **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
    * trafficIp  **参数解释**： 业务IP。 **取值范围**： 不涉及。
    * internalIp  **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
    * internalMgntIp  **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
    * eip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * elb  **参数解释**： elb地址。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： 不涉及。
    * azCode  **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * manageIp  **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
    * trafficIp  **参数解释**： 业务IP。 **取值范围**： 不涉及。
    * internalIp  **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
    * internalMgntIp  **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
    * eip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * elb  **参数解释**： elb地址。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： 不涉及。
    * azCode  **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * manageIp  **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
    * trafficIp  **参数解释**： 业务IP。 **取值范围**： 不涉及。
    * internalIp  **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
    * internalMgntIp  **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
    * eip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * elb  **参数解释**： elb地址。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： 不涉及。
    * azCode  **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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
    * id  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * manageIp  **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
    * trafficIp  **参数解释**： 业务IP。 **取值范围**： 不涉及。
    * internalIp  **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
    * internalMgntIp  **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
    * eip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * elb  **参数解释**： elb地址。 **取值范围**： 不涉及。
    * status  **参数解释**： 实例状态。 **取值范围**： 不涉及。
    * azCode  **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 实例名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
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
    * @param string|null $manageIp **参数解释**： 实例管理IP。 **取值范围**： 不涉及。
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
    *  **参数解释**： 业务IP。 **取值范围**： 不涉及。
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
    * @param string|null $trafficIp **参数解释**： 业务IP。 **取值范围**： 不涉及。
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
    *  **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
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
    * @param string|null $internalIp **参数解释**： 内部通信IP。 **取值范围**： 不涉及。
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
    *  **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
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
    * @param string|null $internalMgntIp **参数解释**： 内部管理IP。 **取值范围**： 不涉及。
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
    *  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
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
    * @param string|null $eip **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
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
    *  **参数解释**： elb地址。 **取值范围**： 不涉及。
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
    * @param string|null $elb **参数解释**： elb地址。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 实例状态。 **取值范围**： 不涉及。
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
    *  **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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
    * @param string|null $azCode **参数解释**： 可用区编码。 **取值范围**： 不涉及。
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

