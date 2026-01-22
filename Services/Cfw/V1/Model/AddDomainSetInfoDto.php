<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDomainSetInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDomainSetInfoDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainNames  **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceId' => 'string',
            'objectId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainNames' => '\HuaweiCloud\SDK\Cfw\V1\Model\DomainSetInfoDto[]',
            'domainSetType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainNames  **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceId' => null,
        'objectId' => null,
        'name' => null,
        'description' => null,
        'domainNames' => null,
        'domainSetType' => 'int32'
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
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainNames  **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceId' => 'fw_instance_id',
            'objectId' => 'object_id',
            'name' => 'name',
            'description' => 'description',
            'domainNames' => 'domain_names',
            'domainSetType' => 'domain_set_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainNames  **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceId' => 'setFwInstanceId',
            'objectId' => 'setObjectId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainNames' => 'setDomainNames',
            'domainSetType' => 'setDomainSetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * objectId  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainNames  **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetType  **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceId' => 'getFwInstanceId',
            'objectId' => 'getObjectId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainNames' => 'getDomainNames',
            'domainSetType' => 'getDomainSetType'
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
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainNames'] = isset($data['domainNames']) ? $data['domainNames'] : null;
        $this->container['domainSetType'] = isset($data['domainSetType']) ? $data['domainSetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['domainNames'] === null) {
            $invalidProperties[] = "'domainNames' can't be null";
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
    * Gets fwInstanceId
    *  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets objectId
    *  **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId **参数解释**： 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得 **约束限制**： type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 域名组描述 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainNames
    *  **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\DomainSetInfoDto[]
    */
    public function getDomainNames()
    {
        return $this->container['domainNames'];
    }

    /**
    * Sets domainNames
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\DomainSetInfoDto[] $domainNames **参数解释**： 域名信息列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainNames($domainNames)
    {
        $this->container['domainNames'] = $domainNames;
        return $this;
    }

    /**
    * Gets domainSetType
    *  **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getDomainSetType()
    {
        return $this->container['domainSetType'];
    }

    /**
    * Sets domainSetType
    *
    * @param int|null $domainSetType **参数解释**： 域名组类型 **约束限制**： 不涉及 **取值范围**： - 0：应用域名组 - 1：网络域名组 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainSetType($domainSetType)
    {
        $this->container['domainSetType'] = $domainSetType;
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

