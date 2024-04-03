<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleServiceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleServiceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    * customService  自定义服务
    * predefinedGroup  预定义服务组列表
    * serviceGroup  服务组列表
    * serviceGroupNames  服务组名称列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'protocol' => 'int',
            'protocols' => 'int[]',
            'sourcePort' => 'string',
            'destPort' => 'string',
            'serviceSetId' => 'string',
            'serviceSetName' => 'string',
            'customService' => '\HuaweiCloud\SDK\Cfw\V1\Model\ServiceItem[]',
            'predefinedGroup' => 'string[]',
            'serviceGroup' => 'string[]',
            'serviceGroupNames' => '\HuaweiCloud\SDK\Cfw\V1\Model\AddressGroupVO[]',
            'serviceSetType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    * customService  自定义服务
    * predefinedGroup  预定义服务组列表
    * serviceGroup  服务组列表
    * serviceGroupNames  服务组名称列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'protocol' => null,
        'protocols' => 'int32',
        'sourcePort' => null,
        'destPort' => null,
        'serviceSetId' => null,
        'serviceSetName' => null,
        'customService' => null,
        'predefinedGroup' => null,
        'serviceGroup' => null,
        'serviceGroupNames' => null,
        'serviceSetType' => 'int32'
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
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    * customService  自定义服务
    * predefinedGroup  预定义服务组列表
    * serviceGroup  服务组列表
    * serviceGroupNames  服务组名称列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'protocol' => 'protocol',
            'protocols' => 'protocols',
            'sourcePort' => 'source_port',
            'destPort' => 'dest_port',
            'serviceSetId' => 'service_set_id',
            'serviceSetName' => 'service_set_name',
            'customService' => 'custom_service',
            'predefinedGroup' => 'predefined_group',
            'serviceGroup' => 'service_group',
            'serviceGroupNames' => 'service_group_names',
            'serviceSetType' => 'service_set_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    * customService  自定义服务
    * predefinedGroup  预定义服务组列表
    * serviceGroup  服务组列表
    * serviceGroupNames  服务组名称列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'protocols' => 'setProtocols',
            'sourcePort' => 'setSourcePort',
            'destPort' => 'setDestPort',
            'serviceSetId' => 'setServiceSetId',
            'serviceSetName' => 'setServiceSetName',
            'customService' => 'setCustomService',
            'predefinedGroup' => 'setPredefinedGroup',
            'serviceGroup' => 'setServiceGroup',
            'serviceGroupNames' => 'setServiceGroupNames',
            'serviceSetType' => 'setServiceSetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    * customService  自定义服务
    * predefinedGroup  预定义服务组列表
    * serviceGroup  服务组列表
    * serviceGroupNames  服务组名称列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'protocols' => 'getProtocols',
            'sourcePort' => 'getSourcePort',
            'destPort' => 'getDestPort',
            'serviceSetId' => 'getServiceSetId',
            'serviceSetName' => 'getServiceSetName',
            'customService' => 'getCustomService',
            'predefinedGroup' => 'getPredefinedGroup',
            'serviceGroup' => 'getServiceGroup',
            'serviceGroupNames' => 'getServiceGroupNames',
            'serviceSetType' => 'getServiceSetType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['destPort'] = isset($data['destPort']) ? $data['destPort'] : null;
        $this->container['serviceSetId'] = isset($data['serviceSetId']) ? $data['serviceSetId'] : null;
        $this->container['serviceSetName'] = isset($data['serviceSetName']) ? $data['serviceSetName'] : null;
        $this->container['customService'] = isset($data['customService']) ? $data['customService'] : null;
        $this->container['predefinedGroup'] = isset($data['predefinedGroup']) ? $data['predefinedGroup'] : null;
        $this->container['serviceGroup'] = isset($data['serviceGroup']) ? $data['serviceGroup'] : null;
        $this->container['serviceGroupNames'] = isset($data['serviceGroupNames']) ? $data['serviceGroupNames'] : null;
        $this->container['serviceSetType'] = isset($data['serviceSetType']) ? $data['serviceSetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['serviceSetId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['serviceSetId'])) {
                $invalidProperties[] = "invalid value for 'serviceSetId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
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
    * Gets type
    *  服务输入类型，0为手动输入类型，1为自动输入类型
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type 服务输入类型，0为手动输入类型，1为自动输入类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol 协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets protocols
    *  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return int[]|null
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param int[]|null $protocols 协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
        return $this;
    }

    /**
    * Gets sourcePort
    *  源端口
    *
    * @return string|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string|null $sourcePort 源端口
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets destPort
    *  目的端口
    *
    * @return string|null
    */
    public function getDestPort()
    {
        return $this->container['destPort'];
    }

    /**
    * Sets destPort
    *
    * @param string|null $destPort 目的端口
    *
    * @return $this
    */
    public function setDestPort($destPort)
    {
        $this->container['destPort'] = $destPort;
        return $this;
    }

    /**
    * Gets serviceSetId
    *  服务组id，手动类型为空，自动类型为非空
    *
    * @return string|null
    */
    public function getServiceSetId()
    {
        return $this->container['serviceSetId'];
    }

    /**
    * Sets serviceSetId
    *
    * @param string|null $serviceSetId 服务组id，手动类型为空，自动类型为非空
    *
    * @return $this
    */
    public function setServiceSetId($serviceSetId)
    {
        $this->container['serviceSetId'] = $serviceSetId;
        return $this;
    }

    /**
    * Gets serviceSetName
    *  服务组名称
    *
    * @return string|null
    */
    public function getServiceSetName()
    {
        return $this->container['serviceSetName'];
    }

    /**
    * Sets serviceSetName
    *
    * @param string|null $serviceSetName 服务组名称
    *
    * @return $this
    */
    public function setServiceSetName($serviceSetName)
    {
        $this->container['serviceSetName'] = $serviceSetName;
        return $this;
    }

    /**
    * Gets customService
    *  自定义服务
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ServiceItem[]|null
    */
    public function getCustomService()
    {
        return $this->container['customService'];
    }

    /**
    * Sets customService
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ServiceItem[]|null $customService 自定义服务
    *
    * @return $this
    */
    public function setCustomService($customService)
    {
        $this->container['customService'] = $customService;
        return $this;
    }

    /**
    * Gets predefinedGroup
    *  预定义服务组列表
    *
    * @return string[]|null
    */
    public function getPredefinedGroup()
    {
        return $this->container['predefinedGroup'];
    }

    /**
    * Sets predefinedGroup
    *
    * @param string[]|null $predefinedGroup 预定义服务组列表
    *
    * @return $this
    */
    public function setPredefinedGroup($predefinedGroup)
    {
        $this->container['predefinedGroup'] = $predefinedGroup;
        return $this;
    }

    /**
    * Gets serviceGroup
    *  服务组列表
    *
    * @return string[]|null
    */
    public function getServiceGroup()
    {
        return $this->container['serviceGroup'];
    }

    /**
    * Sets serviceGroup
    *
    * @param string[]|null $serviceGroup 服务组列表
    *
    * @return $this
    */
    public function setServiceGroup($serviceGroup)
    {
        $this->container['serviceGroup'] = $serviceGroup;
        return $this;
    }

    /**
    * Gets serviceGroupNames
    *  服务组名称列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AddressGroupVO[]|null
    */
    public function getServiceGroupNames()
    {
        return $this->container['serviceGroupNames'];
    }

    /**
    * Sets serviceGroupNames
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AddressGroupVO[]|null $serviceGroupNames 服务组名称列表
    *
    * @return $this
    */
    public function setServiceGroupNames($serviceGroupNames)
    {
        $this->container['serviceGroupNames'] = $serviceGroupNames;
        return $this;
    }

    /**
    * Gets serviceSetType
    *  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @return int|null
    */
    public function getServiceSetType()
    {
        return $this->container['serviceSetType'];
    }

    /**
    * Sets serviceSetType
    *
    * @param int|null $serviceSetType 服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @return $this
    */
    public function setServiceSetType($serviceSetType)
    {
        $this->container['serviceSetType'] = $serviceSetType;
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

