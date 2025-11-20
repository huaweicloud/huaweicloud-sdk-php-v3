<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NicSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NicSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    * fixedIps  **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    * ipBlock  **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * subnetList  网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'fixedIps' => 'string[]',
            'ipBlock' => 'string',
            'subnetList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    * fixedIps  **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    * ipBlock  **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * subnetList  网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'fixedIps' => null,
        'ipBlock' => null,
        'subnetList' => null
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
    * subnetId  网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    * fixedIps  **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    * ipBlock  **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * subnetList  网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnetId',
            'fixedIps' => 'fixedIps',
            'ipBlock' => 'ipBlock',
            'subnetList' => 'subnetList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    * fixedIps  **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    * ipBlock  **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * subnetList  网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'fixedIps' => 'setFixedIps',
            'ipBlock' => 'setIpBlock',
            'subnetList' => 'setSubnetList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    * fixedIps  **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    * ipBlock  **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * subnetList  网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'fixedIps' => 'getFixedIps',
            'ipBlock' => 'getIpBlock',
            'subnetList' => 'getSubnetList'
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['ipBlock'] = isset($data['ipBlock']) ? $data['ipBlock'] : null;
        $this->container['subnetList'] = isset($data['subnetList']) ? $data['subnetList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subnetId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['subnetId'])) {
                $invalidProperties[] = "invalid value for 'subnetId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets subnetId
    *  网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 网卡所在子网的网络ID。主网卡创建时若未指定subnetId,将使用集群子网。若节点池同时配置了subnetList，则节点池扩容子网以subnetList字段为准。扩展网卡创建时必须指定subnetId。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets fixedIps
    *  **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    *
    * @return string[]|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param string[]|null $fixedIps **参数解释**： 主网卡的IP将通过fixedIps指定，数量不得大于创建的节点数。 **约束限制**： - fixedIps或ipBlock同时只能指定一个 - 扩展网卡不支持指定fixedIps - 创建节点池场景不支持该配置参数
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets ipBlock
    *  **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getIpBlock()
    {
        return $this->container['ipBlock'];
    }

    /**
    * Sets ipBlock
    *
    * @param string|null $ipBlock **参数解释**： 主网卡的IP段的CIDR格式，创建的节点IP将属于该IP段内。 **约束限制**： - fixedIps或ipBlock同时只能指定一个。 - 创建节点池场景不支持该配置参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpBlock($ipBlock)
    {
        $this->container['ipBlock'] = $ipBlock;
        return $this;
    }

    /**
    * Gets subnetList
    *  网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @return string[]|null
    */
    public function getSubnetList()
    {
        return $this->container['subnetList'];
    }

    /**
    * Sets subnetList
    *
    * @param string[]|null $subnetList 网卡所在子网的网络ID列表，支持节点池配置多个子网，最多支持配置20个子网。
    *
    * @return $this
    */
    public function setSubnetList($subnetList)
    {
        $this->container['subnetList'] = $subnetList;
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

