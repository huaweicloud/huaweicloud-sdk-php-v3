<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EIPSwitchStatusVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EIPSwitchStatusVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * failEipIdList  修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    * failEipList  修改eip防护状态失败信息列表
    * id  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'failEipIdList' => 'string[]',
            'failEipList' => '\HuaweiCloud\SDK\Cfw\V1\Model\FailedEipInfo[]',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * failEipIdList  修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    * failEipList  修改eip防护状态失败信息列表
    * id  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'failEipIdList' => null,
        'failEipList' => null,
        'id' => null
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
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * failEipIdList  修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    * failEipList  修改eip防护状态失败信息列表
    * id  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'failEipIdList' => 'fail_eip_id_list',
            'failEipList' => 'fail_eip_list',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * failEipIdList  修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    * failEipList  修改eip防护状态失败信息列表
    * id  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'failEipIdList' => 'setFailEipIdList',
            'failEipList' => 'setFailEipList',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * failEipIdList  修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    * failEipList  修改eip防护状态失败信息列表
    * id  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'failEipIdList' => 'getFailEipIdList',
            'failEipList' => 'getFailEipList',
            'id' => 'getId'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['failEipIdList'] = isset($data['failEipIdList']) ? $data['failEipIdList'] : null;
        $this->container['failEipList'] = isset($data['failEipList']) ? $data['failEipList'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets failEipIdList
    *  修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    *
    * @return string[]|null
    */
    public function getFailEipIdList()
    {
        return $this->container['failEipIdList'];
    }

    /**
    * Sets failEipIdList
    *
    * @param string[]|null $failEipIdList 修改eip防护状态失败状态列表，状态包括成功\"successful\"，失败“fail”
    *
    * @return $this
    */
    public function setFailEipIdList($failEipIdList)
    {
        $this->container['failEipIdList'] = $failEipIdList;
        return $this;
    }

    /**
    * Gets failEipList
    *  修改eip防护状态失败信息列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\FailedEipInfo[]|null
    */
    public function getFailEipList()
    {
        return $this->container['failEipList'];
    }

    /**
    * Sets failEipList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\FailedEipInfo[]|null $failEipList 修改eip防护状态失败信息列表
    *
    * @return $this
    */
    public function setFailEipList($failEipList)
    {
        $this->container['failEipList'] = $failEipList;
        return $this;
    }

    /**
    * Gets id
    *  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
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
    * @param string|null $id 防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

