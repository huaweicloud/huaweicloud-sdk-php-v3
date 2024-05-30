<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineCreateReqFlavorType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineCreateReq_flavorType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeFlavor  网关节点规格
    * flavor  网关规格
    * availablePrefix  可用区前缀
    * availableCpuMemory  可用区CPU内存
    * specType  引擎类型
    * linear  是否为线性
    * licenseAmount  网关证书规模
    * nodeLimit  网关节点数限制
    * id  网关规格id
    * microGatewayFlavor  网关规格
    * disable  网关是否禁用
    * spec  网关节点类型
    * cloudServiceType  云服务类型
    * currentflavor  当前规格
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeFlavor' => 'string[]',
            'flavor' => 'string',
            'availablePrefix' => 'string',
            'availableCpuMemory' => 'string',
            'specType' => 'string',
            'linear' => 'bool',
            'licenseAmount' => 'int',
            'nodeLimit' => 'string',
            'id' => 'string',
            'microGatewayFlavor' => 'string',
            'disable' => 'bool',
            'spec' => 'string',
            'cloudServiceType' => 'string',
            'currentflavor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeFlavor  网关节点规格
    * flavor  网关规格
    * availablePrefix  可用区前缀
    * availableCpuMemory  可用区CPU内存
    * specType  引擎类型
    * linear  是否为线性
    * licenseAmount  网关证书规模
    * nodeLimit  网关节点数限制
    * id  网关规格id
    * microGatewayFlavor  网关规格
    * disable  网关是否禁用
    * spec  网关节点类型
    * cloudServiceType  云服务类型
    * currentflavor  当前规格
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeFlavor' => null,
        'flavor' => null,
        'availablePrefix' => null,
        'availableCpuMemory' => null,
        'specType' => null,
        'linear' => null,
        'licenseAmount' => 'int32',
        'nodeLimit' => null,
        'id' => null,
        'microGatewayFlavor' => null,
        'disable' => null,
        'spec' => null,
        'cloudServiceType' => null,
        'currentflavor' => null
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
    * nodeFlavor  网关节点规格
    * flavor  网关规格
    * availablePrefix  可用区前缀
    * availableCpuMemory  可用区CPU内存
    * specType  引擎类型
    * linear  是否为线性
    * licenseAmount  网关证书规模
    * nodeLimit  网关节点数限制
    * id  网关规格id
    * microGatewayFlavor  网关规格
    * disable  网关是否禁用
    * spec  网关节点类型
    * cloudServiceType  云服务类型
    * currentflavor  当前规格
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeFlavor' => 'nodeFlavor',
            'flavor' => 'flavor',
            'availablePrefix' => 'availablePrefix',
            'availableCpuMemory' => 'availableCpuMemory',
            'specType' => 'specType',
            'linear' => 'linear',
            'licenseAmount' => 'licenseAmount',
            'nodeLimit' => 'nodeLimit',
            'id' => 'id',
            'microGatewayFlavor' => 'microGatewayFlavor',
            'disable' => 'disable',
            'spec' => 'spec',
            'cloudServiceType' => 'cloudServiceType',
            'currentflavor' => 'currentflavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeFlavor  网关节点规格
    * flavor  网关规格
    * availablePrefix  可用区前缀
    * availableCpuMemory  可用区CPU内存
    * specType  引擎类型
    * linear  是否为线性
    * licenseAmount  网关证书规模
    * nodeLimit  网关节点数限制
    * id  网关规格id
    * microGatewayFlavor  网关规格
    * disable  网关是否禁用
    * spec  网关节点类型
    * cloudServiceType  云服务类型
    * currentflavor  当前规格
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeFlavor' => 'setNodeFlavor',
            'flavor' => 'setFlavor',
            'availablePrefix' => 'setAvailablePrefix',
            'availableCpuMemory' => 'setAvailableCpuMemory',
            'specType' => 'setSpecType',
            'linear' => 'setLinear',
            'licenseAmount' => 'setLicenseAmount',
            'nodeLimit' => 'setNodeLimit',
            'id' => 'setId',
            'microGatewayFlavor' => 'setMicroGatewayFlavor',
            'disable' => 'setDisable',
            'spec' => 'setSpec',
            'cloudServiceType' => 'setCloudServiceType',
            'currentflavor' => 'setCurrentflavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeFlavor  网关节点规格
    * flavor  网关规格
    * availablePrefix  可用区前缀
    * availableCpuMemory  可用区CPU内存
    * specType  引擎类型
    * linear  是否为线性
    * licenseAmount  网关证书规模
    * nodeLimit  网关节点数限制
    * id  网关规格id
    * microGatewayFlavor  网关规格
    * disable  网关是否禁用
    * spec  网关节点类型
    * cloudServiceType  云服务类型
    * currentflavor  当前规格
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeFlavor' => 'getNodeFlavor',
            'flavor' => 'getFlavor',
            'availablePrefix' => 'getAvailablePrefix',
            'availableCpuMemory' => 'getAvailableCpuMemory',
            'specType' => 'getSpecType',
            'linear' => 'getLinear',
            'licenseAmount' => 'getLicenseAmount',
            'nodeLimit' => 'getNodeLimit',
            'id' => 'getId',
            'microGatewayFlavor' => 'getMicroGatewayFlavor',
            'disable' => 'getDisable',
            'spec' => 'getSpec',
            'cloudServiceType' => 'getCloudServiceType',
            'currentflavor' => 'getCurrentflavor'
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
        $this->container['nodeFlavor'] = isset($data['nodeFlavor']) ? $data['nodeFlavor'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['availablePrefix'] = isset($data['availablePrefix']) ? $data['availablePrefix'] : null;
        $this->container['availableCpuMemory'] = isset($data['availableCpuMemory']) ? $data['availableCpuMemory'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['linear'] = isset($data['linear']) ? $data['linear'] : null;
        $this->container['licenseAmount'] = isset($data['licenseAmount']) ? $data['licenseAmount'] : null;
        $this->container['nodeLimit'] = isset($data['nodeLimit']) ? $data['nodeLimit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['microGatewayFlavor'] = isset($data['microGatewayFlavor']) ? $data['microGatewayFlavor'] : null;
        $this->container['disable'] = isset($data['disable']) ? $data['disable'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['currentflavor'] = isset($data['currentflavor']) ? $data['currentflavor'] : null;
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
    * Gets nodeFlavor
    *  网关节点规格
    *
    * @return string[]|null
    */
    public function getNodeFlavor()
    {
        return $this->container['nodeFlavor'];
    }

    /**
    * Sets nodeFlavor
    *
    * @param string[]|null $nodeFlavor 网关节点规格
    *
    * @return $this
    */
    public function setNodeFlavor($nodeFlavor)
    {
        $this->container['nodeFlavor'] = $nodeFlavor;
        return $this;
    }

    /**
    * Gets flavor
    *  网关规格
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
    * @param string|null $flavor 网关规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets availablePrefix
    *  可用区前缀
    *
    * @return string|null
    */
    public function getAvailablePrefix()
    {
        return $this->container['availablePrefix'];
    }

    /**
    * Sets availablePrefix
    *
    * @param string|null $availablePrefix 可用区前缀
    *
    * @return $this
    */
    public function setAvailablePrefix($availablePrefix)
    {
        $this->container['availablePrefix'] = $availablePrefix;
        return $this;
    }

    /**
    * Gets availableCpuMemory
    *  可用区CPU内存
    *
    * @return string|null
    */
    public function getAvailableCpuMemory()
    {
        return $this->container['availableCpuMemory'];
    }

    /**
    * Sets availableCpuMemory
    *
    * @param string|null $availableCpuMemory 可用区CPU内存
    *
    * @return $this
    */
    public function setAvailableCpuMemory($availableCpuMemory)
    {
        $this->container['availableCpuMemory'] = $availableCpuMemory;
        return $this;
    }

    /**
    * Gets specType
    *  引擎类型
    *
    * @return string|null
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param string|null $specType 引擎类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets linear
    *  是否为线性
    *
    * @return bool|null
    */
    public function getLinear()
    {
        return $this->container['linear'];
    }

    /**
    * Sets linear
    *
    * @param bool|null $linear 是否为线性
    *
    * @return $this
    */
    public function setLinear($linear)
    {
        $this->container['linear'] = $linear;
        return $this;
    }

    /**
    * Gets licenseAmount
    *  网关证书规模
    *
    * @return int|null
    */
    public function getLicenseAmount()
    {
        return $this->container['licenseAmount'];
    }

    /**
    * Sets licenseAmount
    *
    * @param int|null $licenseAmount 网关证书规模
    *
    * @return $this
    */
    public function setLicenseAmount($licenseAmount)
    {
        $this->container['licenseAmount'] = $licenseAmount;
        return $this;
    }

    /**
    * Gets nodeLimit
    *  网关节点数限制
    *
    * @return string|null
    */
    public function getNodeLimit()
    {
        return $this->container['nodeLimit'];
    }

    /**
    * Sets nodeLimit
    *
    * @param string|null $nodeLimit 网关节点数限制
    *
    * @return $this
    */
    public function setNodeLimit($nodeLimit)
    {
        $this->container['nodeLimit'] = $nodeLimit;
        return $this;
    }

    /**
    * Gets id
    *  网关规格id
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
    * @param string|null $id 网关规格id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets microGatewayFlavor
    *  网关规格
    *
    * @return string|null
    */
    public function getMicroGatewayFlavor()
    {
        return $this->container['microGatewayFlavor'];
    }

    /**
    * Sets microGatewayFlavor
    *
    * @param string|null $microGatewayFlavor 网关规格
    *
    * @return $this
    */
    public function setMicroGatewayFlavor($microGatewayFlavor)
    {
        $this->container['microGatewayFlavor'] = $microGatewayFlavor;
        return $this;
    }

    /**
    * Gets disable
    *  网关是否禁用
    *
    * @return bool|null
    */
    public function getDisable()
    {
        return $this->container['disable'];
    }

    /**
    * Sets disable
    *
    * @param bool|null $disable 网关是否禁用
    *
    * @return $this
    */
    public function setDisable($disable)
    {
        $this->container['disable'] = $disable;
        return $this;
    }

    /**
    * Gets spec
    *  网关节点类型
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 网关节点类型
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务类型
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets currentflavor
    *  当前规格
    *
    * @return string|null
    */
    public function getCurrentflavor()
    {
        return $this->container['currentflavor'];
    }

    /**
    * Sets currentflavor
    *
    * @param string|null $currentflavor 当前规格
    *
    * @return $this
    */
    public function setCurrentflavor($currentflavor)
    {
        $this->container['currentflavor'] = $currentflavor;
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

