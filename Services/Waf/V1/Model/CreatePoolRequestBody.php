<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePoolRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePoolRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'region' => 'string',
            'type' => 'string',
            'vpcId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'region' => null,
        'type' => null,
        'vpcId' => null,
        'description' => null
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
    * name  **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'region' => 'region',
            'type' => 'type',
            'vpcId' => 'vpc_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'region' => 'setRegion',
            'type' => 'setType',
            'vpcId' => 'setVpcId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'region' => 'getRegion',
            'type' => 'getType',
            'vpcId' => 'getVpcId',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets name
    *  **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
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
    * @param string $name **参数解释：** 实例组名称，用于标识实例组，便于管理和识别。 **约束限制：** 不涉及 **取值范围：** 只能由英文字母、数字、下划线、中划线和点组成，且长度为1~256个字符 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region **参数解释：** 实例组所在的区域（Region）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb: 基础elb类型 - elb-v2: elb-v2类型 - elb-shadow: saas化elb类型 - standard-container: 反向代理独享引擎组（云内，承载租户专用） - standard-cloud: 反向代理独享引擎组（云内） - standard: 反向代理独享引擎组（云外） - detector-cloud: 旁路检测独享引擎组（云内） - detector: 旁路检测独享引擎组（云外） **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $vpcId **参数解释：** 实例组关联的VPC ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 实例组描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

