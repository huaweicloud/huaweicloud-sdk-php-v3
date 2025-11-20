<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConnectionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConnectionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixedIps  - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * remoteInfos  - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixedIps' => 'string[]',
            'name' => 'string',
            'remoteInfos' => '\HuaweiCloud\SDK\Esw\V3\Model\RemoteInfosOption[]',
            'virsubnetId' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixedIps  - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * remoteInfos  - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixedIps' => null,
        'name' => null,
        'remoteInfos' => null,
        'virsubnetId' => null,
        'vpcId' => null
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
    * fixedIps  - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * remoteInfos  - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixedIps' => 'fixed_ips',
            'name' => 'name',
            'remoteInfos' => 'remote_infos',
            'virsubnetId' => 'virsubnet_id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixedIps  - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * remoteInfos  - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'fixedIps' => 'setFixedIps',
            'name' => 'setName',
            'remoteInfos' => 'setRemoteInfos',
            'virsubnetId' => 'setVirsubnetId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixedIps  - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * remoteInfos  - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * virsubnetId  - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * vpcId  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'fixedIps' => 'getFixedIps',
            'name' => 'getName',
            'remoteInfos' => 'getRemoteInfos',
            'virsubnetId' => 'getVirsubnetId',
            'vpcId' => 'getVpcId'
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
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remoteInfos'] = isset($data['remoteInfos']) ? $data['remoteInfos'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['remoteInfos'] === null) {
            $invalidProperties[] = "'remoteInfos' can't be null";
        }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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
    * Gets fixedIps
    *  - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    * @param string[]|null $fixedIps - 参数解释：下联面网口主备IP；ESW实例在本端二层子网中占用的主备接口IP。 - 约束限制：字符串列表，只能设置两个字符串，且每个字符串内容应该是标准IPv4格式；IP必须在二层子网网段范围内。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets name
    *  - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    * @param string $name - 参数解释：二层连接的名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets remoteInfos
    *  - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return \HuaweiCloud\SDK\Esw\V3\Model\RemoteInfosOption[]
    */
    public function getRemoteInfos()
    {
        return $this->container['remoteInfos'];
    }

    /**
    * Sets remoteInfos
    *
    * @param \HuaweiCloud\SDK\Esw\V3\Model\RemoteInfosOption[] $remoteInfos - 参数解释：远端隧道信息。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setRemoteInfos($remoteInfos)
    {
        $this->container['remoteInfos'] = $remoteInfos;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId - 参数解释：二层连接关联的二层子网ID。 - 约束限制：   - 需要使用本租户下可操作的子网资源的ID；此值即为子网详情中的“网络ID”参数值。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId - 参数解释：ESW所在VPC资源ID。 - 约束限制：   - 需要使用本租户下可操作的VPC资源的ID。   - 带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

