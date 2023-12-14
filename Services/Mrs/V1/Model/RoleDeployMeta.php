<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleDeployMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleDeployMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * other  其他扩展属性
    * name  角色名称
    * codeName  角色简称
    * component  角色所属组件
    * nodePreference  部署倾向
    * count  角色数量限制
    * affinity  亲和
    * affinityTarget  亲和目标
    * multiInstance  多实例
    * roleKind  角色类型
    * constraints  角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    * multiAzPlacement  多az部署
    * arbitrationDeployment  仲裁部署
    * supportElb  支持ELB
    * multiAffinityGroupEnable  启用多亲和组
    * localDisksAntiAffinity  本地盘反亲和
    * multiInstanceNamePattern  多实例名称模式
    * privateIp  私有IP
    * weight  权重
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'other' => 'map[string,object]',
            'name' => 'string',
            'codeName' => 'string',
            'component' => 'string',
            'nodePreference' => 'string',
            'count' => 'string',
            'affinity' => 'string',
            'affinityTarget' => 'string',
            'multiInstance' => 'int',
            'roleKind' => 'string',
            'constraints' => 'string[]',
            'multiAzPlacement' => 'string',
            'arbitrationDeployment' => 'bool',
            'supportElb' => 'bool',
            'multiAffinityGroupEnable' => 'bool',
            'localDisksAntiAffinity' => 'bool',
            'multiInstanceNamePattern' => 'string',
            'privateIp' => 'string',
            'weight' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * other  其他扩展属性
    * name  角色名称
    * codeName  角色简称
    * component  角色所属组件
    * nodePreference  部署倾向
    * count  角色数量限制
    * affinity  亲和
    * affinityTarget  亲和目标
    * multiInstance  多实例
    * roleKind  角色类型
    * constraints  角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    * multiAzPlacement  多az部署
    * arbitrationDeployment  仲裁部署
    * supportElb  支持ELB
    * multiAffinityGroupEnable  启用多亲和组
    * localDisksAntiAffinity  本地盘反亲和
    * multiInstanceNamePattern  多实例名称模式
    * privateIp  私有IP
    * weight  权重
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'other' => null,
        'name' => null,
        'codeName' => null,
        'component' => null,
        'nodePreference' => null,
        'count' => null,
        'affinity' => null,
        'affinityTarget' => null,
        'multiInstance' => 'int32',
        'roleKind' => null,
        'constraints' => null,
        'multiAzPlacement' => null,
        'arbitrationDeployment' => null,
        'supportElb' => null,
        'multiAffinityGroupEnable' => null,
        'localDisksAntiAffinity' => null,
        'multiInstanceNamePattern' => null,
        'privateIp' => null,
        'weight' => null
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
    * other  其他扩展属性
    * name  角色名称
    * codeName  角色简称
    * component  角色所属组件
    * nodePreference  部署倾向
    * count  角色数量限制
    * affinity  亲和
    * affinityTarget  亲和目标
    * multiInstance  多实例
    * roleKind  角色类型
    * constraints  角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    * multiAzPlacement  多az部署
    * arbitrationDeployment  仲裁部署
    * supportElb  支持ELB
    * multiAffinityGroupEnable  启用多亲和组
    * localDisksAntiAffinity  本地盘反亲和
    * multiInstanceNamePattern  多实例名称模式
    * privateIp  私有IP
    * weight  权重
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'other' => 'other',
            'name' => 'name',
            'codeName' => 'code_name',
            'component' => 'component',
            'nodePreference' => 'node_preference',
            'count' => 'count',
            'affinity' => 'affinity',
            'affinityTarget' => 'affinity_target',
            'multiInstance' => 'multi_instance',
            'roleKind' => 'role_kind',
            'constraints' => 'constraints',
            'multiAzPlacement' => 'multi_az_placement',
            'arbitrationDeployment' => 'arbitration_deployment',
            'supportElb' => 'support_elb',
            'multiAffinityGroupEnable' => 'multi_affinity_group_enable',
            'localDisksAntiAffinity' => 'local_disks_anti_affinity',
            'multiInstanceNamePattern' => 'multi_instance_name_pattern',
            'privateIp' => 'private_ip',
            'weight' => 'weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * other  其他扩展属性
    * name  角色名称
    * codeName  角色简称
    * component  角色所属组件
    * nodePreference  部署倾向
    * count  角色数量限制
    * affinity  亲和
    * affinityTarget  亲和目标
    * multiInstance  多实例
    * roleKind  角色类型
    * constraints  角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    * multiAzPlacement  多az部署
    * arbitrationDeployment  仲裁部署
    * supportElb  支持ELB
    * multiAffinityGroupEnable  启用多亲和组
    * localDisksAntiAffinity  本地盘反亲和
    * multiInstanceNamePattern  多实例名称模式
    * privateIp  私有IP
    * weight  权重
    *
    * @var string[]
    */
    protected static $setters = [
            'other' => 'setOther',
            'name' => 'setName',
            'codeName' => 'setCodeName',
            'component' => 'setComponent',
            'nodePreference' => 'setNodePreference',
            'count' => 'setCount',
            'affinity' => 'setAffinity',
            'affinityTarget' => 'setAffinityTarget',
            'multiInstance' => 'setMultiInstance',
            'roleKind' => 'setRoleKind',
            'constraints' => 'setConstraints',
            'multiAzPlacement' => 'setMultiAzPlacement',
            'arbitrationDeployment' => 'setArbitrationDeployment',
            'supportElb' => 'setSupportElb',
            'multiAffinityGroupEnable' => 'setMultiAffinityGroupEnable',
            'localDisksAntiAffinity' => 'setLocalDisksAntiAffinity',
            'multiInstanceNamePattern' => 'setMultiInstanceNamePattern',
            'privateIp' => 'setPrivateIp',
            'weight' => 'setWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * other  其他扩展属性
    * name  角色名称
    * codeName  角色简称
    * component  角色所属组件
    * nodePreference  部署倾向
    * count  角色数量限制
    * affinity  亲和
    * affinityTarget  亲和目标
    * multiInstance  多实例
    * roleKind  角色类型
    * constraints  角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    * multiAzPlacement  多az部署
    * arbitrationDeployment  仲裁部署
    * supportElb  支持ELB
    * multiAffinityGroupEnable  启用多亲和组
    * localDisksAntiAffinity  本地盘反亲和
    * multiInstanceNamePattern  多实例名称模式
    * privateIp  私有IP
    * weight  权重
    *
    * @var string[]
    */
    protected static $getters = [
            'other' => 'getOther',
            'name' => 'getName',
            'codeName' => 'getCodeName',
            'component' => 'getComponent',
            'nodePreference' => 'getNodePreference',
            'count' => 'getCount',
            'affinity' => 'getAffinity',
            'affinityTarget' => 'getAffinityTarget',
            'multiInstance' => 'getMultiInstance',
            'roleKind' => 'getRoleKind',
            'constraints' => 'getConstraints',
            'multiAzPlacement' => 'getMultiAzPlacement',
            'arbitrationDeployment' => 'getArbitrationDeployment',
            'supportElb' => 'getSupportElb',
            'multiAffinityGroupEnable' => 'getMultiAffinityGroupEnable',
            'localDisksAntiAffinity' => 'getLocalDisksAntiAffinity',
            'multiInstanceNamePattern' => 'getMultiInstanceNamePattern',
            'privateIp' => 'getPrivateIp',
            'weight' => 'getWeight'
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
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['codeName'] = isset($data['codeName']) ? $data['codeName'] : null;
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        $this->container['nodePreference'] = isset($data['nodePreference']) ? $data['nodePreference'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['affinityTarget'] = isset($data['affinityTarget']) ? $data['affinityTarget'] : null;
        $this->container['multiInstance'] = isset($data['multiInstance']) ? $data['multiInstance'] : null;
        $this->container['roleKind'] = isset($data['roleKind']) ? $data['roleKind'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['multiAzPlacement'] = isset($data['multiAzPlacement']) ? $data['multiAzPlacement'] : null;
        $this->container['arbitrationDeployment'] = isset($data['arbitrationDeployment']) ? $data['arbitrationDeployment'] : null;
        $this->container['supportElb'] = isset($data['supportElb']) ? $data['supportElb'] : null;
        $this->container['multiAffinityGroupEnable'] = isset($data['multiAffinityGroupEnable']) ? $data['multiAffinityGroupEnable'] : null;
        $this->container['localDisksAntiAffinity'] = isset($data['localDisksAntiAffinity']) ? $data['localDisksAntiAffinity'] : null;
        $this->container['multiInstanceNamePattern'] = isset($data['multiInstanceNamePattern']) ? $data['multiInstanceNamePattern'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
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
    * Gets other
    *  其他扩展属性
    *
    * @return map[string,object]|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param map[string,object]|null $other 其他扩展属性
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets name
    *  角色名称
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
    * @param string|null $name 角色名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets codeName
    *  角色简称
    *
    * @return string|null
    */
    public function getCodeName()
    {
        return $this->container['codeName'];
    }

    /**
    * Sets codeName
    *
    * @param string|null $codeName 角色简称
    *
    * @return $this
    */
    public function setCodeName($codeName)
    {
        $this->container['codeName'] = $codeName;
        return $this;
    }

    /**
    * Gets component
    *  角色所属组件
    *
    * @return string|null
    */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
    * Sets component
    *
    * @param string|null $component 角色所属组件
    *
    * @return $this
    */
    public function setComponent($component)
    {
        $this->container['component'] = $component;
        return $this;
    }

    /**
    * Gets nodePreference
    *  部署倾向
    *
    * @return string|null
    */
    public function getNodePreference()
    {
        return $this->container['nodePreference'];
    }

    /**
    * Sets nodePreference
    *
    * @param string|null $nodePreference 部署倾向
    *
    * @return $this
    */
    public function setNodePreference($nodePreference)
    {
        $this->container['nodePreference'] = $nodePreference;
        return $this;
    }

    /**
    * Gets count
    *  角色数量限制
    *
    * @return string|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string|null $count 角色数量限制
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets affinity
    *  亲和
    *
    * @return string|null
    */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
    * Sets affinity
    *
    * @param string|null $affinity 亲和
    *
    * @return $this
    */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;
        return $this;
    }

    /**
    * Gets affinityTarget
    *  亲和目标
    *
    * @return string|null
    */
    public function getAffinityTarget()
    {
        return $this->container['affinityTarget'];
    }

    /**
    * Sets affinityTarget
    *
    * @param string|null $affinityTarget 亲和目标
    *
    * @return $this
    */
    public function setAffinityTarget($affinityTarget)
    {
        $this->container['affinityTarget'] = $affinityTarget;
        return $this;
    }

    /**
    * Gets multiInstance
    *  多实例
    *
    * @return int|null
    */
    public function getMultiInstance()
    {
        return $this->container['multiInstance'];
    }

    /**
    * Sets multiInstance
    *
    * @param int|null $multiInstance 多实例
    *
    * @return $this
    */
    public function setMultiInstance($multiInstance)
    {
        $this->container['multiInstance'] = $multiInstance;
        return $this;
    }

    /**
    * Gets roleKind
    *  角色类型
    *
    * @return string|null
    */
    public function getRoleKind()
    {
        return $this->container['roleKind'];
    }

    /**
    * Sets roleKind
    *
    * @param string|null $roleKind 角色类型
    *
    * @return $this
    */
    public function setRoleKind($roleKind)
    {
        $this->container['roleKind'] = $roleKind;
        return $this;
    }

    /**
    * Gets constraints
    *  角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    *
    * @return string[]|null
    */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
    * Sets constraints
    *
    * @param string[]|null $constraints 角色限制，包含当前组件角色的一些功能限制，例如：\"no_scale_in\"
    *
    * @return $this
    */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;
        return $this;
    }

    /**
    * Gets multiAzPlacement
    *  多az部署
    *
    * @return string|null
    */
    public function getMultiAzPlacement()
    {
        return $this->container['multiAzPlacement'];
    }

    /**
    * Sets multiAzPlacement
    *
    * @param string|null $multiAzPlacement 多az部署
    *
    * @return $this
    */
    public function setMultiAzPlacement($multiAzPlacement)
    {
        $this->container['multiAzPlacement'] = $multiAzPlacement;
        return $this;
    }

    /**
    * Gets arbitrationDeployment
    *  仲裁部署
    *
    * @return bool|null
    */
    public function getArbitrationDeployment()
    {
        return $this->container['arbitrationDeployment'];
    }

    /**
    * Sets arbitrationDeployment
    *
    * @param bool|null $arbitrationDeployment 仲裁部署
    *
    * @return $this
    */
    public function setArbitrationDeployment($arbitrationDeployment)
    {
        $this->container['arbitrationDeployment'] = $arbitrationDeployment;
        return $this;
    }

    /**
    * Gets supportElb
    *  支持ELB
    *
    * @return bool|null
    */
    public function getSupportElb()
    {
        return $this->container['supportElb'];
    }

    /**
    * Sets supportElb
    *
    * @param bool|null $supportElb 支持ELB
    *
    * @return $this
    */
    public function setSupportElb($supportElb)
    {
        $this->container['supportElb'] = $supportElb;
        return $this;
    }

    /**
    * Gets multiAffinityGroupEnable
    *  启用多亲和组
    *
    * @return bool|null
    */
    public function getMultiAffinityGroupEnable()
    {
        return $this->container['multiAffinityGroupEnable'];
    }

    /**
    * Sets multiAffinityGroupEnable
    *
    * @param bool|null $multiAffinityGroupEnable 启用多亲和组
    *
    * @return $this
    */
    public function setMultiAffinityGroupEnable($multiAffinityGroupEnable)
    {
        $this->container['multiAffinityGroupEnable'] = $multiAffinityGroupEnable;
        return $this;
    }

    /**
    * Gets localDisksAntiAffinity
    *  本地盘反亲和
    *
    * @return bool|null
    */
    public function getLocalDisksAntiAffinity()
    {
        return $this->container['localDisksAntiAffinity'];
    }

    /**
    * Sets localDisksAntiAffinity
    *
    * @param bool|null $localDisksAntiAffinity 本地盘反亲和
    *
    * @return $this
    */
    public function setLocalDisksAntiAffinity($localDisksAntiAffinity)
    {
        $this->container['localDisksAntiAffinity'] = $localDisksAntiAffinity;
        return $this;
    }

    /**
    * Gets multiInstanceNamePattern
    *  多实例名称模式
    *
    * @return string|null
    */
    public function getMultiInstanceNamePattern()
    {
        return $this->container['multiInstanceNamePattern'];
    }

    /**
    * Sets multiInstanceNamePattern
    *
    * @param string|null $multiInstanceNamePattern 多实例名称模式
    *
    * @return $this
    */
    public function setMultiInstanceNamePattern($multiInstanceNamePattern)
    {
        $this->container['multiInstanceNamePattern'] = $multiInstanceNamePattern;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets weight
    *  权重
    *
    * @return string|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param string|null $weight 权重
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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

