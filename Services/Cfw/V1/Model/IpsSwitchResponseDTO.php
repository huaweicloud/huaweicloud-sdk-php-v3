<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsSwitchResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsSwitchResponseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
    * basicDefenseStatus  基础防御状态，0表示关闭，1表示开启
    * virtualPatchesStatus  虚拟补丁状态，0表示关闭，1表示开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'basicDefenseStatus' => 'int',
            'virtualPatchesStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
    * basicDefenseStatus  基础防御状态，0表示关闭，1表示开启
    * virtualPatchesStatus  虚拟补丁状态，0表示关闭，1表示开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'basicDefenseStatus' => null,
        'virtualPatchesStatus' => null
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
    * id  ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
    * basicDefenseStatus  基础防御状态，0表示关闭，1表示开启
    * virtualPatchesStatus  虚拟补丁状态，0表示关闭，1表示开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'basicDefenseStatus' => 'basic_defense_status',
            'virtualPatchesStatus' => 'virtual_patches_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
    * basicDefenseStatus  基础防御状态，0表示关闭，1表示开启
    * virtualPatchesStatus  虚拟补丁状态，0表示关闭，1表示开启
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'basicDefenseStatus' => 'setBasicDefenseStatus',
            'virtualPatchesStatus' => 'setVirtualPatchesStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
    * basicDefenseStatus  基础防御状态，0表示关闭，1表示开启
    * virtualPatchesStatus  虚拟补丁状态，0表示关闭，1表示开启
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'basicDefenseStatus' => 'getBasicDefenseStatus',
            'virtualPatchesStatus' => 'getVirtualPatchesStatus'
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
        $this->container['basicDefenseStatus'] = isset($data['basicDefenseStatus']) ? $data['basicDefenseStatus'] : null;
        $this->container['virtualPatchesStatus'] = isset($data['virtualPatchesStatus']) ? $data['virtualPatchesStatus'] : null;
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
    *  ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
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
    * @param string|null $id ips开关id，此处为互联网边界防护对象id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets basicDefenseStatus
    *  基础防御状态，0表示关闭，1表示开启
    *
    * @return int|null
    */
    public function getBasicDefenseStatus()
    {
        return $this->container['basicDefenseStatus'];
    }

    /**
    * Sets basicDefenseStatus
    *
    * @param int|null $basicDefenseStatus 基础防御状态，0表示关闭，1表示开启
    *
    * @return $this
    */
    public function setBasicDefenseStatus($basicDefenseStatus)
    {
        $this->container['basicDefenseStatus'] = $basicDefenseStatus;
        return $this;
    }

    /**
    * Gets virtualPatchesStatus
    *  虚拟补丁状态，0表示关闭，1表示开启
    *
    * @return int|null
    */
    public function getVirtualPatchesStatus()
    {
        return $this->container['virtualPatchesStatus'];
    }

    /**
    * Sets virtualPatchesStatus
    *
    * @param int|null $virtualPatchesStatus 虚拟补丁状态，0表示关闭，1表示开启
    *
    * @return $this
    */
    public function setVirtualPatchesStatus($virtualPatchesStatus)
    {
        $this->container['virtualPatchesStatus'] = $virtualPatchesStatus;
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

